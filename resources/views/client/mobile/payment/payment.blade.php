@extends('client.layouts.mobile')

@section('header_styles')

@endsection

@section('styles')

@endsection


@section('content')
    @php
        /*
    *******************************************************
    * <Payment Request Parameter>
    * The sample page only shows basic (required) parameters.
    *******************************************************
    */

    $merchantKey = "EYzu8jGGMfqaDEp76gSckuvnaHHu+bC4opsSN6lHv3b2lurNYkVXrZ7Z1AoqQnXI3eLuaUFyoRNC6FkrzVjceg=="; // merchantKey
    $MID         = "nicepay00m"; // merchantID
    $goodsName   = "나이스페이"; // goodsName
    $price       = "1004"; // amount of payment
    $buyerName   = "나이스"; // buyer name
    $buyerTel	 = "01000000000"; // buyer contact
    $buyerEmail  = "happy@day.co.kr"; // buyer email
    $moid        = "mnoid1234567890"; // order id
    $returnURL	 = "http://localhost:8080/payResult.php"; // absolute path, mobile payment only

    /*
    *******************************************************
    * <Hash encryption> (do not modify)
    *******************************************************
    */
    $ediDate = date("YmdHis");
    $hashString = bin2hex(hash('sha256', $ediDate.$MID.$price.$merchantKey, true));

    @endphp
    <form name="payForm" method="post" action="payResult_utf.php">
        <table>
            <tr>
                <th>PayMethod</th>
                <td><input type="text" name="PayMethod" value=""></td>
            </tr>
            <tr>
                <th>GoodsName</th>
                <td><input type="text" name="GoodsName" value="{{$goodsName}}"></td>
            </tr>
            <tr>
                <th>Amt</th>
                <td><input type="text" name="Amt" value="{{$price}}"></td>
            </tr>
            <tr>
                <th>MID</th>
                <td><input type="text" name="MID" value="{{$MID}}"></td>
            </tr>
            <tr>
                <th>Moid</th>
                <td><input type="text" name="Moid" value="{{$moid}}"></td>
            </tr>
            <tr>
                <th>BuyerName</th>
                <td><input type="text" name="BuyerName" value="{{$buyerName}}"></td>
            </tr>
            <tr>
                <th>BuyerEmail</th>
                <td><input type="text" name="BuyerEmail" value="{{$buyerEmail}}"></td>
            </tr>
            <tr>
                <th>BuyerTel</th>
                <td><input type="text" name="BuyerTel" value="{{$buyerTel}}"></td>
            </tr>
            <tr>
                <th>ReturnURL [Mobile only]</th>
                <td><input type="text" name="ReturnURL" value="{{$returnURL}}"></td>
            </tr>
            <tr>
                <th>Virtual Account Expiration Date(YYYYMMDD)</th>
                <td><input type="text" name="VbankExpDate" value=""></td>
            </tr>

            <input type="hidden" name="NpLang" value="EN"/> <!-- EN:English, CN:Chinese, KO:Korean -->
            <input type="hidden" name="GoodsCl" value="1"/>	<!-- products(1), contents(0)) -->
            <input type="hidden" name="TransType" value="0"/>	<!-- USE escrow false(0)/true(1) -->
            <input type="hidden" name="CharSet" value="utf-8"/>	<!-- Return CharSet -->
            <input type="hidden" name="ReqReserved" value=""/>	<!-- mall custom field -->

            <!-- DO NOT CHANGE -->
            <input type="hidden" name="EdiDate" value="{{$ediDate}}"/> <!-- YYYYMMDDHHMISS -->
            <input type="hidden" name="SignData" value="{{$hashString}}"/>	<!-- EncryptData -->
        </table>
        <a href="#" class="btn_blue" onClick="nicepayStart();">REQUEST</a>
    </form>
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