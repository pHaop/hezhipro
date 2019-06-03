
  @extends('common/home')
   @section('content')  
  <div class="main-container">


      <!--                轮播图 -->
      <div class="pb pb-banner">
          <div class="swiper-container">

              <div class="swiper-wrapper">
                  @foreach($rs as $k=>$v)
                      <a class="swiper-slide" style="background-image:url({{$v->url}}); background-size: 1000px 260px;" href="http://heezhi.com/t/cfbj5zn7" target="_blank"></a>
                  @endforeach

              </div>






              <style type="text/css">#demo {
            width: 100px;
            height: 100px;
            position:absolute;
            border-radius:50px;
                 }
                </style>


















     <div class="swiper-pagination swiper-pagination-white"></div> 
     <div class="swiper-button-next swiper-button-white"></div> 
     <div class="swiper-button-prev swiper-button-white"></div> 
    </div> 
   </div> 





<div class="uk-grid">
            <div class="uk-width-2-3">

                <div class="pb pb-note-list" style="margin-top:15px;">
                    <div class="head" style="border-bottom:none;">
                        <div class="uk-tab" data-uk-switcher="{connect:'#noteBox'}">
                            <li><a href="javascript:;"><i class="uk-icon-list"></i> 推荐文章</a></li>

                        </div>
                    </div>
                <div class="body">
                        <div id="noteBox" class="uk-switcher">
                            <div id="recommendNotes">
                                <div class="list">


                    @foreach($res as $k=>$v)
                                <div class="item">

                                    {{$v['uid']}}



                @php
                $list = DB::table('user')->where('id',$v['uid'])->first();




                @endphp



            <div class="author">
                <a href="/member/101148" class="avatar">
                    <img src="" />
                </a>
                <a class="name" href="/member/101148">

                </a>
                <span class="time">
                    <time datetime="{{$v['addtime']}}"></time>
                </span>
            </div>
                            <div class="cover">

                </div>
                        <a href="/home/aritle/{{$v['id']}}" class="title uk-text-truncate">
                {{$v['title']}}
            </a>
            <div class="summary">
                <div class="text">
                    @php echo  htmlspecialchars_decode($v['content']);@endphp
                </div>
            </div>
            <div class="stat">
                <a href="/home/aritle/{{$v['id']}}">
                    <i class="uk-icon-eye"></i> 184
                </a>
                &nbsp;&nbsp;
                <a href="/home/aritle/{{$v['id']}}">
                    <i class="uk-icon-heart"></i> 2
                </a>
                &nbsp;&nbsp;
                <a href="/home/aritle/{{$v['id']}}">
                    <i class="uk-icon-comment"></i> 0
                </a>
            </div>
                    </div>
                                    @endforeach


         </div>
              <div class="no-more">
           没有更多了~ 
         </div> 
        </div> 
       </div> 
      </div> 
     </div> 
    </div>
      
 
 


<div class="uk-width-1-3">
                
                <div class="pb pb-home-writing">
                    <div class="body">
                        @if(session('uid'))
                        <a href="/home/aritle">

                                <i class="uk-icon-edit"></i>
                                 开始创作
                        </a>
                             @else
                            <a href="/home/login">
                            <i class="uk-icon-edit"></i>
                                 立即登录 开始创作
                                                    </a>
                                 @endif
                    </div>
                </div>

                <div class="pb pb-home-topic-list">
                    <div class="head">
                        <h2>热门专题</h2>
                    </div>
                    <div class="body">
                        @foreach($rep as $k=>$v)
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











     <div class="pb pb-home-member-list"> 
      <div class="head"> 
       <div class="uk-tab" data-uk-switcher="{connect:'#userBox'}"> 
        <li><a href="javascript:;">推荐用户</a></li> 
       </div> 
      </div> 
      <div class="body"> 
       <div id="userBox" class="uk-switcher"> 
        <div> 
          
          @foreach($user as $k=>$v)

              <div class="item"> 
              
              <div class="user-follow-box" data-user-id="100763"> 

              <div style="display: none;" id="tid">{{$v->id}}</div>
              @if(in_array($v->id,$ids))
              <a href="javascript:;" class="unfollow show" target='_blank'><i class="uk-icon-plus"></i>取消关注</a> 
              @else
              <a href="javascript:;" class="follow show" target='_blank'><i class="uk-icon-plus"></i>关注</a> 
              @endif
              <div style="display: none;" id="uid">{{session('uid')}}</div>
             
              </div> 

              <a href="/home/thisuser?id={{$v->id}}" class="user"> <img src="{{$v->person}}"/>{{$v->username}}</a> 

              </div> 
          @endforeach
        </div> 



        
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







        <div> 
         <div class="item"> 
          <a href="/member/101285" class="user"> <img src="/homes/static/picture/avatar.png" /> 蓝冰 </a> 
         </div> 
         <div class="item"> 
          <a href="/member/101284" class="user"> <img src="/homes/static/picture/avatar.png" /> 小红 </a> 
         </div> 
         <div class="item"> 
          <a href="/member/101283" class="user"> <img src="/homes/static/picture/66491_dben_9569.jpg" /> 深夜未眠人 </a> 
         </div> 
         <div class="item"> 
          <a href="/member/101282" class="user"> <img src="/homes/static/picture/35715_mdc1_2758.jpg" /> 姥濕姬李珂珂小鱼 </a> 
         </div> 
         <div class="item"> 
          <a href="/member/101281" class="user"> <img src="/homes/static/picture/17834_kfvn_5970.jpg" /> 心向身往 </a> 
         </div> 
         <div class="item"> 
          <a href="/member/101280" class="user"> <img src="/homes/static/picture/17432_evps_6232.jpg" /> hao7881063 </a> 
         </div> 
         <div class="item"> 
          <a href="/member/101279" class="user"> <img src="/homes/static/picture/avatar.png" /> 小明 </a> 
         </div> 
         <div class="item"> 
          <a href="/member/101278" class="user"> <img src="/homes/static/picture/avatar.png" /> zigua1 </a> 
         </div> 
         <div class="item"> 
          <a href="/member/101277" class="user"> <img src="/homes/static/picture/avatar.png" /> MY123456 </a> 
         </div> 
         <div class="item"> 
          <a href="/member/101276" class="user"> <img src="/homes/static/picture/4697_umsa_9477.jpg" /> Just for You </a> 
         </div> 
        </div> 
       </div> 
      </div> 
   
     <div class="pb pb-side-banner"> 
    <img src="/homes/static/images/er.jpg" style="width: 200px; height: 200px; margin-left: 60px;" />
     </div> 
    </div> 
   </div> 
  </div> 
    @stop 
 