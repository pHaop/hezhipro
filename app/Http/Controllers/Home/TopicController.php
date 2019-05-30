<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Model\Admin\user;
use App\Model\Admin\topic;
use App\Model\Home\Article;
class TopicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $id = $request->id;
        $rs = User::find(session('uid'));
        $res = Topic::paginate(7);
        $ref = Topic::orderBy('addtime','desc')->limit(11)->get();

        return view('home.topic.index',['rs'=>$rs,
                                              'res'=>$res,
                                              'ref'=>$ref,
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
        $rs = User::find(session('uid'));
        return view('home.topic.create',['rs'=>$rs]);
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
        $res = $request->except('_token','portrait');
        //处理图片上传
        if($request->hasFile('portrait')) {

            //获取图片上传的信息
            $file = $request->file('portrait');

            //名字
            $name = 'img_' . rand(1111, 9999) . time();

            //获取后缀
            $suffix = $file->getClientOriginalExtension();

            $file->move('./uploads', $name . '.' . $suffix);

            $res['portrait'] = '/uploads/' . $name . '.' . $suffix;
        }
        $data = Topic::create($res);

        if($data){
            return redirect("home/topic/$data[id]");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public  function sbkj($id){

        $rs = User::find(session('uid'));
        $res = Topic::find($id);
        $rep = User::find($res['uid']);
        $rea = Article::where('aid','=',$id)->get();

        return view('home.topic.show',['rs'=>$rs,
                    'res'=>$res,
                    'rep'=>$rep,
                    'rea'=>$rea]);
    }

    public function edit()
    {
        //
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
        echo $id;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      echo $id;
    }
}
