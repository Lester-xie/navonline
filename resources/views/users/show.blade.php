@extends('layouts.default')
@section('title', $user->name)
@section('css')
    <link rel="stylesheet" href="/css/user-index.css">
@stop
@section('content')
    <div class="ui grid">
        <div class="twelve wide column u-index">
            <div class="inline pull-left">
                <img src="{{ $user->head_src?:'/img/default.png' }}" class="head-icon">
            </div>
            <div class="block pull-left margin-l20">
                <a href="{{ route('users.show', $user->id) }}" class="username inline margin-b20">{{ $user->name }}</a>
                @if (Auth::check() && $user->id == Auth::user()->id)
                    <div class="ui margin-l20 inline edit-user">
                        <a href="{{ route('users.edit.profile', $user->id) }}" class="ui button basic green"><i class="icon edit"></i>编辑个人资料</a>
                    </div>
                @else
                    <div class="ui labeled button margin-l20 inline ">
                        <button class="ui button basic green"><i class="heart icon"></i> + 关注</button>
                        <a class="ui basic green label">
                            <i class="icon mail outline"></i>私信
                        </a>
                    </div>
                @endif
                <br>
                <p class="intro">爱写书的手艺人</p>
                <a class="ui labeled button" tabindex="0">
                    <div class="ui gray basic button"> 关注</div>
                    <div class="ui basic left pointing gray label">
                        1,024
                    </div>
                </a>
                <a class="ui labeled button" tabindex="0">
                    <div class="ui basic gray button"> 粉丝</div>
                    <div class="ui basic left pointing gray label">
                        2,048
                    </div>
                </a>
            </div>
            <div class="clearfix"></div>
            <div class="ui secondary pointing menu user-tab">
                <a class="item active"><i class="icon book"></i>他的文章 </a>
                <a class="item"><i class="icon heart"></i>关注 </a>
                <a class="item"><i class="icon users"></i>粉丝 </a>
                <a class="item"><i class="icon heart empty"></i>收藏 </a>
            </div>
        </div>
        <div class="six wide column">

        </div>
    </div>
@stop