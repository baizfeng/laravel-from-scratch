<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','Learning Laravel')</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    @include('nav')

    @if(session()->has('message'))
        <div class="alert alert-success">
            <strong>Success</strong> {{ session()->get('message') }}
        </div>
    @endif

    @yield('content')
</div>

<script src="/assets/js/bootstrap.min.js"></script>
<script src="/assets/js/jquery-3.3.1.slim.min.js"></script>
<script src="/assets/js/popper.min.js"></script>
</body>
</html>
