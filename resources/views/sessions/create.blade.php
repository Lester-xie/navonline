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
        <div class="ui middle center aligned grid">
            <div class="column">
                <h1 class="login-title">NAV · 辞典</h1>
                <div class="login-type">
                    <a href="{{ route('signup') }}">注册</a>
                    <a href="{{ route('login') }}" class="active">登录</a>
                </div>
                <form class="ui large form" action="{{ route('login') }}" method="post">
                    {{ csrf_field() }}
                    <div class="signup-wrap">
                        <div>
                            <div class="ui left icon input input-item">
                                <i class="user icon"></i>
                                <input type="text" name="account" placeholder="手机号或邮箱" value="{{old('account')}}" maxlength="20" class="inline">
                            </div>
                        </div>
                        <div>
                            <div class="ui left icon input input-item last-item ">
                                <i class="lock icon"></i>
                                <input type="password" name="password" placeholder="密码" value="{{old('password')}}" maxlength="20" class="inline">
                            </div>
                        </div>
                    </div>
                    <button class="ui fluid small submit positive button margin-t20" type="submit">登录</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.bootcss.com/jquery/2.2.3/jquery.min.js"></script>
<script src="/js/semantic.js"></script>
<script src="/js/app.js"></script>
</body>
</html>