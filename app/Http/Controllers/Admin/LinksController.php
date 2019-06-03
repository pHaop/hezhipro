<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\Links;
class LinksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $name = $request->urlname;

        $rs = Links::where('urlname','like','%'.$name.'%')->paginate(2);

        // dump($rs)
        $data = Links::count();

        return view('admin.links.index',['rs'=>$rs,
            'title'=>'专题的修改页面',
            'data'=>$data,
            'name'=>$name
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.links.create',['title'=>'友情链接的添加页面']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $rs = $request->except('_token');
        $data = Links::create($rs);
        if($data){
            return redirect('admin/links');
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $rs = Links::find($id);
        return view('admin.links.edit',['title'=>'友链的修改页面',
            'rs'=>$rs]);

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
        //
        $rs = $request->except('_token','_method');
        $res = Links::where('id',$id)->update($rs);
        if($res){
            echo "<script>parent.location.reload();</script>";
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
        $rs = Links::destroy($id);
        if($rs){
            return redirect('/admin/links')->with('sucess','删除成功');
        }else{
            return back()->with('error','删除失败');
        }
    }
}
