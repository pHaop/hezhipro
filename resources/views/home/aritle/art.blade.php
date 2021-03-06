@extends('common/home')
@section('content')
    <div class="main-container" style="max-width:600px;min-width:inherit;">

        <div class="pb pb-note-view">
            <h1>{{$res['title']}}</h1>
            <div class="author-top">
                <a class="avatar" href="/member/101250">
                    <img src="{{$rev['person']}}" />
                </a>
                <div class="user">
                    <a class="name" href="/member/101250">
                        {{$rev['username']}}
                    </a>
                </div>
                <div class="stat">
                    <time datetime="{{$res['addtime']}}"></time>发布
                    ·
                    字数 0
                    ·
                    阅读 0
                    ·
                    评论 0
                    ·
                    喜欢 0
                </div>
            </div>
            <div class="content html-container">
                  @php echo  htmlspecialchars_decode($res['content']);@endphp
            </div>
            <div class="content-copyright">
                <a href="javascript:;" data-dialog-request="/note/tip_off/6946">举报文章</a>
                &copy;著作权归作者所有
            </div>
          
            <div class="tool">

                <div style="display: none;" id="uid">{{$rs->id}}</div>

     
                @if($data)
                 <p class="note" href="javascript:;" style="cursor: pointer;" id="note-like">
                    <i class="uk-icon-heart-o"></i> 喜欢 
                </p> 
                @else
                <p class="note" href="javascript:;" style="cursor: pointer;" id="note">
                    <i class="uk-icon-heart-o"></i> 喜欢 
                </p>
                @endif
               
            <div style="display: none;" id="wid">{{$res['id']}}</div>

                 <script type="text/javascript">
                    
                    $('.note').click(function(){
                        var uid = $(this).prev('#uid').text();
                        var wid = $(this).next('#wid').text();
                        
                        var arr = {'uid':uid,'wid':wid};
                       if($(this).attr('id')=='note')
                       {
                        $.get('/home/like',arr,function(data){

                            console.log(data);

                        })


                        $(this).attr('id','note-like');

                       }else{
                        $.get('/home/nolike',arr,function(data){

                             console.log(data);

                        })

                        $(this).attr('id','note');

                       }
                      
                    });
                    $('.dede').click(function(){
                        alert('请先登录');
                    })

                </script>

                 <style type="text/css">

                    
                    

                    #note-like{

                            border: 1px solid #EA6F5A;
                            line-height: 34px;
                            background: #EA6F5A;
                            color: #FFF;
                            padding: 0 20px;
                            border-radius: 17px;
                            display: inline-block;
                      }


                            
                    #note {

                        border: 1px solid #EA6F5A;
                        line-height: 34px;
                        color: #EA6F5A;
                        padding: 0 20px;
                        border-radius: 17px;
                        display: inline-block;
                  }
                                
            </style>
          
            </div>
            <div class="body">
                <div data-share-buttons data-sites="weibo,qq,qzone,wechat"></div>
            </div>
        </div>

        <div class="pb pb-note-comment-post">
            @if(session('uid'))
                <div class="avatar">
                    <p>发表评论&nbsp;:</p>
                </div>
                <div class="comment-editor">
                    <div class="message-editor">
                        <div class="text_editor_1" class="text-editor-container">
                            <div class="text_editor-box">

                                <div class="text=editor-field">
                                     <textarea id="Con" style="width:500px;height:100px" uid="{{$rs['id']}}" aid="{{$res['id']}}"></textarea>
                                </div>
                                <div class="text-editor-button">
                                    <button class="tet-editor-button-send" style="margin-left: 450px" id="send">发送</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @else
                <div class="login">
                    <a href="/home/login">登录后开始评论</a>
                </div>

                @endif
        </div>
        <div class="pb pb-note-comment-list">
            <div class="title">
               {{$count}}条评论
            </div>
            <div class="list">
                @foreach($rem as $k=>$v)
                <div class="item" >
                    <div class="user">
                        <a class="avatar" href=""><img src=""></a>
                        <a class="name" href="">111</a>
                        <div class="time">
                            {{$v['addtime']}}
                        </div>
                    </div>
                </div>
                <div class="message">
                    <p>{{$v['comment']}}</p>
                </div>
                <div class="start">
                    <a class="like" href="">点赞</a>
                    <span class="reply" id="rep">回复</span>
                </div>
                <div class="reply">
                    <div class="reply-list" style="margin-left: 30px;">
                        @foreach($reb as $k=>$v)
                        <div class="reply-item" style="margin-left: 20px;">
                            <div class="reply-text">
                                <div class="reply-user">
                                    <a href="">名字 :</a>
                                </div>
                            <p>{{$v['reply']}}</p>
                            </div>
                            <div class="reply-stat">
                                <span class="reply-time">{{$v['addtime']}}</span>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="reply-editor">
                        <textarea style="display: none" id="textrep" style="width: 400px"
                                  uid="{{$rs['id']}}" aid="{{$res['id']}}"></textarea>
                    </div>
                    <div class="text-editor-button">
                        <button class="tet-editor-button-send" style="display: none" id="reply">回复</button>
                    </div>
                </div>
                    @endforeach
            </div>

        </div>

        <script>
        $("#send").click(function(){
            var comment =$('#Con').val();
            var uid = $('#Con').attr('uid');
            var aid = $('#Con').attr('aid');
            $.post("/home/comment",{'_token':"{{csrf_token()}}",'aid':aid,'uid':uid,'comment':comment},function(res){
                if(res == 1){
                    alert('评论成功');
                    $('#Con').val() == '';
                }
            });
        })
        $("#rep").click(function(){
            $('#textrep').attr('style','display: block;width: 500px;');
            $('#reply').attr('style','display:block;margin-left:450px;');
            var reply =$('#textrep').val();
            var uid = $('#textrep').attr('uid');
            var aid = $('#textrep').attr('aid');
            $('#reply').click(function(){
                $.post("/home/reply",{'_token':"{{csrf_token()}}",'aid':aid,'uid':uid,'reply':reply},function(res){
                    if(res == 1){
                        alert('回复成功');
                        $('#textrep').attr('style','display:none');
                        $('#reply').attr('style','display:none');
                    }
                });
            })
        })
    </script>
@stop