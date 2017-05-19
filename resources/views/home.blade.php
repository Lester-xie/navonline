@extends('layouts.default')
@section('css')
    <link rel="stylesheet" href="/css/style.css">
@stop
@section('content')
    hello heroku
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
