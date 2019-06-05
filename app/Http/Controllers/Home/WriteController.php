<?php

namespace App\Http\Controllers\Home;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\Admin\user;
use App\Model\Admin\Topic;
use App\Model\Home\Article;


use App\Model\Admin\Links;
use App\Model\Home\Comments;
use App\Model\Home\Reply;
class WriteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $rs = User::find(session('uid'));
        $rt = Topic::orderBy('addtime','desc')->get();
        $ra = Article::get();
        return view('home.aritle.write',['rt'=>$rt,
            'rs'=>$rs,
            'ra'=>$ra]);
    }

    public function store(Request $request)
    {
      
        $rs = User::find(session('uid'));
     
        $res = $request->except('_token');
        $req=Topic::where('id','=',$res['name'])->get();
        foreach($req as $k=>$v){

            $aid = $v['id'];

        }
        
        $res['aid'] = $aid;
        $rea = array_shift($res);
        $data = Article::create($res);
        $ra = Article::get();
        $rt = Topic::orderBy('addtime','desc')->get();
        if($data){
            return view('home.aritle.write',['ra'=>$ra,
                'rt'=>$rt,
                'rs'=>$rs]);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function sbkj($id)
    {
        
        $rs = User::find(session('uid'));
        $res = Article::find($id);

        $rev = User::find($res['uid']);
       
        $ren = Links::get();
        $rem = Comments::get();
        $count = Comments::count();
        $reb = Reply::get();

        $data = DB::table('like_write')->where('uid',$rs->id)->where('wid',$id)->first();
        return view('home.aritle.art',['rs'=>$rs,
            'rev'=>$rev,
            'res'=>$res,
            'data'=>$data,
            'count'=>$count,
            'ren'=>$ren,
            'rem'=>$rem,
            'reb'=>$reb


        ]);
        
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
