<!DOCTYPE html>
<html>
<head>
    <title>NAV · 辞典</title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/semantic.css">
    <link rel="stylesheet" href="/css/login.css">
</head>
<body>
<div style="width:330px;margin:100px auto;">
    <div>
        @include('shared.errors')
        @include('shared.messages')
        <div class="ui middle aligned center aligned grid">
            <div class="column">
                <h1 class="login-title">NAV · 辞典</h1>
                <div class="login-type">
                    <a href="{{ route('signup') }}" class="active">注册</a>
                    <a href="{{ route('login') }}">登录</a>
                </div>
                {{--<form class="ui large form" action="{{ route('users.store') }}" method="post">--}}
                <form class="ui large form" action="" method="post">
                    {{ csrf_field() }}
                    <div class="ui stacked segment">
                        <div class="field">
                            <div class="ui left icon input">
                                <i class="user icon"></i>
                                <input type="text" name="name" placeholder="昵称" value="{{old('name')}}" maxlength="12">
                            </div>
                        </div>
                        <div class="field">
                            <div class="ui left icon input">
                                <i class="tablet icon"></i>
                                <input type="text" name="phone" placeholder="手机号" value="{{old('phone')}}" maxlength="11">
                            </div>
                        </div>
                        <div class="field">
                            <div class="ui left icon input">
                                <i class="lock icon"></i>
                                <input type="password" name="password" placeholder="密码" value="{{old('password')}}" maxlength="20">
                            </div>
                        </div>
                        <button class="ui fluid large submit positive button" type="submit">登录</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
</body>
</html>