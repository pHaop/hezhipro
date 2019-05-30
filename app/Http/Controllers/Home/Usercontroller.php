<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\Home\User;
use DB;
use Session;
class Usercontroller extends Controller
{


    public function index()
    {	

      $data = DB::table('thisuser')->where('uid',session('uid'))->count();

    	$rs = User::where('id',session('uid'))->first();
      
      $rs['data']=$data;

    	return view('home.user.index',['rs'=>$rs,"data"=>$data]);


      
    }





    public function userinfo()
    {


    	$rs = User::where('id',session('uid'))->first();

    	return view('home.user.userinfo',['rs'=>$rs]);
    }





    public function upload(Request $request)
    {          
  
        $file = $request->file('person');

       //名字
        $name = 'img_'.rand(1111,9999).time();

        //获取后缀
        $suffix = $file->getClientOriginalExtension();

        $file->move('./uploads',$name.'.'.$suffix);

        echo  '/uploads/'.$name.'.'.$suffix ;

        //修改数据表里面的信息
        $rs['person'] = '/uploads/'.$name.'.'.$suffix;

        User::where('id',session('uid'))->update($rs); 
      
        
    }





   public function douserinfo(Request $request)
   {

   		

   		$rs = $request->except('_token');

      // $data = User::where('id',session('uid'))->first();
    

   		$data = User::where('id',$rs['id'])->update($rs);


   		if($data)
   		{
   			echo '<script>alert("修改成功");location.href="/"</script>'; 

   		}else{
        echo '<script>alert("修改成功");location.href="/"</script>'; 
      }


   }
}
