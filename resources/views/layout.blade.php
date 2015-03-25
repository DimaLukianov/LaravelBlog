<!doctype html>

<html>

<head>

    <meta charset="utf-8" >

    <title>Blog</title>

    <link rel="stylesheet" href="/css/all.css">

</head>

<body>

    <div class="container">

        @include('/forms/head_link')

        <h1>Welcome to my blog</h1>

        @include('/forms/flash')

        @include('/forms/search')

        <hr>

        @yield('content')

    </div>

    <script src="/js/all.js"></script>

    @yield('footer')

</body>

</html>