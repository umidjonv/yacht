@extends('client.layouts.mobile')

@section('header_styles')

@endsection

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
                    <a href="#resv_now">@lang('client.current_reservation_tab')</a>
                </div>
                <div class="w_50 flx_c sub_tab01 tab_menu">
                    <a href="#resv_pass">@lang('client.last_reservation_tab')</a>
                </div>
            </div>
            <!-- // tab -->

            <!-- Specify outermost_margin -->
            <div id="resv_now" class="jbg_wht pdg_s15 pdg_b15 tab_con on">

                @foreach($current as $reservation)
                    @php
                    $product = $reservation->product()->first();
                    $image = null;
                    if($product!=null)
                    {
                        $image = $product->images()->first();
                    }
                    @endphp
                    <div class="w_100 flx_lft pdg_b10 pdg_t15 line_bt01">
                        <!-- thumbnail -->
                        <div style="width:112px;">
                            <div class="thumb_01 flx_c">
                                <img src="{{asset('/storage/product').'/'.$image->Name }}" alt="" onclick="location.href='{{route('client.mobile.reservation.view', ['id'=>$reservation->Id])}}'" />
                            </div>
                        </div>
                        <!-- // thumbnail -->
                        <!-- info -->
                        <div class="pdg_l10 w_100" style="height:120px; display:flex; flex-direction:column; justify-content:space-between; margin:-4px 0;">
                            <div style="height:85px;">
                                <div class="cut_1 jcr_grey2 jm_tss1 j_bold pdg_b08" onclick="location.href='{{route('client.mobile.reservation.view', ['id'=>$reservation->Id])}}'">
                                    {{$product->Name}}
                                </div>
                                <div class="jcr_grey9 lh_15">
                                    <div class="cut_2 jm_tsss2 pdg_b03">
                                        @lang('client.reservation_date') <span class="jm_tsss2 pdg_l10">{{$reservation->ReservationDate}}</span>
                                    </div>
                                    <div class="cut_2 jm_tsss2 pdg_b03">
                                        @lang('client.reservation_date') <span class="jm_tsss2 pdg_l10">{{$reservation->ReservationTime}}</span>
                                    </div>
                                    <div class="cut_2 jm_tsss2">
                                        <span class="jm_tsss2 pdg_l10">{{$reservation->Adults}} @lang('client.adults') / {{$reservation->Childs}} @lang('client.children')</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flx_side_m">
                                <div class="flx_lft_b">
                                    @if($reservation->IsReserved)
                                        <div class="js_align_c jm_tsss08 jcr_wht jbg_ylw" style="width: 50px;height: 18px;line-height: 18px; margin-top: -5px;">
                                            @lang('client.reserved')
                                        </div>
                                    @endif

                                    <div class="js_align_c jm_tsss08 jcr_grey2 jbg_grey03" style="width: 50px;height: 18px;line-height: 18px; margin-top: -5px;">
                                        @lang('client.cancel')
                                    </div>
                                </div>
                                <div class="js_money02">
                                    {{$reservation->TotalAmount}}
                                </div>
                            </div>
                        </div>
                        <!-- // info -->
                    </div>
                @endforeach

            </div>
            <!-- Specify outermost_margin -->

            <!-- Specify outermost_margin -->
            <div id="resv_pass" class="jbg_wht pdg_s15 pdg_b15 tab_con">

                <!-- list_cell -->
                @foreach($completed as $reservation)
                    @php
                        $product = $reservation->product()->first();
                        $image = null;
                        if($product!=null)
                        {
                            $image = $product->images()->first();
                        }
                    @endphp
                    <div class="w_100 flx_lft pdg_b10 pdg_t15 line_bt01">
                        <!-- thumbnail -->
                        <div style="width:112px;">
                            <div class="thumb_01 flx_c">
                                <img src="{{asset('/storage/product').'/'.$image->Name }}" alt="" onclick="location.href='{{route('client.mobile.reservation.view', ['id'=>$reservation->Id])}}'" />
                            </div>
                        </div>
                        <!-- // thumbnail -->
                        <!-- info -->
                        <div class="pdg_l10 w_100" style="height:120px; display:flex; flex-direction:column; justify-content:space-between; margin:-4px 0;">
                            <div style="height:85px;">
                                <div class="cut_1 jcr_grey2 jm_tss1 j_bold pdg_b08" onclick="location.href='{{route('client.mobile.reservation.view', ['id'=>$reservation->Id])}}'">
                                    {{$product->Name}}
                                </div>
                                <div class="jcr_grey9 lh_15">
                                    <div class="cut_2 jm_tsss2 pdg_b03">
                                        @lang('client.reservation_date') <span class="jm_tsss2 pdg_l10">{{$reservation->ReservationDate}}</span>
                                    </div>
                                    <div class="cut_2 jm_tsss2 pdg_b03">
                                        @lang('client.reservation_date') <span class="jm_tsss2 pdg_l10">{{$reservation->ReservationTime}}</span>
                                    </div>
                                    <div class="cut_2 jm_tsss2">
                                        <span class="jm_tsss2 pdg_l10">{{$reservation->Adults}} @lang('client.adults') / {{$reservation->Childs}} @lang('client.children')</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flx_side_m">
                                <div class="flx_lft_b">
                                    @if($reservation->IsReserved)
                                        <div class="js_align_c jm_tsss08 jcr_wht jbg_ylw" style="width: 50px;height: 18px;line-height: 18px; margin-top: -5px;">
                                            @lang('client.reserved')
                                        </div>
                                    @endif

                                    <div class="js_align_c jm_tsss08 jcr_grey2 jbg_grey03" style="width: 50px;height: 18px;line-height: 18px; margin-top: -5px;">
                                        @lang('client.cancel')
                                    </div>
                                </div>
                                <div class="js_money02">
                                    {{$reservation->TotalAmount}}
                                </div>
                            </div>
                        </div>
                        <!-- // info -->
                    </div>
                @endforeach
            </div>
            <!-- // list_cell -->
        </div>
        <!-- outermost_margin designation-->

        <!-- Bottom TAB button -->
        <!-- 하단 TAB 버튼 -->
        <div class="jbg_grey01 btm_bt_wrap flx_side" style="position: fixed;bottom: 0;left: 0;">
            <div class="w_25 flx_c " style="height:60px;" onclick="location.href='{{route('client.mobile.index')}}'">
                <img src="{{asset('mobile/client/images/SVG_tab/home.svg')}}" alt="홈">
            </div>
            <div class="w_25 flx_c " style="height:60px;" onclick="location.href='{{route('client.mobile.product.my')}}'">
                <img src="{{asset('mobile/client/images/SVG_tab/list_on.svg')}}" alt="예약내역">
            </div>
            {{--        <div class="w_25 flx_c " style="height:60px;" onclick="location.href='sale.html'">--}}
            {{--            <img src="{{asset('mobile/client/images/SVG_tab/yacht.svg')}}" alt="매물정보">--}}
            {{--        </div>--}}
            <div class="w_25 flx_c " style="height:60px;" onclick="location.href='my_page.html'">
                <img src="{{asset('mobile/client/images/SVG_tab/mypage.svg')}}" alt="마이페이지">
            </div>
        </div>
        <!-- // 하단 TAB 버튼 -->
        <!-- // TAB button at the bottom -->
    </div>

@endsection



@section('scripts')



@endsection