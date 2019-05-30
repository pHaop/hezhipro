<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\Admin\Perm;
class PermController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       

        $uname = $request->uname;

        $data = Perm::count();
        
        $rs = Perm::where('permname','like','%'.$uname.'%')->paginate(5);

        return view('admin.perm.index',['rs'=>$rs,'data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.perm.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $rs = $request->except('_token');

        $arr = Perm::where('permname',$rs['permname'])->first();

        if($arr)
        {
            return back()->with('success','用户名已经存在');
        }

        $data = Perm::create($rs);

        if($data)
        {
            echo '<script>alert("添加成功");location.href="/admin/perm"</script>';
            // return redirect('/admin/perm');
        }else{
            return back();  
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
        $rs = Perm::where('id',$id)->delete();
        return  $rs?1:0;
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
        $rs = Perm::find($id);
       return view('admin.perm.edit',['rs'=>$rs]);
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
        $data = $request->except('_token','_method');
        // dump($data);
        $rs = Perm::where('id',$id)->update($data);
        if($rs)
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
        //
    }
}
