@extends('common/home')
@section('content')

<div class="main-container">
    <div class="uk-grid">
        <div class="uk-width-1-4">

            <div class="pb pb-member-profile-menu">
                <div class="body">
                    <div class="list">
                        <a href="/follow/topics"><i class="uk-icon-cube"></i> 关注的专题</a>
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
                    <div class="item">
                        <div class="author">
                            <a href="/member/100733" class="avatar">
                                <img src="http://heezhi.c.ecuster.com/data/image/2018/09/15/27560_ykg8_2851.jpg?v=78c64919" />
                            </a>
                            <a class="name" href="/member/100733">
                                欧阳倩莹
                            </a>
                            <span class="time">
                    <time datetime="2019-01-24 10:22:19"></time>
                </span>
                        </div>
                        <div class="cover">
                            <a href="/n/lhtdzptz" data-src="https://upload-images.jianshu.io/upload_images/7547462-9044d6dc18c0463d.jpg?imageMogr2/auto-orient/strip%7CimageView2/2/w/1240">
                            </a>
                        </div>
                        <a href="/n/lhtdzptz" class="title uk-text-truncate">
                            子宫有压痛感？月子期不注意照顾自己，会造成子宫这三大影响！
                        </a>
                        <div class="summary">
                            <div class="text">
                                十月怀胎，一朝分娩。经历过十个月但怀孕过程，经历了种种，终于盼到卸货那一天。真的以为生完孩子就没可以不管不顾了吗？其实女人生完孩子，由于消耗了大量的体力精力，需要去坐月子，为的就是让产妇能够快速恢复身...
                            </div>
                        </div>
                        <div class="stat">
                            <a href="/n/lhtdzptz">
                                <i class="uk-icon-eye"></i> 74
                            </a>
                            &nbsp;&nbsp;
                            <a href="/n/lhtdzptz">
                                <i class="uk-icon-heart"></i> 0
                            </a>
                            &nbsp;&nbsp;
                            <a href="/n/lhtdzptz">
                                <i class="uk-icon-comment"></i> 0
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="author">
                            <a href="/member/100733" class="avatar">
                                <img src="http://heezhi.c.ecuster.com/data/image/2018/09/15/27560_ykg8_2851.jpg?v=78c64919" />
                            </a>
                            <a class="name" href="/member/100733">
                                欧阳倩莹
                            </a>
                            <span class="time">
                    <time datetime="2019-01-24 10:14:34"></time>
                </span>
                        </div>
                        <div class="cover">
                            <a href="/n/09nmahcy" data-src="https://upload-images.jianshu.io/upload_images/7547462-53aa4c638fcbd53b.jpg?imageMogr2/auto-orient/strip%7CimageView2/2/w/1240">
                            </a>
                        </div>
                        <a href="/n/09nmahcy" class="title uk-text-truncate">
                            孕晚期午觉后脸色瞬间苍白，这种低血压症状孕妈才有！
                        </a>
                        <div class="summary">
                            <div class="text">
                                睡眠是生命的根基，是人体健康的重要保障。我们的身体可以通过睡眠休息，得到很好的复原。能够拥有优质的睡眠是很多人羡慕的事情，那更不用说是我们的孕妈妈了。为了确保胎儿和孕妇的身体健康，在怀孕期间一定要保证...
                            </div>
                        </div>
                        <div class="stat">
                            <a href="/n/09nmahcy">
                                <i class="uk-icon-eye"></i> 68
                            </a>
                            &nbsp;&nbsp;
                            <a href="/n/09nmahcy">
                                <i class="uk-icon-heart"></i> 0
                            </a>
                            &nbsp;&nbsp;
                            <a href="/n/09nmahcy">
                                <i class="uk-icon-comment"></i> 0
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="author">
                            <a href="/member/100733" class="avatar">
                                <img src="http://heezhi.c.ecuster.com/data/image/2018/09/15/27560_ykg8_2851.jpg?v=78c64919" />
                            </a>
                            <a class="name" href="/member/100733">
                                欧阳倩莹
                            </a>
                            <span class="time">
                    <time datetime="2019-01-24 10:08:24"></time>
                </span>
                        </div>
                        <div class="cover">
                            <a href="/n/0qscaioz" data-src="https://upload-images.jianshu.io/upload_images/7547462-5aec6083ac973f88?imageMogr2/auto-orient/strip%7CimageView2/2/w/1240">
                            </a>
                        </div>
                        <a href="/n/0qscaioz" class="title uk-text-truncate">
                            保护学生健康成长，学校房屋安全检测确定建筑性能
                        </a>
                        <div class="summary">
                            <div class="text">
                                学生是祖国未来的希望，学生的健康成长关系重大，所以学校学生安全一直是重中之重。随着房屋安全意识的不断提高，学校教学楼、综合楼、宿舍、培训机构等房屋安全鉴定及抗震鉴定排查报告，已成为学校办学办理相关证件...
                            </div>
                        </div>
                        <div class="stat">
                            <a href="/n/0qscaioz">
                                <i class="uk-icon-eye"></i> 75
                            </a>
                            &nbsp;&nbsp;
                            <a href="/n/0qscaioz">
                                <i class="uk-icon-heart"></i> 0
                            </a>
                            &nbsp;&nbsp;
                            <a href="/n/0qscaioz">
                                <i class="uk-icon-comment"></i> 0
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="author">
                            <a href="/member/100733" class="avatar">
                                <img src="http://heezhi.c.ecuster.com/data/image/2018/09/15/27560_ykg8_2851.jpg?v=78c64919" />
                            </a>
                            <a class="name" href="/member/100733">
                                欧阳倩莹
                            </a>
                            <span class="time">
                    <time datetime="2019-01-24 10:03:24"></time>
                </span>
                        </div>
                        <div class="cover">
                            <a href="/n/mkxom6gl" data-src="https://upload-images.jianshu.io/upload_images/7547462-da8a363622c8c2dd?imageMogr2/auto-orient/strip%7CimageView2/2/w/1240">
                            </a>
                        </div>
                        <a href="/n/mkxom6gl" class="title uk-text-truncate">
                            深圳钢结构房屋安全检测，让建筑换发新的功能要求。
                        </a>
                        <div class="summary">
                            <div class="text">
                                随着国民经济和科学技术的持续快速发展，以及城镇规划的逐步完善，人们对生产、生活条件的要求逐步提高.许多旧建筑物甚至是新建建筑物已经不满足生产、生活的需求，需要依据现行的技术，标准对其进行局部或整体改造...
                            </div>
                        </div>
                        <div class="stat">
                            <a href="/n/mkxom6gl">
                                <i class="uk-icon-eye"></i> 54
                            </a>
                            &nbsp;&nbsp;
                            <a href="/n/mkxom6gl">
                                <i class="uk-icon-heart"></i> 0
                            </a>
                            &nbsp;&nbsp;
                            <a href="/n/mkxom6gl">
                                <i class="uk-icon-comment"></i> 0
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="author">
                            <a href="/member/100733" class="avatar">
                                <img src="http://heezhi.c.ecuster.com/data/image/2018/09/15/27560_ykg8_2851.jpg?v=78c64919" />
                            </a>
                            <a class="name" href="/member/100733">
                                欧阳倩莹
                            </a>
                            <span class="time">
                    <time datetime="2019-01-24 09:56:18"></time>
                </span>
                        </div>
                        <div class="cover">
                            <a href="/n/63l1hzff" data-src="https://upload-images.jianshu.io/upload_images/7547462-7797382eaf83ea9e?imageMogr2/auto-orient/strip%7CimageView2/2/w/1240">
                            </a>
                        </div>
                        <a href="/n/63l1hzff" class="title uk-text-truncate">
                            办理深圳房屋租赁合同要点：须做好房屋安全检测报告
                        </a>
                        <div class="summary">
                            <div class="text">
                                在深圳，由于房价的不断攀升，不少市民选择租房，当然也有由于工作或是学习的因素，让人们选择了租房。所以，现在房租市场可谓是越来越大了。不过值得房屋业主注意的是，现今，在房屋租赁前都需要做一次房屋安全检测...
                            </div>
                        </div>
                        <div class="stat">
                            <a href="/n/63l1hzff">
                                <i class="uk-icon-eye"></i> 55
                            </a>
                            &nbsp;&nbsp;
                            <a href="/n/63l1hzff">
                                <i class="uk-icon-heart"></i> 0
                            </a>
                            &nbsp;&nbsp;
                            <a href="/n/63l1hzff">
                                <i class="uk-icon-comment"></i> 0
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="author">
                            <a href="/member/100979" class="avatar">
                                <img src="http://heezhi.c.ecuster.com/assets/lib/img/avatar_big.png?v=655ad7d4" />
                            </a>
                            <a class="name" href="/member/100979">
                                Z17772303385
                            </a>
                            <span class="time">
                    <time datetime="2019-01-24 09:52:53"></time>
                </span>
                        </div>
                        <a href="/n/gj3wejiu" class="title uk-text-truncate">
                            重庆学习平面设计需要基础吗？能学好吗？？？
                        </a>
                        <div class="summary">
                            <div class="text">
                                虽然如今市面上也有很多专业平面设计培训机构，但是想要掌握平面设计的精髓并据为己有，找家专业、有实力的平面设计培训学校是关键。 小编建议较好是看行业内口碑好的，可以看一下在新闻上有没有不好的报道，然后看...
                            </div>
                        </div>
                        <div class="stat">
                            <a href="/n/gj3wejiu">
                                <i class="uk-icon-eye"></i> 54
                            </a>
                            &nbsp;&nbsp;
                            <a href="/n/gj3wejiu">
                                <i class="uk-icon-heart"></i> 0
                            </a>
                            &nbsp;&nbsp;
                            <a href="/n/gj3wejiu">
                                <i class="uk-icon-comment"></i> 0
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="author">
                            <a href="/member/100979" class="avatar">
                                <img src="http://heezhi.c.ecuster.com/assets/lib/img/avatar_big.png?v=655ad7d4" />
                            </a>
                            <a class="name" href="/member/100979">
                                Z17772303385
                            </a>
                            <span class="time">
                    <time datetime="2019-01-24 09:52:22"></time>
                </span>
                        </div>
                        <a href="/n/es14roog" class="title uk-text-truncate">
                            没有美术功底学平面设计困不困难呢？
                        </a>
                        <div class="summary">
                            <div class="text">
                                零基础、没有美术功底学平面设计难吗？能学好吗？该怎么学好？普遍的零基础小白，学平面设计前都会担心这些问题。&nbsp;小编认为，设计是不需要你有好的基础，而是需要你有好的想象力，每个人其实都是从零开始学起的。正...
                            </div>
                        </div>
                        <div class="stat">
                            <a href="/n/es14roog">
                                <i class="uk-icon-eye"></i> 58
                            </a>
                            &nbsp;&nbsp;
                            <a href="/n/es14roog">
                                <i class="uk-icon-heart"></i> 0
                            </a>
                            &nbsp;&nbsp;
                            <a href="/n/es14roog">
                                <i class="uk-icon-comment"></i> 0
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="author">
                            <a href="/member/100979" class="avatar">
                                <img src="http://heezhi.c.ecuster.com/assets/lib/img/avatar_big.png?v=655ad7d4" />
                            </a>
                            <a class="name" href="/member/100979">
                                Z17772303385
                            </a>
                            <span class="time">
                    <time datetime="2019-01-24 09:51:31"></time>
                </span>
                        </div>
                        <div class="cover">
                            <a href="/n/s8qn733h" data-src="http://heezhi.c.ecuster.com/data/image/2018/12/04/11144_vvow_6062.jpg?v=b2cd9dec">
                            </a>
                        </div>
                        <a href="/n/s8qn733h" class="title uk-text-truncate">
                            同样是UI设计师，为什么你是拿着月薪6000，而别人12000
                        </a>
                        <div class="summary">
                            <div class="text">
                                同样是UI设计师，为什么你是拿着月薪6000，而别人早已领先你一大步，达到了12000，你是否会有一个这样的困惑？心理不是很平衡，还有着不甘心，或许自己觉得不比他人差，但在别人眼里真的是这样的吗？&nbsp;月薪6000和月薪...
                            </div>
                        </div>
                        <div class="stat">
                            <a href="/n/s8qn733h">
                                <i class="uk-icon-eye"></i> 69
                            </a>
                            &nbsp;&nbsp;
                            <a href="/n/s8qn733h">
                                <i class="uk-icon-heart"></i> 0
                            </a>
                            &nbsp;&nbsp;
                            <a href="/n/s8qn733h">
                                <i class="uk-icon-comment"></i> 0
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="author">
                            <a href="/member/100979" class="avatar">
                                <img src="http://heezhi.c.ecuster.com/assets/lib/img/avatar_big.png?v=655ad7d4" />
                            </a>
                            <a class="name" href="/member/100979">
                                Z17772303385
                            </a>
                            <span class="time">
                    <time datetime="2019-01-24 09:49:53"></time>
                </span>
                        </div>
                        <a href="/n/zb1anlx1" class="title uk-text-truncate">
                            重庆学习平面设计需要基础吗？能学好吗？？？
                        </a>
                        <div class="summary">
                            <div class="text">
                                虽然如今市面上也有很多专业平面设计培训机构，但是想要掌握平面设计的精髓并据为己有，找家专业、有实力的平面设计培训学校是关键。 小编建议较好是看行业内口碑好的，可以看一下在新闻上有没有不好的报道，然后看...
                            </div>
                        </div>
                        <div class="stat">
                            <a href="/n/zb1anlx1">
                                <i class="uk-icon-eye"></i> 57
                            </a>
                            &nbsp;&nbsp;
                            <a href="/n/zb1anlx1">
                                <i class="uk-icon-heart"></i> 0
                            </a>
                            &nbsp;&nbsp;
                            <a href="/n/zb1anlx1">
                                <i class="uk-icon-comment"></i> 0
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="author">
                            <a href="/member/100979" class="avatar">
                                <img src="http://heezhi.c.ecuster.com/assets/lib/img/avatar_big.png?v=655ad7d4" />
                            </a>
                            <a class="name" href="/member/100979">
                                Z17772303385
                            </a>
                            <span class="time">
                    <time datetime="2019-01-24 09:49:07"></time>
                </span>
                        </div>
                        <a href="/n/5tnaywvv" class="title uk-text-truncate">
                            没有美术功底学平面设计困不困难呢？
                        </a>
                        <div class="summary">
                            <div class="text">
                                零基础、没有美术功底学平面设计难吗？能学好吗？该怎么学好？普遍的零基础小白，学平面设计前都会担心这些问题。&nbsp;小编认为，设计是不需要你有好的基础，而是需要你有好的想象力，每个人其实都是从零开始学起的。正...
                            </div>
                        </div>
                        <div class="stat">
                            <a href="/n/5tnaywvv">
                                <i class="uk-icon-eye"></i> 57
                            </a>
                            &nbsp;&nbsp;
                            <a href="/n/5tnaywvv">
                                <i class="uk-icon-heart"></i> 0
                            </a>
                            &nbsp;&nbsp;
                            <a href="/n/5tnaywvv">
                                <i class="uk-icon-comment"></i> 0
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="author">
                            <a href="/member/100979" class="avatar">
                                <img src="http://heezhi.c.ecuster.com/assets/lib/img/avatar_big.png?v=655ad7d4" />
                            </a>
                            <a class="name" href="/member/100979">
                                Z17772303385
                            </a>
                            <span class="time">
                    <time datetime="2019-01-24 09:47:54"></time>
                </span>
                        </div>
                        <div class="cover">
                            <a href="/n/zfvlrrav" data-src="http://heezhi.c.ecuster.com/data/image/2018/12/04/11144_vvow_6062.jpg?v=b2cd9dec">
                            </a>
                        </div>
                        <a href="/n/zfvlrrav" class="title uk-text-truncate">
                            同样是UI设计师，为什么你是拿着月薪6000，而别人12000
                        </a>
                        <div class="summary">
                            <div class="text">
                                同样是UI设计师，为什么你是拿着月薪6000，而别人早已领先你一大步，达到了12000，你是否会有一个这样的困惑？心理不是很平衡，还有着不甘心，或许自己觉得不比他人差，但在别人眼里真的是这样的吗？&nbsp;月薪6000和月薪...
                            </div>
                        </div>
                        <div class="stat">
                            <a href="/n/zfvlrrav">
                                <i class="uk-icon-eye"></i> 65
                            </a>
                            &nbsp;&nbsp;
                            <a href="/n/zfvlrrav">
                                <i class="uk-icon-heart"></i> 0
                            </a>
                            &nbsp;&nbsp;
                            <a href="/n/zfvlrrav">
                                <i class="uk-icon-comment"></i> 0
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="author">
                            <a href="/member/100979" class="avatar">
                                <img src="http://heezhi.c.ecuster.com/assets/lib/img/avatar_big.png?v=655ad7d4" />
                            </a>
                            <a class="name" href="/member/100979">
                                Z17772303385
                            </a>
                            <span class="time">
                    <time datetime="2019-01-24 09:44:49"></time>
                </span>
                        </div>
                        <a href="/n/g0mzlz5t" class="title uk-text-truncate">
                            重庆学习平面设计需要基础吗？能学好吗？？？
                        </a>
                        <div class="summary">
                            <div class="text">
                                虽然如今市面上也有很多专业平面设计培训机构，但是想要掌握平面设计的精髓并据为己有，找家专业、有实力的平面设计培训学校是关键。 小编建议较好是看行业内口碑好的，可以看一下在新闻上有没有不好的报道，然后看...
                            </div>
                        </div>
                        <div class="stat">
                            <a href="/n/g0mzlz5t">
                                <i class="uk-icon-eye"></i> 70
                            </a>
                            &nbsp;&nbsp;
                            <a href="/n/g0mzlz5t">
                                <i class="uk-icon-heart"></i> 0
                            </a>
                            &nbsp;&nbsp;
                            <a href="/n/g0mzlz5t">
                                <i class="uk-icon-comment"></i> 0
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="author">
                            <a href="/member/100979" class="avatar">
                                <img src="http://heezhi.c.ecuster.com/assets/lib/img/avatar_big.png?v=655ad7d4" />
                            </a>
                            <a class="name" href="/member/100979">
                                Z17772303385
                            </a>
                            <span class="time">
                    <time datetime="2019-01-24 09:44:24"></time>
                </span>
                        </div>
                        <a href="/n/nenhdyxc" class="title uk-text-truncate">
                            没有美术功底学平面设计困不困难呢？
                        </a>
                        <div class="summary">
                            <div class="text">
                                零基础、没有美术功底学平面设计难吗？能学好吗？该怎么学好？普遍的零基础小白，学平面设计前都会担心这些问题。&nbsp;小编认为，设计是不需要你有好的基础，而是需要你有好的想象力，每个人其实都是从零开始学起的。正...
                            </div>
                        </div>
                        <div class="stat">
                            <a href="/n/nenhdyxc">
                                <i class="uk-icon-eye"></i> 59
                            </a>
                            &nbsp;&nbsp;
                            <a href="/n/nenhdyxc">
                                <i class="uk-icon-heart"></i> 0
                            </a>
                            &nbsp;&nbsp;
                            <a href="/n/nenhdyxc">
                                <i class="uk-icon-comment"></i> 0
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="author">
                            <a href="/member/100979" class="avatar">
                                <img src="http://heezhi.c.ecuster.com/assets/lib/img/avatar_big.png?v=655ad7d4" />
                            </a>
                            <a class="name" href="/member/100979">
                                Z17772303385
                            </a>
                            <span class="time">
                    <time datetime="2019-01-24 09:43:48"></time>
                </span>
                        </div>
                        <div class="cover">
                            <a href="/n/rysaxep7" data-src="http://heezhi.c.ecuster.com/data/image/2018/12/04/11144_vvow_6062.jpg?v=b2cd9dec">
                            </a>
                        </div>
                        <a href="/n/rysaxep7" class="title uk-text-truncate">
                            同样是UI设计师，为什么你是拿着月薪6000，而别人12000
                        </a>
                        <div class="summary">
                            <div class="text">
                                同样是UI设计师，为什么你是拿着月薪6000，而别人早已领先你一大步，达到了12000，你是否会有一个这样的困惑？心理不是很平衡，还有着不甘心，或许自己觉得不比他人差，但在别人眼里真的是这样的吗？&nbsp;月薪6000和月薪...
                            </div>
                        </div>
                        <div class="stat">
                            <a href="/n/rysaxep7">
                                <i class="uk-icon-eye"></i> 65
                            </a>
                            &nbsp;&nbsp;
                            <a href="/n/rysaxep7">
                                <i class="uk-icon-heart"></i> 0
                            </a>
                            &nbsp;&nbsp;
                            <a href="/n/rysaxep7">
                                <i class="uk-icon-comment"></i> 0
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="author">
                            <a href="/member/100733" class="avatar">
                                <img src="http://heezhi.c.ecuster.com/data/image/2018/09/15/27560_ykg8_2851.jpg?v=78c64919" />
                            </a>
                            <a class="name" href="/member/100733">
                                欧阳倩莹
                            </a>
                            <span class="time">
                    <time datetime="2019-01-24 09:40:59"></time>
                </span>
                        </div>
                        <div class="cover">
                            <a href="/n/rqasb6jh" data-src="https://upload-images.jianshu.io/upload_images/7547462-581ab7445f357046?imageMogr2/auto-orient/strip%7CimageView2/2/w/1240">
                            </a>
                        </div>
                        <a href="/n/rqasb6jh" class="title uk-text-truncate">
                            广州电商（淘宝、京东）宣传片制作，为产品用心包装
                        </a>
                        <div class="summary">
                            <div class="text">
                                电商产品宣传片也就是商家在淘宝、天猫、京东等平台上使用的，展示商品细节的短视频，适合在移动和短期休闲场所观看，有完整的策划和专业的拍摄制作。电商产品宣传片拍摄体现了&ldquo;三微&rdquo;：微时间、微生产周期和微资金投...
                            </div>
                        </div>
                        <div class="stat">
                            <a href="/n/rqasb6jh">
                                <i class="uk-icon-eye"></i> 53
                            </a>
                            &nbsp;&nbsp;
                            <a href="/n/rqasb6jh">
                                <i class="uk-icon-heart"></i> 0
                            </a>
                            &nbsp;&nbsp;
                            <a href="/n/rqasb6jh">
                                <i class="uk-icon-comment"></i> 0
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="author">
                            <a href="/member/100979" class="avatar">
                                <img src="http://heezhi.c.ecuster.com/assets/lib/img/avatar_big.png?v=655ad7d4" />
                            </a>
                            <a class="name" href="/member/100979">
                                Z17772303385
                            </a>
                            <span class="time">
                    <time datetime="2019-01-24 09:40:35"></time>
                </span>
                        </div>
                        <a href="/n/jewtgzct" class="title uk-text-truncate">
                            重庆学习平面设计需要基础吗？能学好吗？？？
                        </a>
                        <div class="summary">
                            <div class="text">
                                虽然如今市面上也有很多专业平面设计培训机构，但是想要掌握平面设计的精髓并据为己有，找家专业、有实力的平面设计培训学校是关键。 小编建议较好是看行业内口碑好的，可以看一下在新闻上有没有不好的报道，然后看...
                            </div>
                        </div>
                        <div class="stat">
                            <a href="/n/jewtgzct">
                                <i class="uk-icon-eye"></i> 61
                            </a>
                            &nbsp;&nbsp;
                            <a href="/n/jewtgzct">
                                <i class="uk-icon-heart"></i> 0
                            </a>
                            &nbsp;&nbsp;
                            <a href="/n/jewtgzct">
                                <i class="uk-icon-comment"></i> 0
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="author">
                            <a href="/member/100979" class="avatar">
                                <img src="http://heezhi.c.ecuster.com/assets/lib/img/avatar_big.png?v=655ad7d4" />
                            </a>
                            <a class="name" href="/member/100979">
                                Z17772303385
                            </a>
                            <span class="time">
                    <time datetime="2019-01-24 09:40:09"></time>
                </span>
                        </div>
                        <a href="/n/7amh2jqi" class="title uk-text-truncate">
                            没有美术功底学平面设计困不困难呢？
                        </a>
                        <div class="summary">
                            <div class="text">
                                零基础、没有美术功底学平面设计难吗？能学好吗？该怎么学好？普遍的零基础小白，学平面设计前都会担心这些问题。&nbsp;小编认为，设计是不需要你有好的基础，而是需要你有好的想象力，每个人其实都是从零开始学起的。正...
                            </div>
                        </div>
                        <div class="stat">
                            <a href="/n/7amh2jqi">
                                <i class="uk-icon-eye"></i> 65
                            </a>
                            &nbsp;&nbsp;
                            <a href="/n/7amh2jqi">
                                <i class="uk-icon-heart"></i> 0
                            </a>
                            &nbsp;&nbsp;
                            <a href="/n/7amh2jqi">
                                <i class="uk-icon-comment"></i> 0
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="author">
                            <a href="/member/100979" class="avatar">
                                <img src="http://heezhi.c.ecuster.com/assets/lib/img/avatar_big.png?v=655ad7d4" />
                            </a>
                            <a class="name" href="/member/100979">
                                Z17772303385
                            </a>
                            <span class="time">
                    <time datetime="2019-01-24 09:39:41"></time>
                </span>
                        </div>
                        <div class="cover">
                            <a href="/n/mopssppv" data-src="http://heezhi.c.ecuster.com/data/image/2018/12/04/11144_vvow_6062.jpg?v=b2cd9dec">
                            </a>
                        </div>
                        <a href="/n/mopssppv" class="title uk-text-truncate">
                            同样是UI设计师，为什么你是拿着月薪6000，而别人12000
                        </a>
                        <div class="summary">
                            <div class="text">
                                同样是UI设计师，为什么你是拿着月薪6000，而别人早已领先你一大步，达到了12000，你是否会有一个这样的困惑？心理不是很平衡，还有着不甘心，或许自己觉得不比他人差，但在别人眼里真的是这样的吗？&nbsp;月薪6000和月薪...
                            </div>
                        </div>
                        <div class="stat">
                            <a href="/n/mopssppv">
                                <i class="uk-icon-eye"></i> 119
                            </a>
                            &nbsp;&nbsp;
                            <a href="/n/mopssppv">
                                <i class="uk-icon-heart"></i> 0
                            </a>
                            &nbsp;&nbsp;
                            <a href="/n/mopssppv">
                                <i class="uk-icon-comment"></i> 0
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="author">
                            <a href="/member/100733" class="avatar">
                                <img src="http://heezhi.c.ecuster.com/data/image/2018/09/15/27560_ykg8_2851.jpg?v=78c64919" />
                            </a>
                            <a class="name" href="/member/100733">
                                欧阳倩莹
                            </a>
                            <span class="time">
                    <time datetime="2019-01-24 09:36:43"></time>
                </span>
                        </div>
                        <div class="cover">
                            <a href="/n/s9px2gza" data-src="https://upload-images.jianshu.io/upload_images/7547462-523a6ce8dabb4e3b?imageMogr2/auto-orient/strip%7CimageView2/2/w/1240">
                            </a>
                        </div>
                        <a href="/n/s9px2gza" class="title uk-text-truncate">
                            生动趣味的年会宣传片，企业新一年度的&ldquo;开门红&rdquo;！
                        </a>
                        <div class="summary">
                            <div class="text">
                                随着现在企业越来越注重文化建设的同时，举办年会是一个增进公司与员工的感情和互信的有效途径。公司年会成为公司新一年的&ldquo;开门红，很多企业也会通过宣传片制作的形式，过去一年奋斗的过程、取得的成果总结清楚，同...
                            </div>
                        </div>
                        <div class="stat">
                            <a href="/n/s9px2gza">
                                <i class="uk-icon-eye"></i> 51
                            </a>
                            &nbsp;&nbsp;
                            <a href="/n/s9px2gza">
                                <i class="uk-icon-heart"></i> 0
                            </a>
                            &nbsp;&nbsp;
                            <a href="/n/s9px2gza">
                                <i class="uk-icon-comment"></i> 0
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="author">
                            <a href="/member/100733" class="avatar">
                                <img src="http://heezhi.c.ecuster.com/data/image/2018/09/15/27560_ykg8_2851.jpg?v=78c64919" />
                            </a>
                            <a class="name" href="/member/100733">
                                欧阳倩莹
                            </a>
                            <span class="time">
                    <time datetime="2019-01-24 09:31:40"></time>
                </span>
                        </div>
                        <div class="cover">
                            <a href="/n/dnyvdwgb" data-src="https://upload-images.jianshu.io/upload_images/7547462-1b7ac61122947e1f?imageMogr2/auto-orient/strip%7CimageView2/2/w/1240">
                            </a>
                        </div>
                        <a href="/n/dnyvdwgb" class="title uk-text-truncate">
                            企业宣传片制作策划方案：《济科生物医药》
                        </a>
                        <div class="summary">
                            <div class="text">
                                众所周知，现在各种类型的优秀企业宣传片都离不开影视公司背后的策划团队。因为宣传片是以影片的方式呈现，它需要面向大众进行宣传推广，所以在企业宣传片的画面质量、效果上都要达到最好。那么，一部好的企业宣传片...
                            </div>
                        </div>
                        <div class="stat">
                            <a href="/n/dnyvdwgb">
                                <i class="uk-icon-eye"></i> 64
                            </a>
                            &nbsp;&nbsp;
                            <a href="/n/dnyvdwgb">
                                <i class="uk-icon-heart"></i> 0
                            </a>
                            &nbsp;&nbsp;
                            <a href="/n/dnyvdwgb">
                                <i class="uk-icon-comment"></i> 0
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pb">
                <div class="page-container"></div>
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
            <a href="http://www.miitbeian.gov.cn" target="_blank">沪ICP备16023748号-8</a>
            &copy;
            heezhi.com【何止版权所有】
        </div>
    </div>
</footer>

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