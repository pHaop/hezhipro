@extends('common/home')

@section('content')



<div class="main-container">

        <div class="uk-grid">
            <div class="uk-width-2-3">

                <div class="pb pb-member-info">

                    <div class="body">

                        <div class="box">
                            <div class="avatar">
                                <a href="/homes//member/101286">
                                    <img src="{{$rs->person}}" />
                                </a>
                            </div>
                             <div class="name">
                                <a href="/homes//member/101286">
                                    {{$rs->username}}
                                </a>
                              </div>
                            <div class="stat">
                                <a href="/homes//member/101286/following">
                                    <span>0</span>
                                    <br>
                                    关注
                                </a>
                                <a href="/homes//member/101286/followers">
                                    <span>0</span>
                                    <br>
                                    粉丝
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
                        <a href="/homes//member/101286/followed_topics" class="item">
                            <i class="uk-icon-list"></i>
                            关注的专题
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


@stop