<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Home\Reply;
class ReplyController extends Controller
{
    //
    public function index(Request $request){
        $rez = $request->except('_token');
        $rez['addtime'] = date("Y-m-d H:i:s",time());
        $rec = Reply::create($rez);
        if($rez){
            echo 1;
        }
    }
}
