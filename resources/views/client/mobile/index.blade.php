@extends('client.layouts.mobile')

@section('header_styles')
    <link rel="stylesheet" href="{{asset('libs/rateit/rateit.css')}}">
@endsection
@section('styles')
    <style>
    .up_tl_wrap {
        top: -180px;
    }
    </style>
@endsection

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
                <div class=" pdg_r15" onclick="location.href='{{route('client.mobile.logout')}}'">

                    <img src="{{asset('mobile/client/images/icon/logout.png')}}" width="20px;"  />
                </div>

            </div>
        </div>
    </header>
    <!-- // header -->

    <!-- rolling_banner -->
    <div class="inner-t2">
        <div class="swiper-container swiper_loop w_100" style="height: 0; padding-top:50%;">
            <div class="swiper-wrapper w_100" style="margin-top:-50%;">
                @foreach($banners as $banner)
                    @php
                    $event = $banner->event()->first();
                    @endphp
                <div class="swiper-slide" onclick="location.href='{{$event==null?'#':route('client.mobile.event.view', ['id'=>$event->Id])}}'" >
                    <img src="{{asset('storage/banners').'/'.$banner->Image}}" width="100%" alt="">
                </div>
                @endforeach
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
        </div>
    </div>
    <!-- // rolling_banner -->

    <!-- map -->
    <div class="jbg_wht pdg_tb10 w_100 flx_lft_rowh">
        <div class="w_25"><!-- 인천 -->
            <div class="pdg_10 flx_c" onclick="location.href='{{route('client.mobile.product.list', ['area'=>0, 'sort'=>\App\Common\Enums\UI\SortOrder::popularity])}}'">
                <img src="{{asset('mobile/client/images/SVG_map/map_01.svg')}}" />
            </div>
        </div>
        <div class="w_25"><!-- 화성 -->
            <div class="pdg_10 flx_c" onclick="location.href='{{route('client.mobile.product.list', ['area'=>1, 'sort'=>\App\Common\Enums\UI\SortOrder::popularity])}}'">
                <img src="{{asset('mobile/client/images/SVG_map/map_02.svg')}}" />
            </div>
        </div>
        <div class="w_25"><!-- 목포 -->
            <div class="pdg_10 flx_c" onclick="location.href='{{route('client.mobile.product.list', ['area'=>2, 'sort'=>\App\Common\Enums\UI\SortOrder::popularity])}}'">
                <img src="{{asset('mobile/client/images/SVG_map/map_03.svg')}}" />
            </div>
        </div>
        <div class="w_25"><!-- 여수 -->
            <div class="pdg_10 flx_c" onclick="location.href='{{route('client.mobile.product.list', ['area'=>3, 'sort'=>\App\Common\Enums\UI\SortOrder::popularity])}}'">
                <img src="{{asset('mobile/client/images/SVG_map/map_04.svg')}}" />
            </div>
        </div>
        <div class="w_25"><!-- 통영 -->
            <div class="pdg_10 flx_c" onclick="location.href='{{route('client.mobile.product.list', ['area'=>4, 'sort'=>\App\Common\Enums\UI\SortOrder::popularity])}}'">
                <img src="{{asset('mobile/client/images/SVG_map/map_05.svg')}}" />
            </div>
        </div>
        <div class="w_25"><!-- 거제 -->
            <div class="pdg_10 flx_c" onclick="location.href='{{route('client.mobile.product.list', ['area'=>5, 'sort'=>\App\Common\Enums\UI\SortOrder::popularity])}}'">
                <img src="{{asset('mobile/client/images/SVG_map/map_06.svg')}}" />
            </div>
        </div>
        <div class="w_25"><!-- 부산 -->
            <div class="pdg_10 flx_c" onclick="location.href='{{route('client.mobile.product.list', ['area'=>6, 'sort'=>\App\Common\Enums\UI\SortOrder::popularity])}}'">
                <img src="{{asset('mobile/client/images/SVG_map/map_07.svg')}}" />
            </div>
        </div>
        <div class="w_25"><!-- 포항 -->
            <div class="pdg_10 flx_c" onclick="location.href='{{route('client.mobile.product.list', ['area'=>7, 'sort'=>\App\Common\Enums\UI\SortOrder::popularity])}}'">
                <img src="{{asset('mobile/client/images/SVG_map/map_08.svg')}}" />
            </div>
        </div>
        <div class="w_25"><!-- 강릉 -->
            <div class="pdg_10 flx_c" onclick="location.href='{{route('client.mobile.product.list', ['area'=>8, 'sort'=>\App\Common\Enums\UI\SortOrder::popularity])}}'">
                <img src="{{asset('mobile/client/images/SVG_map/map_09.svg')}}" />
            </div>
        </div>
        <div class="w_25"><!-- 속초 -->
            <div class="pdg_10 flx_c" onclick="location.href='{{route('client.mobile.product.list', ['area'=>9, 'sort'=>\App\Common\Enums\UI\SortOrder::popularity])}}'">
                <img src="{{asset('mobile/client/images/SVG_map/map_10.svg')}}" />
            </div>
        </div>
        <div class="w_25"><!-- 제주 -->
            <div class="pdg_10 flx_c" onclick="location.href='{{route('client.mobile.product.list', ['area'=>10, 'sort'=>\App\Common\Enums\UI\SortOrder::popularity])}}'">
                <img src="{{asset('mobile/client/images/SVG_map/map_11.svg')}}" />
            </div>
        </div>
        <div class="w_25"><!-- 기타 -->
            <div class="pdg_10 flx_c" onclick="location.href='{{route('client.mobile.product.list', ['area'=>11, 'sort'=>\App\Common\Enums\UI\SortOrder::popularity])}}'">
                <img src="{{asset('mobile/client/images/SVG_map/map_12.svg')}}" />
            </div>
        </div>
    </div>
    <!-- // map -->
{{--    <div class="pdg_t15 jbg_grey02">--}}
{{--        <!-- title -->--}}
{{--        <div class="pdg_s15 jcr_grey9 jm_tsss2" onclick="location.href='product_area.html'">--}}
{{--            <font class="jcr_grey2 jm_tss1 j_bold pdg_r10">테마투어</font>요트를 더욱 특별하게 체험할 수 있어요 :)--}}
{{--        </div>--}}
{{--        <!-- // title -->--}}
{{--    </div>--}}
    <div class="pdg_tb10 jbg_grey02">
        <div class="sliding01_container">
            <div class="sliding01_wrap">
                @foreach($ratings as $rating)
                    @php
                    $product = $rating->product()->first();
                    $image = $product->images()->first();

                    @endphp

                <!---->
                <div class="sliding01_cell" onclick="location.href='{{route('client.mobile.product.view', ['id'=>$product->Id])}}'">
                    @if(isset($image))
                        <img src="{{asset('storage/product').'/'.$image->Name}}" width="100%" height="100%" alt="" />
                    @else
                        <img src="{{asset('storage/images/yacht.png')}}" width="100%" height="100%" alt="" />
                    @endif
                    <div class="up_tl_wrap">
                        <div class="up_tl">
                            <div class="jcr_wht jm_tss1">
                                {{$product->Name}} <span class="rateit" data-rateit-value="2.5"></span>
                            </div>
                        </div>
                    </div>

                </div>

                @endforeach
                <!---->

            </div>
        </div>
    </div>

    <!-- 하단 TAB 버튼 -->
    <div class="jbg_grey01 btm_bt_wrap flx_side" style="position: fixed;bottom: 0;left: 0;">
        <div class="w_25 flx_c " style="height:60px;" onclick="location.href='{{route('client.mobile.index')}}'">
            <img src="{{asset('mobile/client/images/SVG_tab/home_on.svg')}}" alt="홈">
        </div>
        <div class="w_25 flx_c " style="height:60px;" onclick="location.href='{{route('client.mobile.reservation.list')}}'">
            <img src="{{asset('mobile/client/images/SVG_tab/list.svg')}}" alt="예약내역">
        </div>
{{--        <div class="w_25 flx_c " style="height:60px;" onclick="location.href='sale.html'">--}}
{{--            <img src="{{asset('mobile/client/images/SVG_tab/yacht.svg')}}" alt="매물정보">--}}
{{--        </div>--}}
        <div class="w_25 flx_c " style="height:60px;" onclick="location.href='my_page.html'">
            <img src="{{asset('mobile/client/images/SVG_tab/mypage.svg')}}" alt="마이페이지">
        </div>
    </div>
    <!-- // 하단 TAB 버튼 -->

</div>
@endsection
@section('scripts')
<script src="{{asset('libs/rateit/jquery.rateit.min.js')}}"></script>
    <script></script>

@endsection