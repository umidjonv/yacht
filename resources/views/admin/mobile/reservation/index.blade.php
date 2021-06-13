@extends('admin.layouts.mobile')
@section('content')
    <!-- pop -->
    <div class="pop">
        <div class="jbg_wht j_rd08 pop_con" style="width:90%;">
            <!-- header -->
            <div class="flx_side" style="border-bottom: 1px solid #eee;">
                <div class="js_align_c pdg_t20 pdg_b10 jcr_grey9 jm_ts2 mgn_l35" style="width:calc(100% - 75px);">
                    {{__("admin.reservation_mobile_refunds")}}
                </div>
                <div class="pdg_10 js_pop_close">
                    <img src="{{asset('mobile/admin/images/ic_close.png')}}" height="20px">
                </div>
            </div>
            <!-- / header -->
            <!-- contents -->
            <div class="pdg_s15 pdg_t20 pdg_b10">
                <!-- article -->
                <div class="pdg_s15 pdg_t20 pdg_b15" style="border:3px solid #ebf0f1;">
                    <div class="pdg_s10 jcr_grey5 jm_tss2 lh_16 js_align_c" style="word-break: keep-all;">
                        {{__("amdin.reservation_mobile_booking_number")}} <font
                                class="pdg_l10 jcr_aqua">20201130-0002</font>{{__("admin.reservation_is_the_refund_policy_by_payment_of_the_amount_of")}}
                        <font
                                class="pdg_l10 jcr_red2">50%</font> {{__("admin.reservation_refund")}}.
                    </div>
                    <div class="pdg_t15 jcr_grey2 jm_tss2 lh_16 js_align_c" style="word-break: keep-all; ">
                        {{__("admin.reservation_refund_expected_amount")}} : <font class="pdg_l10 jcr_blk jm_tl1 ">77,500</font>{{__("admin.won")}}
                    </div>
                </div><!-- / article -->
            </div>
            <div class="pdg_s15">
                <!-- article -->
                <div style="border:1px solid #dedfe9;">
                    <!-- -->
                    <div class="w_100 flx_side_m" style="display:table; border-bottom:1px solid #eee;">
                        <div class="pdg_10 js_align_c jbg_grey5 jm_tss1 jcr_blu"
                             style="display:table-cell; width:90px;">
                            {{__("admin.reservation_refund_amount")}}
                        </div>
                        <div class="pdg_s10 pdg_tb10 jm_tss1 jcr_grey1"
                             style="display:table-cell; width:calc(100% - 90px);">
                            <input class="w_100 js_input02" name=""
                                   placeholder="{{__("admin.reservation_the_refund_amount_numeric_input_only")}}"
                                   type="password">
                        </div>
                    </div>
                    <!-- -->
                    <div class="w_100 flx_side_m" style="display:table;">
                        <div class="pdg_10 js_align_c jbg_grey5 jm_tss1 jcr_blu"
                             style="display:table-cell; width:90px;">
                            {{__("admin.reservation_payment_amount")}}
                        </div>
                        <div class="pdg_s10 pdg_tb10 jm_tss1 jcr_grey1"
                             style="display:table-cell; width:calc(100% - 90px);">
                            155,000
                        </div>
                    </div>
                </div><!-- / article -->
            </div>
            <!-- section -->
            <div class="flx_c pdg_t25 pdg_b30">
                <!-- button -->
                <div class="bt_btm_wht mgn_s05 js_pop_close" style="width:90px; height:40px">
                    {{__("admin.reservation_cancel")}}
                </div>
                <!--// button -->
                <!-- button -->
                <div class="bt_btm_blue mgn_s05 js_pop_close" style="width:90px; height:40px">
                    {{__("admin.reservation_mobile_refunds")}}
                </div>
                <!--// button -->
            </div>
            <!-- / section -->
            <!-- // contents -->
        </div>
    </div>
    <!-- // pop -->

    <div class="jbg_grey4" style="position:relative; min-height:100%; padding-bottom:20px;">

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
                {{__("admin.reservation_booking_management")}}
            </div>
            <div class="flx_rgt_m" style="width:90px; height:60px;">
            </div>
        </div>
        <!-- // header -->
        <!-- Section -->
        <div class="jbg_wht pdg_s20 pdg_tb15">
            <!-- input -->
            <div class="w_100 flx_side_b">
                <div class="pdg_r10" style="width:calc(100% - 80px);">
                    <div class="login_border flx_side_m">
                        <div style="width:calc(100% - 30px);">
                            <input class="w_100 js_input00" name=""
                                   placeholder="{{__("admin.reservation_enter_search_terms")}}" type="text">
                        </div>
                        <div class="flx_c" style="height:43px; width:24px;">
                            <img src="{{asset("mobile/admin/images/ic_search.png")}}" height="24px" alt=""/>
                        </div>
                    </div>
                </div>
                <div style="width:80px;">
                    <!-- button -->
                    <div class="flx_c jbg_btn01 jm_tsss2 jcr_wht j_bold j_rd04" style="height: 43px;"
                         onclick="location.href='schedule.html'">
                        {{__("admin.reservation_booking_calendar")}}
                    </div>
                    <!--// button -->
                </div>
            </div>
            <!-- // input -->
        </div>
        <!-- // Section -->
        <!-- Tab -->
        <div class="pdg_s20">
            <div class="pdg_t15">
                <div class="flx_side_m jtab_menu_wrap01">
                    <div class="w_25 flx_c jtab_menu01 tab_menu on">
                        <a href="#resev_in">{{__("admin.reservation_bookings")}}</a>
                    </div>
                    <div class="w_25 flx_c jtab_menu01 tab_menu">
                        <a href="#resev_cf">{{__("admin.reservation_booking_confirmation")}}</a>
                    </div>
                    <div class="w_25 flx_c jtab_menu01 tab_menu">
                        <a href="#resev_done">{{__("admin.reservation_completed")}}</a>
                    </div>
                    <div class="w_25 flx_c jtab_menu01 tab_menu">
                        <a href="#resev_cancel">{{__("admin.reservation_cancel")}}</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- // Tab -->
        <!-- Section -->
        <div id="resev_in" class="pdg_s05 mgn_t15 tab_con on">
            <!-- List -->
        @foreach($reservations as $reservation)
            <!-- List_cell -->
                <div class="jbg_wht pdg_s15 pdg_t10 pdg_b20 mgn_b05 j_rd08">
                    <div>
                        <div class="flx_lft_m">
                            <div class="flx_lft_m" style="width:calc(100% - 80px);">
                                <!-- State -->
                                <div class="bt_sml01">
                                    {{__("admin.reservation_tour")}}
                                </div>
                                <!--// State -->
                                <div>
                                    <div class="pdg_l10 jm_tss3 jcr_grey1 j_bold">
                                        {{date("Y.m.d",strtotime($reservation->ReservationDate))}}
                                    </div>
                                    <div class="pdg_l10 jm_tss1 jcr_grey5">
                                        {{date("Ymd-0002",strtotime($reservation->ReservationDate))}}
                                    </div>
                                </div>
                            </div>
                            <div class="flx_dn" style="margin-left:auto;">
                                <!-- button -->
                                <div class="mgn_b05 bt_sml02_blu" style="width:70px;"
                                     onclick="window.location.href = '{{route("admin.mobile.reservation.confirm", $reservation->Id)}}'">
                                    {{__("admin.reservation_booking_confirmation")}}
                                </div>
                                <!--// button -->
                                <!-- button -->
                                <div class="bt_sml02_green" style="width:70px;"
                                     onclick="window.location.href = '{{route("admin.mobile.reservation.cancel", $reservation->Id)}}'">
                                    {{__("admin.reservation_cancelled")}}
                                </div>
                                <!--// button -->
                            </div>
                        </div>
                        <div class="pdg_t10 flx_lft">
                            <!-- thumbnail -->
                            <div class="pdg_t03" style="width:84px;">
                                <div class="thumb_02 flx_c">
                                    <img src="{{asset("Storage/product/{$reservation->product->images[0]->Name}")}}"
                                         alt=""/>
                                </div>
                            </div>
                            <!-- // thumbnail -->
                            <div class="pdg_l10">
                                <div class="cut_2 jm_tss2 j_bold">
                                    {{$reservation->product->Name}}
                                </div>
                                <div class="jm_tss1 jcr_grey3">
                                    {{__("admin.reservation_date_of_use")}} : <font
                                            class="pdg_l10 jcr_blu">{{date("Y.m.d", strtotime($reservation->ReservationDate))}}</font>
                                </div>
                                <div class="jm_tss1 jcr_grey3">
                                    {{__("admin.reservation_booking_time")}} : <font
                                            class="pdg_l10 jcr_blu">{{$reservation->ReservationTime}}</font>
                                </div>
                                <div class="jm_tss1 jcr_grey3">
                                    {{__("admin.reservation_payment")}} : <font
                                            class="pdg_l10 jcr_red1 js_money">{{$reservation->TotalAmount}}</font>
                                </div>
                            </div>
                        </div>
                        <div class="mgn_t10 flx_lft_m line_t_dash">
                            <div class="pdg_t10" style="width:calc(100% - 80px);">
                                <div class="jm_tss1 jcr_grey2 j_bold">
                                    {{__("admin.reservation_information_priority")}} {{$reservation->product->CapacityAdult+$reservation->product->CapacityChild}} {{__("admin.reservation_people")}},
                                    {{__("admin.reservation_sofa")}} {{$reservation->product->CapacityAdult}} {{__("admin.reservation_adults")}}
                                </div>
                                <div class="jm_tss1 jcr_grey2 j_bold">
                                    {{__("admin.contact")}} : {{$reservation->vendor->Contact}}
                                </div>
                            </div>
                            <div class="pdg_t10 js_align_c" style="margin-left:auto;">
                                <div class="pdg_b05 jm_ts1 jcr_blu j_bold">
                                    {{__("admin.reservation_bookings")}}
                                </div>
                                <!-- button -->
                                <div class="bt_sml03" style="width:70px;"
                                     onclick="location.href='{{route("admin.mobile.reservation.show", $reservation->Id)}}'">
                                    {{__("admin.reservation_detail")}}
                                </div>
                                <!--// button -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- // List_cell -->
        @endforeach
        <!-- // List  -->
        </div>
        <!-- // Section -->
        <!-- Section -->
        <div id="resev_cf" class="pdg_s05 mgn_t15 tab_con">
            <!-- List -->
        @foreach($reservations->where("Status", \App\Common\Enums\ReservationConstants::PAYED) as $reservation)
            <!-- List_cell -->
                <div class="jbg_wht pdg_s15 pdg_t10 pdg_b20 mgn_b05 j_rd08">
                    <div>
                        <div class="flx_lft_m">
                            <div class="flx_lft_m" style="width:calc(100% - 80px);">
                                <!-- State -->
                                <div class="bt_sml01">
                                    {{__("admin.reservation_tour")}}
                                </div>
                                <!--// State -->
                                <div>
                                    <div class="pdg_l10 jm_tss3 jcr_grey1 j_bold">
                                        {{date("Y.m.d",strtotime($reservation->ReservationDate))}}
                                    </div>
                                    <div class="pdg_l10 jm_tss1 jcr_grey5">
                                        {{date("Ymd-0002",strtotime($reservation->ReservationDate))}}
                                    </div>
                                </div>
                            </div>
                            <div class="flx_dn" style="margin-left:auto;">
                                <!-- button -->
                                <div class="mgn_b05 bt_sml02_blu" style="width:70px;"
                                     onclick="window.location.href = '{{route("admin.mobile.reservation.confirm", $reservation->Id)}}'">
                                    {{__("admin.reservation_booking_confirmation")}}
                                </div>
                                <!--// button -->
                                <!-- button -->
                                <div class="bt_sml02_green" style="width:70px;"
                                     onclick="window.location.href = '{{route("admin.mobile.reservation.cancel", $reservation->Id)}}'">
                                    {{__("admin.reservation_cancelled")}}
                                </div>
                                <!--// button -->
                            </div>
                        </div>
                        <div class="pdg_t10 flx_lft">
                            <!-- thumbnail -->
                            <div class="pdg_t03" style="width:84px;">
                                <div class="thumb_02 flx_c">
                                    <img src="{{asset("Storage/product/{$reservation->product->images[0]->Name}")}}"
                                         alt=""/>
                                </div>
                            </div>
                            <!-- // thumbnail -->
                            <div class="pdg_l10">
                                <div class="cut_2 jm_tss2 j_bold">
                                    {{$reservation->product->Name}}
                                </div>
                                <div class="jm_tss1 jcr_grey3">
                                    {{__("admin.reservation_date_of_use")}} : <font
                                            class="pdg_l10 jcr_blu">{{date("Y.m.d", strtotime($reservation->ReservationDate))}}</font>
                                </div>
                                <div class="jm_tss1 jcr_grey3">
                                    {{__("admin.reservation_booking_time")}} : <font
                                            class="pdg_l10 jcr_blu">{{$reservation->ReservationTime}}</font>
                                </div>
                                <div class="jm_tss1 jcr_grey3">
                                    {{__("admin.reservation_payment")}} : <font
                                            class="pdg_l10 jcr_red1 js_money">{{$reservation->TotalAmount}}</font>
                                </div>
                            </div>
                        </div>
                        <div class="mgn_t10 flx_lft_m line_t_dash">
                            <div class="pdg_t10" style="width:calc(100% - 80px);">
                                <div class="jm_tss1 jcr_grey2 j_bold">
                                    {{__("admin.reservation_information_priority")}} {{$reservation->product->CapacityAdult+$reservation->product->CapacityChild}} {{__("admin.reservation_people")}},
                                    {{__("admin.reservation_sofa")}} {{$reservation->product->CapacityAdult}} {{__("admin.reservation_adults")}}
                                </div>
                                <div class="jm_tss1 jcr_grey2 j_bold">
                                    {{__("admin.contact")}} : {{$reservation->vendor->Contact}}
                                </div>
                            </div>
                            <div class="pdg_t10 js_align_c" style="margin-left:auto;">
                                <div class="pdg_b05 jm_ts1 jcr_blu j_bold">
                                    {{__("admin.reservation_bookings")}}
                                </div>
                                <!-- button -->
                                <div class="bt_sml03" style="width:70px;"
                                     onclick="location.href='{{route("admin.mobile.reservation.show", $reservation->Id)}}'">
                                    {{__("admin.reservation_detail")}}
                                </div>
                                <!--// button -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- // List_cell -->
        @endforeach
        <!-- // List  -->
        </div>
        <!-- // Section -->

        <!-- Section -->
        <div id="resev_done" class="pdg_s05 mgn_t15 tab_con">
            <!-- List -->
            <!-- List_cell -->
        @foreach($reservations->where("Status", \App\Common\Enums\ReservationConstants::COMPLETED) as $reservation)
            <!-- List_cell -->
                <div class="jbg_wht pdg_s15 pdg_t10 pdg_b20 mgn_b05 j_rd08">
                    <div>
                        <div class="flx_lft_m">
                            <div class="flx_lft_m" style="width:calc(100% - 80px);">
                                <!-- State -->
                                <div class="bt_sml01">
                                    {{__("admin.reservation_tour")}}
                                </div>
                                <!--// State -->
                                <div>
                                    <div class="pdg_l10 jm_tss3 jcr_grey1 j_bold">
                                        {{date("Y.m.d",strtotime($reservation->ReservationDate))}}
                                    </div>
                                    <div class="pdg_l10 jm_tss1 jcr_grey5">
                                        {{date("Ymd-0002",strtotime($reservation->ReservationDate))}}
                                    </div>
                                </div>
                            </div>
                            <div class="flx_dn" style="margin-left:auto;">
                                <!-- button -->
                                <div class="mgn_b05 bt_sml02_blu" style="width:70px;"
                                     onclick="window.location.href = '{{route("admin.mobile.reservation.confirm", $reservation->Id)}}'">
                                    {{__("admin.reservation_booking_confirmation")}}
                                </div>
                                <!--// button -->
                                <!-- button -->
                                <div class="bt_sml02_green" style="width:70px;"
                                     onclick="window.location.href = '{{route("admin.mobile.reservation.cancel", $reservation->Id)}}'">
                                    {{__("admin.reservation_cancelled")}}
                                </div>
                                <!--// button -->
                            </div>
                        </div>
                        <div class="pdg_t10 flx_lft">
                            <!-- thumbnail -->
                            <div class="pdg_t03" style="width:84px;">
                                <div class="thumb_02 flx_c">
                                    <img src="{{asset("Storage/product/{$reservation->product->images[0]->Name}")}}"
                                         alt=""/>
                                </div>
                            </div>
                            <!-- // thumbnail -->
                            <div class="pdg_l10">
                                <div class="cut_2 jm_tss2 j_bold">
                                    {{$reservation->product->Name}}
                                </div>
                                <div class="jm_tss1 jcr_grey3">
                                    {{__("admin.reservation_date_of_use")}} : <font
                                            class="pdg_l10 jcr_blu">{{date("Y.m.d", strtotime($reservation->ReservationDate))}}</font>
                                </div>
                                <div class="jm_tss1 jcr_grey3">
                                    {{__("admin.reservation_booking_time")}} : <font
                                            class="pdg_l10 jcr_blu">{{$reservation->ReservationTime}}</font>
                                </div>
                                <div class="jm_tss1 jcr_grey3">
                                    {{__("admin.reservation_payment")}} : <font
                                            class="pdg_l10 jcr_red1 js_money">{{$reservation->TotalAmount}}</font>
                                </div>
                            </div>
                        </div>
                        <div class="mgn_t10 flx_lft_m line_t_dash">
                            <div class="pdg_t10" style="width:calc(100% - 80px);">
                                <div class="jm_tss1 jcr_grey2 j_bold">
                                    {{__("admin.reservation_information_priority")}} {{$reservation->product->CapacityAdult+$reservation->product->CapacityChild}} {{__("admin.reservation_people")}},
                                    {{__("admin.reservation_sofa")}} {{$reservation->product->CapacityAdult}} {{__("admin.reservation_adults")}}
                                </div>
                                <div class="jm_tss1 jcr_grey2 j_bold">
                                    {{__("admin.contact")}} : {{$reservation->vendor->Contact}}
                                </div>
                            </div>
                            <div class="pdg_t10 js_align_c" style="margin-left:auto;">
                                <div class="pdg_b05 jm_ts1 jcr_blu j_bold">
                                    {{__("admin.reservation_bookings")}}
                                </div>
                                <!-- button -->
                                <div class="bt_sml03" style="width:70px;"
                                     onclick="location.href='{{route("admin.mobile.reservation.show", $reservation->Id)}}'">
                                    {{__("admin.reservation_detail")}}
                                </div>
                                <!--// button -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- // List_cell -->
        @endforeach
        <!-- // List_cell -->
            <!-- // List  -->
        </div>
        <!-- // Section -->

        <!-- Section -->
        <div id="resev_cancel" class="pdg_s05 mgn_t15 tab_con">
            <!-- List -->
        @foreach($reservations->where("Status", \App\Common\Enums\ReservationConstants::CANCELED) as $reservation)
            <!-- List_cell -->
                <div class="jbg_wht pdg_s15 pdg_t10 pdg_b20 mgn_b05 j_rd08">
                    <div>
                        <div class="flx_lft_m">
                            <div class="flx_lft_m" style="width:calc(100% - 80px);">
                                <!-- State -->
                                <div class="bt_sml01">
                                    {{__("admin.reservation_tour")}}
                                </div>
                                <!--// State -->
                                <div>
                                    <div class="pdg_l10 jm_tss3 jcr_grey1 j_bold">
                                        {{date("Y.m.d",strtotime($reservation->ReservationDate))}}
                                    </div>
                                    <div class="pdg_l10 jm_tss1 jcr_grey5">
                                        {{date("Ymd-0002",strtotime($reservation->ReservationDate))}}
                                    </div>
                                </div>
                            </div>
                            <div class="flx_dn" style="margin-left:auto;">
                                <!-- button -->
                                <div class="mgn_b05 bt_sml02_blu" style="width:70px;"
                                     onclick="window.location.href = '{{route("admin.mobile.reservation.confirm", $reservation->Id)}}'">
                                    {{__("admin.reservation_booking_confirmation")}}
                                </div>
                                <!--// button -->
                                <!-- button -->
                                <div class="bt_sml02_green" style="width:70px;"
                                     onclick="window.location.href = '{{route("admin.mobile.reservation.cancel", $reservation->Id)}}'">
                                    {{__("admin.reservation_cancelled")}}
                                </div>
                                <!--// button -->
                            </div>
                        </div>
                        <div class="pdg_t10 flx_lft">
                            <!-- thumbnail -->
                            <div class="pdg_t03" style="width:84px;">
                                <div class="thumb_02 flx_c">
                                    <img src="{{asset("Storage/product/{$reservation->product->images[0]->Name}")}}"
                                         alt=""/>
                                </div>
                            </div>
                            <!-- // thumbnail -->
                            <div class="pdg_l10">
                                <div class="cut_2 jm_tss2 j_bold">
                                    {{$reservation->product->Name}}
                                </div>
                                <div class="jm_tss1 jcr_grey3">
                                    {{__("admin.reservation_date_of_use")}} : <font
                                            class="pdg_l10 jcr_blu">{{date("Y.m.d", strtotime($reservation->ReservationDate))}}</font>
                                </div>
                                <div class="jm_tss1 jcr_grey3">
                                    {{__("admin.reservation_booking_time")}} : <font
                                            class="pdg_l10 jcr_blu">{{$reservation->ReservationTime}}</font>
                                </div>
                                <div class="jm_tss1 jcr_grey3">
                                    {{__("admin.reservation_payment")}} : <font
                                            class="pdg_l10 jcr_red1 js_money">{{$reservation->TotalAmount}}</font>
                                </div>
                            </div>
                        </div>
                        <div class="mgn_t10 flx_lft_m line_t_dash">
                            <div class="pdg_t10" style="width:calc(100% - 80px);">
                                <div class="jm_tss1 jcr_grey2 j_bold">
                                    {{__("admin.reservation_information_priority")}} {{$reservation->product->CapacityAdult+$reservation->product->CapacityChild}} {{__("admin.reservation_people")}},
                                    {{__("admin.reservation_sofa")}} {{$reservation->product->CapacityAdult}} {{__("admin.reservation_adults")}}
                                </div>
                                <div class="jm_tss1 jcr_grey2 j_bold">
                                    {{__("admin.contact")}} : {{$reservation->vendor->Contact}}
                                </div>
                            </div>
                            <div class="pdg_t10 js_align_c" style="margin-left:auto;">
                                <div class="pdg_b05 jm_ts1 jcr_blu j_bold">
                                    {{__("admin.reservation_bookings")}}
                                </div>
                                <!-- button -->
                                <div class="bt_sml03" style="width:70px;"
                                     onclick="location.href='{{route("admin.mobile.reservation.show", $reservation->Id)}}'">
                                    {{__("admin.reservation_detail")}}
                                </div>
                                <!--// button -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- // List_cell -->
        @endforeach
        <!-- // List  -->
        </div>
        <!-- // Section -->


    </div>
@endsection