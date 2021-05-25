@extends('client.layouts.mobile')


@section('styles')
@endsection


@section('content')
    <div class="jbg_wht" style="position:relative; min-height:100%; padding-bottom:100px;">
        <!-- header -->
        <div class="jbg_wht flx_side line_bt01">
            <div class="flx_lft_m" style="width:65px; height:60px;">
                <div class="pdg_l15" onclick="location.href='javascript:history.go(-1);'">
                    <img src="{{asset('mobile/client/images/icon/arrow_back.png')}}" height="20px" alt="" />
                </div>
            </div>
            <div class="flx_c" style="height:60px;">
                <div class="jcr_grey2 jm_tss1 j_bold" style="height:17px;">
                    @lang('client.agree_with')
                </div>
            </div>
            <div class="flx_rgt_m" style="width:65px; height:60px;">
                <!-- <div class=" pdg_r10">
                    <img src="../resources/images/icon/share.png" height="20px" alt="" />
                </div> -->
                <!-- <div class=" pdg_r15">
                    <img src="../resources/images/icon/heart_big.png" height="20px" alt="" />
                </div> -->
            </div>
        </div>
        <!-- // header -->

        <div class="js_agree">
            <!-- 최외곽_여백 지정 -->
            <div style="padding:15px 15px 0;">
                <div class="flx_side">
                    <div class="jm_tss1 jcr_grey2">
                        @lang('client.register_terms')
                    </div>
                    <div>
                        <div style="width:20px;">
                            <input type="checkbox" id="img_checkbox_01" class="normal">
                            <label for="img_checkbox_01">
                                <span></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="w_100 jbg_grey01 pdg_10 mgn_t05 sliding04_wrap">
                    <p class="jm_tsss2 jcr_grey9">
                        제1조 (목적)
                    </p>
                    <p class="jm_tsss2 jcr_grey9">
                        이 약관은 000회사가 운영하는…
                    </p>
                    <p class="jm_tsss2 jcr_grey9">
                        다음과 같다…다음과 같다…다음과 같다…다음과 같다…다음과 같다…다음과 같다…다음과 같다…다음과 같다…다음과 같다…다음과 같다…다음과 같다…다음과 같다…다음과 같다…
                    </p>
                    <p class="jm_tsss2 jcr_grey9">
                        다음과 같다…다음과 같다…다음과 같다…다음과 같다…다음과 같다…다음과 같다…다음과 같다…다음과 같다…다음과 같다…다음과 같다…다음과 같다…다음과 같다…다음과 같다…
                    </p>
                </div>
            </div>
            <!--// 최외곽_여백 지정 -->
            <!-- 최외곽_여백 지정 -->
            <div style="padding:20px 15px 0;">
                <div class="flx_side">
                    <div class="jm_tss1 jcr_grey2">
                        @lang('client.register_privacy_statement')
                    </div>
                    <div>
                        <div style="width:20px;">
                            <input type="checkbox" id="img_checkbox_02" class="normal">
                            <label for="img_checkbox_02">
                                <span></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="w_100 jbg_grey01 pdg_10 mgn_t05 sliding04_wrap">
                    <p class="jm_tsss2 jcr_grey9">
                        제1조 (목적)
                    </p>
                    <p class="jm_tsss2 jcr_grey9">
                        이 약관은 000회사가 운영하는…
                    </p>
                    <p class="jm_tsss2 jcr_grey9">
                        디음과 같다…
                    </p>
                </div>
            </div>
            <!--// 최외곽_여백 지정 -->
            <!-- 최외곽_여백 지정 -->
            <div style="padding:20px 15px 0;">
                <div class="flx_side">
                    <div class="jm_tss1 jcr_grey2 j_bold">
                        @lang('client.register_full_agreement')
                    </div>
                    <div>
                        <div style="width:20px;">
                            <input type="checkbox" id="img_checkbox" class="ck0">
                            <label for="img_checkbox">
                                <span></span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <!--// 최외곽_여백 지정 -->
            <!-- fixed Bottom Button -->
            <div class="btm_bt_wrap02" style="padding:12px 15px 12px;">
                <!-- 버튼 -->

                    <a class="js_btn flx_c jbg_grey02 jm_tss1 jcr_wht j_bold" href="{{route('client.mobile.register2')}}" style="padding:19px 0; border-radius:0px;">@lang('client.register_next')</a>

                <!--// 버튼 -->
            </div>
            <!-- // fixed Bottom Button -->
        </div>

    </div>

@endsection


@section('scripts')
@endsection