<!doctype html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="http://heezhi.c.ecuster.com/data/image/2017/07/02/12573_n02g_2290.png?v=ccc74b6a" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="keywords" content="何止,何止说,何止有书,分享创作,何止文学,何止文学网,创作网,分享你的创作,原创网,原创文学网,文学网,文学">
    <meta name="description" content="何止-在这里你可以阅读、分享、交流、还可以任性的创作,一篇短文、一张照片、一首诗、一幅画……遇知音、寻挚友、与懂你的人一起同行，成为热爱生活的……">
    <meta name="viewport" content="width=device-width, minimum-scale=0.5, maximum-scale=5, user-scalable=no">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <script src="/homes/static/js/init.js"></script>
    <script src="/js/jquery.js"></script>
    <script src="/homes/static/js/home.js"></script>
    <link rel="stylesheet" href="/css/app.css">
    <title>何止 - 让文学回归阅读的本味!</title>
            <link rel="stylesheet" href="/homes/static/css/ui.css"/>
        <link rel="stylesheet" href="/homes/static/css/style.css"/>
                    <script>

var _hmt = _hmt || [];
(function() {
    var hm = document.createElement("script");
    hm.src = "https://hm.baidu.com/hm.js?e0ef7dccbfcf1ee09942b9b5648206d4";
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(hm, s);
})();
</script>
    </head>
  <!--[if lt IE 9]>
<div class="browser-outdated-container">
您的浏览器已经非常老，要正常浏览本网站请升级您的浏览器。
    <a target="_blank" href="http://outdatedbrowser.com/zh-cn">[现在升级]</a>
    <a href="javascript:;" onclick="$(this).parent().fadeOut();" class="close">[关闭]</a>
</div>
<![endif]-->



    @php

    $data = DB::table('user')->where('id',session('uid'))->first()
   
    @endphp
   
    <header>
        <div class="main-container">
            <nav class="uk-navbar">
                <ul class="uk-navbar-nav uk-navbar-nav-right">
    @if(session('uid'))


    <li class="uk-parent" data-uk-dropdown="" aria-haspopup="true" aria-expanded="false">
        <a class="username" href="">
            <img class="avatar" src="{{$data->person}}">
            <span>{{$data->username}}</span>
            <i class="uk-icon-caret-down"></i>
        </a>

        <div class="uk-dropdown uk-dropdown-navbar uk-dropdown-bottom" style="top: 50px; left: 0px;">
            <ul class="uk-nav uk-nav-navbar">
                <li><a href="/home/user"><i class="uk-icon-user"></i> 我的中心</a></li>
                <li><a href="/home/userinfo"><i class="uk-icon-list-alt"></i> 我的资料</a></li>

                <li><a href="/home/loginout"><i class="uk-icon-sign-out"></i> 退出</a></li>
            </ul>
        </div>

    </li>

    @else

    <li><a href="/home/zhuce">注册</a></li>
    <li><a href="/home/login">登录</a></li>
    
    @endif
    </ul>

    <a class="uk-navbar-brand" href="/"><img src="/homes/static/picture/54307_izln_5112.png" style="width: 110px;"></a>


    <!--  -->
    <ul class="uk-navbar-nav">
        <li  class="uk-active" ><a href="/">发现</a></li>
        <li ><a href="/home/topic">专题</a></li>
        <li ><a href="/home/follow">关注</a></li>
        @if(session('uid'))
            <li ><a href="/home/aritle">写作模式</a></li>
        @endif
        <li>
            <form action="/" class="search uk-form" method="post">
                <input type="text" name="title" value="" placeholder="搜索 文章/专题/用户" />
                {{csrf_field()}}
                <button type="submit"><i class="uk-icon-search"></i></button>
            </form>
        </li>
    </ul>
    </nav>
    </div>
    </header>


@section('content')


@show
<footer>


    @php 
    
    $ren = DB::table('links')->get();

    @endphp

    <div class="main-container">
            <h4>合作伙伴</h4>
        <div class="articles">
            @foreach($ren as $k=>$v)
            <a href="http://{{$v->url}}">{{$v->urlname}}</a>
        
                @endforeach
        </div>
        <hr >
        <div class="articles">
            <a href="/article/1">使用协议</a>
            <a href="/article/2">关于何止</a>
            <a href="/article/4">版权说明</a>
            <a href="/article/5">隐私保护</a>
            <a href="/article/8">联系我们</a>
        </div>
        <div class="copyright">
            <a href="http://www.miitbeian.gov.cn" target="_blank">沪ICP备16023748号-8</a>
            &copy;
            heezhi.com【何止版权所有】
        </div>
    </div>
</footer>