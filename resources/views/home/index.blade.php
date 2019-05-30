<html>
 <head></head>
 <body>
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
          <div class="item"> 
           <div class="author"> 
            <a href="/member/101148" class="avatar"> <img src="/homes/static/picture/33567_zkdg_5344.jpg" /> </a> 

            <a class="name" href="/member/101148"> 小老虎 </a> 
            <span class="time"> <time datetime="2019-03-15 19:27:04"></time> </span> 
           </div> 
           <div class="cover"> 
            <a href="/n/fwsxt6lx" data-src="http://heezhi.c.ecuster.com/data/image/2019/03/15/40996_spay_6846.jpg?v=d4826ead"> </a> 
           </div> 
           <a href="/n/fwsxt6lx" class="title uk-text-truncate"> 这些事30岁之前必须全部做一遍！ </a> 
           <div class="summary"> 
            <div class="text">
              转载自作者：极致玩家 对很多人来说，30岁意味着从此将告别狂热的派对与青葱的莽撞，而今后的人生或许会不太如意，但同时却也充满了希望。而在30岁来临之前（即便你已经30岁了也无妨），有很多事情确实值得你去一... 
            </div> 
           </div> 
           <div class="stat"> 
            <a href="/n/fwsxt6lx"> <i class="uk-icon-eye"></i> 184 </a> &nbsp;&nbsp; 
            <a href="/n/fwsxt6lx"> <i class="uk-icon-heart"></i> 2 </a> &nbsp;&nbsp; 
            <a href="/n/fwsxt6lx"> <i class="uk-icon-comment"></i> 0 </a> 
           </div> 
          </div> 
          <div class="item"> 
           <div class="author"> 
            <a href="/member/100132" class="avatar"> <img src="/homes/static/picture/31731_vxx2_4528.jpg" /> </a> 
            <a class="name" href="/member/100132"> 大脸猫 </a> 
            <span class="time"> <time datetime="2018-07-09 09:57:22"></time> </span> 
           </div> 
           <div class="cover"> 
            <a href="/n/zefmkeyk" data-src="http://heezhi.c.ecuster.com/data/image/2018/07/09/6973_jffw_9987.png?v=b380802e"> </a> 
           </div> 
           <a href="/n/zefmkeyk" class="title uk-text-truncate"> 什么样的朋友，是真正的朋友？ </a> 
           <div class="summary"> 
            <div class="text">
              友情有多动人？ &nbsp; 世界杯赛场上，克罗地亚门将苏巴西奇在全世界面前，给出了最温暖的答案。 &nbsp; 7月1日，世界杯1/8决赛，克罗地亚在点球大战中淘汰丹麦，成功晋级。大功臣苏巴西奇在欢呼奔跑中脱下队服，露出贴... 
            </div> 
           </div> 
           <div class="stat"> 
            <a href="/n/zefmkeyk"> <i class="uk-icon-eye"></i> 1198 </a> &nbsp;&nbsp; 
            <a href="/n/zefmkeyk"> <i class="uk-icon-heart"></i> 11 </a> &nbsp;&nbsp; 
            <a href="/n/zefmkeyk"> <i class="uk-icon-comment"></i> 1 </a> 
           </div> 
          </div> 
          <div class="item"> 
           <div class="author"> 
            <a href="/member/100002" class="avatar"> <img src="/homes/static/picture/37091_j5m0_1878.jpg" /> </a> 
            <a class="name" href="/member/100002"> Alan </a> 
            <span class="time"> <time datetime="2018-06-21 13:52:27"></time> </span> 
           </div> 
           <a href="/n/dmgctngf" class="title uk-text-truncate"> 为什么大多数人宁愿吃生活的苦，也不愿吃学习的苦？ </a> 
           <div class="summary"> 
            <div class="text">
              一、为什么大多数人宁愿吃生活的苦，也不愿吃学习的苦？&nbsp; 记得小时候上学，学校每次放月假，爷爷就去车站接我回家。 那时家里离车站远，需要骑着车子来回。 一路上我们彼此相对无语，等到爷爷骑不动了，我们就这么... 
            </div> 
           </div> 
           <div class="stat"> 
            <a href="/n/dmgctngf"> <i class="uk-icon-eye"></i> 1176 </a> &nbsp;&nbsp; 
            <a href="/n/dmgctngf"> <i class="uk-icon-heart"></i> 3 </a> &nbsp;&nbsp; 
            <a href="/n/dmgctngf"> <i class="uk-icon-comment"></i> 0 </a> 
           </div> 
          </div> 
          <div class="item"> 
           <div class="author"> 
            <a href="/member/100631" class="avatar"> <img src="/homes/static/picture/33818_zfav_4446.jpg" /> </a> 
            <a class="name" href="/member/100631"> yxj </a> 
            <span class="time"> <time datetime="2018-06-20 17:22:35"></time> </span> 
           </div> 
           <div class="cover"> 
            <a href="/n/0jons0ce" data-src="http://heezhi.c.ecuster.com/data/image/2018/06/20/33734_woqc_3983.jpg?v=c04343a7"> </a> 
           </div> 
           <a href="/n/0jons0ce" class="title uk-text-truncate"> 只进行碎片化阅读，会变得怎样？ </a> 
           <div class="summary"> 
            <div class="text">
              每次刷手机，初衷都是想打发下零碎时间，确实我每次熬爆肝之前都是这么想的。 上厕所时，手机比厕纸更必备 进地铁时，手机比扶手更刚需 等泡面时，也要用手机来填补那两分钟的精神空虚。 相比之下，长阅读太花... 
            </div> 
           </div> 
           <div class="stat"> 
            <a href="/n/0jons0ce"> <i class="uk-icon-eye"></i> 1030 </a> &nbsp;&nbsp; 
            <a href="/n/0jons0ce"> <i class="uk-icon-heart"></i> 2 </a> &nbsp;&nbsp; 
            <a href="/n/0jons0ce"> <i class="uk-icon-comment"></i> 3 </a> 
           </div> 
          </div> 
          <div class="item"> 
           <div class="author"> 
            <a href="/member/100002" class="avatar"> <img src="/homes/static/picture/37091_j5m0_1878.jpg" /> </a> 
            <a class="name" href="/member/100002"> Alan </a> 
            <span class="time"> <time datetime="2017-07-20 21:53:38"></time> </span> 
           </div> 
           <div class="cover"> 
            <a href="/n/swmbonqj" data-src="http://heezhi.c.ecuster.com/data/image/2017/07/20/49969_jkm8_5521.jpg?v=e0cdda6e"> </a> 
           </div> 
           <a href="/n/swmbonqj" class="title uk-text-truncate"> 你若安好，便是晴天 </a> 
           <div class="summary"> 
            <div class="text">
              刹那缘起每个人来到世上，都是匆匆过客，有些人与之邂逅，转身忘记；有些人与之擦肩，必然回首。所有相遇和回眸都是缘分，当你爱上了某个背影，贪恋某个眼神，意味着你已心系一段情缘。只是缘深缘浅，任谁都无从把握... 
            </div> 
           </div> 
           <div class="stat"> 
            <a href="/n/swmbonqj"> <i class="uk-icon-eye"></i> 688 </a> &nbsp;&nbsp; 
            <a href="/n/swmbonqj"> <i class="uk-icon-heart"></i> 3 </a> &nbsp;&nbsp; 
            <a href="/n/swmbonqj"> <i class="uk-icon-comment"></i> 3 </a> 
           </div> 
          </div> 
          <div class="item"> 
           <div class="author"> 
            <a href="/member/100002" class="avatar"> <img src="/homes/static/picture/37091_j5m0_1878.jpg" /> </a> 
            <a class="name" href="/member/100002"> Alan </a> 
            <span class="time"> <time datetime="2017-07-20 22:21:33"></time> </span> 
           </div> 
           <div class="cover"> 
            <a href="/n/eqh7mo2e" data-src="http://heezhi.c.ecuster.com/data/image/2017/07/20/50965_9ngz_3483.png?v=3fe89c63"> </a> 
           </div> 
           <a href="/n/eqh7mo2e" class="title uk-text-truncate"> 我的前半生：罗子君的逆袭告诉我们，一个强大的朋友圈有多重要 </a> 
           <div class="summary"> 
            <div class="text">
              晚上抱着电视刷剧，白天捧着手机刷文，人们追《我的前半生》比不久前的《欢乐颂》还过分。而且，聪明如你们一定已经发现，像罗子君这样一个四体不勤五谷不分不拿教养当回事的女人，能够逆袭，绝对不是靠她一个人做到... 
            </div> 
           </div> 
           <div class="stat"> 
            <a href="/n/eqh7mo2e"> <i class="uk-icon-eye"></i> 4363 </a> &nbsp;&nbsp; 
            <a href="/n/eqh7mo2e"> <i class="uk-icon-heart"></i> 9 </a> &nbsp;&nbsp; 
            <a href="/n/eqh7mo2e"> <i class="uk-icon-comment"></i> 3 </a> 
           </div> 
          </div> 
          <div class="item"> 
           <div class="author"> 
            <a href="/member/100123" class="avatar"> <img src="/homes/static/picture/38884_1cvn_5030.jpg" /> </a> 
            <a class="name" href="/member/100123"> 最美的诗意 </a> 
            <span class="time"> <time datetime="2017-10-13 18:12:06"></time> </span> 
           </div> 
           <a href="/n/xkzsj5oz" class="title uk-text-truncate"> 记忆中的男生 </a> 
           <div class="summary"> 
            <div class="text">
              记忆中，他永远都是那个温婉的男孩，每天静静地坐在我的后面。我们初中班主任是我老家的亲戚，也姓韦，青春活泼，朝气蓬勃。夏天来了，窗外的风景让人沉醉，风轻轻地吹着，树叶发出沙沙的响声，小鸟窃窃私语，我竖起... 
            </div> 
           </div> 
           <div class="stat"> 
            <a href="/n/xkzsj5oz"> <i class="uk-icon-eye"></i> 828 </a> &nbsp;&nbsp; 
            <a href="/n/xkzsj5oz"> <i class="uk-icon-heart"></i> 4 </a> &nbsp;&nbsp; 
            <a href="/n/xkzsj5oz"> <i class="uk-icon-comment"></i> 3 </a> 
           </div> 
          </div> 
          <div class="item"> 
           <div class="author"> 
            <a href="/member/100106" class="avatar"> <img src="/homes/static/picture/40707_mp2e_5238.jpg" /> </a> 
            <a class="name" href="/member/100106"> 虹 </a> 
            <span class="time"> <time datetime="2017-07-22 10:10:34"></time> </span> 
           </div> 
           <div class="cover"> 
            <a href="/n/tbbm11ub" data-src="http://heezhi.c.ecuster.com/data/image/2017/07/22/7687_qzbw_7828.jpg?v=83d0e19e"> </a> 
           </div> 
           <a href="/n/tbbm11ub" class="title uk-text-truncate"> 我们短暂生命的意义，到底是什么？ </a> 
           <div class="summary"> 
            <div class="text">
              车窗外，连绵的矮山划过我褐色的虹膜，我双手拖住瘦削的下巴，看着山间的黯淡乌云慢慢潜入群山，不停地问自己：群山后的世界是怎样的，乌云遁入了何方，列车正行驶在哪一个片未知的土地，这是一个25岁的那年轻人时常... 
            </div> 
           </div> 
           <div class="stat"> 
            <a href="/n/tbbm11ub"> <i class="uk-icon-eye"></i> 1152 </a> &nbsp;&nbsp; 
            <a href="/n/tbbm11ub"> <i class="uk-icon-heart"></i> 5 </a> &nbsp;&nbsp; 
            <a href="/n/tbbm11ub"> <i class="uk-icon-comment"></i> 3 </a> 
           </div> 
          </div> 
          <div class="item"> 
           <div class="author"> 
            <a href="/member/100970" class="avatar"> <img src="/homes/static/picture/5236_yswi_2709.jpg" /> </a> 
            <a class="name" href="/member/100970"> 略略略略略略略_ </a> 
            <span class="time"> <time datetime="2019-05-14 16:22:06"></time> </span> 
           </div> 
           <div class="cover"> 
            <a href="/n/0kfjtw5w" data-src="http://upload-images.jianshu.io/upload_images/6748899-3a597ae65d752c5d.jpg?imageMogr2/auto-orient/strip%7CimageView2/2/w/1240"> </a> 
           </div> 
           <a href="/n/0kfjtw5w" class="title uk-text-truncate"> 中七茶仓柑普茶定制服务，加工工艺的升华 </a> 
           <div class="summary"> 
            <div class="text">
              国人从小受茶文化熏陶，对于茶的喜爱是扎根在心底的，茶也就成为人际交往过程中的赠礼之一，新品茶类柑普茶的火热，不仅仅因为它是新型饮品，更重要的是它符合大众口感，在这些条件之下，自然而然柑普茶成为亲朋好友... 
            </div> 
           </div> 
           <div class="stat"> 
            <a href="/n/0kfjtw5w"> <i class="uk-icon-eye"></i> 0 </a> &nbsp;&nbsp; 
            <a href="/n/0kfjtw5w"> <i class="uk-icon-heart"></i> 0 </a> &nbsp;&nbsp; 
            <a href="/n/0kfjtw5w"> <i class="uk-icon-comment"></i> 0 </a> 
           </div> 
          </div> 
          <div class="item"> 
           <div class="author"> 
            <a href="/member/101220" class="avatar"> <img src="/homes/static/picture/avatar_big.png" /> </a> 
            <a class="name" href="/member/101220"> 开发商在线 </a> 
            <span class="time"> <time datetime="2019-05-14 16:18:28"></time> </span> 
           </div> 
           <div class="cover"> 
            <a href="/n/si1rgpwv" data-src="http://heezhi.c.ecuster.com/data/image/2019/05/14/29048_aln8_5102.jpg?v=7213768b"> </a> 
           </div> 
           <a href="/n/si1rgpwv" class="title uk-text-truncate"> 即将开盘，海伦堡氿月湾项目地址 </a> 
           <div class="summary"> 
            <div class="text">
              即将开盘，海伦堡氿月湾项目地址。海伦堡氿月湾即将迎来首开，但很多人却连海伦堡氿月湾地址都不知道，这注定是一大遗憾，因为海伦堡氿月湾既适合投资又适合自住，物美价廉，首开还有特大优惠，买到就是赚到。在这个... 
            </div> 
           </div> 
           <div class="stat"> 
            <a href="/n/si1rgpwv"> <i class="uk-icon-eye"></i> 0 </a> &nbsp;&nbsp; 
            <a href="/n/si1rgpwv"> <i class="uk-icon-heart"></i> 0 </a> &nbsp;&nbsp; 
            <a href="/n/si1rgpwv"> <i class="uk-icon-comment"></i> 0 </a> 
           </div> 
          </div> 
          <div class="item"> 
           <div class="author"> 
            <a href="/member/101237" class="avatar"> <img src="/homes/static/picture/8486_lgsq_9196.jpg" /> </a> 
            <a class="name" href="/member/101237"> 上海统帅装饰 </a> 
            <span class="time"> <time datetime="2019-05-14 14:35:20"></time> </span> 
           </div> 
           <div class="cover"> 
            <a href="/n/fzfu1kzq" data-src="http://heezhi.c.ecuster.com/data/image/2019/05/14/23663_uwwn_6042.jpg?v=b8dcee83"> </a> 
           </div> 
           <a href="/n/fzfu1kzq" class="title uk-text-truncate"> 水电改造材料都有哪些？水电改造材料费用明细 </a> 
           <div class="summary"> 
            <div class="text">
              　　懂装修的人都知道，水电改造是家装中最重要的一步，如果为了节约省钱，所选择的材料过于劣质，会给以后的生活带来很多的麻烦，所以在装修的时候一定要规划好。那么水电改造材料都有哪些？水电改造材料费用一般是... 
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
        @if(session('id')) 
       <a href="/home/aritle"> <i class="uk-icon-edit"></i> 开始创作 </a> @else 
       <a href="/home/login"> <i class="uk-icon-edit"></i> 立即登录 开始创作 </a> @endif 
      </div> 
     </div> 
     <div class="pb pb-home-topic-list"> 
      <div class="head"> 
       <h2>热门专题</h2> 
      </div> 
      <div class="body"> 
       <a href="/t/04lfmgfxbzutxefy" class="item"> <span class="contribute"> 投稿 </span> <span class="name"> <img src="/homes/static/picture/18634_wjwx_8886.jpg" /> 诗和远方 </span> </a> 
       <a href="/t/azjhmpxcsef63fki" class="item"> <span class="contribute"> 投稿 </span> <span class="name"> <img src="/homes/static/picture/14395_tpji_4912.jpg" /> 旅行&middot;乐在路上 </span> </a> 
       <a href="/t/tzadci04supepfoh" class="item"> <span class="contribute"> 投稿 </span> <span class="name"> <img src="/homes/static/picture/15208_izum_5912.jpg" /> 谈谈心，恋恋爱 </span> </a> 
       <a href="/t/k0qvi9jl" class="item"> <span class="contribute"> 投稿 </span> <span class="name"> <img src="/homes/static/picture/55228_nqix_6895.jpeg" /> 遇见七月 </span> </a> 
       <a href="/t/pemzotvqr5l1rhjk" class="item"> <span class="contribute"> 投稿 </span> <span class="name"> <img src="/homes/static/picture/14616_jbds_6815.jpg" /> 小故事 </span> </a> 
       <a href="/t/1mixubzy4curuk2y" class="item"> <span class="contribute"> 投稿 </span> <span class="name"> <img src="/homes/static/picture/23782_jj2k_6931.jpg" /> 话题专区 </span> </a> 
       <a href="/t/pikkypp9e6xesmqd" class="item"> <span class="contribute"> 投稿 </span> <span class="name"> <img src="/homes/static/picture/22878_d0kc_3157.jpg" /> 大学生活 </span> </a> 
       <a href="/t/dk2msuhvhxzuittq" class="item"> <span class="contribute"> 投稿 </span> <span class="name"> <img src="/homes/static/picture/18912_baaz_1178.jpg" /> 连载小说 </span> </a> 
       <a href="/t/3nkrpvdt2mocfctr" class="item"> <span class="contribute"> 投稿 </span> <span class="name"> <img src="/homes/static/picture/16488_texs_3664.jpg" /> 短篇小说 </span> </a> 
       <a href="/t/yfksi30i" class="item"> <span class="contribute"> 投稿 </span> <span class="name"> <img src="/homes/static/picture/30928_pzdl_5567.jpg" /> 互联网 </span> </a> 
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
                       // console.log(tid);
                       // console.log(uid);
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
 </body>
</html>