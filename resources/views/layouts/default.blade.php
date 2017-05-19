<!DOCTYPE html>
<html>
<head>
    <title>NAV · 辞典</title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/semantic.css">
    <link rel="stylesheet" href="/css/noty.css">
    @yield('css')
    {{--<link rel="stylesheet" href="https://cdn.bootcss.com/font-awesome/4.5.0/css/font-awesome.min.css">--}}
</head>
<body>
@include('layouts._header')
<div>
    @include('shared.messages')
    <div class="ui container">
        @yield('content')
    </div>
</div>
@include('layouts._footer')
@yield('js')
</body>
</html>