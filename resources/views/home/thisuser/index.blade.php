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
                             
                                <a class="info" href="/homes/javascript:;">
                                    <span>0</span>
                                    <br>
                                    文章
                                </a>

                                 
                                         

                                                 
                            </div>

                              

                        </div>

                    </div>

                </div>

    <div style="display: none;" id="tid">{{$id}}</div>
                                  @if(in_array($id,$ids))
                                  <a href="javascript:;" class="unfollow show" target='_blank'><i class="uk-icon-plus"></i>取消关注</a> 
                                  @else
                                  <a href="javascript:;" class="follow show" target='_blank'><i class="uk-icon-plus"></i>关注</a> 
                                  @endif
                                  <div style="display: none;" id="uid">{{session('uid')}}</div>

   
            <script type="text/javascript" src="/js/jquery.js"></script>
            <script type="text/javascript">


                    $("a[target='_blank']").click(function(){
                     
                      

                       var tid = $(this).prev('#tid').text();
                       var uid = $(this).next('#uid').text();

                       var arr = {'uid':uid,'tid':tid};
                       if($(this).attr('class')=='follow show')
                       {

                        $.get('/home/gz',arr,function(data){

                          console.log(data);

                        })

                        $(this).attr('class','unfollow show');
                        $(this).html('<i class="uk-icon-minus"></i>取消关注');

                       }else{

                        $.get('/home/dogz',arr,function(data){

                          console.log(data);
                          
                        })

                        $(this).attr('class','follow show');
                        $(this).html('<i class="uk-icon-plus"></i>关注');

                       }
                      
                    });



        </script>







                
    <div class="pb pb-member-list-tab">
        <div class="body">
            <div class="menu">
                <a class="active" href="/homes/javascript:;"><i class="uk-icon-list"></i> 文章</a>
            </div>
        </div>
    </div>

    <div class="pb pb-note-list">
        <div class="body" id="list">



@foreach($res as $va)
  <div class="item">
            <div class="author">
                <a href="/member/101170" class="avatar">
                    <img src="{{$rs->person}}">
                </a>
                <a class="name" href="/member/101170">
                    {{$rs->username}}
                </a>
                <span class="time">
                    <time datetime="{{$va['addtime']}}"></time>
                </span>
            </div>
                            
            <a href="/home/aritle/{{$va['id']}}" class="title uk-text-truncate">
                {{$va['title']}}
            </a>
            <div class="summary">
                <div class="text">
                     @php echo  htmlspecialchars_decode($va['content']);@endphp
                </div>
            </div>
            <div class="stat">
                <a href="/n/gqyjswzf">
                    <i class="uk-icon-eye"></i> 1
                </a>
                &nbsp;&nbsp;
                <a href="/n/gqyjswzf">
                    <i class="uk-icon-heart"></i> 1
                </a>
                &nbsp;&nbsp;
                <a href="/n/gqyjswzf">
                    <i class="uk-icon-comment"></i> 1
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
                        <a href="/home/likenote?id={{$rs->id}}" class="item">
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