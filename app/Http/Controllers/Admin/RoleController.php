<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;
use App\Model\Admin\Role;
use App\Model\Admin\Perm;

class RoleController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    

    public function index(Request $request)
    {
        $rs = Role::all();

        $uname = $request->uname;

        $data = Role::count();

        $rs = Role::where('rolename','like','%'.$uname.'%')->paginate(5);
    
        return view('admin.role.index',['rs'=>$rs,'data'=>$data]);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.role.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->except('_token');

        $rs = Role::create($data);

        if($rs)
        {
            echo '<script>alert("添加成功");location.href="/admin/role"</script>';
        }else{
            return back();  
        }



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
        $rs = Role::where('id',$id)->delete();

        if($rs)
        {
            echo 1;
        }else{
            echo 2;
        }

        // echo $rs;
        // echo $id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rs = Role::find($id);

        return view('admin.role.edit',['rs'=>$rs]);
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

        $data = Role::where('id',$id)->update($rs);

        if($data)
        {
            echo "<script>alert('修改成功');parent.location.reload();</script>";
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
        
    }
    public function roleperm(Request $request)
    {


        
        $rid = $request->id;
    
        $rs = Perm::all();

        $arr = Role::find($request->id);

        $ur = $arr->role_perm()->get();
  
        $urr = [];

        foreach($ur as $k => $v){

            $urr[] = $v->id;
        }
 
        return view('admin.role.perm',['rs'=>$rs,'arr'=>$arr,'urr'=>$urr]);
        // dump($request->id);
    }


    
    public function doroleperm(Request $request)
    {

        $rs = $request->except('_token','name');

        DB::table('role_perm')->where('roleid',$rs['rid'])->delete();



        $arr = [];

        foreach($rs['id'] as $k => $v)
        {
            $data=[];
            $data['roleid']=$rs['rid'];
            $data['permid']=$v;
            $arr[]=$data;
        }

        $insert = DB::table('role_perm')->insert($arr);

        if($insert)
        {
            echo "<script>alert('添加成功');location.href='/admin/role'</script>";
        }else{
            return back();
        }

   
    }

    public function tishi()
    { 
  
        return view('admin/role/tishi');
    }
   
}
