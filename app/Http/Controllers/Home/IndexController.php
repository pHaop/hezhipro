<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\Admin\Cart;
use App\Model\Home\User;

use DB;




class IndexController extends Controller
{
    //
    public function index()
    {


    	$rs = Cart::orderBy('grouy','ASC')->get();


    	$user = User::all();

    	$data = DB::table('thisuser')->where('uid',session('uid'))->get();

		$arr = [];

    	foreach($data as $v)
    	{	
    		$data = [];
    		
    		$data['id']=$v->tid;

    	    $arr[]=$data;
    	}   

    	$ids = array_column($arr, 'id');

    	return view('home.index',['rs'=>$rs,'user'=>$user,'ids'=>$ids]);
    	
    }
}
