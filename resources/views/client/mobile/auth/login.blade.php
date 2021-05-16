@extends('client.layouts.mobile')


@section('styles')
@endsection


@section('content')
    <div class="jbg_grey01" style="position:relative; min-height:100%; padding-bottom:20px;">

        <!-- LOGO -->
        <div class="js_align_c" style="padding-top:50px;">
            <img src="{{asset("mobile/client/images/app_logo.png")}}" width="120px" alt=""/>
        </div>
        <div class="flx_c jm_tsss2 jcr_grey9">
            Welcome to Yacht Play
        </div>
        <!--// LOGO -->

        <!-- outermost_margin designation -->
        <div style="padding:30px 15px 0;">
            <!-- input -->
            <fieldset class="login_border">
                <legend class="jm_tsss0 jcr_grey9" style="width:43px; padding:0 5px; height:15px;">ID</legend>
                <input class="w_100 js_input00" name="" placeholder="" type="text" style="font-size:1.30rem;">
            </fieldset>
            <fieldset class="mgn_t10 login_border">
                <legend class="jm_tsss0 jcr_grey9" style="width:53px; padding:0 5px; height:15px;">password</legend>
                <input class="w_100 js_input00" name="" placeholder="" type="password">
            </fieldset>
            <div style="height:30px;">
                <div class="mgn_t10 jm_tsss1 jcr_ylw j_bold">
                    ID or password is incorrect.
                </div>
            </div>
            <!-- // input -->
            <!-- button -->
            <div class="flx_c jbg_ylw jm_tss1 jcr_wht j_bold" style="padding:19px 0; border-radius:0px;" onclick="location.href='index.html'">
                login
            </div>
            <!--// button -->
        </div>
        <!--// outermost_margin designation -->
        <!-- Link -->
        <div class="pdg_t25">
            <div class="flx_align">
                <div class="w_333 flx_c jm_tsss2 jcr_grey9" style="border-right:1px solid #ddd; word-break:keep-all;" >
                    <a href="{{route('client.mobile.register1')}}"> Sign Up</a>
                </div>
                <div class="w_333 flx_c jm_tsss2 jcr_grey9 pdg_s20"
                     style="border-right:1px solid #ddd; word-break:keep-all;" onclick="location.href='find_id.html'">
                    find ID
                </div>
                <div class="w_333 flx_c jm_tsss2 jcr_grey9 pdg_s20" style="word-break:keep-all;" onclick="location.href='find_pwd.html'">
                    Forgot your password
                </div>
            </div>
        </div>
        <!--// Link -->
        <!-- outermost_margin designation -->
        <div style="padding:20px 15px 0;">
            <!-- SNS_Login -->
            <div class="flx_align" style="padding-top:15%;">
                <div class="sns_ic" onclick="location.href='join_sns_01.html'">
                    <img src="{{asset("mobile/client/images/img_kakao.png")}}" />
                </div>
                <div class="sns_ic" onclick="location.href='join_sns_01.html'">
                    <img src="{{asset("mobile/client/images/img_naver.png")}}" />
                </div>
                <div class="sns_ic" onclick="location.href='join_sns_01.html'">
                    <img src="{{asset("mobile/client/images/img_apple.png")}}" />
                </div>
            </div>
            <div class="flx_c jm_tsss2 jcr_grey9 mgn_t20">
                Try it quickly with simple login
            </div>
            <!-- // SNS_Login -->
        </div>
        <!--// Outermost_margin designation -->
    </div>
@endsection


@section('scripts')
@endsection
