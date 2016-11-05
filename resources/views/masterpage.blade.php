<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <meta name="keywords" content="@yield('keywords')">
    <meta name="description" content="">

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"/>
</head>
<body>


<nav class="navbar navbar-default">
    <div class="container-fluid">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href ="{{asset("/")}}">Ana Sayfa</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{url('/hakkimizda')}}">Hakkımızda</a></li>
                <li><a href="{{url('/iletisim')}}">İletişim</a></li>
                <li><a href="{{url('/parametreDenemesi')}}">Parametresiz Parametre Denemesi</a></li>
                <li><a href="{{url('/parametreDenemesi/47')}}">47 Parametreli Parametre Denemesi</a></li>
            </ul>
        </div>

    </div>
</nav>


<div class="container">
    @yield('content')
</div>

<script type="text/javascript" src="{{asset('js/jQuery.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
</body>
</html>