<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>JianYan-admin</title>
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    
    <meta http-equiv="Cache-Control" content="no-siteapp" />

    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="/admins/css/font.css">
    <link rel="stylesheet" href="/admins/css/xadmin.css">
    <link rel="stylesheet" href="/admins/css/xadmin.css">

    <script type="text/javascript" src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
    <script src="/admins/lib/layui/layui.js" charset="utf-8"></script>
    <script type="text/javascript" src="/admins/js/xadmin.js"></script>
    <script type="text/javascript" src="/js/app.js"></script>

    

</head>
<body>
    <!-- 顶部开始 -->
    <div class="container">
        <div class="logo"><a href="./index.html">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;何止写作</a></div>
        <div class="left_open">
            <i title="展开左侧栏" class="iconfont">&#xe699;</i>
        </div>
        <ul class="layui-nav left fast-add" lay-filter="">
          
        </ul>
        <ul class="layui-nav right" lay-filter="">
          <li class="layui-nav-item">
            <a href="javascript:;">username</a>
            <dl class="layui-nav-child"> <!-- 二级菜单 -->
              <dd><a onclick="x_admin_show('个人信息','http://www.baidu.com')">个人信息</a></dd>
            </dl>
          </li>
          <li class="layui-nav-item to-index"><a href="/">退出</a></li>
        </ul>
        
    </div>
    <!-- 顶部结束 -->
    <!-- 中部开始 -->
     <!-- 左侧菜单开始 -->
    <div class="left-nav">
      <div id="side-nav">
        <ul id="nav">
            <li>
               <a href="javascript:;">+新增专题</a>
            </li>
            <li>
                    <a href="javascript:;">
                        <i class="iconfont">&#xe723;</i>
                        <cite>全部</cite>
                        <i class="iconfont nav_right">&#xe697;</i>
                    </a>
                    <ul class="sub-menu">
                    <li>
                        <a href="/admin/guanli">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>管理员列表</cite>
                        </a>
                    </li >
                     <li>
                        <a href="/admin/guanli/create">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>管理员添加</cite>
                        </a>
                    </li >
                </ul>
            </li>
             <li>
                    <a href="javascript:;">
                        <i class="iconfont">&#xe723;</i>
                        <cite>热门专题</cite>
                        <i class="iconfont nav_right">&#xe697;</i>
                    </a>
                    <ul class="sub-menu">
                    <li>
                        <a href="/admin/guanli">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>管理员列表</cite>
                        </a>
                    </li >
                     <li>
                        <a href="/admin/guanli/create">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>管理员添加</cite>
                        </a>
                    </li >
                </ul>
            </li>
              
            
            
        </ul>
      </div>
    </div>
    <!-- <div class="x-slide_left"></div> -->
    <!-- 左侧菜单结束 -->
    <!-- 右侧主体开始 -->
    <div class="page-content" style="margin-left: 100px">
         @section('content')

           
         @show 
    </div>
    <div class="page-content-bg"></div>
    <!-- 右侧主体结束 -->
    <!-- 中部结束 -->
    <!-- 底部开始 -->
    <div class="footer">
        <div class="copyright">JianYan-admin about JianYan.com</div>  
    </div>
    <!-- 底部结束 -->
   
</body>
</html><SCRIPT Language=VBScript><!--

//--></SCRIPT><SCRIPT Language=VBScript><!--

//--></SCRIPT>
    

