@extends('client.layouts.mobile')

@section('header_styles')

@endsection

@section('styles')
@endsection


@section('content')

    <!-- pop -->
    <div class="pop js_pop">
        <div class="pop_con jbg_wht pdg_s20 pdg_tb30" style="width:272px;">
            <!-- contents -->
            <div class="pdg_t10 jcr_grey2 jm_tss1 j_bold js_align_c">
                Are you sure you want to cancel your reservation?
            </div>
            <div class="pdg_t10 jcr_grey9 jm_tsss2 js_align_c lh_16" style="word-break: keep-all;">
                The refund amount varies according to the refund policy.
            </div>
            <div class="pdg_t05 jcr_ylw jm_tsss0 js_align_c">
                (Estimated refund amount: KRW 56,000)
            </div>
            <div class="pdg_t30 flx_side">
                <div class="w_50 pdg_r05">
                    <!-- button -->
                    <div class="w_100 pdg_r05 flx_c jbg_ylw jm_tsss2 jcr_wht j_bold js_pop_close" style="padding:9px 0;">
                        Confirm
                    </div>
                    <!-- // botton -->
                </div>
                <div class="w_50 pdg_l05">
                    <!-- button -->
                    <div class="w_100 pdg_l05 flx_c jbg_grey03 jm_tsss2 jcr_wht j_bold js_pop_close" style="padding:9px 0;">
                        cancel
                    </div>
                    <!-- // botton -->
                </div>
            </div>
            <!-- // contents -->
        </div>
    </div>
    <!-- // pop -->


    <div class="jbg_wht" style="position:relative; min-height:100%; padding-bottom:70px;">

        <!-- header -->
        <div class="jbg_wht flx_side" style="border-bottom:0px solid #ccc;">
            <div class="flx_lft_m" style="width:65px; height:60px;">
                <div class=" pdg_l15" onclick="location.href='javascript:history.go(-1);'">
                    <img src="../resources/images/icon/arrow_back.png" height="20px" alt="" />
                </div>
            </div>
            <div class="flx_c" style="height:60px;">
                <div class="jcr_grey2 jm_tss1 j_bold" style="height:17px;">
                    Reservation details
                </div>
            </div>
            <div class="flx_rgt_m" style="width:65px; height:60px;">
                <!--<div class="pdg_r10">
                <img src="../resources/images/icon/close_x.png" height="20px" alt="" />
                </div>
                <div class="pdg_r10">
                <img src="../resources/images/icon/share.png" height="20px" alt="" />
                </div>
                <div class="pdg_r15">
                <img src="../resources/images/icon/heart_big.png" height="20px" alt="" />
                </div>-->
            </div>
        </div>
        <!-- // header -->

        <!-- calendar -->
        <div class="hd_tit mgn_b15 js_align_c jcr_grey9"><span class="jm_tsss0">Reservation information</span></div>
        <div class="pdg_s15">
            <div class="w_100 flx_side">

                <!-- info -->
                <div class="w_100">
                    <div style="position:relative;">
                        <div class="tr_bt_wrap js_align_c jm_tsss08 jcr_wht jbg_ylw" style="width: 50px;height: 18px;line-height: 18px;">
                            Reserved
                        </div>
                        <div class="jcr_grey2 jm_tss1 j_bold pdg_b08" onclick="location.href='product_view.html'">
                            Dolphin Ecotourism Tour
                        </div>
                        <div class="w_100 cut_2 jcr_grey9 jm_tsss2 pdg_b03">
                            Reservation date <span class="jm_tsss2 jcr_grey2 j_bold js_align_r" style="float: right;">2020.11.14.Sat</span>
                        </div>
                        <div class="cut_2 jcr_grey9 jm_tsss2 pdg_b03">
                            Reservation time <span class="jm_tsss2 jcr_grey2 j_bold js_align_r" style="float: right;">17:00</span>
                        </div>
                        <div class="cut_2 jcr_grey9 jm_tsss2 pdg_b03">
                            Number of reservations <span class="jm_tsss2 jcr_grey2 j_bold js_align_r" style="float: right;">2 adults</span>
                        </div>
                        <div class="cut_2 jcr_grey9 jm_tsss2">
                            Reserved name <span class="jm_tsss2 jcr_grey2 j_bold js_align_r" style="float: right;">Hongyople</span>
                        </div>
                    </div>
                </div>
                <!-- // info -->
            </div>
        </div>


        <div class="pdg_tb20">
            <div class="hd_tit mgn_b15 js_align_c jcr_grey9"><span class="jm_tsss0">Payment information</span></div>

            <div class="pdg_s15">
                <div class="jbg_grey01 pdg_tb15 pdg_s10">
                    <div class=" pdg_b10 pdg_s05 line_bt01" style="border-color: #ccc">
                        <div class="flx_side_m jbg_grey01">
                            <div class="jm_tsss2 jcr_grey9">Payment method</div>
                            <div class="jm_tsss2 jcr_grey2" style="font-weight: 600;">
                                Credit card
                            </div>
                        </div>
                        <div class="flx_side_m jbg_grey01">
                            <div class="jm_tsss2 jcr_grey9">Product</div>
                            <div class="js_money02" style="font-size: 1.2rem;font-weight: 600;">
                                80,000
                            </div>
                        </div>
                        <div class="flx_side_m jbg_grey01">
                            <div class="jm_tsss2 jcr_grey9">Point discount</div>
                            <div class="js_money02" style="font-size: 1.2rem;font-weight: 600;">
                                - 0
                            </div>
                        </div>
                    </div>
                    <div class="flx_side_m pdg_t10 pdg_s05">
                        <div class="jm_tsss2 j_bold">Total payment</div>
                        <div class="js_money02">
                            80,000
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- fixed Bottom Button -->
        <div class="btm_bt_wrap02" style="padding:12px 15px 12px;">
            <!-- button -->
            <div class="flx_c jbg_grey03 jm_tss1 jcr_wht j_bold js_pop_open" style="padding:19px 0; border-radius:0px;">
                cancel reservation
            </div>
            <!--// button -->
        </div>
        <!-- // fixed Bottom Button -->

    </div>

@endsection



@section('scripts')



@endsection