@extends('common/home')

@section('content')




    
        <div class="main-container">
            <div class="uk-grid">
                <div class="uk-width-1-4">
                    <div class="pb pb-member-profile-menu">
                        <div class="body">
                            <div class="list">
                                <a class=" active " href="/member/profile">
                                    <i class="uk-icon-user"></i>个人资料</a>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-width-3-4">
                    <div class="pb pb-member-profile-form">
                        <div class="head">
                            <h2>个人资料</h2></div>
                        <div class="body">

                                <form id="art_form" class="" action="/home/upload" method='post' enctype='multipart/form-data'>
                                <div class="line">
                                  
                                    <div class="field">
                                       
                                         <div class="label"> 头像 </div>
                                        <a href="/member/profile_avatar">
                                         <img style=" margin-left:90px;width:80px;height:80px;border-radius:50%;border:1px solid #EEE;" src="{{$rs->person}}" id="imgs"></a>
                                         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                         <input type="file" name="person"class="file-btn" id="file_upload" style="width: 70px;">


                                        {{csrf_field()}}
                                       </form>

                                        </div>
                                </div>
                              

    <script type="text/javascript">


        $(function () {

        $("#file_upload").change(function () {
                //  判断是否有选择上传文件
                var imgPath = $("#file_upload").val();

                if (imgPath == "") {
                    alert("请选择上传图片！");
                    return;
                }

                // console.log(imgPath);
                //判断上传文件的后缀名
                var strExtension = imgPath.substr(imgPath.lastIndexOf('.') + 1);
                if (strExtension != 'JPG' && strExtension != 'gif'
                    && strExtension != 'png' && strExtension != 'jpg') {
                    alert("请选择图片文件");
                    return;
                }



                var formData = new FormData($('#art_form')[0]);

                $.ajax({
                    type: "post",
                    url: "/home/user/upload",
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(data) {

                        // console.log(data);
                        $('#imgs').attr('src',data);
                        
                    },

                    error: function(XMLHttpRequest, textStatus, errorThrown) {
                        alert("上传失败，请检查网络后重试");
                    }
                });
               })
         })
       
        </script>




                            <form action="/home/douserinfo?id={{$rs->id}}" class="uk-form" method="post" enctype="multipart/form-data">
                                 <br>
                                <div class="line">
                                    <div class="label">用户名</div>
                                    <div class="field">
                                        <input type="text" name="username"  id="username" value="{{$rs->username}}">
                                        </div>
                                </div>
                                 <br>
                                <div class="line">
                                    <div class="label">电话号码</div>
                                    <div class="field">
                                        <input type="text" name="phone" value="{{$rs->phone}}">
                                        </div>
                                </div>
                                 <br>
                                <div class="line">
                                    <div class="label">邮箱</div>
                                    <div class="field">
                                      <input type="text" name="email" value="{{$rs->email}}">
                                      </div>
                                </div>
                                <br>
                                <div class="line">
                                    <div class="label">个人介绍</div>
                                     <div class="field">
                                     <textarea rows="5" cols="30" name="sign">
                                     这个人太懒,什么都没有留下~
                                     </textarea>
                                </div>
                                </div>
                                <br>
                                <div class="line">
                                    <div class="label">创建时间</div>
                                   
                                     {{$rs->addtime}}
                                       </div>
                                </div>{{csrf_field()}}

                                 
                                <button id="btt">提交</button>
                            </form>
                            <style type="text/css">
                                #btt{
                                        height: 30px;
                                        width: 100px;
                                        margin: 30px 0 60px;
                                        border-radius: 20px;
                                        border: none;
                                        background-color: #3db922;
                                        color:#fff;
                                        size: 10px;
                                        margin-left: 130px;
                                }
                            
                            </style>
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
        <script src="http://heezhi.c.ecuster.com/assets/main/default/basic.js?v=a55df311"></script>
    </body>

</html>

@stop