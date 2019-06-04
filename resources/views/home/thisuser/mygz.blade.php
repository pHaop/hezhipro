@extends('common/home')

@section('content')



    
    <div class="main-container">

        <div class="uk-grid">
            <div class="uk-width-2-3">

                <div class="pb pb-member-info">

                    <div class="body">

                        <div class="box">
                            <div class="avatar">
                                <a href="/home/user">
                                    <img src="{{$rs->person}}" />
                                </a>
                            </div>
                                                        <div class="name">
                                <a href="/member/101286">
                                    {{$rs->username}}
                                </a>
                                                                                            </div>
                                <div class="stat">
                                <a href="/member/101286/following">
                                    <span>{{$rs['data']}}</span>
                                    <br>
                                    关注
                                </a>
                           
                           
                                <a class="info" href="javascript:;">
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
                <a class="active" href="/member/101286/following"><i class="uk-icon-heart-o"></i> 关注用户</a>
               
            </div>
        </div>
    </div>

    <div class="pb-member-list">
        <div class="body" id="list">

            @if($arr)
            @foreach($arr as $k=>$v)
            
            @php 

            $user = DB::table('user')->where('id',$v['id'])->first();
            
            @endphp
     

            <div class="item">
            <div class="action">
                            </div>
            <a href="/home/thisuser?id={{$user->id}}" class="avatar">
                <img src="{{$user->person}}" />
            </a>
            <a class="name" href="/home/thisuser?id={{$user->id}}">
                {{$user->username}}
            </a>
            <span class="stat">
                关注 0
                
            
                ·
                文章 0
            </span>
            <div class="stat">
                写了 0 字
            </div>
        </div>


 




        @endforeach
        @else
           <div class="pb pb-note-list">
                <div class="body" id="list">
                    <div class="empty">
                没有记录
            </div>
                </div>
            </div>
                     
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
                        <a href="/home/likenote?id={{$user->id}}" class="item">
                            <i class="uk-icon-heart-o"></i>
                            喜欢的文章
                        </a>
                    
                    </div>
                </div>

                <div class="pb-spacer"></div>

                
                </div>

            </div>
        </div>

    </div>




    <div class="pb-footer-toolbox">
        <a href="javascript:;" class="top" data-uk-smooth-scroll="{offset:0}" data-uk-tooltip="{pos:'left'}" title="返回顶部">
            <i class="uk-icon-arrow-up"></i>
        </a>
    </div>

        <script src="static/js/basic.js"></script>

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
            pager.render(7,20,1);
        })();
    </script>
</body>
</html>
@stop