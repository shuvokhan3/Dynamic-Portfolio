<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="" />
    <title>{{$seo->title}}</title>
    <meta name="og:site_name" content={{$seo->ogSiteName}}>
    <meta name="og:title" content={{$seo->ogTitle}}>
    <meta name="og:url" content={{$seo->ogUrl}}>
    <meta name="og:description" content={{$seo->ogDescription}}>
    <meta name="og:image" content={{$seo->ogImage}}>
    <meta name="description" content={{$seo->description}}/>
    <meta name="keyword" content={{$seo->keywords}}>

    <link rel="icon" type="image/x-icon" href="{{asset('assets/fav')}}" />

    <link href="{{asset('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css')}}" rel="stylesheet" />
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" />
    <link href="{{asset('css/style.css')}}" rel="stylesheet" />
    <script src="{{asset('https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js')}}"></script>
</head>

<body>
@include('components.navbar')
@include('components.loader')

<div class="" id="content-div">
    @yield('content')
</div>

@include('components.footer')

<!-- Add Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
