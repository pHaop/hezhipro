<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>JianYan-admin</title>
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,user-scalable=yes, minimum-scale=0.4, initial-scale=0.8,target-densitydpi=low-dpi" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />

    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="/admins/css/font.css">
    <link rel="stylesheet" href="/admins/css/xadmin.css">
    <script type="text/javascript" src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
     <script src="/admins/lib/layui/layui.js" charset="utf-8"></script>
    <script type="text/javascript" src="/admins/js/xadmin.js"></script>

</head>
<body>
	<h1 style="margin-left: 150px;margin-top: 50px;"> @yield('title')</h1>
    <div class="x-body">
        <form class="layui-form" method="post" action="/admin/topic/{{$rs->id}}" enctype="multipart/form-data">
        	<input type="hidden" name="_token" value="{{csrf_token()}}">
        	<input type="hidden" name="status" value="0">
        	<input type="hidden" name="addtime" value="{{date('Y-m-d H:i:s',time())}}">
          <div class="layui-form-item">
              <label for="username" class="layui-form-label">
                  <span class="x-red">*</span>修改热门专题
              </label>
              <div class="layui-input-inline">
                  <input type="text" id="username" name="name" required="" lay-verify="required"
                  autocomplete="off" class="layui-input" value="{{$rs->name}}">
              </div>
              <div style="clear:both"></div>
              <br/>
              <br/>
              <label for="username" class="layui-form-label">
                  <span class="x-red">*</span>选择专题封面
              </label>
              <div class="layui-input-inline">
                  <input type="file" id="file" name="portrait" required="" lay-verify="required"
                         autocomplete="off">
              </div>
              <div style="clear:both"></div>
              <br/>
              <br/>
              <label for="username" class="layui-form-label">
                  <span class="x-red">*</span>添加专题描述
              </label>
              <div class="layui-input-inline">
                  <input type="text" id="username" name="person" required="" lay-verify="required"
                         autocomplete="off" class="layui-input" style="width:400px">
              </div>
             
          </div>
         
         
          <div class="layui-form-item">
              <label for="L_repass" class="layui-form-label">
              </label>
              <button  class="layui-btn" lay-filter="add" lay-submit="">
                  修改
              </button>
          </div>
          {{ csrf_field() }}
          {{method_field('PUT')}}
      </form>
    </div>
    <script>
        layui.use(['form','layer'], function(){
            $ = layui.jquery;
          var form = layui.form
          ,layer = layui.layer;
        
         /* //自定义验证规则
          form.verify({
            nikename: function(value){
              if(value.length < 5){
                return '昵称至少得5个字符啊';
              }
            }
            ,pass: [/(.+){6,12}$/, '密码必须6到12位']
            ,repass: function(value){
                if($('#L_pass').val()!=$('#L_repass').val()){
                    return '两次密码不一致';
                }
            }
          });*/

          //监听提交
        /*  form.on('submit(add)', function(data){
            console.log(data);
            //发异步，把数据提交给php
            layer.alert("增加成功", {icon: 6},function () {
                // 获得frame索引
                var index = parent.layer.getFrameIndex(window.name);
                //关闭当前frame
                parent.layer.close(index);
            });
            return false;
          });*/
          
          
        });
    </script>
    <script>var _hmt = _hmt || []; (function() {
        var hm = document.createElement("script");
        hm.src = "https://hm.baidu.com/hm.js?b393d153aeb26b46e9431fabaf0f6190";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
      })();</script>
  </body>
  </html>
