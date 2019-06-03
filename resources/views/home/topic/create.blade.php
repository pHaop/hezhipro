@extends('common/home')
@section('content')
<div class="main-container">

    <div class="pb pb-topic-edit">
        <div class="head" style="margin-top:100px">
            <h1>新建专题</h1>
        </div>
        <div class="body">
            <form action="/home/topic" class="uk-form" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="uid" value="{{$rs['id']}}">
                <input type="hidden" name="addtime" value="{{date('Y-m-d H:i:s',time())}}">
                <input type="hidden" name="status" value="1">
                <div class="line">
                    <div class="label">封面</div>
                    <div class="field">
                        <div>
                            <input type="file" name="portrait" value="" class="uk-form-large uk-width-4-4" />
                        </div>
                    </div>
                </div>
                <div class="line">
                    <div class="label">名称</div>
                    <div class="field">
                        <input type="text" name="name" value="" class="uk-form-large uk-width-3-4" />
                    </div>
                </div>
                <div class="line">
                    <div class="label">描述</div>
                    <div class="field">
                        <textarea name="person" rows="3" class="uk-form-large uk-width-3-4"></textarea>
                    </div>
                </div>


                <div class="line">
                    <div class="label">&nbsp;</div>
                    <div class="field">
                        <button type="submit" class="uk-button uk-button-primary uk-button-large">提交</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>
    <br/>
<br/>
<br/> <br/>
<br/>
<br/>
<br/>

    @stop
