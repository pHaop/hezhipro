 
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
              

               @php 

               $list = DB::table('user')->where('id',$v['uid'])->first();
                
                
               @endphp 
            
            <div class="author">
                <a href="/home/thisuser?id={{$v['uid']}}" class="avatar">
                    <img src="{{$list->person}}" />
                </a>
                
                <a class="name" href="/home/thisuser?id={{$v['uid']}}">
                   {{$list->username}}
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
            <div class="item">
            <div class="author">
                <a href="/member/100132" class="avatar">
                    <img src="/homes/static/picture/31731_vxx2_4528.jpg" />
                </a>
                <a class="name" href="/member/100132">
                    大脸猫
                </a>
                <span class="time">
                    <time datetime="2018-07-09 09:57:22"></time>
                </span>
            </div>
                            <div class="cover">
                    <a href="/n/zefmkeyk" data-src="http://heezhi.c.ecuster.com/data/image/2018/07/09/6973_jffw_9987.png?v=b380802e">
                    </a>
                </div>
                        <a href="/n/zefmkeyk" class="title uk-text-truncate">
                什么样的朋友，是真正的朋友？
            </a>
            <div class="summary">
                <div class="text">


                    友情有多动人？
                    
                    &nbsp;
                    
                    世界杯赛场上，克罗地亚门将苏巴西奇在全世界面前，给出了最温暖的答案。
                    
                    &nbsp;
                    
                    7月1日，世界杯1/8决赛，克罗地亚在点球大战中淘汰丹麦，成功晋级。大功臣苏巴西奇在欢呼奔跑中脱下队服，露出贴...
                </div>
            </div>
            <div class="stat">
                <a href="/n/zefmkeyk">
                    <i class="uk-icon-eye"></i> 1198
                </a>
                &nbsp;&nbsp;
                <a href="/n/zefmkeyk">
                    <i class="uk-icon-heart"></i> 11
                </a>
                &nbsp;&nbsp;
                <a href="/n/zefmkeyk">
                    <i class="uk-icon-comment"></i> 1
                </a>
            </div>
                    </div>
            <div class="item">
            <div class="author">
                <a href="/member/100002" class="avatar">
                    <img src="/homes/static/picture/37091_j5m0_1878.jpg" />
                </a>
                <a class="name" href="/member/100002">
                    Alan
                </a>
                <span class="time">
                    <time datetime="2018-06-21 13:52:27"></time>
                </span>
            </div>
                        <a href="/n/dmgctngf" class="title uk-text-truncate">
                为什么大多数人宁愿吃生活的苦，也不愿吃学习的苦？
            </a>
            <div class="summary">
                <div class="text">
                    一、为什么大多数人宁愿吃生活的苦，也不愿吃学习的苦？&nbsp;

              记得小时候上学，学校每次放月假，爷爷就去车站接我回家。
              那时家里离车站远，需要骑着车子来回。
              一路上我们彼此相对无语，等到爷爷骑不动了，我们就这么...
                </div>
            </div>
              <div class="stat"> 
            <a href="/n/fzfu1kzq"> <i class="uk-icon-eye"></i> 0 </a> &nbsp;&nbsp; 
            <a href="/n/fzfu1kzq"> <i class="uk-icon-heart"></i> 0 </a> &nbsp;&nbsp; 
            <a href="/n/fzfu1kzq"> <i class="uk-icon-comment"></i> 0 </a> 
           </div> 
          </div> 
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
              @if(session('uid'))
              @if(in_array($v->id,$ids))
              <a href="javascript:;" class="unfollow show" target='_blank'><i class="uk-icon-plus"></i>取消关注</a> 
              @else
              <a href="javascript:;" class="follow show" target='_blank'><i class="uk-icon-plus"></i>关注</a> 
              @endif
              <div style="display: none;" id="uid">{{session('uid')}}</div>
              @else
              <a href="javascript:;" class="follow show"><i class="uk-icon-plus"></i>关注</a> 
              @endif
             
             
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







        </div> 
       </div> 
      </div> 
   
     <div class="pb pb-side-banner"> 
    <img src="/homes/static/images/er.jpg" style="width: 200px; height: 200px; margin-left: 60px;" />
     </div> 
    </div> 
   </div> 
  </div> 
  <footer> 
   <div class="main-container"> 
    <div class="articles"> 
     <a href="/article/1">使用协议</a> 
     <a href="/article/2">关于何止</a> 
     <a href="/article/4">版权说明</a> 
     <a href="/article/5">隐私保护</a> 
     <a href="/article/8">联系我们</a> 
    </div> 
    <div class="copyright"> 
     <a href="http://www.miitbeian.gov.cn" target="_blank">沪ICP备16023748号-8</a> &copy; heezhi.com【何止版权所有】 
    </div> 
   </div> 
  </footer> 
  <div class="pb-footer-toolbox"> 
   <a href="javascript:;" class="top" data-uk-smooth-scroll="{offset:0}" data-uk-tooltip="{pos:'left'}" title="返回顶部"> <i class="uk-icon-arrow-up"></i> </a> 
  </div>  
  <script src="/homes/static/js/home.js"></script>  @stop 
 