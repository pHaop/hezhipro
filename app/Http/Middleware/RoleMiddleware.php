<?php

namespace App\Http\Middleware;

use Closure;

use App\Model\Admin\Role;
use App\Model\Admin\Perm;
use App\Model\Admin\Admin;
class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $users = Admin::find(session('id'));

        $roles = $users->user_role()->get();
        $arr = [];
        foreach($roles as $k => $v)
        {
            $pers = $v->role_perm()->get();
            
            foreach($pers as $k=>$v)
            {
             $arr[]=$v->url;
            }
        }

        $arr = array_unique($arr);
        // dump($arr);
        $url = \Route::current()->getActionName();

        
        if(in_array($url, $arr)){

            return $next($request);

        } else {

            return redirect('/admin')->with('success','没有权限请联系管理员');
        }
      
    }
}
