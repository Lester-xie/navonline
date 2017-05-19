@extends('layouts.default')
@section('title', $user->name)
@section('css')
    <link rel="stylesheet" href="/css/user-edit.css">
@stop
@section('content')
    <div class="ui grid u-edit">
        <div class="four wide column">
            <div class="ui secondary vertical menu edit-menu">
                <a class="active item" href="{{ route('users.edit.profile', Auth::user()->id) }}">个人信息 </a>
                <a class="item" href="{{ route('users.edit.message', Auth::user()->id) }}">消息推送 </a>
                <a class="item" href="{{ route('users.edit.privacy', Auth::user()->id) }}">隐私设置 </a>
            </div>
        </div>
        <div class="twelve wide column edit-menu-wrap">
            <form method="POST" action="{{ route('users.update', $user->id )}}">
                {{ method_field('PATCH') }}
                {{ csrf_field() }}
                <div class="edit-wrap">
                    <div class="item">
                        <div class="ui special cards">
                            <div class="card head-wrap">
                                <div class="blurring dimmable image">
                                    <div class="ui dimmer">
                                        <div class="content">
                                            <div class="center">
                                                <div class="ui inverted button">上传头像</div>
                                            </div>
                                        </div>
                                    </div>
                                    <img src="{{ $user->head_src?:'/img/default.png' }}" class="head-icon">
                                    <input type="text" name="head_src" value="{{ $user->head_src }}" class="hide">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="ui grid">
                            <div class="four wide column">
                                <span class="user-name">昵称</span>
                            </div>
                            <div class="twelve wide column">
                                <div class="ui input">
                                    <input type="text" value="{{ $user->name }}" maxlength="10" name="name">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="ui grid">
                            <div class="four wide column">
                                性别
                            </div>
                            <div class="twelve wide column">
                                <div class="ui form">
                                    <div class="inline fields">
                                        <div class="field">
                                            <div class="ui radio checkbox">
                                                <input type="radio" name="gender" value="1"
                                                       {{ $user->gender==1?'checked':'' }}
                                                       class="hidden">
                                                <label>男</label>
                                            </div>
                                        </div>
                                        <div class="field">
                                            <div class="ui radio checkbox">
                                                <input type="radio" name="gender" value="2"
                                                       {{ $user->gender==2?'checked':'' }}
                                                       class="hidden">
                                                <label>女</label>
                                            </div>
                                        </div>
                                        <div class="field">
                                            <div class="ui radio checkbox">
                                                <input type="radio" name="gender" value="0"
                                                       {{ $user->gender==0?'checked':'' }}
                                                       class="hidden">
                                                <label>保密</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item email">
                        <div class="ui grid">
                            <div class="four wide column">
                                邮箱
                            </div>
                            <div class="twelve wide column">
                                @if(!$user->email)
                                    <p class="inline">
                                        <a href="javascript:;" class="bind-email green"><i class="icon add circle"></i>
                                            绑定</a>
                                    </p>
                                @else
                                    <p class="inline">
                                        {{ substr($user->email,0,2) }}*****{{ substr($user->email,-9) }}
                                        &emsp; <a href="javascript:;" class="green hide"> 取消绑定</a>
                                    </p>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="item phone">
                        <div class="ui grid">
                            <div class="four wide column">
                                手机
                            </div>
                            <div class="twelve wide column">
                                <p class="inline">{{ substr($user->phone,0,3) }}*****{{ substr($user->phone,-4) }}
                                    &emsp; <a href="javascript:;" class="green hide"> 取消绑定</a></p></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="ui grid">
                            <div class="four wide column">
                                <span class="user-name">个人介绍</span>
                            </div>
                            <div class="twelve wide column">
                                <div class="ui form">
                                    <div class="field">
                                        <textarea rows="2" maxlength="60"
                                                  placeholder="暂无个人介绍" name="intro">{{ $user->intro }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <button class="ui green button basic j-profile-save" type="submit">保存</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop

@section('js')
    <script src="/js/user-edit.js"></script>
@stop