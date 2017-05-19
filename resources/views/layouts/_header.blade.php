<div class="ui secondary menu top fixed navbar-top">
    <div class="ui container grid">
        <a href="/" class="logo left floated"><h1>NAV · 辞典</h1></a>
        <div class="one wide column"></div>
        <div class="ten wide column">
            <a class="navbar-item inline" href="">分类 </a>
            <a class="navbar-item inline" href="">音频 </a>
            <div class="search-wrap inline">
                <div class="item ui search">
                    <div class="ui icon input">
                        <input type="text" class="search-input prompt">
                        <i class="search link icon"></i>
                    </div>
                </div>
            </div>
            <div class="user-operation">
                <div class="ui buttons right register-buttons">
                    <a class="mini ui positive button" href="{{route('signup')}}">注册</a>
                    <div class="or"></div>
                    <a class="mini ui button" href="{{ route('login') }}">登录</a>
                </div>
            </div>
        </div>
    </div>
</div>