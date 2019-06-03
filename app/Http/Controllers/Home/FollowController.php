<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\user;
use App\Model\Admin\Links;
class FollowController extends Controller
{
    //
    public function index(){
        $rs = User::find(session('uid'));
        $ren = Links::get();
        return view('home.follow',['rs'=>$rs,
            'ren'=>$ren]);
    }
}
