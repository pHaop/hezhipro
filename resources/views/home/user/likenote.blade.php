@extends('common/home')

@section('content')

<div class="main-container">

        <div class="uk-grid">
            <div class="uk-width-2-3">

                <div class="pb pb-member-info">

                    <div class="body">

                        <div class="box">
                            <div class="avatar">
                                <a href="javascript:;">
                                    <img src="{{$rs->person}}" />
                                </a>
                            </div>
                             <div class="name">
                                <a href="javascript:;">
                                    {{$rs->username}}
                                </a>
                              </div>
                            <div class="stat">
                                <a href="/homes//member/101286/following">
                                    <span>0</span>
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




            @foreach($arr as $k=>$v)
                

            @php 

            $like = DB::table('article')->where('id',$v['id'])->first();

            $user = DB::table('user')->where('id',$like->uid)->first();
          
            @endphp
         <div class="item">
            <div class="author">
                <a href="/home/thisuser?id={{$user->id}}" class="avatar">
                    <img src="{{$user->person}}">
                </a>
                <a class="name" href="/home/thisuser?id={{$user->id}}">
                 {{$user->username}}
                </a>
                <span class="time">
                    <time datetime="{{$like->addtime}}"></time>
                </span>
            </div>
                            
            <a href="/home/aritle/{{$like->id}}" class="title uk-text-truncate">
                {{$like->title}}
            </a>
            <div class="summary">
                <div class="text">
            @php echo  htmlspecialchars_decode($like->content);@endphp
                </div>
            </div>
            <div class="stat">
                <a href="/n/gqyjswzf">
                    <i class="uk-icon-eye"></i> 31
                </a>
                &nbsp;&nbsp;
                <a href="/n/gqyjswzf">
                    <i class="uk-icon-heart"></i> 1
                </a>
                &nbsp;&nbsp;
                <a href="/n/gqyjswzf">
                    <i class="uk-icon-comment"></i> 0
                </a>
            </div>
      </div>
    @endforeach
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
                        <a href="/homes//member/101286/like_notes" class="item">
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
@stop