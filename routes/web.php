<?php

Route::group(['middleware'=>'checklogin'],function(){
Route::resource('/home/aritle/', 'Home\WriteController');
Route::get('/home/aritle/{id}','Home\WriteController@sbkj');
Route::post('/home/aritle/ajax','Home\WriteajaxController@req');
Route::post('/home/aritle/ajaxxg','Home\WriteajaxController@rel');
Route::resource('/home/topic/','Home\TopicController');
Route::get('/home/topic/{id}','Home\TopicController@sbkj');
Route::get('/home/follow','Home\FollowController@index');
Route::get('/logout','Home\LoginController@logout');
});














































































// 路由组设置
//后台的登录页面
// Route::get('admin/login','')
//登录页面
Route::any('/admin/login', 'Admin\LoginController@login');
//验证码
Route::any('/admin/code', 'Admin\LoginController@code');
//处理登录信息
Route::post('/admin/dologin', 'Admin\LoginController@dologin');
//后台
Route::group(['middleware'=>'login'], function(){
	//后台的首页
	Route::get('/admin','Admin\IndexController@index');
    //管理员管理
	Route::resource('/admin/guanli', 'Admin\AdminController');
	//修改密码
	Route::any('/admin/pass', 'Admin\LoginController@pass');
	//处理密码数据
	Route::any('/admin/dopass', 'Admin\LoginController@dopass');
	//后台推出
    Route::any('/admin/out','Admin\LoginController@out');
    //h后台用户
    Route::resource('/admin/user','Admin\UserController');
    //后台专题
    Route::resource('/admin/topic','Admin\TopicController');
	//后台添加页
	// Route::any('/admin/create','Admin\UserController@create');
	//后台用户页
	// Route::any('/admin/list','Admin\UserController@list');
	// //后台管理员列表页
	// Route::any('/admin/user','Admin\GuanController@user');
	// //后台管理员添加页
	// Route::any('/admin/adduser','Admin\GuanController@adduser');
	// //后台管理员添加信息页
	// Route::any('/admin/doadduser','Admin\GuanController@doadduser');

	// Route::resource('/admin/user', 'Admin\dededController');

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







