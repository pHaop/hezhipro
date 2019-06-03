@extends('common/home')
@section('content')
<body style="background: url(/homes/static/picture/xiezuo2.jpg) no-repeat;background-size:100% 100% ">
    <div class="container-fluid" >

    <div class="row">
        <div class="col-md-3" >

            <div class="list-group" style="margin-top:100px">
                <a href="/home/aritle" class="list-group-item list-group-item-action active" >
                    新建文章
                </a>
                <a href="#" class="list-group-item list-group-item-action active" >
                    我的文章
                </a>

                @foreach($ra as $k=>$v)
                   <span class="{{$v['id']}}" id="eee">
                   <li class="list-group-item list-group-item-action " name="{{$v['id']}}">{{$v['title']}}</li>
                    </span>
                @endforeach

            </div>

        </div>
        <div class="col-md-9" style="margin-top: 30px">

       <h2>写作模式</h2>

       <br/>
            <button class="btn" id="xgfb" style="display:none" >修改发布</button>
            <form action="/home/aritle" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleInputPassword1">文章专题 </label><a href="topic/create" style="margin-left: 270px">新建专题</a>

      <button type="submit" class="btn btn-default" style="margin-left: 650px" id="bbb">保存发布</button>


    <select class="form-control" style="width: 400px" name="name" autocomplete="off">

        @foreach($rt as $k=>$v)
    <option value="{{$v['id']}}" >{{$v['name']}}</option>
            @endforeach
</select>
  </div>
                <input type="hidden" name="status" value="0">
                <input type="hidden" name="addtime" value="{{date('Y-m-d H:i:s',time())}}">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="uid" value="{{$rs['id']}}">
  <div class="form-group">
    <label for="exampleInputPassword1">文章标题</label>
    <input type="text" class="form-control" placeholder="文章标题" style="width:1100px" name="title" value="" id="ccc">
  </div>
  
  <div class="checkbox">
     <label for="exampleInputPassword1">文章内容</label>
        <script type="text/javascript" src="{{asset('bj/ueditor.config.js')}}">

      </script>
<!-- 编辑器源码文件 -->
<script type="text/javascript" src="{{asset('bj/ueditor.all.js')}}"></script>
<!-- 实例化编辑器 -->
<script type="text/javascript">
    var ue = UE.getEditor('ue-container');
    ue.ready(function(){
        ue.execCommand('serverparam', '_token', '{{ csrf_token() }}');
    });
</script>    

<!-- 加载编辑器的容器 -->

<script id="ue-container" name="content"  type="text/plain">

</script>

  </div>
  <BR/>

</form>
</div>
</div>
</div>
</body>
</html>
<script>
    $('span').click(function(){

        var tit = $(this).attr('class');
       $.post("/home/aritle/ajax",{'_token':"{{csrf_token()}}",'id':tit},function(data){
           var ra = JSON.parse(data);
           /*if($('option').html() == ra['topic']){
               $('option').('selected','ture');
           }*/
          var rd = ra['aid'];
           $("select").find("option[value='"+rd+"']").removeAttr('selected');
            $("select").find("option[value = '"+rd+"']").attr("selected","selected");

            $('#ccc').val(ra['title']);
            ue.ready(function(){
                ue.setContent(ra['content']);
            })
           $("#bbb").attr("style","display:none;");
            $('#xgfb').attr("style","margin-left: 1000px;display:block;")
           $('#xgfb').attr('name',tit);
       })

    })
    $('#xgfb').click(function(){
        var id = $(this).attr('name');
        var aid = $('select').find("option[selected = selected]").val();
        var title = $('#ccc').val();
            //获取html内容，返回: <p>hello</p>
            var con = ue.getContent();

        $.post("/home/aritle/ajaxxg",{'_token':"{{csrf_token()}}",'id':id,'aid':aid,'title':title,'content':con}
        ,function(data){
            if(data == 1){
                alert('修改成功');
            }
        })
    })
</script>
    @stop

    
   
    


    
