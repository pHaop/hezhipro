@extends('common/home')
@section('content')
    <div class="main-container">

        <div class="uk-grid">
            <div class="uk-width-2-3">

                <div class="pb pb-topic-info">

                    <div class="body">

                        <div class="box">
                            <div class="cover">
                                <a href="/t/04lfmgfxbzutxefy">
                                    <img src="{{$res['portrait']}}" />
                                </a>
                            </div>
                            @if($rs['id'] == $rep['id'])
                                <div class="action">
                                    <a class="msg" data-dialog-request="/topic/note_contribute/4">
                                        <i class="uk-icon-paper-plane"></i>
                                        收录
                                    </a>
                                </div>
                                    @else
                            <div class="action">
                                <a class="msg" data-dialog-request="/topic/note_contribute/4">
                                    <i class="uk-icon-paper-plane"></i>
                                    投稿
                                </a>
                                <div class="topic-follow-box" data-topic-id="4">
                                    <a href="javascript:;" class="follow  show ">
                                        <i class="uk-icon-plus"></i>
                                        关注
                                    </a>
                                    <a href="javascript:;" class="unfollow ">
                                        <i class="uk-icon-minus"></i>
                                        取消关注
                                    </a>
                                </div>
                            </div>
                                    @endif
                            <div class="name">
                                <a href="/t/04lfmgfxbzutxefy">
                                    {{$res['name']}}
                                </a>
                            </div>
                            <div class="stat">
                                收录了61篇文章
                                ·
                                74人关注
                            </div>
                        </div>

                    </div>

                </div>


                <div class="pb pb-member-list-tab">
                    <div class="body">
                        <div class="menu">
                            <a class="active" href="javascript:;"><i class="uk-icon-list"></i> 最新收录</a>
                        </div>
                    </div>
                </div>

                <div class="pb pb-note-list">
                    <div class="body" id="list">
                        @if(count($rea)>0)
                             @foreach($rea as $k=>$v)
                            <div class="item">
                                <div class="author">
                                    <a href="/member/100974" class="avatar">
                                        <img src="{{$rep['person']}}" />
                                    </a>
                                    <a class="name" href="/member/100974">
                                        {{$rep['username']}}
                                    </a>
                                    <span class="time">

                    <time datetime="{{$v['addtime']}}"></time>
                </span>
                                </div>

                                <a href="/n/iq1vhbbf" class="title uk-text-truncate">
                                    {{$v['title']}}
                                </a>
                                <div class="summary">
                                    <div class="text">
                                        @php echo  htmlspecialchars_decode($v['content']);@endphp
                                    </div>
                                </div>
                                <div class="stat">
                                    <a href="/n/iq1vhbbf">
                                        <i class="uk-icon-eye"></i> 165
                                    </a>
                                    &nbsp;&nbsp;
                                    <a href="/n/iq1vhbbf">
                                        <i class="uk-icon-heart"></i> 0
                                    </a>
                                    &nbsp;&nbsp;
                                    <a href="/n/iq1vhbbf">
                                        <i class="uk-icon-comment"></i> 2
                                    </a>
                                </div>
                            </div>
                            @endforeach
                        @else
                            <p>没有记录</p>

                        @endif


                    </div>
                </div>

                <div class="pb">
                    <div class="page-container"></div>
                </div>


            </div>
            <div class="uk-width-1-3">

                <div class="pb">
                    <div class="head">
                        <h2>{{$res['name']}}</h2>
                    </div>
                    <div class="body html-container">
                        <p>{{$res['person']}}</p>
                    </div>
                </div>

                <div class="pb-spacer"></div>

                <div class="pb pb-member-right-menu">
                    <div class="head">
                        <h2>分享</h2>
                    </div>
                    <div class="body">
                        <div data-share-buttons data-sites="weibo,qq,qzone,wechat"></div>
                    </div>
                </div>

                <div class="pb-spacer"></div>

                <div class="pb pb-topic-manager">
                    <div class="head">
                        <h2>
                            管理员
                        </h2>
                    </div>
                    <div class="body">
                        <a class="item" href="/member/100002">
                            <img src="{{$rep['person']}}" />
                           {{$rep['username']}}
                        </a>
                    </div>
                </div>

                <div class="pb-spacer"></div>

                <div class="pb pb-topic-follower">
                    <div class="head">
                        <h2>
                            关注的人
                        </h2>
                    </div>
                    <div class="body">
                        <a class="item" href="/member/101320" data-uk-tooltip title="奔跑的呼啦圈">
                            <img src="http://heezhi.c.ecuster.com/data/image/2019/05/26/55982_cmpv_3402.jpg?v=356a4c4f" />
                        </a>
                        <a class="item" href="/member/101317" data-uk-tooltip title="走小路的">
                            <img src="http://heezhi.c.ecuster.com/data/image/2019/05/25/29745_586m_1901.jpg?v=de0e3441" />
                        </a>
                        <a class="item" href="/member/101298" data-uk-tooltip title="影视投资顾问">
                            <img src="http://heezhi.c.ecuster.com/data/image/2019/05/17/32235_ioa6_5785.jpg?v=ca065510" />
                        </a>
                        <a class="item" href="/member/101281" data-uk-tooltip title="心向身往">
                            <img src="http://heezhi.c.ecuster.com/data/image/2019/05/12/17834_kfvn_5970.jpg?v=9153dbad" />
                        </a>
                        <a class="item" href="/member/101280" data-uk-tooltip title="hao7881063">
                            <img src="http://heezhi.c.ecuster.com/data/image/2019/05/12/17432_evps_6232.jpg?v=9153dbad" />
                        </a>
                        <a class="item" href="/member/101207" data-uk-tooltip title="888888">
                            <img src="http://heezhi.c.ecuster.com/assets/lib/img/avatar.png?v=b7f617aa" />
                        </a>
                        <a class="item" href="/member/101190" data-uk-tooltip title="墨子系统">
                            <img src="http://heezhi.c.ecuster.com/data/image/2019/03/25/15299_jrqo_2036.jpg?v=d629d885" />
                        </a>
                        <a class="item" href="/member/101047" data-uk-tooltip title="老薛薛">
                            <img src="http://heezhi.c.ecuster.com/data/image/2018/12/21/24097_1tqo_9393.jpg?v=eed99a08" />
                        </a>
                        <a class="item" href="/member/101170" data-uk-tooltip title="诗人祁连山">
                            <img src="http://heezhi.c.ecuster.com/data/image/2019/03/12/11649_iqfw_8544.jpg?v=4880cd44" />
                        </a>
                        <a class="item" href="/member/101145" data-uk-tooltip title="司马丁当">
                            <img src="http://heezhi.c.ecuster.com/assets/lib/img/avatar.png?v=b7f617aa" />
                        </a>
                        <a class="item" href="/member/101057" data-uk-tooltip title="时不我与ヾ">
                            <img src="http://heezhi.c.ecuster.com/data/image/2018/12/29/13707_mptl_6480.jpg?v=69252e3a" />
                        </a>
                        <a class="item" href="/member/100739" data-uk-tooltip title="环保之声">
                            <img src="http://heezhi.c.ecuster.com/data/image/2018/09/18/10336_a7qc_9463.jpg?v=7b92e50a" />
                        </a>
                        <a class="item" href="/member/100764" data-uk-tooltip title="　四月">
                            <img src="http://heezhi.c.ecuster.com/data/image/2018/09/26/12638_7tfr_4882.jpg?v=41814f8c" />
                        </a>
                        <a class="item" href="/member/100624" data-uk-tooltip title="尘落ヅ晨起">
                            <img src="http://heezhi.c.ecuster.com/data/image/2018/05/25/17177_zzam_4517.jpg?v=3254efd2" />
                        </a>
                        <a class="item" href="/member/100622" data-uk-tooltip title="庄世威">
                            <img src="http://heezhi.c.ecuster.com/data/image/2018/05/23/37078_yjmq_6286.jpg?v=a5438f93" />
                        </a>
                        <a class="more" href="/t/04lfmgfxbzutxefy/followers" data-uk-tooltip title="查看全部">
                            <i class="uk-icon-ellipsis-h"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>

    </div>




    <script src="http://heezhi.c.ecuster.com/assets/main/default/basic.js?v=a55df311"></script>

    <script>
        $('[data-dialog-request]').on('dialog.close',function () {
            window.location.reload();
        });
    </script>

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
            pager.render(61,20,1);
            window.__refresh = function () {
                window.location.reload();
            };
        })();
    </script>

    @stop
