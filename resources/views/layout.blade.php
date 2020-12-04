<!DOCTYPE HTML>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="../css/app.css">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <script src="/js/app.js" defer></script>
</head>
<header>
    @include('header')
</header>
<body>
    <br>
    <div class="container">
    @yield('content')
    </div>
</body>
<footer class="footer bg-dark  fixed-bottom">
    @include('footer')
</footer>
</html>