<html lang="ko">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport"
          content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, width=device-width" />
    <title>Yople</title>
    <link href="{{asset("mobile/client/css/app.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{asset("fontawesome/css/fontawesome.min.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{asset("mobile/client/css/fontello/css/fontello.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{asset("css/bootstrap.min.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{asset("mobile/client/css/jquery-ui.min.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{asset("mobile/client/css/ripple2.min.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{asset("mobile/client/css/swiper.min4.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{asset("mobile/client/css/datepicker/default.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{asset("mobile/client/css/datepicker/default.date.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{asset("mobile/client/css/yacht_m_style.css")}}" rel="stylesheet" type="text/css" />
    <style>
        * {font-size: 0.625rem;}
    </style>

    <!-- js -->
    <script src="{{asset("js/jquery.min.js")}}"></script>
    <script src="{{asset("js/jquery.mask.min.js")}}"></script>
    <script src="{{asset("mobile/client/js/swiper.min4.js")}}"></script>
    <script src="{{asset("mobile/client/js/datepicker/picker.js")}}"></script>
    <script src="{{asset("mobile/client/js/datepicker/picker.date.js")}}"></script>
    <script src="{{asset("mobile/client/js/script.js")}}"></script>
</head>

<body>
    @yield('styles')


    @yield('content')

    @yield('scripts')


</body>

</html>