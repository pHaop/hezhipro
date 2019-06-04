<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;
use App\Model\Home\User;

use App\Model\Home\Article;
class ThisController extends Controller
{
    
    public function index(Request $request)
	{

		$id = $request->id;

		$rs = User::where('id',$id)->first();

        $res = Article::where('uid',$id)->orderBy('addtime','desc')->get();

        
        $data = DB::table('thisuser')->where('uid',session('uid'))->get();

        $arr = [];

        foreach($data as $v)
        {   
            $data = [];
            
            $data['id']=$v->tid;

            $arr[]=$data;
        }   

        $ids = array_column($arr, 'id');

    	return view('home.thisuser.index',['rs'=>$rs,'res'=>$res,'id'=>$id,'ids'=>$ids]);



    }



    public function gz(Request $request)
    {	


    	 $tid = $request->tid;
    	 $uid = $request->uid;
    	 $arr = [];
    	 $arr['uid'] = $uid;
    	 $arr['tid'] = $tid;

    	 $data = DB::table('thisuser')->insert($arr);

    	 if($data){
    	 	echo 1;
    	 }else{
    	 	echo 2;
    	 }

    }
    public function dogz(Request $request)
    {
    	// echo $request->tid;
    	$data = DB::table('thisuser')->where('tid',$request->tid)->where('uid',$request->uid)->delete();

    	 if($data){

    	 	echo 1;

    	 }else{

    	 	echo 2;
    	 }


    }

    public function mygz()
    {

    	$rs = User::where('id',session('uid'))->first();

    	$data = DB::table('thisuser')->where('uid',session('uid'))->get();


    	$arr = [];

    	foreach($data as $v)
    	{	
    		$data = [];
    		$data['id']=$v->tid;
    	    $arr[]=$data;
    	}   

    	$data = DB::table('thisuser')->where('uid',session('uid'))->count();
  		
  		$rs['data']=$data;
  		

    	return view('home.thisuser.mygz',['rs'=>$rs,'arr'=>$arr]);


    }

}
