<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="X-CSRF-TOKEN" content="{{csrf_token()}}">

    <title>
        Font'Art - @yield('title')
    </title>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    @yield('style')
    @yield('head_scripts')
</head>
<body>
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand text-primary font-weight-bold" href="#">Font'Art</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-5">
                <li class="nav-item active">
                    <a class="nav-link" href="#">首页 <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">发现</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">话题</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0 mr-auto">
                <input class="form-control mr-sm-2" style="width: 300px;" type="search" placeholder="搜索你感兴趣的内容..."
                       aria-label="Search">
                <button class="btn btn-primary my-2 my-sm-0" type="submit">提问</button>
            </form>
        </div>
    </nav>
</div>
@yield('content')
<script src="{{asset('js/app.js')}}"></script>
@yield('body_scripts')
</body>
</html>
