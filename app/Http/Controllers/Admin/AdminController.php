<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\FormRequest;

use Hash;
use DB;
use App\Model\Admin\Admin;
use App\Model\Admin\Role;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   

        // session(['id'=>'']);
        
        $img = Admin::where('id',session('id'))->first();

        $data = Admin::count();

        $uname = $request->uname;
       
    	$rs = Admin::where('username','like','%'.$uname.'%')->paginate(5);

        return view('admin.admin.list',['rs'=>$rs,'img'=>$img,'data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.admin.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {



        $rs = $request->except('_token','img','dopassword');
          
        $arr = Admin::all();

        $list = Admin::where('username',$request->username)->first();

        if($list)
        {
             echo '<script>alert("账号或密码已经存在");location.href="/admin/guanli/create"</script>'; 

        }


        
        //处理图片上传
        if($request->hasFile('img')){

            //获取图片上传的信息
            $file = $request->file('img');

            //名字
            $name = 'img_'.rand(1111,9999).time();

            //获取后缀
            $suffix = $file->getClientOriginalExtension();

            $file->move('./uploads',$name.'.'.$suffix);

            $rs['img'] = '/uploads/'.$name.'.'.$suffix;

            $rs['create_time'] = time();
        
            $rs['password'] = Hash::make($request->password);

      

             $arr = Admin::create($rs);

        if($arr)
        {
            echo '<script>alert("添加成功");location.href="/admin/guanli"</script>';       

        }else{
            return back();  
        }



        }else{
            echo '<script>alert("请选择图片");location.href="/admin/guanli/create"</script>';    

        }

        

       
        

        // dump($rs);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {


        DB::table('admin_role')->where('userid',$id)->delete();
        
        $rs = Admin::where('id',$id)->delete();


        if($rs)
        {
            echo 1;
        }else{
            echo 2;
        }


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $rs = Admin::find($id);
       return view('admin/admin/edit',['rs'=>$rs]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    	$rs = $request->except('_token','_method');
         
    	if($request->hasFile('img')){

            //获取图片上传的信息
            $file = $request->file('img');

            //名字
            $name = 'img_'.rand(1111,9999).time();

            //获取后缀
            $suffix = $file->getClientOriginalExtension();

            $file->move('./uploads',$name.'.'.$suffix);

            $rs['img'] = '/uploads/'.$name.'.'.$suffix;

        }
        // dump($rs);
    	// dump($request->input());
        $arr = Admin::where('id',$id)->update($rs);
        if($arr)
        {
          echo "<script>alert('修改成功');parent.location.reload();</script>";
        }else{
          return back();
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {



    	$rs = Admin::destroy($id);
    	if($rs){

            return redirect('/admin/guanli')->with('success','删除成功');
        } else {

            return back()->with('error','删除失败');

        }
    }

    public function userrole(Request $request)
    {
    

        $data = Admin::find($request->id);

        $rs = Role::all();

        $ur = $data->user_role()->get();
         
        $urr = [];

        foreach($ur as $k => $v){

            $urr[] = $v->id;
        }


        
        return view('admin.admin.role',['rs'=>$rs,'data'=>$data,'urr'=>$urr]);
    }
    public function douserrole(Request $request)
    {
        
        $uid = $request->uid;

        DB::table('admin_role')->where('userid',$uid)->delete();


        $rs = $request->except('_token');
        $arr=[];
        foreach ($rs['id'] as $k => $v) {
            $data=[];
            $data['userid']=$uid;
            $data['roleid']=$v;
            $arr[]= $data;     

         }

        $insert = DB::table('admin_role')->insert($arr);

        if($insert)
        {

             echo "<script>alert('添加成功');location.href='/admin/guanli'</script>";
        }
        
    }


    public function status(Request $request)
    {

        $sta = $request->sta;
        
        $id = $request->id;
        if($sta == 0)
        {
            $sta=1;
        }else{
            $sta=0;
        }
    
        $arr = [];

        $arr['status']=$sta;

        $rs= Admin::where('id',$request->id)->update($arr);

        return $rs?0:1;
        
    }
    

}
