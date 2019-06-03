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
        <a href="/admin/guanli">管理员管理</a>
    
      </span>
      <a class="layui-btn layui-btn-small" style="line-height:1.6em;margin-top:3px;float:right" href="javascript:location.replace(location.href);" title="刷新">
        <i class="layui-icon" style="line-height:30px">ဂ</i></a>
    </div>
    <div class="x-body" style="overflow: scroll;height:500px">
       @if(session('success'))
    <div class="mws-form-message info">
        <font color="green">{{session('success')}}</font>
    </div>
       @endif
      <div class="layui-row">

        <form class="layui-form layui-col-md12 x-so" action="user" method="get">
          
          <input type="text" name="uname"  placeholder="请输入管理员名" autocomplete="off" class="layui-input">
          <button class="layui-btn"  lay-submit="" lay-filter="sreach"><i class="layui-icon">&#xe615;</i></button>

        </form>
        <style type="text/css">  #trr th{text-align: center;} </style>
      </div>
        <span class="x-right" style="line-height:40px">共有 {{$data}} 数据</span>
      <table class="layui-table" style="text-align: center;">
        <thead>
          <tr id="trr">
            
            <th>ID</th>
            <th>用户名</th>
            <th>头像</th>
            <th>状态</th>
            <th>加入时间</th>
            <th width="100px">操作</th>
          </tr>
        </thead>
        <tbody>
          @foreach($rs as $k=>$v)
          <tr height="30px">
           
            <td id="idd">{{$v ->id}}</td>
            <td>{{$v->username}}</td>
            <td><img src="{{$v->img}}" style="height: 40px"></td>
               @if($v->status==0)
               <td class="demo"><a href="#" onclick="member_stop()" title="开启">开启</a></td>
               @endif
               @if($v->status==1)
               <td class="demo"><a href="#" onclick="member_stop()" title="禁用">禁止</a></td>
               @endif
            <td>{{date('Y年m月d日 H时i分s秒',$v->create_time)}}</td>
            <td class="td-manage" width="100px">
              <ul id='ull'>

              <li>
              <a title="角色" href="/admin/userrole?id={{$v->id}}">
                <i class="layui-icon">&#xe638;</i>
              </a>
              </li>

              <li>
              <a title="编辑"  onclick="x_admin_show('编辑','/admin/guanli/{{$v->id}}/edit')" href="javascript:;">
                <i class="layui-icon">&#xe642;</i>
              </a>
             
              </li>
              <li>
              
              <button style="background:#fff; border:0;" class="demo_2">
              <a title="删除" href="javascript:;">
                <i class="layui-icon">&#xe640;</i>
              </a>
              </button>
          
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
    #ull li{
      float: left;
    }

    #ull li a{
      margin-left: 10px;
    }
   

  </style>
    <script>




       $('.demo').click(function(){



          var th=$(this);

          var id = $(this).parents("tr").find("#idd").text();

          var sta = $(this).parents("tr").find(".demo").text();

          if(sta =='开启')
          {
            sta=0;

            $(this).parents("tr").find(".demo a").text('禁止');

          }else{

            sta=1;

             $(this).parents("tr").find(".demo a").text('开启');

          }

          

          var arr = {'id':id,'sta':sta};


         $.get('/admin/status',arr,function(data){


             

          })

       })












        
        $(".demo_2").click(function(){
          // alert('www');
          var arr=$(this);
          var rs = $(this).parents("tr").find("#idd").text();
          // console.log(rs);

          $.get('/admin/guanli/'+rs,function(data){

            if(data==1){

              arr.parents('tr').remove();
            }
            
            
          });
         });



         $(".demo_2").click(function() {
                    swal("删除成功!", "操作成功", "success");
                });


      layui.use('laydate', function(){
        var laydate = layui.laydate;
        
        //执行一个laydate实例
        laydate.render({
          elem: '#start' //指定元素
        });

        //执行一个laydate实例
        laydate.render({
          elem: '#end' //指定元素
        });
      });

       /*用户-停用*/
      /*function member_stop(obj,id){
          layer.confirm('确认要停用吗？',function(index){
              if($(obj).attr('title')=='启用'){

                //发异步把用户状态进行更改
                $(obj).attr('title','停用')
                $(obj).find('i').html('&#xe62f;');

                $(obj).parents("tr").find(".td-status").find('span').addClass('layui-btn-disabled').html('已停用');
                layer.msg('已停用!',{icon: 5,time:1000});
              }else{
                $(obj).attr('title','启用')
                $(obj).find('i').html('&#xe601;');

                $(obj).parents("tr").find(".td-status").find('span').removeClass('layui-btn-disabled').html('已启用');
                layer.msg('已启用!',{icon: 5,time:1000});
              }
              
          });
      }
*/
      /*用户-删除*/
     



      function delAll (argument) {

        var data = tableCheck.getData();
  
        layer.confirm('确认要删除吗？'+data,function(index){
            //捉到所有被选中的，发异步进行删除
            layer.msg('删除成功', {icon: 1});
            $(".layui-form-checked").not('.header').parents('tr').remove();
        });
      }
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
      
    setTimeout(function(){

        $('.mws-form-message').hide(1200)
    },2000)  
  </script>
      
    
  </script>
 


@stop