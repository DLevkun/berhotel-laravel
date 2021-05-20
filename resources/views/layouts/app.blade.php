<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('css')
    <link rel="stylesheet" href="/css/footercss.css">
    <link rel="stylesheet" href="/css/header.css">
    <link rel="stylesheet" href="/css/header-adaptive.css">
    <title>@yield('title')</title>
</head>
<body>
    @include('inc.header')
    @yield('content')
    @include('inc.footer')
    
    <script src="/js/slider.js"> </script>
    <script src="/js/burger.js"> </script>
    <script src="/js/jquery-3.5.1.min.js"> </script>
    <script src="/js/up.js"></script>
</body>
</html>