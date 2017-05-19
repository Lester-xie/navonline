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
        </div>
        @if (Auth::check())
            <div class="user-operation">
                <div class="ui dropdown relative">
                    <i class="icon alarm outline"></i>
                    通知
                    @if((Auth::user()->is_sx_total+Auth::user()->is_pl_total+Auth::user()->is_dz_total+Auth::user()->is_sc_total)>0 &&
                    (Auth::user()->is_sx_total+Auth::user()->is_pl_total+Auth::user()->is_dz_total+Auth::user()->is_sc_total)<100)
                        <span class="tip-number">{{ Auth::user()-total }}</span>
                    @elseif((Auth::user()->is_sx_total+Auth::user()->is_pl_total+Auth::user()->is_dz_total+Auth::user()->is_sc_total)>99)
                        <span class="tip-number">..</span>
                    @endif
                    <div class="menu" style="border-radius:0;">
                        <div class="item">
                            私信
                            @if(Auth::user()->is_sx_total>0)
                                <span class="item-tip-number">{{ Auth::user()->is_sx_total }}</span>
                            @endif
                        </div>
                        <div class="item">
                            评论
                            @if(Auth::user()->is_pl_total>0)
                                <span class="item-tip-number">{{ Auth::user()->is_sx_total }}</span>
                            @endif
                        </div>
                        <div class="item">
                            点赞
                            @if(Auth::user()->is_dz_total>0)
                                <span class="item-tip-number">{{ Auth::user()->is_sx_total }}</span>
                            @endif
                        </div>
                        <div class="item">
                            收藏
                            @if(Auth::user()->is_sc_total>0)
                                <span class="item-tip-number">{{ Auth::user()->is_sx_total }}</span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="ui dropdown" id="userInfo" data-uid="{{ Auth::user()->id }}" data-uname="{{ Auth::user()->name }}">
                    <img src="{{ Auth::user()->head_src?:'/img/default.png' }}" class="head-img"> <i class="dropdown icon"></i>
                    <div class="menu" style="border-radius:0;">
                        <a class="item" href="{{ route('users.show', Auth::user()->id) }}">我的主页</a>
                        <div class="item">我的收藏</div>
                        <div class="item">浏览记录</div>
                        <div class="item">草稿箱</div>
                        <div class="divider"></div>
                        <a class="item" href="{{ route('users.edit.profile', Auth::user()->id) }}">设置</a>
                        <form action="{{ route('logout') }}" method="POST" class="item j-submit" id="logout">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            退出
                        </form>
                    </div>
                </div>
            </div>
        @else
            <div class="ui buttons right register-buttons">
                <a class="mini ui positive button" href="{{route('signup')}}">注册</a>
                <div class="or"></div>
                <a class="mini ui button" href="{{ route('login') }}">登录</a>
            </div>
        @endif
        <div class="item write-button right">
            <button class="medium ui button positive">写故事</button>
        </div>
    </div>
</div>