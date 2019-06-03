<?php




















Route::group([],function(){

    Route::resource('/home/aritle/', 'Home\WriteController');
    Route::get('/home/aritle/{id}','Home\WriteController@sbkj');
    Route::post('/home/aritle/ajax','Home\WriteajaxController@req');
    Route::post('/home/aritle/ajaxxg','Home\WriteajaxController@rel');
    Route::resource('/home/topic/','Home\TopicController');
    Route::get('/home/topic/{id}','Home\TopicController@sbkj');
    Route::get('/home/follow','Home\FollowController@index');
    Route::get('/logout','Home\LoginController@logout');
    Route::post('/home/comment','Home\CommentController@index');
    Route::post('/home/reply','Home\ReplyController@index');


});








































































	//登录页面
	Route::any('/admin/login', 'Admin\LoginController@login');
	//验证码
	Route::any('/admin/code', 'Admin\LoginController@code');
	//处理登录信息
	Route::post('/admin/dologin', 'Admin\LoginController@dologin');
	//后台提示
	Route::any('/admin/tishi','Admin\RoleController@tishi');



//后台路由组
Route::group(['middleware'=>'login'], function(){
	//后台的首页
	Route::get('/admin','Admin\IndexController@index');
    //管理员管理
	Route::resource('/admin/guanli', 'Admin\AdminController');
	//管理员状态
	Route::get('/admin/status', 'Admin\AdminController@status');
	//用户角色
	Route::get('/admin/userrole', 'Admin\AdminController@userrole');
	//处理用户角色
	Route::post('/admin/douserrole', 'Admin\AdminController@douserrole');
	//删除
	Route::resource('/admin/guanli/delete', 'Admin\AdminController@delete');
	//修改密码
	Route::any('/admin/pass', 'Admin\LoginController@pass');
	//处理密码数据
	Route::any('/admin/dopass', 'Admin\LoginController@dopass');
	//后台推出
    Route::any('/admin/out','Admin\LoginController@out');
    //h后台用户
    Route::resource('/admin/user','Admin\UserController');
    //角色管理
    Route::resource('/admin/role', 'Admin\RoleController');
    //角色权限
    Route::get('/admin/roleperm', 'Admin\RoleController@roleperm');
    //权限管理
    Route::resource('/admin/perm', 'Admin\PermController');
    //处理权限数据
    Route::post('/admin/doroleperm', 'Admin\RoleController@doroleperm');
    //轮播图管理
   	Route::resource('/admin/cart','Admin\CartController');
   	//友情链接管理
   	Route::resource('/admin/friend','Admin\FriendController');
   	//专题管理
   	Route::resource('/admin/topic','Admin\TopicController');
    //友情链接管理
    Route::resource('/admin/links','Admin\LinksController');

});









	//前台首页
	Route::get('/', 'Home\IndexController@index');
	//前台登录
	Route::get('/home/login', 'Home\LoginController@index');
	//处理登录信息
	Route::post('/home/dologin','Home\LoginController@dologin');
	//验证码
	Route::any('/home/code', 'Home\LoginController@code');
	//前台注册
	Route::get('/home/zhuce', 'Home\LoginController@zhuce');
	//处理注册数据
	Route::post('/home/dozhuce', 'Home\LoginController@dozhuce');
	//短信验证
	Route::get('/home/yzm','Home\LoginController@yzm');




	//前台路由组
Route::group(['middleware'=>'Home'],function(){

	//退出
	Route::get('/home/loginout','Home\LoginController@loginout');
	//个人中心
	Route::get('/home/user','Home\UserController@index');
	//我的资料
	Route::get('/home/userinfo','Home\UserController@userinfo');
	//资料修改
	Route::post('/home/douserinfo','Home\UserController@douserinfo');
	//头像修改
	Route::post('/home/user/upload','Home\UserController@upload');
	//其他用户主页
	Route::get('/home/thisuser','Home\ThisController@index');
	//关注
	Route::get('/home/gz','Home\ThisController@gz');
	//取消关注
	Route::get('/home/dogz','Home\ThisController@dogz');
	//关注页面
	Route::get('/home/mygz','Home\ThisController@mygz');
	
	

});





