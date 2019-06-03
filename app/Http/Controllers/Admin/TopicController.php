<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\topic;
class TopicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $name = $request->name;

        $rs = Topic::where('name','like','%'.$name.'%')->paginate(5);

        // dump($rs);

        $data = Topic::count();
        return view('admin.topic.index',
            ['rs'=>$rs,
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
        
        return view('admin.topic.create',['title'=>'专题的添加页面']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rs = $request->except('_token','portrait');
        //处理图片上传
        if($request->hasFile('portrait')) {

            //获取图片上传的信息
            $file = $request->file('portrait');

            //名字
            $name = 'img_' . rand(1111, 9999) . time();

            //获取后缀
            $suffix = $file->getClientOriginalExtension();

            $file->move('./uploads', $name . '.' . $suffix);

            $rs['portrait'] = '/uploads/' . $name . '.' . $suffix;
        }
        $data = Topic::create($rs);
        if($data){
            return redirect('admin/topic');
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
        
        $rs = Topic::find($id);
        return view('admin.topic.edit',['title'=>'用户的修改页面',
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
        $rs = $request->except('_token','portrait','_method');
        //处理图片上传
        if($request->hasFile('portrait')) {

            //获取图片上传的信息
            $file = $request->file('portrait');

            //名字
            $name = 'img_' . rand(1111, 9999) . time();

            //获取后缀
            $suffix = $file->getClientOriginalExtension();

            $file->move('./uploads', $name . '.' . $suffix);

            $rs['portrait'] = '/uploads/' . $name . '.' . $suffix;
        }
        $res = Topic::where('id',$id)->update($rs);
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
        $rks = Topic::find($id);
        unlink('.'.$rks['portrait']);
        $rs = Topic::destroy($id);
        if($rs){
            return redirect('/admin/topic')->with('sucess','删除成功');
        }else{
            return back()->with('error','删除失败');
        }
    }
}
