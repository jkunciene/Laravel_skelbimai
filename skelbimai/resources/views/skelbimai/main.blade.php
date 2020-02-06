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


    <title>Document</title>
</head>
<body>
@include('skelbimai/_partials/admin.panel')
@include('skelbimai/_partials/header')

{{--@include('skelbimai/_partials/trends')--}}
{{--@include('skelbimai/_partials/testimonials')--}}
{{--@include('skelbimai/_partials/blog')--}}
{{--@include('skelbimai/_partials/newsletter')--}}
{{--@include('skelbimai/_partials/nav')--}}
@yield('content')
@include('skelbimai/_partials/footer')
</body>
<script src="{{ mix('/js/app.js') }}"></script>
</html>