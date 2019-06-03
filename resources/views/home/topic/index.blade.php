@extends('common/home')
@section('content')

<div class="main-container">

    <div class="uk-grid">
        <div class="uk-width-1-4">

            <div class="pb pb-member-profile-menu">
                <div class="body">
                    <div class="list">
                        <a class=" active " href="/topics"><i class="uk-icon-cube"></i> 推荐专题</a>

                    </div>
                </div>
            </div>

            <div class="pb pb-home-writing">
                <div class="body">
                    <a href="/home/topic/create">
                        <i class="uk-icon-edit"></i>
                        创建我的专题
                    </a>
                </div>
            </div>

            <div class="pb pb-home-topic-list">
                <div class="head">
                    <h2>最新专题</h2>
                </div>
                <div class="body">
                    @foreach($ref as $k=>$v)
                    <a href="/home/topic/{{$v['id']}}" class="item">
                                    <span class="contribute">
                                        查看
                                    </span>
                        <span class="name">
                                        <img src="{{$v['portrait']}}" />
                                        {{$v['name']}}
                                    </span>
                    </a>
                    @endforeach

                </div>
            </div>

        </div>
        <div class="uk-width-3-4">

            <div class="pb pb-topic-list">
                <div class="body" id="list">
                    @foreach($res as $k=>$v)
                    <div class="item">
                        <div class="action">
                            <a href="/home/topic/{{$v['id']}}" class="contribute">
                                <i class="uk-icon-paper-plane"></i> 查看
                            </a>
                        </div>
                        <a href="/home/topic/{{$v['id']}}" class="cover">
                            <img src="{{$v['portrait']}}" />
                        </a>
                        <a class="name" href="/home/topic/{{$v['id']}}">
                            {{$v['name']}}
                        </a>
                        <span class="stat">
                关注 71
                ·
                文章 61
            </span>
                    </div>

                    @endforeach

                </div>
            </div>

            <div class="pb">
                <div class="page-container" style="margin-left:300px">
                        {{$res->links()}}
                </div>
            </div>
        </div>
    </div>
</div>





<div class="pb-footer-toolbox">
    <a href="javascript:;" class="top" data-uk-smooth-scroll="{offset:0}" data-uk-tooltip="{pos:'left'}" title="返回顶部">
        <i class="uk-icon-arrow-up"></i>
    </a>
</div>


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
        pager.render(91,10,1);
    })();
</script>
</body>
</html>
    @stop
