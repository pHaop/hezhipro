<!doctype html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="/homes/http://heezhi.c.ecuster.com/data/image/2017/07/02/12573_n02g_2290.png?v=ccc74b6a" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="keywords" content="何止,何止说,何止有书,分享创作,何止文学,何止文学网,创作网,分享你的创作,原创网,原创文学网,文学网,文学">
    <meta name="description" content="何止-在这里你可以阅读、分享、交流、还可以任性的创作,一篇短文、一张照片、一首诗、一幅画……遇知音、寻挚友、与懂你的人一起同行，成为热爱生活的……">
    <meta name="viewport" content="width=device-width, minimum-scale=0.5, maximum-scale=5, user-scalable=no">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <script src="/homes/static/js/init.js"></script>
    <title>SuNyu. - 何止 - 让文学回归阅读的本味!</title>
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
<body>

    <!--[if lt IE 9]>
<div class="browser-outdated-container">
    您的浏览器已经非常老，要正常浏览本网站请升级您的浏览器。
    <a target="_blank" href="/homes/http://outdatedbrowser.com/zh-cn">[现在升级]</a>
    <a href="/homes/javascript:;" onclick="$(this).parent().fadeOut();" class="close">[关闭]</a>
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
        <li ><a href="">关注</a></li>
        @if(session('id'))
            <li ><a href="/home/aritle">写作模式</a></li>
        @endif
        <li>
            <form action="/search" class="search uk-form" method="get">
                <input type="text" name="keyword" value="" placeholder="搜索 文章/专题/用户" />
                <button type="submit"><i class="uk-icon-search"></i></button>
            </form>
        </li>
    </ul>
    </nav>
    </div>
    </header>



<div class="main-container">

        <div class="uk-grid">
            <div class="uk-width-2-3">

                <div class="pb pb-member-info">

                    <div class="body">

                        <div class="box">
                            <div class="avatar">
                                <a href="/homes//member/101286">
                                    <img src="{{$rs->person}}" />
                                </a>
                            </div>
                             <div class="name">
                                <a href="/homes//member/101286">
                                    {{$rs->username}}
                                </a>
                              </div>
                            <div class="stat">
                                <a href="/home/mygz">
                                    <span>{{$rs->data}}</span>
                                    <br>
                                    关注
                                </a>

                             
                                <a class="info" href="/homes/javascript:;">
                                    <span>0</span>
                                    <br>
                                    文章
                                </a>
                            </div>
                        </div>

                    </div>

                </div>

                
    <div class="pb pb-member-list-tab">
        <div class="body">
            <div class="menu">
                <a class="active" href="/homes/javascript:;"><i class="uk-icon-list"></i> 文章</a>
            </div>
        </div>
    </div>

    <div class="pb pb-note-list">
        <div class="body" id="list">
            <div class="empty">
        没有记录
    </div>
        </div>
    </div>

    <div class="pb">
        <div class="page-container"></div>
    </div>



            </div>
            <div class="uk-width-1-3">

                <div class="pb">
                    <div class="head">
                                                <h2>
                            个人介绍
                        </h2>
                    </div>
                    <div class="body">
                    <p class="uk-text-muted">{{$rs->sign}}</p>
                                            </div>
                </div>

                <div class="pb-spacer"></div>

                <div class="pb pb-member-right-menu">
                    <div class="body">
                        <a href="/home/likenote?id={{$rs->id}}" class="item">
                            <i class="uk-icon-heart-o"></i>
                            喜欢的文章
                        </a>
                      
                    </div>
                </div>

                <div class="pb-spacer"></div>

                <div class="pb pb-simple-topic-list">
                    <div class="head">
                                                <h2>
                                                            TA创建的专题
                                                    </h2>
                    </div>
                    <div class="body">
                                                    <div class="empty">
                                暂无专题~
                            </div>
                                            </div>
                </div>

            </div>
        </div>

    </div>


    <footer>
        <div class="main-container">
            <div class="articles">
                                    <a href="/homes//article/1">使用协议</a>
                                    <a href="/homes//article/2">关于何止</a>
                                    <a href="/homes//article/4">版权说明</a>
                                    <a href="/homes//article/5">隐私保护</a>
                                    <a href="/homes//article/8">联系我们</a>
                            </div>
            <div class="copyright">
                <a href="/homes/http://www.miitbeian.gov.cn" target="_blank">沪ICP备16023748号-8</a>
                &copy;
                heezhi.com【何止版权所有】
                            </div>
        </div>
    </footer>

    <div class="pb-footer-toolbox">
        <a href="/homes/javascript:;" class="top" data-uk-smooth-scroll="{offset:0}" data-uk-tooltip="{pos:'left'}" title="返回顶部">
            <i class="uk-icon-arrow-up"></i>
        </a>
    </div>

        <script src="/homes/static/js/basic.js"></script>

    <script>
        (function () {
            var pager = new window.api.pager('.page-container',function (page) {
                $.post('?',{page:page},function (res) {
                    window.api.base.defaultFormCallback(res,{success:function(res){
                        $('#list').html(res.data.html);
                        pager.render(res.data.total,res.data.pageSize,res.data.page);
                    }});
                });
            },{jump:false,total:false});
            pager.render(0,20,1);
        })();
    </script>
</body>
</html>
