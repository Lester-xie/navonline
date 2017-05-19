@extends('layouts.default')
@section('css')
    <link rel="stylesheet" href="/css/style.css">
@stop
@section('content')
    <div class="ui grid index-wrap">
        <div class="one wide column"></div>
        <div class="ten wide column u-index">
            <div class="slide-wrap">
                <div id="ei-slider" class="ei-slider">
                    <ul class="ei-slider-large">
                        <li>
                            <a href=""><img src="/img/large/1.jpg" alt="image01"/></a>
                        </li>
                        <li>
                            <a href=""><img src="/img/large/2.jpg" alt="image02"/></a>
                        </li>
                        <li>
                            <a href=""><img src="/img/large/3.jpg" alt="image03"/></a>
                        </li>
                        <li>
                            <a href=""><img src="/img/large/4.jpg" alt="image04"/></a>
                        </li>
                    </ul><!-- ei-slider-large -->
                    <ul class="ei-slider-thumbs">
                        <li class="ei-slider-element">Current</li>
                        <li><a href="#">Slide 1</a><img src="/img/thumbs/1.jpg" alt="thumb01"/></li>
                        <li><a href="#">Slide 2</a><img src="/img/thumbs/2.jpg" alt="thumb02"/></li>
                        <li><a href="#">Slide 3</a><img src="/img/thumbs/3.jpg" alt="thumb03"/></li>
                        <li><a href="#">Slide 4</a><img src="/img/thumbs/4.jpg" alt="thumb04"/></li>
                    </ul><!-- ei-slider-thumbs -->
                </div><!-- ei-slider -->
            </div>
            <div class="clearfix"></div>
            <div class="article-order-by">
                <a href="javascript:;" class="active">热门推荐</a>&emsp;
                <a href="javascript:;">最近更新</a>
            </div>
            <h4 class="ui horizontal divider header hot-recommend"><i class="icon book"></i></h4>
            <div>
                @foreach ( $articles as $item)
                    <div class="ui grid article-wrap">
                        <div class="ten wide column">
                            <h3 class="article-title"><a href="">{{ $item->title }}</a></h3>
                        </div>
                        <div class="six wide column">
                            <a href="" class="inline pull-left">
                                <img src="{{ $item->author_img?:'/img/default.png' }}" class="head-img">
                            </a>
                            <a href="" class="block pull-left margin-l20 article-author">{{ $item->author_name }}</a>
                            <br>
                            <button class="ui button basic green pull-left mini margin-l20 margin-t10">+ 关注</button>
                        </div>
                        <div class="ten wide column">
                            <a href=""><p>{{ $item->abstract }}</p></a>
                            <div class="margin-t20">
                                <a href=""><i class="icon unhide"></i>{{ $item->be_see }}</a>
                                <a href="" class="margin-l20"><i class="icon comment outline"></i>{{ $item->be_pl }}</a>
                                <a href="" class="margin-l20"><i class="icon heart outline"></i>{{ $item->be_dz }}</a>
                            </div>
                        </div>
                        <div class="six wide column">
                            <a href=""><img src="{{ $item->article_img }}" class="article-img"></a>
                        </div>
                    </div>
                    <div class="ui divider"></div>
                @endforeach
            </div>
        </div>
        <div class="five wide column">
            <img src="/img/weixin.png" id="weixin">
        </div>
        <div class="one wide column"></div>
    </div>
@stop
@section('js')
    <script type="text/javascript" src="/js/jquery.eislideshow.js"></script>
    <script type="text/javascript" src="/js/jquery.easing.1.3.js"></script>
    <script>
        (function () {
            $('#ei-slider').eislideshow({
                animation: 'center',
                autoplay: true,
                slideshow_interval: 3000,
                titlesFactor: 0
            });
        })();
    </script>
@stop