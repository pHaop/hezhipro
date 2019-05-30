<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\user;
use App\Model\Home\Article;
use App\Model\Admin\Topic;
class IndexController extends Controller
{
    //
    public function index()
    {

        $rs = User::find(session('uid'));
        $res = Article::orderBy('addtime','desc')->get();
        $rep = Topic::get();
        foreach($res as $k=>$v){


         $rev = User::find($v['uid']);
           // dump($soContent);
            //dump($thePics[0][0]);

            //dump($font);

        }

    	return view('home.index',['rs'=>$rs,
            'rev'=>$rev,
            'res'=>$res,
            'rep'=>$rep]);



    }
}
