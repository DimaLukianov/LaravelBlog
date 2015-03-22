<!doctype html>
<html>
<head>
    <meta charset="utf-8" >
    <title>Blog</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        {!! link_to_route('posts.index', 'Home') !!}
        <h1>Welcome to my blog</h1>
        <hr>

        @yield('content')
    </div>
</body>
</html>