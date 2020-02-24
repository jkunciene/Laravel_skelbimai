<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic:400,700,800" rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('/css/bootstrap/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ mix('/css/vendor.css') }}">
    <link rel="stylesheet" href="{{ mix('/css/style.css') }}">
    <title>Jolitos</title>
</head>
<body>
<div class="site-wrap">
    <div class="site-mobile-menu">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>
</div>



{{--@include('skelbimai/_partials/trends')--}}
{{--@include('skelbimai/_partials/testimonials')--}}
{{--@include('skelbimai/_partials/blog')--}}
{{--@include('skelbimai/_partials/newsletter')--}}
{{--@include('skelbimai/_partials/nav')--}}
@yield('content')

</body>
<script src="{{ mix('/js/app.js') }}"></script>
</html>