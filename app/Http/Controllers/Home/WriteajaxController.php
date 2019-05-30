<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Home\Article;
use App\Model\Admin\Topic;
class WriteajaxController extends Controller
{
    //
    public function req(Request $request){
       $id = $request->id;
       $res = Article::find($id);
       return json_encode($res);
    }

    public function rel(Request $request){
        $id = $request->id;
        $rx = $request->except('_token','id');
        $rz = Article::where('id','=',$id)->update($rx);
        if($rz){
            echo 1;
        }
    }
}
