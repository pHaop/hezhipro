@extends('common/home')
@section('content')
    <div class="main-container" style="max-width:600px;min-width:inherit;">

        <div class="pb pb-note-view">
            <h1>{{$res['title']}}</h1>
            <div class="author-top">
                <a class="avatar" href="/home/thisuser?id={{$rev->id}}">
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
            
                    阅读 20
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
            <div class="tip">
                <div class="action">
                    <a href="/login?redirect=%2Fn%2Fr8fp2rvl" data-uk-tooltip title="请先登录后再进行打赏">打赏</a>
                </div>
            </div>
            <div class="author-bottom">
                <a class="avatar" href="/member/101250">
                    <img src="static/picture/35685_q70h_8626.jpg" />
                </a>
                <div class="user">
                    <a class="name" href="/member/101250">
                        一人一伴
                    </a>
                </div>
                <div class="stat">
                    写了 9142 字，被 0 人关注
                </div>
                <div class="signature">

                </div>
            </div>
     
            <div class="tool">
                <div class="body">
                    <div data-share-buttons data-sites="weibo,qq,qzone,wechat"></div>
                </div>
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
        </div>

        











        <div class="pb pb-note-comment-post">
            @if(session('uid'))
                <div class="avatar">
                    <img src="http://heezhi.c.ecuster.com/assets/lib/img/avatar.png?v=b7f617aa" />
                </div>
                <div class="comment-editor">
                    <div class="message-editor">
                        <textarea id="noteComment" style="display:none;"></textarea>
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
                0条评论
            </div>
            <div class="list">
                <div class="loading">
                    <i class="uk-icon-refresh uk-icon-spin"></i>
                </div>
            </div>
            <div class="page page-container">
            </div>
        </div>

    </div>

    <div id="tipDialog" class="uk-modal">
        <div class="uk-modal-dialog">
            <div class="pb pb-note-tip">
                <div class="body">
                    <div class="uk-form">
                        <div class="tip-title">
                            打赏给用户
                        </div>
                        <div class="tip-value">
                            <input type="text" class="uk-form-large" name="money" value="" />
                        </div>

                        <div class="pay-list">

                            <a href="javascript:;" data-type="alipay">
                                <img src="static/picture/alipay.jpg"/>
                                支付宝
                            </a>

                            <a href="javascript:;" data-type="wechat">
                                <img src="static/picture/wechat.jpg"/>
                                微信支付
                            </a>

                        </div>

                        <div class="msg-title">
                            留言
                        </div>
                        <div class="msg-value">
                            <input type="text" class="uk-form-large" name="msg" value="支持一下~" />
                        </div>

                        <div class="pay-submit">
                            <a href="javascript:;" data-pay-submit>确定支付</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>






    @stop