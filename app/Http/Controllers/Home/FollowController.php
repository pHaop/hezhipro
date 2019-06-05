<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\user;
use DB;
class FollowController extends Controller
{
    //
    public function index(){


        $rs = DB::table('thisuser')->where('uid',session('uid'))->get();
   
	    $arr = [];

	       foreach($rs as $v)
	       {   
	            $data = [];
	            
	            $data['id']=$v->tid;

	            $arr[]=$data;
	        }   

	  

        return view('home.follow',['rs'=>$rs,'arr'=>$arr]);
    }
}
