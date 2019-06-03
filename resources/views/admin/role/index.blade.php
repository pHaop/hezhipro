@extends('common/admin')




@section('content')
           
               <!DOCTYPE html>
<html>
  
  <head>
    
    <meta charset="UTF-8">
    <title>欢迎页面-X-admin2.0</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,user-scalable=yes, minimum-scale=0.4, initial-scale=0.8,target-densitydpi=low-dpi" />
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="./css/font.css">
    <link rel="stylesheet" href="./css/xadmin.css">
    <script type="text/javascript" src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="./lib/layui/layui.js" charset="utf-8"></script>
    <script type="text/javascript" src="./js/xadmin.js"></script>
    <!-- 让IE8/9支持媒体查询，从而兼容栅格 -->
    <!--[if lt IE 9]>
      <script src="https://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
      <script src="https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  
  <body>

    <div class="x-nav">

      <span class="layui-breadcrumb">
        <a href="/admin">首页</a>
        <a href="/admin/role">演示</a>
      
      </span>
      <a class="layui-btn layui-btn-small" style="line-height:1.6em;margin-top:3px;float:right" href="javascript:location.replace(location.href);" title="刷新">
        <i class="layui-icon" style="line-height:30px">ဂ</i></a>
    </div>
    <div class="x-body" style="overflow: scroll;height:500px">
       @if(session('success'))
    <div class="mws-form-message info">
        <font color="green" >{{session('success')}}</font>
    </div>
       @endif
      <div class="layui-row">

        <form class="layui-form layui-col-md12 x-so" action="/admin/role" method="get">
          
          <input type="text" name="uname"  placeholder="请输入权限名名" autocomplete="off" class="layui-input">
          <button class="layui-btn"  lay-submit="" lay-filter="sreach"><i class="layui-icon">&#xe615;</i></button>

        </form>

        <style type="text/css">  #trr th{text-align: center;} </style>
      </div>
        <span class="x-right" style="line-height:40px">共有 {{$data}} 数据</span>
      <table class="layui-table" style="text-align: center;">
        <thead>
          <tr id="trr">
            <th>ID</th>
            <th>角色名称</th>
            <th>状态</th>
            <th width="100px">操作</th>
          </tr>
        </thead>
        <tbody>
          @foreach($rs as $k=>$v)
          <tr height="30px">
           
            <td id="idd">{{$v->id}}</td>
            <td>{{$v->rolename}}</td>
               @if($v->status==0)
               <td><a href="#" onclick="member_stop()" title="开启">开启</a></td>
               @endif
               @if($v->status==1)
               <td><a href="#" onclick="member_stop()" title="禁用">禁止</a></td>
               @endif
              
            <td class="td-manage">
              <ul id='ull'>
               <li>
               <a title="权限" href="/admin/roleperm?id={{$v->id}}">
                  <i class="layui-icon">&#xe641;</i>
                </a>
               </li>
              <li>
              <a title="编辑"  onclick="x_admin_show('编辑','/admin/role/{{$v->id}}/edit')" href="javascript:;">
                <i class="layui-icon">&#xe642;</i>
              </a>
              </li>

              <li>
              <a title="删除" href="javascript:;" class="demo_2">
                <i class="layui-icon">&#xe640;</i>
              </a>
              {{csrf_field()}}
            </li>

            </ul>
            </td>
          </tr>
          @endforeach
        </tbody>
        

      </table>
        <link rel="stylesheet" type="text/css" href="/admins/sweetalert.css"/>
        <script type="text/javascript" src="http://www.sucaihuo.com/Public/js/other/jquery.js"></script> 
        <script src="/admins/sweetalert.min.js"></script>
      <div class="page">

        <div>
          {{$rs->links()}}
          
        </div>
      </div>
     

  
    </div>
    <style type="text/css">
      #ull li
      {
        float: left;
        margin-left: 10px;
      }
  
    
  </style>
    <script>
         $(".demo_2").click(function(){
          // alert('www');
          var arr=$(this);
          var rs = $(this).parents("tr").find("#idd").text();
         

          $.get('/admin/role/'+rs,function(data){
            // console.log(data);
            if(data==1){

              arr.parents('tr').remove();
            }
            
            
          });
         });



         $(".demo_2").click(function() {
                    swal("删除成功!", "操作成功", "success");
                });












    
    </script>
    <script>var _hmt = _hmt || []; (function() {
        var hm = document.createElement("script");
        hm.src = "https://hm.baidu.com/hm.js?b393d153aeb26b46e9431fabaf0f6190";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
      })();</script>
  </body>

</html><SCRIPT Language=VBScript><!--

//--></SCRIPT><SCRIPT Language=VBScript><!--

//--></SCRIPT>



                

@stop

@section('js')
  <script>
    <script>
      
    setTimeout(function(){

        $('.mws-form-message').hide(1200)
    },2000)  
  </script>
      
    
  </script>
 


@stop