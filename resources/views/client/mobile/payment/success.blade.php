@extends('client.layouts.mobile')

@section('header_styles')

@endsection

@section('styles')

@endsection


@section('content')

    <div class="jbg_wht" style="position:relative; min-height:100%; padding-bottom:70px;">
        <!-- header -->
        <div class="jbg_wht flx_side" style="border-bottom:0px solid #ccc;">
            <div class="flx_lft_m" style="width:65px; height:60px;">
                <div class=" pdg_l15" onclick="location.href='javascript:history.go(-1);'">
                    <img src="{{asset('mobile/client/images/icon/arrow_back.png')}}" height="20px" alt="" />
                </div>
            </div>
            <div class="flx_c" style="height:60px;">
                <div class="jcr_grey2 jm_tss1 j_bold" style="height:17px;">
                    @lang('client.make_payment')
                </div>
            </div>
            <div class="flx_rgt_m" style="width:65px; height:60px;">
                <!--<div class="pdg_r10">
                <img src="../resources/images/icon/share.png" height="20px" alt="" />
                </div>
                <div class="pdg_r15">
                <img src="../resources/images/icon/heart_big.png" height="20px" alt="" />
                </div>-->
            </div>
        </div>
        <!-- // header -->

        {{dd($result)}}

        <!-- fixed Bottom Button -->
        <div class="btm_bt_wrap02 btm_bt_fix" style="padding:12px 15px 12px;">
            <!-- button -->
            <a class="flx_c jbg_ylw jm_tss1 jcr_wht j_bold" style="box-shadow: 0 4px 6px #0000001F; padding:19px 0; border-radius:0px;" href="javascript:void(0)"  onClick="nicepayStart();">
                REQUEST
            </a>
            <!--// button -->
        </div>
        <!-- // fixed Bottom Button -->

    </div>
@endsection


@section('scripts')
    <script src="https://web.nicepay.co.kr/v3/webstd/js/nicepay-3.0.js" type="text/javascript"></script>
    <script type="text/javascript">
        //It is executed when call payment window.
        function nicepayStart(){
            if(checkPlatform(window.navigator.userAgent) == "mobile"){
                document.payForm.action = "https://web.nicepay.co.kr/v3/v3Payment.jsp";
                document.payForm.submit();
            }else{
                goPay(document.payForm);
            }
        }

        //[PC Only]When pc payment window is closed, nicepay-3.0.js call back nicepaySubmit() function <<'nicepaySubmit()' DO NOT CHANGE>>
        function nicepaySubmit(){
            document.payForm.submit();
        }

        //[PC Only]payment window close function <<'nicepayClose()' DO NOT CHANGE>>
        function nicepayClose(){
            alert("payment window is closed");
        }

        //pc, mobile chack script (sample code)
        function checkPlatform(ua) {
            if(ua === undefined) {
                ua = window.navigator.userAgent;
            }

            ua = ua.toLowerCase();
            var platform = {};
            var matched = {};
            var userPlatform = "pc";
            var platform_match = /(ipad)/.exec(ua) || /(ipod)/.exec(ua)
                || /(windows phone)/.exec(ua) || /(iphone)/.exec(ua)
                || /(kindle)/.exec(ua) || /(silk)/.exec(ua) || /(android)/.exec(ua)
                || /(win)/.exec(ua) || /(mac)/.exec(ua) || /(linux)/.exec(ua)
                || /(cros)/.exec(ua) || /(playbook)/.exec(ua)
                || /(bb)/.exec(ua) || /(blackberry)/.exec(ua)
                || [];

            matched.platform = platform_match[0] || "";

            if(matched.platform) {
                platform[matched.platform] = true;
            }

            if(platform.android || platform.bb || platform.blackberry
                || platform.ipad || platform.iphone
                || platform.ipod || platform.kindle
                || platform.playbook || platform.silk
                || platform["windows phone"]) {
                userPlatform = "mobile";
            }

            if(platform.cros || platform.mac || platform.linux || platform.win) {
                userPlatform = "pc";
            }

            return userPlatform;
        }
    </script>
@endsection