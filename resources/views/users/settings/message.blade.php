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
                <a class="active item" href="{{ route('users.edit.message', Auth::user()->id) }}">消息推送 </a>
                <a class="item" href="{{ route('users.edit.privacy', Auth::user()->id) }}">隐私设置 </a>
            </div>
        </div>
        <div class="twelve wide column edit-menu-wrap">
            <div class="ui message relative">
                <p>这里设置站内消息通知是否提醒</p>
                <div class="ui form message-setting j-messageSet">
                    {{ method_field('PATCH') }}
                    {{ csrf_field() }}
                    <div class="field">
                        <div class="ui toggle checkbox">
                            <input type="checkbox" name="is_sx" value="{{ $user->is_sx }}" {{ $user->is_sx==1?'checked':'' }} class="hidden">
                            <label>私信</label>
                        </div>
                    </div>
                    <div class="field">
                        <div class="ui toggle checkbox">
                            <input type="checkbox" name="is_pl" value="{{ $user->is_pl }}" {{ $user->is_pl==1?'checked':'' }} class="hidden">
                            <label>评论</label>
                        </div>
                    </div>
                    <div class="field">
                        <div class="ui toggle checkbox">
                            <input type="checkbox" name="is_dz" value="{{ $user->is_dz }}" {{ $user->is_dz==1?'checked':'' }} class="hidden">
                            <label>点赞</label>
                        </div>
                    </div>
                    <div class="field">
                        <div class="ui toggle checkbox">
                            <input type="checkbox" name="is_sc" value="{{ $user->is_sc }}" {{ $user->is_sc==1?'checked':'' }} class="hidden">
                            <label>收藏</label>
                        </div>
                    </div>
                </div>
                <img src="/img/message.png" class="pull-right message-img">
            </div>
        </div>
    </div>
@stop

@section('js')
    <script src="/js/user-edit.js"></script>
@stop