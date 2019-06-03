<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Home\Comments;
class CommentController extends Controller
{
    //
    public function index(Request $request){

        $rez = $request->except('_token');
        $rez['addtime'] = date("Y-m-d H:i:s",time());
        $rec = Comments::create($rez);
        if($rez){
            echo 1;
        }

    }
}
