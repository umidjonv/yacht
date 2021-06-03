@extends('client.layouts.mobile')


@section('styles')
@endsection


@section('content')

@endsection
<div class="jbg_wht" style="position:relative; min-height:100%; padding-bottom:70px;">

    <!-- header -->
    <header id="header">
        <div class="jbg_wht flx_side" style="border-bottom:0px solid #ccc;">
            <div class="flx_lft_m" style="width:65px; height:60px;">
                <div class=" pdg_l15" onclick="location.href='javascript:history.go(-1);'">
                    <img src="{{asset('mobile/client/images/icon/arrow_back.png')}}" height="20px" alt="" />
                </div>
            </div>
            <div class="flx_c" style="height:60px;">
                <div class="jcr_grey2 jm_tss1 j_bold" style="height:17px;">
                    @lang('client.product_view_top_reviews')
                </div>
            </div>
            <div class="flx_rgt_m pdg_r10" style="width:65px; height:60px;">
                <div class="pdg_r10">
                    <img src="{{asset('mobile/client/images/icon/share.png')}}" height="20px" alt="" />
                </div>
                <div class="pick_toggle js_btn_toggle"></div>
            </div>
        </div>
    </header>
    <!-- // header -->
    <!-- rolling_banner -->
    <div class="inner-t2">
        <div class="swiper-container swiper_loop w_100" style="height: 0; padding-top:100%;">
            <div class="swiper-wrapper w_100" style="margin-top:-100%;">
                @php
                    $images = $yacht->images()->get();
                @endphp
                @foreach($images  as $image)
                <div class="swiper-slide">
                    <img src="{{url('/storage/yachts').'/'.$image->Name}}" width="100%" alt="">
                </div>

                @endforeach
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
        </div>
    </div>
    <!-- // rolling_banner -->

    <!-- shot info -->
    <div class="pdg_s15 pdg_tb20">
        <div class="jcr_grey2 jm_tss1 j_bold pdg_b12">
            {{$model->Name}}
        </div>
        <div class="jcr_grey9 jm_tsss2 pdg_b08 lh_15">
            {{$model->Introduction}}
        </div>
        <div class="jcr_grey9 jm_tsss2 pdg_b12">
            {{isset($model->Length)?$model->Length." feet":""}} / {{$model->CapacityAdult+$model->CapacityChild}} @lang('client.product_view_seats')
        </div>
        <div class="flx_side_b">
            <div class="flx_lft_b">
                <div class="star_icon on">
                </div>
                <div class="jcr_grey2 jm_tsss2 j_bold" style="width:30px;">
                    4.2
                </div>
                <div class="jcr_grey9 jm_tsss2">
                    @lang('client.product_view_top_reviews') <font class="jcr_grey2 jm_tsss2 j_bold pdg_l03">12</font>
                </div>
            </div>
            <div class="js_money02">
                {{$model->Price}}
            </div>
        </div>
    </div>
    <!-- // shot info -->

    <!-- Tab -->
    <div class="sub_tab01_wrap flx_lft">
        <div class="w_333 flx_c sub_tab01 tab_menu on">
            <a href="#prd_info">@lang('client.product_view_details')</a>
        </div>
        <div class="w_333 flx_c sub_tab01 tab_menu">
            <a href="#prd_qna">@lang('client.product_view_qa')</a>
        </div>
        <div class="w_333 flx_c sub_tab01 tab_menu">
            <a href="#prd_review">@lang('client.product_view_review')(10)</a>
        </div>
    </div>
    <!-- // tab -->

    <div id="prd_info" class="tab_con on">

        <div class="pdg_s15 pdg_b15" style="font-size: 14px;">
            {{$model->Introduction}}

        </div>
        <!-- // mid_photo -->




        <!-- mid_photo -->

        <!-- // mid_photo -->

        <div class="pdg_s15 pdg_b15">
            <div class="jcr_grey9 jm_tsss2 pdg_b05">
                Address: {{$model->Location}}
            </div>
            <div class="jcr_grey9 jm_tsss2 pdg_b05">
                Contact: {{$vendor->Contact}}
            </div>
            <div class="jcr_grey9 jm_tsss2 pdg_b05">
                Boarding location: {{\App\Common\Arrays\Area::name($model->Area)}}
            </div>
        </div>

        <div class="pdg_15">
            <div class="jbg_grey01 pdg_15">
                <div class="jcr_grey9 jm_tsss2 j_bold pdg_b05">
                    @lang('client.product_view_refund_title')
                </div>
                @if($vendor->IsCancellable)
                <div class="jcr_grey9 jm_tsss2 pdg_b05">
                    -{{$vendor->CancelledBefore7}}% @lang('client.product_view_refund_before7')
                </div>
                <div class="jcr_grey9 jm_tsss2 pdg_b05">
                    -{{$vendor->CancelledBefore45}}% @lang('client.product_view_refund_before46')</div>
                <div class="jcr_grey9 jm_tsss2 pdg_b05">
                    -{{$vendor->CancelledBefore13}}% @lang('client.product_view_refund_before13')
                </div>
                <div class="jcr_grey9 jm_tsss2 pdg_b05">
                    -{{$vendor->CancelledOnDay}}% @lang('client.product_view_refund_before0')
                </div>
                @else
                    <div class="jcr_grey9 jm_tsss2 pdg_b05">
                        @lang('client.product_view_refund_not_cancellable')
                    </div>
                @endif


            </div>
        </div>
    </div>

    <!-- Question -->
    <div id="prd_qna" class="tab_con">
        <div class="pdg_s15 pdg_t15">
            <div class="flx_side_m pdg_b15 line_bt01">
                <div class="flx_lft">
                    <div style="width:20px;">
                        <input type="checkbox" id="img_checkbox">
                        <label for="img_checkbox">
                            <span></span>
                        </label>
                    </div>
                    <div class="jcr_grey9 jm_tsss2 pdg_l10">
                        @lang('client.product_view_feedback_my_view')
                    </div>
                </div>
                <div class="pdg_l10">
                    <!-- bt_mid -->
                    <div class="w_100 flx_c bt_mid01" style="padding:5px 50px;" onclick="location.href='{{route('client.mobile.feedback.add', ['id'=>$model->Id])}}'">
                        @lang('client.product_view_feedback_feedback')
                    </div><!-- // bt_mid -->
                </div>
            </div>
        </div>
        <!-- // Question -->
        <!-- Q_list -->
        <!-- -->
        @foreach($feedbacks as $feedback)
            <div class="pdg_s15 pdg_t15 js_acd">
                <div class="flx_side_m pdg_b05">
                    <div class="flx_lft" style="width:100px;">
                        <!-- flag -->
                        <div class="flx_c bt_sml01">
                            @lang('client.product_view_feedback_waiting')
                        </div><!-- // flag -->
                    </div>
                    <div class="flx_rgt" style="width:calc(100%-100px);">
                        <div class="jcr_grey9 jm_tsss0 js_align_r">
                            <font class="jcr_grey9 jm_tsss0">{{auth()->user()->email}}</font> | <font class="jcr_grey9 jm_tsss0" style="white-space: nowrap;">{{$feedback->CreatedAt}}</font>
                        </div>
                    </div>
                </div>
                <div class="pdg_b15 line_bt01 js_acd_tit">
                    <div class="jcr_grey2 jm_tsss2 j_bold">
                        {{$feedback->Title}}
                    </div>
                </div>
                <div class="js_acd_con">
                    <div class="pdg_15 jbg_grey01 flx_lft">
                        <div class="pdg_r15 jcr_grey9 jm_ts4 j_bold">
                            Q
                        </div>
                        <div class="jcr_grey2 jm_tsss2">
                            {{$feedback->Message}}
                        </div>
                    </div>
                    @foreach($feedback->childs()->get() as $child)
                    <div class="pdg_15 jbg_grey01 flx_lft line_t_dash">
                        <div class="pdg_r15 jcr_ylw jm_ts4 j_bold">
                            {{$child->Type == false? "Q":"A"}}
                        </div>
                        <div class="jcr_grey2 jm_tsss2">
                            {{$child->Message}}
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        @endforeach

        <!-- // -->
        <!-- -->
{{--        <div class="pdg_s15 pdg_t15 js_acd">--}}
{{--            <div class="flx_side_m pdg_b05">--}}
{{--                <div class="flx_lft" style="width:100px;">--}}
{{--                    <!-- flag -->--}}
{{--                    <div class="flx_c bt_sml01">--}}
{{--                        @lang('client.product_view_feedback_waiting')--}}
{{--                    </div><!-- // flag -->--}}
{{--                </div>--}}
{{--                <div class="flx_rgt" style="width:calc(100%-100px);">--}}
{{--                    <div class="jcr_grey9 jm_tsss0 js_align_r">--}}
{{--                        <font class="jcr_grey9 jm_tsss0">mincho11@****.***</font> | <font class="jcr_grey9 jm_tsss0" style="white-space: nowrap;">2020.10.19</font>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="pdg_b15 line_bt01 js_acd_tit">--}}
{{--                <div class="jcr_grey2 jm_tsss2 j_bold">--}}
{{--                    무조건 돌고래를 볼 수 있나요?--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="js_acd_con">--}}
{{--                <div class="pdg_15 jbg_grey01 flx_lft">--}}
{{--                    <div class="pdg_r15 jcr_grey9 jm_ts4 j_bold">--}}
{{--                        Q--}}
{{--                    </div>--}}
{{--                    <div class="jcr_grey2 jm_tsss2">--}}
{{--                        가면 항상 돌고래를 볼 수 있나요? <br> 아니면 얼마나 자주 나타나나요?--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <!-- // -->--}}
{{--        <!-- -->--}}
{{--        <div class="pdg_s15 pdg_t15 js_acd">--}}
{{--            <div class="flx_side_m pdg_b05">--}}
{{--                <div class="flx_lft" style="width:100px;">--}}
{{--                    <!-- flag -->--}}
{{--                    <div class="flx_c bt_sml01">--}}
{{--                        @lang('client.product_view_feedback_waiting')--}}
{{--                    </div><!-- // flag -->--}}
{{--                </div>--}}
{{--                <div class="flx_rgt" style="width:calc(100%-100px);">--}}
{{--                    <div class="jcr_grey9 jm_tsss0 js_align_r">--}}
{{--                        <font class="jcr_grey9 jm_tsss0">mincho11@****.***</font> | <font class="jcr_grey9 jm_tsss0" style="white-space: nowrap;">2020.10.19</font>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="pdg_b15 line_bt01 js_acd_tit">--}}
{{--                <div class="jcr_grey2 jm_tsss2 j_bold">--}}
{{--                    무조건 돌고래를 볼 수 있나요?--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="js_acd_con">--}}
{{--                <div class="pdg_15 jbg_grey01 flx_lft">--}}
{{--                    <div class="pdg_r15 jcr_grey9 jm_ts4 j_bold">--}}
{{--                        Q--}}
{{--                    </div>--}}
{{--                    <div class="jcr_grey2 jm_tsss2">--}}
{{--                        가면 항상 돌고래를 볼 수 있나요? <br> 아니면 얼마나 자주 나타나나요?--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <!-- // -->--}}
{{--        <!-- -->--}}
{{--        <div class="pdg_s15 pdg_t15 js_acd">--}}
{{--            <div class="flx_side_m pdg_b05">--}}
{{--                <div class="flx_lft" style="width:100px;">--}}
{{--                    <!-- flag -->--}}
{{--                    <div class="flx_c bt_sml01 on">--}}
{{--                        @lang('client.product_view_feedback_answered')--}}
{{--                    </div><!-- // flag -->--}}
{{--                    <div class="pdg_l03">--}}
{{--                        <img src="{{asset('mobile/client/images/icon/lock_icon.png')}}" height="20px" alt=""/>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="flx_rgt" style="width:calc(100%-100px);">--}}
{{--                    <div class="jcr_grey9 jm_tsss0 js_align_r">--}}
{{--                        <font class="jcr_grey9 jm_tsss0">mincho11@****.***</font> | <font class="jcr_grey9 jm_tsss0" style="white-space: nowrap;">2020.10.19</font>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="pdg_b15 line_bt01 js_acd_tit">--}}
{{--                <div class="jcr_grey2 jm_tsss2 j_bold">--}}
{{--                    애완 동물 탑승 문의--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="js_acd_con">--}}
{{--                <div class="pdg_15 jbg_grey01 flx_lft">--}}
{{--                    <div class="pdg_r15 jcr_grey9 jm_ts4 j_bold">--}}
{{--                        Q--}}
{{--                    </div>--}}
{{--                    <div class="jcr_grey2 jm_tsss2">--}}
{{--                        반려 동물은 탑승 할 수 있나요? <br> 반려 동물은 몇 마리인가요?--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="pdg_15 jbg_grey01 flx_lft line_t_dash">--}}
{{--                    <div class="pdg_r15 jcr_ylw jm_ts4 j_bold">--}}
{{--                        A--}}
{{--                    </div>--}}
{{--                    <div class="jcr_grey2 jm_tsss2">--}}
{{--                        안녕하세요, 매니저입니다. <br> 문의 사항을 전화로 알려 드리겠습니다. <br> 좋은 하루 되세요 ^^--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <!-- // -->--}}
{{--        <!-- -->--}}
{{--        <div class="pdg_s15 pdg_t15 js_acd">--}}
{{--            <div class="flx_side_m pdg_b05">--}}
{{--                <div class="flx_lft" style="width:100px;">--}}
{{--                    <!-- flag -->--}}
{{--                    <div class="flx_c bt_sml01 on">--}}
{{--                        @lang('client.product_view_feedback_answered')--}}
{{--                    </div><!-- // flag -->--}}
{{--                    <div class="pdg_l03">--}}
{{--                        <img src="{{asset('mobile/client/images/icon/lock_icon.png')}}" height="20px" alt=""/>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="flx_rgt" style="width:calc(100%-100px);">--}}
{{--                    <div class="jcr_grey9 jm_tsss0 js_align_r">--}}
{{--                        <font class="jcr_grey9 jm_tsss0">mincho11@****.***</font> | <font class="jcr_grey9 jm_tsss0" style="white-space: nowrap;">2020.10.19</font>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="pdg_b15 line_bt01 js_acd_tit">--}}
{{--                <div class="jcr_grey2 jm_tsss2 j_bold">--}}
{{--                    애완 동물 탑승 문의--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="js_acd_con">--}}
{{--                <div class="pdg_15 jbg_grey01 flx_lft">--}}
{{--                    <div class="pdg_r15 jcr_grey9 jm_ts4 j_bold">--}}
{{--                        Q--}}
{{--                    </div>--}}
{{--                    <div class="jcr_grey2 jm_tsss2">--}}
{{--                        반려 동물은 탑승 할 수 있나요? <br> 반려 동물은 몇 마리인가요?--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="pdg_15 jbg_grey01 flx_lft line_t_dash">--}}
{{--                    <div class="pdg_r15 jcr_ylw jm_ts4 j_bold">--}}
{{--                        A--}}
{{--                    </div>--}}
{{--                    <div class="jcr_grey2 jm_tsss2">--}}
{{--                        안녕하세요, 매니저입니다. <br> 문의 사항을 전화로 알려 드리겠습니다. <br> 좋은 하루 되세요 ^^--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="pdg_s15 pdg_t15 js_acd">--}}
{{--            <div class="flx_side_m pdg_b05">--}}
{{--                <div class="flx_lft" style="width:100px;">--}}
{{--                    <!-- flag -->--}}
{{--                    <div class="flx_c bt_sml01 on">--}}
{{--                        @lang('client.product_view_feedback_answered')--}}
{{--                    </div><!-- // flag -->--}}
{{--                    <div class="pdg_l03">--}}
{{--                        <img src="{{asset('mobile/client/images/icon/lock_icon.png')}}" height="20px" alt=""/>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="flx_rgt" style="width:calc(100%-100px);">--}}
{{--                    <div class="jcr_grey9 jm_tsss0 js_align_r">--}}
{{--                        <font class="jcr_grey9 jm_tsss0">mincho11@****.***</font> | <font class="jcr_grey9 jm_tsss0" style="white-space: nowrap;">2020.10.19</font>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="pdg_b15 line_bt01 js_acd_tit">--}}
{{--                <div class="jcr_grey2 jm_tsss2 j_bold">--}}
{{--                    애완 동물 탑승 문의--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="js_acd_con">--}}
{{--                <div class="pdg_15 jbg_grey01 flx_lft">--}}
{{--                    <div class="pdg_r15 jcr_grey9 jm_ts4 j_bold">--}}
{{--                        Q--}}
{{--                    </div>--}}
{{--                    <div class="jcr_grey2 jm_tsss2">--}}
{{--                        반려 동물은 탑승 할 수 있나요? <br> 반려 동물은 몇 마리인가요?--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="pdg_15 jbg_grey01 flx_lft line_t_dash">--}}
{{--                    <div class="pdg_r15 jcr_ylw jm_ts4 j_bold">--}}
{{--                        A--}}
{{--                    </div>--}}
{{--                    <div class="jcr_grey2 jm_tsss2">--}}
{{--                        안녕하세요, 매니저입니다. <br> 문의 사항을 전화로 알려 드리겠습니다. <br> 좋은 하루 되세요 ^^--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
        <!-- // -->
        <!-- // Q_list -->


        <!-- view_more -->
        <div class="flx_c pdg_tb20">
            <!-- bt_mid -->
            <div class="flx_c bt_mid01" style="padding:5px 50px;">
                @lang('client.product_view_feedback_view_more')
            </div><!-- // bt_mid -->
        </div>
        <!-- // view_more -->
    </div>

    <!-- Review -->
    <div id="prd_review" class="tab_con">
        <div class="pdg_s15 pdg_t15">
            <div class="flx_side_m pdg_b15 line_bt01">
                <div class="flx_lft_m">
                    <!-- big star icon -->
                    <div class="flx_lft">
                        <div class="star_icon02 on">
                        </div>
                        <div class="star_icon02 on">
                        </div>
                        <div class="star_icon02 on">
                        </div>
                        <div class="star_icon02 on">
                        </div>
                        <div class="star_icon02">
                        </div>
                    </div>
                    <!-- // big star icon -->
                    <div class="pdg_l05 jm_tss1 jcr_greyc">
                        <font class="jm_tss1 jcr_grey2 j_bold">4.2</font>/5
                    </div>
                </div>
                <div class="pdg_l10">
                    <!-- bt_mid -->
                    <div class="w_100 flx_c bt_mid01" style="padding:5px 40px;" onclick="location.href='product_review_write.html'">
                        @lang('client.product_view_review_write')
                    </div><!-- // bt_mid -->
                </div>
            </div>
        </div>
        <!-- // Review -->
        <!-- list -->
        <!-- list_cell -->
        <div class="pdg_s15 pdg_t15">
            <!-- List before clicking -->
            <div class="flx_side_m pdg_b05 line_bt01">
                <div class="pdg_r20" style="width:calc(100%-80px); display:flex; flex-direction:column; justify-content:space-between; margin:-4px 0;">
                    <div style="height:80px;">
                        <!-- small star icon -->
                        <div class="flx_lft pdg_b08">
                            <div class="star_icon on">
                            </div>
                            <div class="star_icon on">
                            </div>
                            <div class="star_icon on">
                            </div>
                            <div class="star_icon on">
                            </div>
                            <div class="star_icon">
                            </div>
                        </div>
                        <!-- // small star icon -->
                        <div class="cut_3 jcr_grey9 jm_tsss2 pdg_b05 lh_15" style="height:50px;">
                            돌고래와 낚시 보트를 가까이서 보는 것은 훌륭한 여행이었습니다! 선장이 친절해서 좋았습니다. 정말 후회없는 선택 이었어요 ~ ㅎㅎ
                        </div>
                    </div>
                    <div class="jcr_grey9 jm_tsss0">
                        <font class="jcr_grey9 jm_tsss0">mincho11@****.***</font> | <font class="jcr_grey9 jm_tsss0" style="white-space: nowrap;">2020.10.19</font>
                    </div>
                </div>
                <div style="width:80px;">
                    <div class="thumb_02">
                        <img src="{{asset('mobile/client/images/pic/review_08.png')}}" alt="" />
                    </div>
                    <div class="jcr_grey2 jm_tsss0 js_align_r pdg_t05 js_more_view">
                        @lang('client.product_view_feedback_view_more')
                    </div>
                </div>
            </div>
            <!-- Click to view the contents -->
            <div class="pdg_b05 line_bt01" style="display: none;">
                <div class="flx_side pdg_b10">
                    <!-- small star icon -->
                    <div class="flx_lft_m">
                        <div class="star_icon on">
                        </div>
                        <div class="star_icon on">
                        </div>
                        <div class="star_icon on">
                        </div>
                        <div class="star_icon on">
                        </div>
                        <div class="star_icon">
                        </div>
                    </div>
                    <!-- // small star icon -->
                    <div>
                        <div class="jcr_grey9 jm_tsss0">
                            <font class="jcr_grey9 jm_tsss0">mincho11@****.***</font> | <font class="jcr_grey9 jm_tsss0" style="white-space: nowrap;">2020.10.19</font>
                        </div>
                    </div>
                </div>
                <div class="cut_3 jcr_grey9 jm_tsss2 pdg_b05 lh_15">
                    돌고래와 낚시 보트를 가까이서 보는 것은 훌륭한 여행이었습니다! 선장이 너무 친절해서 좋았어요. 후회없는 선택이었다 ~ ㅎㅎ 후회없는 선택이었다 ~
                </div>
                <!-- Sliding Image -->
                <div class="pdg_t15 jbg_wht" style="margin:0 -15px;">
                    <div class="sliding02_container">
                        <div class="sliding02_wrap">
                            <!---->
                            <div class="sliding02_cell full-open">
                                <img src="{{asset('mobile/client/images/pic/review_08.png')}}" alt="" />
                            </div>
                            <!---->
                            <div class="sliding02_cell full-open">
                                <img src="{{asset('mobile/client/images/pic/review_08.png')}}" alt="" />
                            </div>
                            <!---->
                            <div class="sliding02_cell full-open">
                                <img src="{{asset('mobile/client/images/pic/review_08.png')}}" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
                <!-- // Sliding Image -->
                <div class="jcr_grey2 jm_tsss0 js_align_r pdg_t05 js_more_close">
                    Fold
                </div>
            </div>
        </div>
        <!-- // list_cell -->
        <!-- list_cell -->
        <div class="pdg_s15 pdg_t15">
            <!-- List before clicking -->
            <div class="flx_side_m pdg_b05 line_bt01">
                <div class="pdg_r20" style="width:calc(100%-80px); display:flex; flex-direction:column; justify-content:space-between; margin:-4px 0;">
                    <div style="height:80px;">
                        <!-- small star icon -->
                        <div class="flx_lft pdg_b08">
                            <div class="star_icon on">
                            </div>
                            <div class="star_icon on">
                            </div>
                            <div class="star_icon on">
                            </div>
                            <div class="star_icon on">
                            </div>
                            <div class="star_icon">
                            </div>
                        </div>
                        <!-- // small star icon -->
                        <div class="cut_3 jcr_grey9 jm_tsss2 pdg_b05 lh_15" style="height:50px;">
                            돌고래와 낚시 보트를 가까이서 보는 것은 훌륭한 여행이었습니다! 선장이 너무 친절해서 좋았어요. 정말 후회없는 선택 이었어요 ~ ㅎㅎ
                        </div>
                    </div>
                    <div class="jcr_grey9 jm_tsss0">
                        <font class="jcr_grey9 jm_tsss0">mincho11@****.***</font> | <font class="jcr_grey9 jm_tsss0" style="white-space: nowrap;">2020.10.19</font>
                    </div>
                </div>
                <div style="width:80px;">
                    <div class="thumb_02">
                        <img src="{{asset('mobile/client/images/pic/review_08.png')}}" alt="" />
                    </div>
                    <div class="jcr_grey2 jm_tsss0 js_align_r pdg_t05 js_more_view">
                        @lang('product_view_feedback_view_more')
                    </div>
                </div>
            </div>
            <!-- Click to view the contents -->

        </div>
        <!-- // list_cell -->
        <!--full photo-->
        <div class="full-photo">
            <div class="dim"></div>
            <img src="{{asset('mobile/client/images/pic/review_08.png')}}" alt="" class="photo"/>
            <img src="{{asset('mobile/client/images/pic/close.png')}}" class="full-close"/>
        </div>
        <!--full photo-->
        <!-- list_cell -->


        <!-- view_more -->
        <div class="flx_c pdg_tb20">
            <!-- bt_mid -->
            <div class="flx_c bt_mid01" style="padding:5px 50px;">
                View more
            </div><!-- // bt_mid -->
        </div>
        <!-- // view_more -->
    </div>

    <!-- fixed Bottom Button -->
    <div class="btm_bt_wrap02" style="position: fixed;bottom: 0;left: 0; padding:12px 15px 12px;">
        <!-- button -->
        <div class="flx_c jbg_ylw jm_tss1 jcr_wht j_bold" style="box-shadow: 0 4px 6px #0000001F;padding:19px 0; border-radius:0px;" onclick="location.href='{{route('client.mobile.reservation.prepare', ['id'=>$model->Id])}}'">
            @lang('client.product_view_make_reservation')
        </div>
        <!--// button -->
    </div>
    <!-- // fixed Bottom Button -->
</div>

<!-- Temporary script for showing companies. View review -->


@section('scripts')
    <script>
        $('.js_more_view').on('click', function() {
            var $crDiv = $(this).parent().parent('div'),
                $sbDiv = $crDiv.siblings('div');

            $crDiv.hide();
            $sbDiv.show();
        });

        $('.js_more_close').on('click', function() {
            var $crDiv = $(this).parent('div'),
                $sbDiv = $crDiv.siblings('div');

            $crDiv.hide();
            $sbDiv.show();
        });

        $(".full-open").click(function() {
            $(".full-photo").show();
            $(".dim").css({"display":"block"});
            $("body").css({"overflow":"hidden","position":"fixed"});
        });

        $(".full-close, .dim").click(function() {
            $(".full-photo").hide();
            $(".dim").css({"display":"none"});
            $("body").css({"overflow":"auto","position":"static"});
        });
    </script>
@endsection