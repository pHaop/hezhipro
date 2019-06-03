<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Home\User;
use DB;
class LikewriteController extends Controller
{
     public function index()
     {

     }

     public function like(Request $request)
     {

     	 $arr = [];
    	 $arr['uid'] = $request->uid;
    	 $arr['wid'] = $request->wid;

    	 $data = DB::table('like_write')->insert($arr);

    	 if(!$data){
    	 	echo 1;
    	 }else{
    	 	echo 0;
    	 }
     	
     }
     public function nolike(Request $request)
     {
     	DB::table('like_write')->where('uid',$request->uid)->where('wid',$request->wid)->delete();
     }




     

     public function likenote(Request $request)
     {

        $id = $request->id;

        $rs = User::where('id',$id)->first();

        $data = DB::table('like_write')->where('uid',$id)->get();

        $arr = [];

        $num = DB::table('thisuser')->where('uid',session('uid'))->count();

        foreach($data as $v)
        {   
            $data = [];
            $data['id']=$v->wid;
            $arr[]=$data;
        }   

        return view('home.user.likenote',['rs'=>$rs,'arr'=>$arr]);

     }


}
