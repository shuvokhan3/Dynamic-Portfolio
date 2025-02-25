<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content=""/>
    <meta name="author" content="" />
    <title>Portfolio</title>
    <link rel="icon" type="image/x-icon" href="{{asset('assets/fav')}}" />
    <link href="{{asset('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css')}}" rel="stylesheet" />
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" />
    <link href="{{asset('css/style.css')}}" rel="stylesheet" />
</head>

<body>
@include('components.navbar')
@include('components.loader')

<div class="" id="content-div">
    @yield('content')
</div>

@include('components.footer')
</body>

</html>
