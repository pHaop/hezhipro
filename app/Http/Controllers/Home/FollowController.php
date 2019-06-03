<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\user;
class FollowController extends Controller
{
    //
    public function index(){
        $rs = User::find(session('uid'));
        return view('home.follow',['rs'=>$rs]);
    }
}
