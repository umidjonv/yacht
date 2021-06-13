@extends("admin.layouts.mobile")
@section("content")
    <div class="jbg_wht" style="position:relative; min-height:100%; padding-bottom:20px;">

        <!-- header -->
        <div class="jbg_header flx_side">
            <div class="flx_lft_m" style="width:90px; height:60px;">
                <div class="pdg_l05 tp_tab" onclick="location.href='javascript:history.go(-1);'">
                    <svg width="32" height="20" viewBox="0 0 256 512">
                        <path
                                d="M231.293 473.899l19.799-19.799c4.686-4.686 4.686-12.284 0-16.971L70.393 256 251.092 74.87c4.686-4.686 4.686-12.284 0-16.971L231.293 38.1c-4.686-4.686-12.284-4.686-16.971 0L4.908 247.515c-4.686 4.686-4.686 12.284 0 16.971L214.322 473.9c4.687 4.686 12.285 4.686 16.971-.001z">
                        </path>
                    </svg>
                </div>
            </div>
            <div class="flx_c jm_ts2 jcr_wht j_bold" style="height:60px;">
                {{__("admin.reservation_detail")}}
            </div>
            <div class="flx_rgt_m" style="width:90px; height:60px;">
            </div>
        </div>
        <!-- // header -->

        <!-- Section -->
        <div class="jbg_wht pdg_s20 pdg_t30">
            <!-- title -->
            <div class="w_100 pdg_b10">
                <div class="jcr_grey1 jm_ts2 j_bold">
                    {{__("admin.reservation_booking_information")}}
                </div>
            </div>
            <!-- //title -->
        </div>
        <!-- // Section -->

        <!-- Section -->
        <div class="pdg_s15">
            <!-- List -->
            <div class="jbg_wht">
                <div style="border:1px solid #ccc;">
                    <!-- -->
                    <div class="w_100 flx_side_m" style="display:table; border-bottom:1px solid #eee;">
                        <div class="pdg_10 js_align_c jbg_grey5 jm_tss1 jcr_blu"
                             style="display:table-cell; width:90px;">
                            {{__("admin.reservation_mobile_booking_number")}}
                        </div>
                        <div class="pdg_s10 pdg_tb10 jm_tss1 jcr_grey1"
                             style="display:table-cell; width:calc(100% - 90px);">
                            20201203-0001
                        </div>
                    </div>
                    <!-- -->
                    <div class="w_100 flx_side_m" style="display:table; border-bottom:1px solid #eee;">
                        <div class="pdg_10 js_align_c jbg_grey5 jm_tss1 jcr_blu"
                             style="display:table-cell; width:90px;">
                            {{__("admin.reservation_booking_date")}}
                        </div>
                        <div class="pdg_s10 pdg_tb10 jm_tss1 jcr_grey1"
                             style="display:table-cell; width:calc(100% - 90px);">
                            {{date('Y.m.d H:i:s', strtotime($reservation->ReservationDate))}}
                        </div>
                    </div>
                    <!-- -->
                    <div class="w_100 flx_side_m" style="display:table; border-bottom:1px solid #eee;">
                        <div class="pdg_10 js_align_c jbg_grey5 jm_tss1 jcr_blu"
                             style="display:table-cell; width:90px;">
                            {{__("admin.reservation_reservation")}}
                        </div>
                        <div class="pdg_s10 pdg_tb10 jm_tss1 jcr_grey1"
                             style="display:table-cell; width:calc(100% - 90px);">
                            <input class="w_100 js_input02" name="" value="홍길동" placeholder="" type="text">
                        </div>
                    </div>
                    <!-- -->
                    <div class="w_100 flx_side_m" style="display:table; border-bottom:1px solid #eee;">
                        <div class="pdg_10 js_align_c jbg_grey5 jm_tss1 jcr_blu"
                             style="display:table-cell; width:90px;">
                            {{__("admin.contact")}}
                        </div>
                        <div class="pdg_s10 pdg_tb10 jm_tss1 jcr_grey1"
                             style="display:table-cell; width:calc(100% - 90px);">
                            <input class="w_100 js_input02" name="" value="010-2345-1221" placeholder="" type="text">
                        </div>
                    </div>
                    <!-- -->
                    <div class="w_100 flx_side_m" style="display:table; border-bottom:1px solid #eee;">
                        <div class="pdg_10 js_align_c jbg_grey5 jm_tss1 jcr_blu"
                             style="display:table-cell; width:90px;">
                            {{__("admin.reservation_personnel")}}
                        </div>
                        <div class="pdg_s10 pdg_tb10 jm_tss1 jcr_grey1"
                             style="display:table-cell; width:calc(100% - 90px);">
                            {{__("admin.reservation_for")}} 2{{__("admin.reservation_people")}}, {{__("admin.reservation_sofa")}} 2 {{__("admin.reservation_adults")}}
                        </div>
                    </div>
                    <!-- -->
                    <div class="w_100 flx_side_m" style="display:table; border-bottom:1px dashed #ccc;">
                        <div class="pdg_10 js_align_c jbg_grey5 jm_tss1 jcr_blu"
                             style="display:table-cell; width:90px;">
                            {{__("admin.reservation_this_file")}}
                        </div>
                        <div class="pdg_s10 pdg_tb10 jbg_grey5"
                             style="display:table-cell; width:calc(100% - 90px);">
                        </div>
                    </div>
                    <!-- -->
                    <div class="w_100 js_align_c"
                         style="padding:10px 10px 10px; display:table; border-bottom:1px solid #eee;">


                        <div class="input_border02 j_inline" style="vertical-align: middle;">
                            <div class="j_inline">
                                <!-- select -->
                                <input class="js_input00" style="width:100px; text-align:center;" name="" value="2020.12.25" placeholder="" type="text">
                                <!-- / select -->
                            </div>
                            <div class="j_inline pdg_r10" style="vertical-align:middle;">
                                <img src="{{asset('mobile/admin/images/calendar.png')}}" height="20px">
                            </div>
                        </div>

                        <div class="j_inline pdg_l05">
                            <!-- select -->
                            <div class="input_border">
                                <div class="js_slt01">
                                    <select name="" style="vertical-align:middle;">
                                        <optgroup label="시">
                                            <option value="1">00</option>
                                            <option value="2">01</option>
                                            <option value="3">02</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                            <!-- / select -->
                        </div>
                        <div class="j_inline pdg_l05">
                            <!-- select -->
                            <div class="input_border">
                                <div class="js_slt01">
                                    <select name="" style="vertical-align:middle;">
                                        <optgroup label="분">
                                            <option value="1">00</option>
                                            <option value="2">30</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                            <!-- / select -->
                        </div>
                    </div>
                    <!-- -->
                    <div class="w_100 flx_side_m" style="display:table; border-bottom:1px solid #eee;">
                        <div class="pdg_10 js_align_c jbg_grey5 jm_tss1 jcr_blu"
                             style="display:table-cell; width:90px;">
                            {{__("admin.reservation_points")}}
                        </div>
                        <div class="pdg_s10 pdg_tb10 jm_tsss2 jcr_grey1"
                             style="display:table-cell; width:calc(100% - 90px);">
                            5,000
                        </div>
                    </div>
                    <!-- -->
                    <div class="w_100 flx_side_m" style="display:table; border-bottom:1px solid #eee;">
                        <div class="pdg_10 js_align_c jbg_grey5 jm_tss1 jcr_blu"
                             style="display:table-cell; width:90px;">
                            {{__("admin.reservation_payment_amount")}}
                        </div>
                        <div class="pdg_s10 pdg_tb10 jm_tsss2 jcr_red1"
                             style="display:table-cell; width:calc(100% - 90px);">
                            75,000원
                        </div>
                    </div>
                    <!-- -->
                    <div class="w_100 flx_side_m" style="display:table; border-bottom:1px solid #eee;">
                        <div class="pdg_10 js_align_c jbg_grey5 jm_tss1 jcr_blu"
                             style="display:table-cell; width:90px;">
                            {{__("admin.reservation_status")}}
                        </div>
                        <div class="pdg_s10 pdg_tb10 jm_tsss2 jcr_grey1"
                             style="display:table-cell; width:calc(100% - 90px);">
                            예약접수
                        </div>
                    </div>
                </div>
            </div>
            <!-- // List  -->
        </div>
        <!-- // Section -->

        <!-- Section -->
        <div class="jbg_wht pdg_s20 pdg_t30">
            <!-- title -->
            <div class="w_100 pdg_b10">
                <div class="jcr_grey1 jm_ts2 j_bold">
                    {{__("admin.reservation_product_information")}}
                </div>
            </div>
            <!-- //title -->
        </div>
        <!-- // Section -->

        <!-- Section -->
        <div class="pdg_s15">
            <!-- List -->
            <div class="jbg_wht">
                <div style="border:1px solid #ccc;">
                    <!-- -->
                    <div class="w_100 flx_side_m" style="display:table; border-bottom:1px solid #eee;">
                        <div class="pdg_10 js_align_c jbg_grey5 jm_tss1 jcr_blu"
                             style="display:table-cell; width:90px;">
                            {{__("admin.reservation_separated")}}
                        </div>
                        <div class="pdg_s10 pdg_tb10 jm_tss1 jcr_grey1"
                             style="display:table-cell; width:calc(100% - 90px);">
                            투어
                        </div>
                    </div>
                    <!-- -->
                    <div class="w_100 flx_side_m" style="display:table; border-bottom:1px solid #eee;">
                        <div class="pdg_10 js_align_c jbg_grey5 jm_tss1 jcr_blu"
                             style="display:table-cell; width:90px;">
                            {{__("admin.yacht_yacht_description")}}
                        </div>
                        <div class="pdg_s10 pdg_tb10 jm_tss1 jcr_grey1"
                             style="display:table-cell; width:calc(100% - 90px);">
                            {{$reservation->product->Introduction}}
                        </div>
                    </div>
                    <!-- -->
                    <div class="w_100 flx_side_m" style="display:table; border-bottom:1px solid #eee;">
                        <div class="pdg_10 js_align_c jbg_grey5 jm_tss1 jcr_blu"
                             style="display:table-cell; width:90px;">
                            {{__("admin.product_yacht_name")}}
                        </div>
                        <div class="pdg_s10 pdg_tb10 jm_tss1 jcr_grey1"
                             style="display:table-cell; width:calc(100% - 90px);">
                            {{$reservation->product->yacht->Name}}
                        </div>
                    </div>
                    <!-- -->
                    <div class="w_100 flx_side_m" style="display:table; border-bottom:1px solid #eee;">
                        <div class="pdg_10 js_align_c jbg_grey5 jm_tss1 jcr_blu"
                             style="display:table-cell; width:90px;">
                            {{__("admin.product_area")}}
                        </div>
                        <div class="pdg_s10 pdg_tb10 jm_tss1 jcr_grey1"
                             style="display:table-cell; width:calc(100% - 90px);">
                            {{$reservation->product->yacht->Area}}
                        </div>
                    </div>
                    <!-- -->
                    <div class="w_100 flx_side_m" style="display:table; border-bottom:1px solid #eee;">
                        <div class="pdg_10 js_align_c jbg_grey5 jm_tss1 jcr_blu"
                             style="display:table-cell; width:90px;">
                            {{__("admin.reservation_prize_amount")}}
                        </div>
                        <div class="pdg_s10 pdg_tb10 jm_tss1 jcr_grey1"
                             style="display:table-cell; width:calc(100% - 90px);">
                            {{$reservation->product->Price}} {{__("admin.won")}}
                        </div>
                    </div>

                </div>
            </div>
            <!-- // List  -->
        </div>
        <!-- // Section -->
    </div>
@endsection