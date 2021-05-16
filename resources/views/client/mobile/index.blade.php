@extends('client.layouts.mobile')

@section('content')
<div class="jbg_grey02" style="position:relative; min-height:100%; padding-bottom:60px;">

    <!-- header -->
    <header id="header">
        <div class="jbg_wht flx_side" style="border-bottom:0px solid #ccc;">
            <div class="" style="width:65px; height:60px;">
            </div>
            <div class="flx_c" style="height:60px;" onclick="location.href='index.html'">
                <img src="{{asset('mobile/client/images/top_logo.png')}}" height="30px" alt=""/>
            </div>
            <div class="flx_rgt_m" style="width:65px; height:60px;">
                <!-- <div class=" pdg_r10">
                    <img src="../resources/images/icon/heart_big.png" width="20px" alt="" />
                </div> -->
                <div class=" pdg_r15" onclick="location.href='my_pick.html'">
                    <img src="{{asset('mobile/client/images//icon/heart_big.png')}}" height="17px" alt="" />
                </div>
            </div>
        </div>
    </header>
    <!-- // header -->

    <!-- rolling_banner -->
    <div class="inner-t2">
        <div class="swiper-container swiper_loop w_100" style="height: 0; padding-top:50%;">
            <div class="swiper-wrapper w_100" style="margin-top:-50%;">
                <div class="swiper-slide" onclick="location.href='event_view.html'">
                    <img src="{{asset('mobile/client/images/pic/rolling_img01.png')}}" width="100%" alt="">
                </div>
                <div class="swiper-slide" onclick="location.href='event_view.html'">
                    <img src="{{asset('mobile/client/images/pic/rolling_img02.png')}}" width="100%" alt="">
                </div>
                <div class="swiper-slide" onclick="location.href='event_view.html'">
                    <img src="{{asset('mobile/client/images/pic/rolling_img01.png')}}" width="100%" alt="">
                </div>
                <div class="swiper-slide" onclick="location.href='event_view.html'">
                    <img src="{{asset('mobile/client/images/pic/rolling_img02.png')}}" width="100%" alt="">
                </div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
        </div>
    </div>
    <!-- // rolling_banner -->

    <!-- map -->
    <div class="jbg_wht pdg_tb10 w_100 flx_lft_rowh">
        <div class="w_25"><!-- 인천 -->
            <div class="pdg_10 flx_c" onclick="location.href='/shop/list.php?ca_id=1010'">
                <img src="{{asset('mobile/client/images/SVG_map/map_01.svg')}}" />
            </div>
        </div>
        <div class="w_25"><!-- 화성 -->
            <div class="pdg_10 flx_c" onclick="location.href='/shop/list.php?ca_id=1020'">
                <img src="{{asset('mobile/client/images/SVG_map/map_02.svg')}}" />
            </div>
        </div>
        <div class="w_25"><!-- 목포 -->
            <div class="pdg_10 flx_c" onclick="location.href='/shop/list.php?ca_id=1030'">
                <img src="{{asset('mobile/client/images/SVG_map/map_03.svg')}}" />
            </div>
        </div>
        <div class="w_25"><!-- 여수 -->
            <div class="pdg_10 flx_c" onclick="location.href='/shop/list.php?ca_id=1040'">
                <img src="{{asset('mobile/client/images/SVG_map/map_04.svg')}}" />
            </div>
        </div>
        <div class="w_25"><!-- 통영 -->
            <div class="pdg_10 flx_c" onclick="location.href='/shop/list.php?ca_id=1050'">
                <img src="{{asset('mobile/client/images/SVG_map/map_05.svg')}}" />
            </div>
        </div>
        <div class="w_25"><!-- 거제 -->
            <div class="pdg_10 flx_c" onclick="location.href='/shop/list.php?ca_id=1060'">
                <img src="{{asset('mobile/client/images/SVG_map/map_06.svg')}}" />
            </div>
        </div>
        <div class="w_25"><!-- 부산 -->
            <div class="pdg_10 flx_c" onclick="location.href='/shop/list.php?ca_id=10b0'">
                <img src="{{asset('mobile/client/images/SVG_map/map_07.svg')}}" />
            </div>
        </div>
        <div class="w_25"><!-- 포항 -->
            <div class="pdg_10 flx_c" onclick="location.href='/shop/list.php?ca_id=1070'">
                <img src="{{asset('mobile/client/images/SVG_map/map_08.svg')}}" />
            </div>
        </div>
        <div class="w_25"><!-- 강릉 -->
            <div class="pdg_10 flx_c" onclick="location.href='/shop/list.php?ca_id=1080'">
                <img src="{{asset('mobile/client/images/SVG_map/map_09.svg')}}" />
            </div>
        </div>
        <div class="w_25"><!-- 속초 -->
            <div class="pdg_10 flx_c" onclick="location.href='/shop/list.php?ca_id=1090'">
                <img src="../resources/images/SVG_map/map_10.svg" />
            </div>
        </div>
        <div class="w_25"><!-- 제주 -->
            <div class="pdg_10 flx_c" onclick="location.href='/shop/list.php?ca_id=10a0'">
                <img src="{{asset('mobile/client/images/SVG_map/map_11.svg')}}" />
            </div>
        </div>
        <div class="w_25"><!-- 기타 -->
            <div class="pdg_10 flx_c" onclick="location.href='/shop/list.php?ca_id=10c0'">
                <img src="{{asset('mobile/client/images/SVG_map/map_12.svg')}}" />
            </div>
        </div>
    </div>
    <!-- // map -->
    <div class="pdg_t15 jbg_grey02">
        <!-- title -->
        <div class="pdg_s15 jcr_grey9 jm_tsss2" onclick="location.href='product_area.html'">
            <font class="jcr_grey2 jm_tss1 j_bold pdg_r10">테마투어</font>요트를 더욱 특별하게 체험할 수 있어요 :)
        </div>
        <!-- // title -->
    </div>
    <div class="pdg_tb10 jbg_grey02">
        <div class="sliding01_container">
            <div class="sliding01_wrap">
                <!---->
                <div class="sliding01_cell" onclick="location.href='theme_stay.html'">
                    <img src="{{asset('mobile/client/images/pic/review_06.png')}}" width="100%" alt="" />
                    <div class="up_tl_wrap">
                        <div class="up_tl">
                            <div class="jcr_wht jm_tss1">
                                요트숙박
                            </div>
                        </div>
                    </div>
                </div>
                <!---->
                <div class="sliding01_cell" onclick="location.href='theme_basic.html'">
                    <img src="{{asset('mobile/client/images/pic/review_06.png')}}" width="100%" alt="" />
                    <div class="up_tl_wrap">
                        <div class="up_tl">
                            <div class="jcr_wht jm_tss1">
                                요트체험
                            </div>
                        </div>
                    </div>
                </div>
                <!---->
                <div class="sliding01_cell" onclick="location.href='event_view.html'">
                    <img src="{{asset('mobile/client/images/pic/review_06.png')}}" width="100%" alt="" />
                    <div class="up_tl_wrap">
                        <div class="up_tl">
                            <div class="jcr_wht jm_tss1">
                                요트대회
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 하단 TAB 버튼 -->
    <div class="jbg_grey01 btm_bt_wrap flx_side" style="position: fixed;bottom: 0;left: 0;">
        <div class="w_25 flx_c " style="height:60px;" onclick="location.href='index.html'">
            <img src="{{asset('mobile/client/images/SVG_tab/home_on.svg')}}" alt="홈">
        </div>
        <div class="w_25 flx_c " style="height:60px;" onclick="location.href='booking.html'">
            <img src="{{asset('mobile/client/images/SVG_tab/list.svg')}}" alt="예약내역">
        </div>
        <div class="w_25 flx_c " style="height:60px;" onclick="location.href='sale.html'">
            <img src="{{asset('mobile/client/images/SVG_tab/yacht.svg')}}" alt="매물정보">
        </div>
        <div class="w_25 flx_c " style="height:60px;" onclick="location.href='my_page.html'">
            <img src="{{asset('mobile/client/images/SVG_tab/mypage.svg')}}" alt="마이페이지">
        </div>
    </div>
    <!-- // 하단 TAB 버튼 -->

</div>
@endsection