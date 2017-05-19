@extends('layouts.default')
@section('title', $user->name)
@section('css')
    <link rel="stylesheet" href="/css/user-edit.css">
@stop
@section('content')
    <div class="ui grid u-edit">
        <div class="four wide column">
            <div class="ui secondary vertical menu edit-menu">
                <a class="item" href="{{ route('users.edit.profile', Auth::user()->id) }}">个人信息 </a>
                <a class="item" href="{{ route('users.edit.message', Auth::user()->id) }}">消息推送 </a>
                <a class="active item" href="{{ route('users.edit.privacy', Auth::user()->id) }}">隐私设置 </a>
            </div>
        </div>
        <div class="twelve wide column edit-menu-wrap">
            <div class="edit-wrap j-privacySet">
                {{ method_field('PATCH') }}
                {{ csrf_field() }}
                <div class="item">
                    <div class="ui grid">
                        <div class="four wide column">
                            <p>私信</p>
                            <p class="small-title">私信接收设置</p>
                        </div>
                        <div class="twelve wide column paddingT30">
                            <div class="ui form">
                                <div class="inline fields">
                                    <div class="field">
                                        <div class="ui radio checkbox">
                                            <input type="radio" name="can_sx" {{ $user->can_sx==1?'checked':'' }} value="1"  class="hidden">
                                            <label>允许所有人给我发私信</label>
                                        </div>
                                    </div>
                                    <div class="field">
                                        <div class="ui radio checkbox">
                                            <input type="radio" name="can_sx" {{ $user->can_sx==2?'checked':'' }} value="2" class="hidden">
                                            <label>只允许我关注的人给我发私信</label>
                                        </div>
                                    </div>
                                    <div class="field">
                                        <div class="ui radio checkbox">
                                            <input type="radio" name="can_sx" {{ $user->can_sx==0?'checked':'' }} value="0" class="hidden">
                                            <label>关闭私信</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="ui grid">
                        <div class="four wide column">
                            <p>评论、回复</p>
                            <p class="small-title">评论、回复设置</p>
                        </div>
                        <div class="twelve wide column paddingT30">
                            <div class="ui form">
                                <div class="inline fields">
                                    <div class="field">
                                        <div class="ui radio checkbox">
                                            <input type="radio" name="can_pl" {{ $user->can_pl==1?'checked':'' }} value="1"  class="hidden">
                                            <label>允许所有人给我评论或回复</label>
                                        </div>
                                    </div>
                                    <div class="field">
                                        <div class="ui radio checkbox">
                                            <input type="radio" name="can_pl" {{ $user->can_pl==2?'checked':'' }} value="2" class="hidden">
                                            <label>只允许我关注的人给我评论或回复</label>
                                        </div>
                                    </div>
                                    <div class="field">
                                        <div class="ui radio checkbox">
                                            <input type="radio" name="can_pl" {{ $user->can_pl==0?'checked':'' }} value="0" class="hidden">
                                            <label>关闭评论、回复</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="ui grid">
                        <div class="four wide column">
                            <p>@设置</p>
                            <p class="small-title">接收@消息的设置</p>
                        </div>
                        <div class="twelve wide column paddingT30">
                            <div class="ui form">
                                <div class="inline fields">
                                    <div class="field">
                                        <div class="ui radio checkbox">
                                            <input type="radio" name="can_at" {{ $user->can_at==1?'checked':'' }} value="1"  class="hidden">
                                            <label>接收所有人@我的消息</label>
                                        </div>
                                    </div>
                                    <div class="field">
                                        <div class="ui radio checkbox">
                                            <input type="radio" name="can_at" {{ $user->can_at==2?'checked':'' }} value="2" class="hidden">
                                            <label>只接收我关注的人@我的消息</label>
                                        </div>
                                    </div>
                                    <div class="field">
                                        <div class="ui radio checkbox">
                                            <input type="radio" name="can_at" {{ $user->can_at==0?'checked':'' }} value="0" class="hidden">
                                            <label>不接收@我的消息</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                </div>
            </div>
        </div>
    </div>
@stop

@section('js')
    <script src="/js/user-edit.js"></script>
@stop