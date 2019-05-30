
<!DOCTYPE html>
<html>
  
  <head>
    <meta charset="UTF-8">
    <title>欢迎页面-X-admin2.0</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,user-scalable=yes, minimum-scale=0.4, initial-scale=0.8,target-densitydpi=low-dpi" />
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="/admins/css/font.css">
    <link rel="stylesheet" href="/admins/css/xadmin.css">
    <script type="text/javascript" src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="/admins/lib/layui/layui.js" charset="utf-8"></script>
    <script type="text/javascript" src="/admins/js/xadmin.js"></script>
    <!-- 让IE8/9支持媒体查询，从而兼容栅格 -->
    <!--[if lt IE 9]>
      <script src="https://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
      <script src="https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  
  <body>
    <div class="x-body">
        <form class="layui-form" action="/admin/cart/{{$rs->id}}" method="post" enctype='multipart/form-data'>
  
          <div class="layui-form-item">
              <label for="username" class="layui-form-label">
                  <span class="x-red">*</span>排序
              </label>
              <div class="layui-input-inline">
                  <select id="shipping" name="grouy" class="valid">
                    
                    <option value="1" @if($rs->grouy==1) selected @endif>1</option>
                   
                    <option value="2" @if($rs->grouy==2) selected @endif>2</option>
                   
                    <option value="3" @if($rs->grouy==3) selected @endif>3</option>
                 
                    <option value="4" @if($rs->grouy==4) selected @endif>4</option>
                    
                  </select>
              </div>
          </div>
        
          <div class="layui-form-item">
            <label for="L_pass" class="layui-form-label">
                  <span class="x-red">*</span>轮播图片路径
              </label>
           
            <input type="file" name="url" value="{{$rs->url}}">
          </div>

          
        <link rel="stylesheet" type="text/css" href="/admins/sweetalert.css"/>
        <script type="text/javascript" src="http://www.sucaihuo.com/Public/js/other/jquery.js"></script> 
        <script src="/admins/sweetalert.min.js"></script>
          {{csrf_field()}}
          {{ method_field('PUT') }}
          <div class="layui-form-item">
              <label for="L_repass" class="layui-form-label">
              </label>
              <button  class="layui-btn" lay-filter="add" id="demo_2">
                  增加
              </button>
          </div>
      </form>
   
    </div>
    <script>

   $("#demo_2").click(function() {
                    swal("删除成功!", "操作成功", "success");
                });





      




        layui.use(['form','layer'], function(){
            $ = layui.jquery;
          var form = layui.form
          ,layer = layui.layer;
        
          //自定义验证规则
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
          });

          //监听提交
          form.on('submit(add)', function(data){
            console.log(data);
            //发异步，把数据提交给php
            layer.alert("增加成功",,function () {
                // 获得frame索引
                
                //关闭当前frame
                
            });
            return false;
          });
          
          
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


