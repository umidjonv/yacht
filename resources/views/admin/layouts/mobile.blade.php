<html lang="ko">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, width=device-width" />
    <title>Ship owner manager</title>
    <link href="{{asset('mobile/admin/css/app.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('fontawesome/css/all.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('mobile/admin/css/fontello/css/fontello.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{asset('mobile/admin//css/jquery-ui.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('mobile/admin///css/ripple2.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('mobile/admin//css/yochta_m_style.css')}}" rel="stylesheet" type="text/css" />


</head>

<body>


    @yield('content')

    <!-- js -->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('mobile/admin/js/script.js')}}"></script>
    <script src="{{asset('fontawesome/js/fontawesome.js')}}"></script>

    @yield('scripts')


</body>

</html>