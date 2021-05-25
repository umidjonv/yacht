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
            @lang('client.welcome_title')
        </div>
        <!--// LOGO -->

        <!-- outermost_margin designation -->
    <form action="{{route('client.mobile.login.attempt')}}" method="post">
            {{ csrf_field() }}
        <div style="padding:30px 15px 0;">
            <!-- input -->
            <fieldset class="login_border">
                <legend class="jm_tsss0 jcr_grey9" style="width:auto; padding:0 5px; height:15px;">@lang('client.login_id')</legend>
                <input class="w_100 js_input00" name="name" placeholder="" type="text" style="font-size:1.30rem;" value="{{old('name')}}">
            </fieldset>
            <fieldset class="mgn_t10 login_border">
                <legend class="jm_tsss0 jcr_grey9" style="width:auto; padding:0 5px; height:15px;">@lang('client.password')</legend>
                <input class="w_100 js_input00" name="password" placeholder="" type="password">
            </fieldset>
            <div style="height:30px;">
                @if ($errors->any())
                    @foreach($errors->all() as $error)
                    <div class="mgn_t10 jm_tsss1 jcr_ylw j_bold">
                        {{$error}}
                    </div>
                    @endforeach
                @endif
            </div>
            <!-- // input -->
            <!-- button -->
            <button class="w-100 jbg_ylw jm_tss1 jcr_wht j_bold" style="padding:19px 0; border-radius:0px;" type="submit" >
                @lang('client.login')
            </button>
            <!--// button -->
        </div>
        <!--// outermost_margin designation -->
        <!-- Link -->
        <div class="pdg_t25">
            <div class="flx_align">
                <div class="w_333 flx_c jm_tsss2 jcr_grey9" style="border-right:1px solid #ddd; word-break:keep-all;" >
                    <a href="{{route('client.mobile.register1')}}"> @lang('client.sign_up')</a>
                </div>
                <div class="w_333 flx_c jm_tsss2 jcr_grey9 pdg_s20"
                     style="border-right:1px solid #ddd; word-break:keep-all;" onclick="location.href='find_id.html'">
                    @lang('client.find_id')
                </div>
                <div class="w_333 flx_c jm_tsss2 jcr_grey9 pdg_s20" style="word-break:keep-all;" onclick="location.href='find_pwd.html'">
                    @lang('client.forgot_password')
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
                @lang('client.quick_login')
            </div>
            <!-- // SNS_Login -->
        </div>
        <!--// Outermost_margin designation -->
    </form>
    </div>
@endsection


@section('scripts')
@endsection
