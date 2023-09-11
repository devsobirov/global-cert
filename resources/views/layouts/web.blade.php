<!DOCTYPE html>
<html class="no-js" lang="{{app()->getLocale()}}">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">

    <title>@yield('meta_title', $settings->meta_title)</title>
    <meta name="description" content="@yield('meta_description', $settings->meta_description)">
    <meta name="keywords" content="@yield('meta_keywords', $settings->meta_keywords)">
    <link rel="shortcut icon" href="{{asset($settings->favicon ?? 'favicon.ico')}}">

    <script src="{{asset('assets/classes/js/jquery.js')}}"></script>
    <script src="{{asset('assets/classes/js/jqueryui.js')}}" defer></script>

    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/theme-plugins.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

    {!! $settings->google_metrics !!}
    {!! $settings->yandex_metrics !!}
</head>

<body id="bg">

<div id="layout">

    <header id="header" class="header">
        <div class="container">
            @include('layouts.includes.top-header')
        </div>
        <div class="header-inner">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        @include('layouts.includes.navigation')
                    </div>
                </div>
            </div>
        </div>
    </header>


    @yield('content')


    @include('layouts.includes.call-to-action')
    @include('layouts.includes.footer')
    <!--noindex-->

    <!--/noindex-->
    <script src="{{asset('assets/js/bootstrap.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/js/js.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/js/theme-plugins.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/js/main.js')}}" type="text/javascript"></script>

    <script>
        if (("{{session('callback')}}")) {
            $('#callbackModal').modal('show');
        }
    </script>
</div>
</body>
</html>
