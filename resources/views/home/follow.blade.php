@extends('common/home')
@section('content')

<div class="main-container">
    <div class="uk-grid">
        <div class="uk-width-1-4">

            <div class="pb pb-member-profile-menu">
                <div class="body">
                    <div class="list">
                    
                        <a class="active" href="/follow/users"><i class="uk-icon-users"></i> 关注的用户</a>
                    </div>
                </div>
            </div>

            <div class="pb pb-home-writing">
                <div class="body">
                    <a href="/writer">
                        <i class="uk-icon-edit"></i>
                        开始创作
                    </a>
                </div>
            </div>

            <div class="pb pb-home-member-list">
                <div class="head">
                    <h2>推荐用户</h2>
                </div>
                <div class="body">
                    <div class="item">
                        <div class="user-follow-box" data-user-id="100733">
                            <a href="javascript:;" class="follow  ">
                                <i class="uk-icon-plus"></i> 关注
                            </a>
                            <a href="javascript:;" class="unfollow  show  ">
                                <i class="uk-icon-minus"></i> 取消关注
                            </a>
                        </div>
                        <a href="/member/100733" class="user">
                            <img src="http://heezhi.c.ecuster.com/data/image/2018/09/15/27560_ykg8_2851.jpg?v=78c64919" />
                            欧阳倩莹
                        </a>
                    </div>
                    <div class="item">
                        <div class="user-follow-box" data-user-id="100979">
                            <a href="javascript:;" class="follow  ">
                                <i class="uk-icon-plus"></i> 关注
                            </a>
                            <a href="javascript:;" class="unfollow  show  ">
                                <i class="uk-icon-minus"></i> 取消关注
                            </a>
                        </div>
                        <a href="/member/100979" class="user">
                            <img src="http://heezhi.c.ecuster.com/assets/lib/img/avatar.png?v=b7f617aa" />
                            Z17772303385
                        </a>
                    </div>
                    <div class="item">
                        <div class="user-follow-box" data-user-id="100827">
                            <a href="javascript:;" class="follow  show  ">
                                <i class="uk-icon-plus"></i> 关注
                            </a>
                            <a href="javascript:;" class="unfollow  ">
                                <i class="uk-icon-minus"></i> 取消关注
                            </a>
                        </div>
                        <a href="/member/100827" class="user">
                            <img src="http://heezhi.c.ecuster.com/assets/lib/img/avatar.png?v=b7f617aa" />
                            陈冠西
                        </a>
                    </div>
                    <div class="item">
                        <div class="user-follow-box" data-user-id="100804">
                            <a href="javascript:;" class="follow  show  ">
                                <i class="uk-icon-plus"></i> 关注
                            </a>
                            <a href="javascript:;" class="unfollow  ">
                                <i class="uk-icon-minus"></i> 取消关注
                            </a>
                        </div>
                        <a href="/member/100804" class="user">
                            <img src="http://heezhi.c.ecuster.com/data/image/2018/10/24/10079_aq08_3934.jpg?v=967a6674" />
                            乐乐乐
                        </a>
                    </div>
                    <div class="item">
                        <div class="user-follow-box" data-user-id="100778">
                            <a href="javascript:;" class="follow  show  ">
                                <i class="uk-icon-plus"></i> 关注
                            </a>
                            <a href="javascript:;" class="unfollow  ">
                                <i class="uk-icon-minus"></i> 取消关注
                            </a>
                        </div>
                        <a href="/member/100778" class="user">
                            <img src="http://heezhi.c.ecuster.com/data/image/2018/10/09/10977_belg_6158.jpg?v=00462562" />
                            one day
                        </a>
                    </div>
                </div>
            </div>


        </div>
        <div class="uk-width-3-4">

            <div class="pb pb-note-list" style="margin-top:15px;">
                <div class="head" style="border-bottom:none;">
                    <div class="uk-tab">
                        <li class="uk-active"><a href="/follow/users"><i class="uk-icon-list"></i> 最新文章</a></li>
                    </div>
                </div>
                <div class="body" id="list">


                   @foreach($arr as $k=>$v)            
                                    
                   @php 
              
                   $like = DB::table('article')->where('uid',$v['id'])->first();
                   
                   
                   $user = DB::table('user')->where('id',$like->uid)->first();
                   

                   @endphp


                   


                    <div class="item">
                        <div class="author">
                            <a href="/member/100979" class="avatar">
                                <img src="{{$user->person}}" />
                            </a>
                            <a class="name" href="/member/100979">
                                {{$user->username}}
                            </a>
                            <span class="time">
                    <time datetime="{{$like->addtime}}"></time>
                    </span>
                        </div>
                        
                        <a href="/n/mopssppv" class="title uk-text-truncate">
                            {{$like->title}}
                        </a>
                        <div class="summary">
                            <div class="text">
                                 @php echo  htmlspecialchars_decode($like->content);@endphp
                            </div>
                        </div>
                 

   @endforeach


             
                    </div>
                    
                </div>
            </div>

            <div class="pb">
                <div class="page-container"></div>
            </div>

        </div>
    </div>
</div>

<div class="pb-footer-toolbox">
    <a href="javascript:;" class="top" data-uk-smooth-scroll="{offset:0}" data-uk-tooltip="{pos:'left'}" title="返回顶部">
        <i class="uk-icon-arrow-up"></i>
    </a>
</div>

<script src="http://heezhi.c.ecuster.com/assets/main/default/basic.js?v=a55df311"></script>

<script>
    (function () {
        var currentPage = 1;
        var load = function (page) {
            currentPage = page || currentPage;
            $.post('?',{page:page},function (res){
                window.api.base.defaultFormCallback(res,{success:function(res){
                        $('#list').html(res.data.html);
                        pager.render(res.data.total,res.data.pageSize,res.data.page);
                        $("[datetime]").timeago();
                    }});
            });
        };
        var pager = new window.api.pager('.page-container',load,{jump:false,total:false});
        pager.render(418,20,1);
        window.__refresh = load;
    })();
</script>
</body>
</html>
    @stop