@extends('client.layouts.mobile')


@section('styles')
@endsection


@section('content')
    <div class="jbg_wht" style="position:relative; min-height:100%; padding-bottom:60px;">
        <!-- header -->
        <header id="header">
            <div class="jbg_wht flx_side" style="border-bottom:0px solid #ccc;">
                <div class="flx_lft_m" style="width:65px; height:60px;">
                    <!--<div class=" pdg_l15">
                        <img src="../resources/images/icon/arrow_back.png" height="20px" alt="" />
                    </div>-->
                </div>
                <div class="flx_c" style="height:60px;">
                    <img src="{{asset('mobile/client/images/top_logo.png')}}" height="30px" alt="" />
                </div>
                <div class="flx_rgt_m" style="width:65px; height:60px;">
                    <!-- <div class=" pdg_r10">
                        <img src="../resources/images/icon/heart_big.png" height="20px" alt="" />
                    </div> -->
                    <!-- <div class=" pdg_r15">
                        <img src="../resources/images/icon/heart_big.png" height="20px" alt="" />
                    </div> -->
                </div>
            </div>
        </header>
        <!-- // header -->
        <!-- Tab -->
        <div class="inner-t2">
            <div class="sub_tab01_wrap flx_lft">
                <div class="w_50 flx_c sub_tab01 tab_menu on">
                    <a href="#resv_now">Current reservation</a>
                </div>
                <div class="w_50 flx_c sub_tab01 tab_menu">
                    <a href="#resv_pass">Last reservation</a>
                </div>
            </div>
            <!-- // tab -->

            <!-- outermost_margin designation -->
            <div id="resv_now" class="jbg_wht pdg_s15 pdg_b15 tab_con on">

                @foreach($reserved as $item)
                <!-- list_cell -->
                <div class="w_100 flx_lft pdg_b10 pdg_t15 line_bt01">
                    <!-- thumbnail -->
                    <div style="width:112px;">
                        <div class="thumb_01 flx_c">
                            <img src="{{asset('mobile/client/images/pic/review_01.png')}}" alt="" onclick="location.href='{{route('client.mobile.yacht.details', ['id'=>$item->Id])}}'" />
                        </div>
                    </div>
                    <!-- // thumbnail -->
                    <!-- info -->
                    <div class="pdg_l10 w_100" style="height:120px; display:flex; flex-direction:column; justify-content:space-between; margin:-4px 0;">
                        <div style="height:85px;">
                            <div class="cut_1 jcr_grey2 jm_tss1 j_bold pdg_b08" onclick="location.href='{{route('client.mobile.yacht.details', ['id'=>$item->Id])}}'">
                                {{$item->Name}}
                            </div>
                            <div class="jcr_grey9 lh_15">
                                <div class="cut_2 jm_tsss2 pdg_b03">
                                    must display reserved
                                    Reservation date <span class="jm_tsss2 pdg_l10">Sat, November 14, 2020</span>
                                </div>
                                <div class="cut_2 jm_tsss2 pdg_b03">
                                    Reservation time <span class="jm_tsss2 pdg_l10">17:00</span>
                                </div>
                                <div class="cut_2 jm_tsss2">
                                    Reservations <span class="jm_tsss2 pdg_l10">2 adults</span>
                                </div>
                            </div>
                        </div>
                        <div class="flx_side_m">
                            <div class="flx_lft_b">
                                <div class="js_align_c jm_tsss08 jcr_wht jbg_ylw" style="width: 50px;height: 18px;line-height: 18px; margin-top: -5px;">
                                    Reservation
                                </div>
                            </div>
                            <div class="js_money02">
                                {{$item->Price}}
                            </div>
                        </div>
                    </div>
                    <!-- // info -->
                </div>
                <!-- // list_cell -->
                @endforeach

            </div>
            <!-- outermost_margin designation -->

            <!-- outermost_margin designation -->
            <div id="resv_pass" class="jbg_wht pdg_s15 pdg_b15 tab_con">

                <!-- list_cell -->
                <div class="w_100 flx_lft pdg_b10 pdg_t15 line_bt01">
                    <!-- thumbnail -->
                    <div style="width:112px;">
                        <div class="thumb_01 flx_c">
                            <img src="{{asset('mobile/client/images/pic/review_01.png')}}" alt="" onclick="location.href='booking_view_pass.html'" />
                        </div>
                    </div>
                    <!-- // thumbnail -->
                    <!-- info -->
                    <div class="pdg_l10 w_100" style="height:120px; display:flex; flex-direction:column; justify-content:space-between; margin:-4px 0;">
                        <div style="height:85px;">
                            <div class="cut_1 jcr_grey2 jm_tss1 j_bold pdg_b08" onclick="location.href='booking_view_pass.html'">
                                Dolphin Ecotourism Tour
                            </div>
                            <div class="jcr_grey9 lh_15">
                                <div class="cut_2 jm_tsss2 pdg_b03">
                                    Reservation date <span class="jm_tsss2 pdg_l10">Sat, November 14, 2020</span>
                                </div>
                                <div class="cut_2 jm_tsss2 pdg_b03">
                                    Reservation time <span class="jm_tsss2 pdg_l10">17:00</span>
                                </div>
                                <div class="cut_2 jm_tsss2">
                                    Reservations <span class="jm_tsss2 pdg_l10">2 adults</span>
                                </div>
                            </div>
                        </div>
                        <div class="flx_side_m">
                            <div class="flx_lft_b">
                                <div class="js_align_c jm_tsss08 jcr_grey9 jbg_grey02" style="width: 50px;height: 18px;line-height: 18px; margin-top: -5px;">
                                    reservation complete
                                </div>
                            </div>
                            <div class="js_money02">
                                40,000
                            </div>
                        </div>
                    </div>
                    <!-- // info -->
                </div>
                <!-- // list_cell -->
                <!-- list_cell -->
                <div class="w_100 flx_lft pdg_b10 pdg_t15 line_bt01">
                    <!-- thumbnail -->
                    <div style="width:112px;">
                        <div class="thumb_01 flx_c">
                            <img src="{{asset('mobile/client/images/pic/review_01.png')}}" alt="" onclick="location.href='booking_view_cancel.html'" />
                        </div>
                    </div>
                    <!-- // thumbnail -->
                    <!-- info -->
                    <div class="pdg_l10 w_100" style="height:120px; display:flex; flex-direction:column; justify-content:space-between; margin:-4px 0;">
                        <div style="height:85px;">
                            <div class="cut_1 jcr_grey2 jm_tss1 j_bold pdg_b08" onclick="location.href='booking_view_cancel.html'">
                                Dolphin Ecotourism Tour
                            </div>
                            <div class="jcr_grey9 lh_15">
                                <div class="cut_2 jm_tsss2 pdg_b03">
                                    Reservation date <span class="jm_tsss2 pdg_l10">Sat, November 14, 2020</span></div>
                                <div class="cut_2 jm_tsss2 pdg_b03">
                                    Reservation time <span class="jm_tsss2 pdg_l10">17:00</span>
                                </div>
                                <div class="cut_2 jm_tsss2">
                                    Reservations <span class="jm_tsss2 pdg_l10">2 adults</span>
                                </div>
                            </div>
                        </div>
                        <div class="flx_side_m">
                            <div class="flx_lft_b">
                                <div class="js_align_c jm_tsss08 jcr_grey2 jbg_grey03" style="width: 50px;height: 18px;line-height: 18px; margin-top: -5px;">
                                    cancel reservation
                                </div>
                            </div>
                            <div class="js_money02">
                                40,000
                            </div>
                        </div>
                    </div>
                    <!-- // info -->
                </div>
                <!-- // list_cell -->
                <!-- list_cell -->
                <div class="w_100 flx_lft pdg_b10 pdg_t15 line_bt01">
                    <!-- thumbnail -->
                    <div style="width:112px;">
                        <div class="thumb_01 flx_c">
                            <img src="{{asset('mobile/client/images/pic/review_01.png')}}" alt="" onclick="location.href='booking_view_pass.html'" />
                        </div>
                    </div>
                    <!-- // thumbnail -->
                    <!-- info -->
                    <div class="pdg_l10 w_100" style="height:120px; display:flex; flex-direction:column; justify-content:space-between; margin:-4px 0;">
                        <div style="height:85px;">
                            <div class="cut_1 jcr_grey2 jm_tss1 j_bold pdg_b08" onclick="location.href='booking_view_pass.html'">
                                Dolphin Ecotourism Tour
                            </div>
                            <div class="jcr_grey9 lh_15">
                                <div class="cut_2 jm_tsss2 pdg_b03">
                                    Reservation date <span class="jm_tsss2 pdg_l10">Sat, November 14, 2020</span>
                                </div>
                                <div class="cut_2 jm_tsss2 pdg_b03">
                                    Reservation time <span class="jm_tsss2 pdg_l10">17:00</span>
                                </div>
                                <div class="cut_2 jm_tsss2">
                                    Reservations <span class="jm_tsss2 pdg_l10">2 adults</span>
                                </div>
                            </div>
                        </div>
                        <div class="flx_side_m">
                            <div class="flx_lft_b">
                                <div class="js_align_c jm_tsss08 jcr_grey9 jbg_grey02" style="width: 50px;height: 18px;line-height: 18px; margin-top: -5px;">
                                    reservation complete
                                </div>
                            </div>
                            <div class="js_money02">
                                40,000
                            </div>
                        </div>
                    </div>
                    <!-- // info -->
                </div>
                <!-- // list_cell -->
                <!-- list_cell -->
                <div class="w_100 flx_lft pdg_b10 pdg_t15 line_bt01">
                    <!-- thumbnail -->
                    <div style="width:112px;">
                        <div class="thumb_01 flx_c">
                            <img src="{{asset('mobile/client/images/pic/review_01.png')}}" alt="" onclick="location.href='booking_view_pass.html'" />
                        </div>
                    </div>
                    <!-- // thumbnail -->
                    <!-- info -->
                    <div class="pdg_l10 w_100" style="height:120px; display:flex; flex-direction:column; justify-content:space-between; margin:-4px 0;">
                        <div style="height:85px;">
                            <div class="cut_1 jcr_grey2 jm_tss1 j_bold pdg_b08" onclick="location.href='booking_view_pass.html'">
                                Dolphin Ecotourism Tour
                            </div>
                            <div class="jcr_grey9 lh_15">
                                <div class="cut_2 jm_tsss2 pdg_b03">
                                    Reservation date <span class="jm_tsss2 pdg_l10">Sat, November 14, 2020</span>
                                </div>
                                <div class="cut_2 jm_tsss2 pdg_b03">
                                    Reservation time <span class="jm_tsss2 pdg_l10">17:00</span>
                                </div>
                                <div class="cut_2 jm_tsss2">
                                    Reservations <span class="jm_tsss2 pdg_l10">2 adults</span>
                                </div>
                            </div></div>
                        <div class="flx_side_m">
                            <div class="flx_lft_b">
                                <div class="js_align_c jm_tsss08 jcr_grey9 jbg_grey02" style="width: 50px;height: 18px;line-height: 18px; margin-top: -5px;">
                                    reservation complete
                                </div>
                            </div>
                            <div class="js_money02">
                                40,000
                            </div>
                        </div>
                    </div>
                    <!-- // info -->
                </div>
            </div>
            <!-- // list_cell -->
        </div>
        <!-- outermost_margin designation -->

        <!-- Bottom TAB button -->
        <div class="jbg_grey01 btm_bt_wrap flx_side" style="position: fixed;bottom: 0;left: 0;">
            <div class="w_25 flx_c "style="height:60px;" onclick="location.href='index.html'">
                <img src="{{asset('mobile/client/images/SVG_tab/home.svg')}}" alt="home">
            </div>
            <div class="w_25 flx_c "style="height:60px;" onclick="location.href='reserv.html'">
                <img src="{{asset('mobile/client/images/SVG_tab/list_on.svg')}}" alt="Reservation details">
            </div>
            <div class="w_25 flx_c "style="height:60px;" onclick="location.href='sale.html'">
                <img src="{{asset('mobile/client/images/SVG_tab/yacht.svg')}}" alt="For Sale Information">
            </div>
            <div class="w_25 flx_c "style="height:60px;" onclick="location.href='my_page.html'">
                <img src="{{asset('mobile/client/images/SVG_tab/mypage.svg')}}" alt="My Page">
            </div>
        </div>
        <!-- // Bottom TAB button -->
    </div>
@endsection


@section('scripts')
@endsection