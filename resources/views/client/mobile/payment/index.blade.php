@extends('client.layouts.mobile')

@section('header_styles')

@endsection

@section('styles')

@endsection


@section('content')
    @php
        $product = $reservation->product()->first();

            /*
        *******************************************************
        * <Payment Request Parameter>
        * The sample page only shows basic (required) parameters.
        *******************************************************
        */

        $merchantKey = "EYzu8jGGMfqaDEp76gSckuvnaHHu+bC4opsSN6lHv3b2lurNYkVXrZ7Z1AoqQnXI3eLuaUFyoRNC6FkrzVjceg=="; // merchantKey
        $MID         = "nicepay00m"; // merchantID
        $goodsName   = $product->Name; // goodsName
        $price       = 835;//$reservation->TotalAmount; // amount of payment
        $buyerName   = $user->name; // buyer name
        $buyerTel	 = $user->contact; // buyer contact
        $buyerEmail  = $user->email; // buyer email
        $moid        = $reservation->Id; // order id
        //$returnURL	 = ""; // absolute path, mobile payment only

        /*
        *******************************************************
        * <Hash encryption> (do not modify)
        *******************************************************
        */
        $ediDate = date("YmdHis");
        $hashString = bin2hex(hash('sha256', $ediDate.$MID.$price.$merchantKey, true));

    @endphp

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
    <form name="payForm" method="post" action="{{route('client.mobile.payment.complete')}}">

        {{csrf_field()}}



        <div class="pdg_s15 pdg_b15">
            <fieldset class="mgn_t10 login_border">
                <legend class="jm_tsss0 jcr_grey9" style="width:0px; padding:0 0; height:15px;"></legend>
                <div style="height:35px;">
                    <input type="text" name="GoodsName" value="{{$goodsName}}"  class="w_100 js_input00">

                </div>
            </fieldset>

        </div>
        <input type="hidden" name="PayMethod" value="" class="w_100 js_input00">

        <div class="pdg_s15 pdg_b15">
            <fieldset class="mgn_t10 login_border">
                <legend class="jm_tsss0 jcr_grey9" style="width:0px; padding:0 0; height:15px;"></legend>
                <div style="height:35px;">
                    <input type="text" name="Amt" value="{{(int)$price}}" class="w_100 js_input00">

                </div>
            </fieldset>

        </div>

                    <input type="hidden" name="MID" value="{{$MID}}" class="w_100 js_input00">


        <div class="pdg_s15 pdg_b15">
            <fieldset class="mgn_t10 login_border">
                <legend class="jm_tsss0 jcr_grey9" style="width:0px; padding:0 0; height:15px;"></legend>
                <div style="height:35px;">
                    <input type="text" name="Moid" value="{{$moid}}" class="w_100 js_input00">

                </div>
            </fieldset>

        </div>
        <div class="pdg_s15 pdg_b15">
            <fieldset class="mgn_t10 login_border">
                <legend class="jm_tsss0 jcr_grey9" style="width:0px; padding:0 0; height:15px;"></legend>
                <div style="height:35px;">
                    <input type="text" name="BuyerName" value="{{$buyerName}}" class="w_100 js_input00">

                </div>
            </fieldset>

        </div>
        <div class="pdg_s15 pdg_b15">
            <fieldset class="mgn_t10 login_border">
                <legend class="jm_tsss0 jcr_grey9" style="width:0px; padding:0 0; height:15px;"></legend>
                <div style="height:35px;">
                    <input type="text" name="BuyerEmail" value="{{$buyerEmail}}" class="w_100 js_input00">

                </div>
            </fieldset>

        </div>
        <div class="pdg_s15 pdg_b15">
            <fieldset class="mgn_t10 login_border">
                <legend class="jm_tsss0 jcr_grey9" style="width:0px; padding:0 0; height:15px;"></legend>
                <div style="height:35px;">
                    <input type="text" name="BuyerTel" value="{{$buyerTel}}" class="w_100 js_input00">

                </div>
            </fieldset>

        </div>

                    <input type="hidden" name="VbankExpDate" value="" class="w_100 js_input00">

        <input type="hidden" name="ReturnURL" value="{{route('client.mobile.payment.complete')}}"> <!-- ReturnURL [Mobile only]-->

        <input type="hidden" name="NpLang" value="EN"/> <!-- EN:English, CN:Chinese, KO:Korean -->
        <input type="hidden" name="GoodsCl" value="1"/>	<!-- products(1), contents(0)) -->
        <input type="hidden" name="TransType" value="0"/>	<!-- USE escrow false(0)/true(1) -->
        <input type="hidden" name="CharSet" value="utf-8"/>	<!-- Return CharSet -->
        <input type="hidden" name="ReqReserved" value=""/>	<!-- mall custom field -->

        <!-- DO NOT CHANGE -->
        <input type="hidden" name="EdiDate" value="{{$ediDate}}"/> <!-- YYYYMMDDHHMISS Account Expiration Date(YYYYMMDD)-->
        <input type="hidden" name="SignData" value="{{$hashString}}"/>	<!-- EncryptData -->
        <div class="pdg_s15 pdg_b15">
            <div style="height:35px;">

            </div>
        </div>
    </form>

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