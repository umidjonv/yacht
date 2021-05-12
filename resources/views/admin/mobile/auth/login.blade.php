
<html lang="ko">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport"
          content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, width=device-width" />
    <title>요플</title>
    <link href="{{asset('frontend/css/app.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('frontend/css/font-awesome-4.5.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('frontend/css/fontello/css/fontello.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('frontend/css/jquery-ui.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('frontend/css/ripple2.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('frontend/css/swiper.min4.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('frontend/css/datepicker/default.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('frontend/css/datepicker/default.date.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('frontend/css/yacht_m_style.css')}}" rel="stylesheet" type="text/css" />
    <style>
        * {font-size: 0.625rem;}
    </style>

    <!-- js -->
    <script src="{{asset('frontend/js/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('frontend/js/swiper.min4.js')}}"></script>
    <script src="{{asset('frontend/js/datepicker/picker.js')}}"></script>
    <script src="{{asset('frontend/js/datepicker/picker.date.js')}}"></script>
    <script src="{{asset('frontend/js/script.js')}}"></script>
</head>

<body>
<form action="{{route('admin.mobile.login.attempt')}}"  method="post">
    <div class="jbg_grey01" style="position:relative; min-height:100%; padding-bottom:20px;">
    {{csrf_field()}}
    <!-- LOGO -->
        <div class="js_align_c" style="padding-top:50px;">
            <img src="{{asset('frontend/images/app_logo.png')}}" width="120px" alt=""/>
        </div>
        <div class="flx_c jm_tsss2 jcr_grey9">
            요트플레이에 오신 것을 환영합니다
        </div>
        <!--// LOGO -->

        <!-- 최외곽_여백 지정 -->
        <div style="padding:30px 15px 0;">
            <!-- input -->
            <fieldset class="login_border">
                <legend class="jm_tsss0 jcr_grey9" style="width:43px; padding:0 5px; height:15px;">아이디</legend>
                <input class="w_100 js_input00" name="name" placeholder="" type="text" style="font-size:1.30rem;">
            </fieldset>
            <fieldset class="mgn_t10 login_border">
                <legend class="jm_tsss0 jcr_grey9" style="width:53px; padding:0 5px; height:15px;">비밀번호</legend>
                <input class="w_100 js_input00" name="password" placeholder="" type="password">
            </fieldset>
            <div style="height:30px;">
                @if ($errors->any())
                    <div class="mgn_t10 jm_tsss1 jcr_ylw j_bold">
                        아이디 또는 비밀번호가 틀렸습니다.
                    </div>
                @endif
            </div>
            <!-- // input -->
            <!-- 버튼 -->
            <div class="flx_c jbg_ylw jm_tss1 jcr_wht j_bold" style="padding:19px 0; border-radius:0px;" onclick="javascript:document.forms[0].submit()">
                로그인
            </div>
            <!--// 버튼 -->
        </div>
        <!--// 최외곽_여백 지정 -->
        <!-- Link -->
        <div class="pdg_t25">
            <div class="flx_align">
                <div class="w_333 flx_c jm_tsss2 jcr_grey9" style="border-right:1px solid #ddd; word-break:keep-all;" onclick="location.href='join_01.html'">
                    회원가입
                </div>
                <div class="w_333 flx_c jm_tsss2 jcr_grey9 pdg_s20"
                     style="border-right:1px solid #ddd; word-break:keep-all;" onclick="location.href='find_id.html'">
                    아이디 찾기
                </div>
                <div class="w_333 flx_c jm_tsss2 jcr_grey9 pdg_s20" style="word-break:keep-all;" onclick="location.href='find_pwd.html'">
                    비밀번호 찾기
                </div>
            </div>
        </div>
        <!--// Link -->
        <!-- 최외곽_여백 지정 -->
        <div style="padding:20px 15px 0;">
            <!-- SNS_Login -->
            <div class="flx_align" style="padding-top:15%;">
                <div class="sns_ic" onclick="location.href='join_sns_01.html'">
                    <img src="{{asset('frontend/images/img_kakao.png')}}" />
                </div>
                <div class="sns_ic" onclick="location.href='join_sns_01.html'">
                    <img src="{{asset('frontend/images/img_naver.png')}}" />
                </div>
                <div class="sns_ic" onclick="location.href='join_sns_01.html'">
                    <img src="{{asset('frontend/images/img_apple.png')}}" />
                </div>
            </div>
            <div class="flx_c jm_tsss2 jcr_grey9 mgn_t20">
                간편 로그인으로 빠르게 이용해 보세요
            </div>
            <!-- // SNS_Login -->
        </div>
        <!--// 최외곽_여백 지정 -->
    </div>
</form>

</body>

</html>