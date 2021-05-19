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
                    Tour details
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
                <div class="swiper-slide">
                    <img src="{{asset('mobile/client/images/pic/review_07.png')}}" width="100%" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="{{asset('mobile/client/images/pic/review_04.png')}}" width="100%" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="{{asset('mobile/client/images/pic/review_07.png')}}" width="100%" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="{{asset('mobile/client/images/pic/review_04.png')}}" width="100%" alt="">
                </div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
        </div>
    </div>
    <!-- // rolling_banner -->

    <!-- shot info -->
    <div class="pdg_s15 pdg_tb20">
        <div class="jcr_grey2 jm_tss1 j_bold pdg_b12">
            Dolphin Ecotourism Tour
        </div>
        <div class="jcr_grey9 jm_tsss2 pdg_b08 lh_15">
            A yacht where you can see the vast sea of ​​Jeju Island and Jeju dolphins A yacht where you can see the vast sea of ​​Jeju Island and Jeju dolphins A yacht where you can see Jeju Island's vast sea and Jeju dolphins
        </div>
        <div class="jcr_grey9 jm_tsss2 pdg_b12">
            40 feet / 22 seats
        </div>
        <div class="flx_side_b">
            <div class="flx_lft_b">
                <div class="star_icon on">
                </div>
                <div class="jcr_grey2 jm_tsss2 j_bold" style="width:30px;">
                    4.2
                </div>
                <div class="jcr_grey9 jm_tsss2">
                    There are a total of <font class="jcr_grey2 jm_tsss2 j_bold pdg_l03">12</font> reviews
                </div>
            </div>
            <div class="js_money02">
                70,000
            </div>
        </div>
    </div>
    <!-- // shot info -->

    <!-- Tab -->
    <div class="sub_tab01_wrap flx_lft">
        <div class="w_333 flx_c sub_tab01 tab_menu on">
            <a href="#prd_info">Details</a>
        </div>
        <div class="w_333 flx_c sub_tab01 tab_menu">
            <a href="#prd_qna">Q&amp;A</a>
        </div>
        <div class="w_333 flx_c sub_tab01 tab_menu">
            <a href="#prd_review">Review(10)</a>
        </div>
    </div>
    <!-- // tab -->

    <div id="prd_info" class="tab_con on">
        <div class="pdg_15">
            <div class="jcr_grey9 jm_tsss2 pdg_b20 lh_15">
                About 100 southern giant dolphins live on the coast of Jeju Island, and they are the top predators of the coastal ecosystem. Therefore, when they disappear, the creatures that make up the underlying ecosystem can also be threatened with existence.
            </div>
            <div class="jcr_grey9 jm_tsss2 lh_15">
                The Gimnyeong Dolphin Ecotourism is the wild state of Jeju giant dolphins that can disappear from the Jeju sea anytime if preservation measures are not in place, without affecting the ecological environment as they are. It is a tour where you can experience the marvelous ecosystem mystery by raising a new understanding of the importance of the city.
            </div>
        </div>
        <!-- mid_photo -->
        <div class="pdg_s15 pdg_t15">
            <div class="mgn_b20" style="padding-top:60%; background:#fff;">
                <div class="w_100" style="margin-top:-60%; overflow:hidden;">
                    <div>
                        <img src="../resources/images/pic/info_03.png" width="100%" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- // mid_photo -->


        <div class="pdg_15">
            <div class="jcr_grey9 jm_tsss2 pdg_b20 lh_15">
                The Southern Big Dolphin is an animal that has been revered as a spiritual animal in the lives of haenyeos after staying in the sea of ​​Jeju with sympathy with the people of Jeju since a very long time.
            </div>
            <div class="jcr_grey9 jm_tsss2 lh_15">
                In particular, it is also being investigated that women divers in the Gimnyeong area have a very strong attachment to dolphins. I first learned how to coexist with dolphins by interacting with dolphins through the haenyeo material and understanding dolphins' habits. That is why it is also a place where a large number of southern large dolphins live in Jeju.
            </div>
        </div>

        <!-- mid_photo -->
        <div class="pdg_s15 pdg_t15">
            <div class="mgn_b20" style="padding-top:60%; background:#fff;">
                <div class="w_100" style="margin-top:-60%; overflow:hidden;">
                    <div>
                        <img src="{{asset('mobile/client/images/pic/info_05.png')}}" width="100%" alt="">
                    </div>
                </div>
            </div>
        </div>
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
                    Refund Policy Guide
                </div>
                @if($vendor->IsCancellable)
                <div class="jcr_grey9 jm_tsss2 pdg_b05">
                    -{{$vendor->CancelledBefore7}}% refund if canceled 7 days before the reservation date
                </div>
                <div class="jcr_grey9 jm_tsss2 pdg_b05">
                    -{{$vendor->CancelledBefore45}}% refund if canceled 4-6 days before the reservation date</div>
                <div class="jcr_grey9 jm_tsss2 pdg_b05">
                    -{{$vendor->CancelledBefore13}}% refund if canceled 1-3 days before the reservation date
                </div>
                <div class="jcr_grey9 jm_tsss2 pdg_b05">
                    -{{$vendor->CancelledOnDay}}% refund if canceled on the day of reservation
                </div>
                @else
                    <div class="jcr_grey9 jm_tsss2 pdg_b05">
                        Not cancellable
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
                        View my inquiry
                    </div>
                </div>
                <div class="pdg_l10">
                    <!-- bt_mid -->
                    <div class="w_100 flx_c bt_mid01" style="padding:5px 50px;" onclick="location.href='product_qna_write.html'">
                        Inquire
                    </div><!-- // bt_mid -->
                </div>
            </div>
        </div>
        <!-- // Question -->
        <!-- Q_list -->
        <!-- -->
        <div class="pdg_s15 pdg_t15 js_acd">
            <div class="flx_side_m pdg_b05">
                <div class="flx_lft" style="width:100px;">
                    <!-- flag -->
                    <div class="flx_c bt_sml01">
                        Waiting for reply
                    </div><!-- // flag -->
                </div>
                <div class="flx_rgt" style="width:calc(100%-100px);">
                    <div class="jcr_grey9 jm_tsss0 js_align_r">
                        <font class="jcr_grey9 jm_tsss0">mincho11@****.***</font> | <font class="jcr_grey9 jm_tsss0" style="white-space: nowrap;">2020.10.19</font>
                    </div>
                </div>
            </div>
            <div class="pdg_b15 line_bt01 js_acd_tit">
                <div class="jcr_grey2 jm_tsss2 j_bold">
                    Can I see dolphins unconditionally?
                </div>
            </div>
            <div class="js_acd_con">
                <div class="pdg_15 jbg_grey01 flx_lft">
                    <div class="pdg_r15 jcr_grey9 jm_ts4 j_bold">
                        Q
                    </div>
                    <div class="jcr_grey2 jm_tsss2">
                        Can you always see dolphins if you go?<br>Or how often do they appear?
                    </div>
                </div>
            </div>
        </div>
        <!-- // -->
        <!-- -->
        <div class="pdg_s15 pdg_t15 js_acd">
            <div class="flx_side_m pdg_b05">
                <div class="flx_lft" style="width:100px;">
                    <!-- flag -->
                    <div class="flx_c bt_sml01">
                        Waiting for reply
                    </div><!-- // flag -->
                </div>
                <div class="flx_rgt" style="width:calc(100%-100px);">
                    <div class="jcr_grey9 jm_tsss0 js_align_r">
                        <font class="jcr_grey9 jm_tsss0">mincho11@****.***</font> | <font class="jcr_grey9 jm_tsss0" style="white-space: nowrap;">2020.10.19</font>
                    </div>
                </div>
            </div>
            <div class="pdg_b15 line_bt01 js_acd_tit">
                <div class="jcr_grey2 jm_tsss2 j_bold">
                    Can I see dolphins unconditionally?
                </div>
            </div>
            <div class="js_acd_con">
                <div class="pdg_15 jbg_grey01 flx_lft">
                    <div class="pdg_r15 jcr_grey9 jm_ts4 j_bold">
                        Q
                    </div>
                    <div class="jcr_grey2 jm_tsss2">
                        Can you always see dolphins if you go?<br>Or how often do they appear?
                    </div>
                </div>
            </div>
        </div>
        <!-- // -->
        <!-- -->
        <div class="pdg_s15 pdg_t15 js_acd">
            <div class="flx_side_m pdg_b05">
                <div class="flx_lft" style="width:100px;">
                    <!-- flag -->
                    <div class="flx_c bt_sml01">
                        Waiting for reply
                    </div><!-- // flag -->
                </div>
                <div class="flx_rgt" style="width:calc(100%-100px);">
                    <div class="jcr_grey9 jm_tsss0 js_align_r">
                        <font class="jcr_grey9 jm_tsss0">mincho11@****.***</font> | <font class="jcr_grey9 jm_tsss0" style="white-space: nowrap;">2020.10.19</font>
                    </div>
                </div>
            </div>
            <div class="pdg_b15 line_bt01 js_acd_tit">
                <div class="jcr_grey2 jm_tsss2 j_bold">
                    Tour Inquiry
                </div>
            </div>
            <div class="js_acd_con">
                <div class="pdg_15 jbg_grey01 flx_lft">
                    <div class="pdg_r15 jcr_grey9 jm_ts4 j_bold">
                        Q
                    </div>
                    <div class="jcr_grey2 jm_tsss2">
                        Can you always see dolphins if you go?<br>Or how often do they appear?
                    </div>
                </div>
            </div>
        </div>
        <!-- // -->
        <!-- -->
        <div class="pdg_s15 pdg_t15 js_acd">
            <div class="flx_side_m pdg_b05">
                <div class="flx_lft" style="width:100px;">
                    <!-- flag -->
                    <div class="flx_c bt_sml01 on">
                        Answer completed
                    </div><!-- // flag -->
                    <div class="pdg_l03">
                        <img src="../resources/images/icon/lock_icon.png" height="20px" alt=""/>
                    </div>
                </div>
                <div class="flx_rgt" style="width:calc(100%-100px);">
                    <div class="jcr_grey9 jm_tsss0 js_align_r">
                        <font class="jcr_grey9 jm_tsss0">mincho11@****.***</font> | <font class="jcr_grey9 jm_tsss0" style="white-space: nowrap;">2020.10.19</font>
                    </div>
                </div>
            </div>
            <div class="pdg_b15 line_bt01 js_acd_tit">
                <div class="jcr_grey2 jm_tsss2 j_bold">
                    Pet boarding inquiry
                </div>
            </div>
            <div class="js_acd_con">
                <div class="pdg_15 jbg_grey01 flx_lft">
                    <div class="pdg_r15 jcr_grey9 jm_ts4 j_bold">
                        Q
                    </div>
                    <div class="jcr_grey2 jm_tsss2">
                        Can pets be boarded?<br>How many pets are there?
                    </div>
                </div>
                <div class="pdg_15 jbg_grey01 flx_lft line_t_dash">
                    <div class="pdg_r15 jcr_ylw jm_ts4 j_bold">
                        A
                    </div>
                    <div class="jcr_grey2 jm_tsss2">
                        Hello, this is the manager.<br>I will inform you of your inquiry by phone.<br>Have a nice day ^^
                    </div>
                </div>
            </div>
        </div>
        <!-- // -->
        <!-- -->
        <div class="pdg_s15 pdg_t15 js_acd">
            <div class="flx_side_m pdg_b05">
                <div class="flx_lft" style="width:100px;">
                    <!-- flag -->
                    <div class="flx_c bt_sml01 on">
                        Answer completed
                    </div><!-- // flag -->
                </div>
                <div class="flx_rgt" style="width:calc(100%-100px);">
                    <div class="jcr_grey9 jm_tsss0 js_align_r">
                        <font class="jcr_grey9 jm_tsss0">mincho11@****.***</font> | <font class="jcr_grey9 jm_tsss0" style="white-space: nowrap;">2020.10.19</font>
                    </div>
                </div>
            </div>
            <div class="pdg_b15 line_bt01 js_acd_tit">
                <div class="jcr_grey2 jm_tsss2 j_bold">
                    Tour Inquiry
                </div>
            </div>
            <div class="js_acd_con">
                <div class="pdg_15 jbg_grey01 flx_lft">
                    <div class="pdg_r15 jcr_grey9 jm_ts4 j_bold">
                        Q
                    </div>
                    <div class="jcr_grey2 jm_tsss2">
                        How long is the tour?<br>How does the free time move?<br>Is it possible to fish?
                    </div>
                </div>
                <div class="pdg_15 jbg_grey01 flx_lft line_t_dash">
                    <div class="pdg_r15 jcr_ylw jm_ts4 j_bold">
                        A
                    </div>
                    <div class="jcr_grey2 jm_tsss2">
                        Hello, this is the manager.<br>I will inform you of your inquiry by phone.<br>Have a nice day ^^
                    </div>
                </div>
            </div>
        </div>
        <!-- // -->
        <!-- -->
        <div class="pdg_s15 pdg_t15 js_acd">
            <div class="flx_side_m pdg_b05">
                <div class="flx_lft" style="width:100px;">
                    <!-- flag -->
                    <div class="flx_c bt_sml01 on">
                        Answer completed
                    </div><!-- // flag -->

                </div>
                <div class="flx_rgt" style="width:calc(100%-100px);">
                    <div class="jcr_grey9 jm_tsss0 js_align_r">
                        <font class="jcr_grey9 jm_tsss0">mincho11@****.***</font> | <font class="jcr_grey9 jm_tsss0" style="white-space: nowrap;">2020.10.19</font>
                    </div>
                </div>
            </div>
            <div class="pdg_b15 line_bt01 js_acd_tit">
                <div class="jcr_grey2 jm_tsss2 j_bold">
                    Pet boarding inquiry
                </div>
            </div>
            <div class="js_acd_con">
                <div class="pdg_15 jbg_grey01 flx_lft">
                    <div class="pdg_r15 jcr_grey9 jm_ts4 j_bold">
                        Q
                    </div>
                    <div class="jcr_grey2 jm_tsss2">
                        Can pets be boarded?<br>How many pets are there?
                    </div>
                </div>
                <div class="pdg_15 jbg_grey01 flx_lft line_t_dash">
                    <div class="pdg_r15 jcr_ylw jm_ts4 j_bold">
                        A
                    </div>
                    <div class="jcr_grey2 jm_tsss2">
                        Hello, this is the manager.<br>We will inform you of your inquiries by phone.
                    </div>
                </div>
            </div>
        </div>
        <!-- // -->
        <!-- -->
        <div class="pdg_s15 pdg_t15 js_acd">
            <div class="flx_side_m pdg_b05">
                <div class="flx_lft" style="width:100px;">
                    <!-- flag -->
                    <div class="flx_c bt_sml01 on">
                        Answer completed
                    </div><!-- // flag -->
                </div>
                <div class="flx_rgt" style="width:calc(100%-100px);">
                    <div class="jcr_grey9 jm_tsss0 js_align_r">
                        <font class="jcr_grey9 jm_tsss0">mincho11@****.***</font> | <font class="jcr_grey9 jm_tsss0" style="white-space: nowrap;">2020.10.19</font>
                    </div>
                </div>
            </div>
            <div class="pdg_b15 line_bt01 js_acd_tit">
                <div class="jcr_grey2 jm_tsss2 j_bold">
                    Pet boarding inquiry
                </div>
            </div>
            <div class="js_acd_con">
                <div class="pdg_15 jbg_grey01 flx_lft">
                    <div class="pdg_r15 jcr_grey9 jm_ts4 j_bold">
                        Q
                    </div>
                    <div class="jcr_grey2 jm_tsss2">
                        Can pets be boarded?<br>How many pets are there?
                    </div>
                </div>
                <div class="pdg_15 jbg_grey01 flx_lft line_t_dash">
                    <div class="pdg_r15 jcr_ylw jm_ts4 j_bold">
                        A
                    </div>
                    <div class="jcr_grey2 jm_tsss2">
                        Hello, this is the manager.<br>I will inform you of your inquiry by phone.<br>Have a nice day ^^
                    </div>
                </div>
            </div>
        </div>
        <!-- // -->
        <!-- -->
        <div class="pdg_s15 pdg_t15 js_acd">
            <div class="flx_side_m pdg_b05">
                <div class="flx_lft" style="width:100px;">
                    <!-- flag -->
                    <div class="flx_c bt_sml01 on">
                        Answer completed
                    </div><!-- // flag -->
                </div>
                <div class="flx_rgt" style="width:calc(100%-100px);">
                    <div class="jcr_grey9 jm_tsss0 js_align_r">
                        <font class="jcr_grey9 jm_tsss0">mincho11@****.***</font> | <font class="jcr_grey9 jm_tsss0" style="white-space: nowrap;">2020.10.19</font>
                    </div>
                </div>
            </div>
            <div class="pdg_b15 line_bt01 js_acd_tit">
                <div class="jcr_grey2 jm_tsss2 j_bold">
                    Pet boarding inquiry
                </div>
            </div>
            <div class="js_acd_con">
                <div class="pdg_15 jbg_grey01 flx_lft">
                    <div class="pdg_r15 jcr_grey9 jm_ts4 j_bold">
                        Q
                    </div>
                    <div class="jcr_grey2 jm_tsss2">
                        Can pets be boarded?<br>How many pets are there?
                    </div>
                </div>
                <div class="pdg_15 jbg_grey01 flx_lft line_t_dash">
                    <div class="pdg_r15 jcr_ylw jm_ts4 j_bold">
                        A
                    </div>
                    <div class="jcr_grey2 jm_tsss2">
                        Hello, this is the manager.<br>We will inform you of your inquiries by phone.<br>Have a day ^^
                    </div>
                </div>
            </div>
        </div>
        <!-- // -->
        <!-- // Q_list -->


        <!-- view_more -->
        <div class="flx_c pdg_tb20">
            <!-- bt_mid -->
            <div class="flx_c bt_mid01" style="padding:5px 50px;">
                View more
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
                        Write a review
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
                            Watching dolphins up close and fishing boats was a great tour! It was nice that the captain was so kind. It was really a choice without regrets~ㅎㅎ
                        </div>
                    </div>
                    <div class="jcr_grey9 jm_tsss0">
                        <font class="jcr_grey9 jm_tsss0">mincho11@****.***</font> | <font class="jcr_grey9 jm_tsss0" style="white-space: nowrap;">2020.10.19</font>
                    </div>
                </div>
                <div style="width:80px;">
                    <div class="thumb_02">
                        <img src="../resources/images/pic/review_08.png" alt="" />
                    </div>
                    <div class="jcr_grey2 jm_tsss0 js_align_r pdg_t05 js_more_view">
                        View more
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
                    Watching dolphins up close and fishing boats was a great tour! I liked the captain because he was so kind. It was a choice without regrets~ㅎㅎ It was a choice without regrets~
                </div>
                <!-- Sliding Image -->
                <div class="pdg_t15 jbg_wht" style="margin:0 -15px;">
                    <div class="sliding02_container">
                        <div class="sliding02_wrap">
                            <!---->
                            <div class="sliding02_cell full-open">
                                <img src="../resources/images/pic/review_08.png" alt="" />
                            </div>
                            <!---->
                            <div class="sliding02_cell full-open">
                                <img src="../resources/images/pic/review_08.png" alt="" />
                            </div>
                            <!---->
                            <div class="sliding02_cell full-open">
                                <img src="../resources/images/pic/review_08.png" alt="" />
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
                            Watching dolphins up close and fishing boats was a great tour! I liked the captain because he was so kind. It was really a choice without regrets~ㅎㅎ
                        </div>
                    </div>
                    <div class="jcr_grey9 jm_tsss0">
                        <font class="jcr_grey9 jm_tsss0">mincho11@****.***</font> | <font class="jcr_grey9 jm_tsss0" style="white-space: nowrap;">2020.10.19</font>
                    </div>
                </div>
                <div style="width:80px;">
                    <div class="thumb_02">
                        <img src="../resources/images/pic/review_08.png" alt="" />
                    </div>
                    <div class="jcr_grey2 jm_tsss0 js_align_r pdg_t05 js_more_view">
                        View more
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
                    Watching dolphins up close and fishing boats was a great tour! I liked the captain because he was so kind. It was a choice without regrets~ㅎㅎ It was a choice without regrets~
                </div>
                <!-- Sliding Image -->
                <div class="pdg_t15 jbg_wht" style="margin:0 -15px;">
                    <div class="sliding02_container">
                        <div class="sliding02_wrap">
                            <!---->
                            <div class="sliding02_cell full-open">
                                <img src="../resources/images/pic/review_08.png" alt="" />
                            </div>
                            <!---->
                            <div class="sliding02_cell full-open">
                                <img src="../resources/images/pic/review_08.png" alt="" />
                            </div>
                            <!---->
                            <div class="sliding02_cell full-open">
                                <img src="../resources/images/pic/review_08.png" alt="" />
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
        <!--full photo-->
        <div class="full-photo">
            <div class="dim"></div>
            <img src="../resources/images/pic/review_08.png" alt="" class="photo"/>
            <img src="../resources/images/close.png" class="full-close"/>
        </div>
        <!--full photo-->
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
                            Watching dolphins up close and fishing boats was a great tour! I liked the captain because he was so kind. It was really a choice without regrets~ㅎㅎ
                        </div>
                    </div>
                    <div class="jcr_grey9 jm_tsss0">
                        <font class="jcr_grey9 jm_tsss0">mincho11@****.***</font> | <font class="jcr_grey9 jm_tsss0" style="white-space: nowrap;">2020.10.19</font>
                    </div>
                </div>
                <div style="width:80px;">
                    <div class="thumb_02">
                        <img src="../resources/images/pic/review_08.png" alt="" />
                    </div>
                    <div class="jcr_grey2 jm_tsss0 js_align_r pdg_t05 js_more_view">
                        View more
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
                    {{$model->Introuction}}
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
                            Watching dolphins up close and fishing boats was a great tour! I liked the captain because he was so kind. It was really a choice without regrets~ㅎㅎ
                        </div>
                    </div>
                    <div class="jcr_grey9 jm_tsss0">
                        <font class="jcr_grey9 jm_tsss0">mincho11@****.***</font> | <font class="jcr_grey9 jm_tsss0" style="white-space: nowrap;">2020.10.19</font>
                    </div>
                </div>
                <div style="width:80px;">
                    <div class="thumb_02">
                        <img src="../resources/images/pic/review_08.png" alt="" />
                    </div>
                    <div class="jcr_grey2 jm_tsss0 js_align_r pdg_t05 js_more_view">
                        View more
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
                    Watching dolphins up close and fishing boats was a great tour! I liked the captain because he was so kind. It was a choice without regrets~ㅎㅎ It was a choice without regrets~
                </div>
                <!-- Sliding Image -->
                <div class="pdg_t15 jbg_wht" style="margin:0 -15px;">
                    <div class="sliding02_container">
                        <div class="sliding02_wrap">
                            <!---->
                            <div class="sliding02_cell full-open">
                                <img src="../resources/images/pic/review_08.png" alt="" />
                            </div>
                            <!---->
                            <div class="sliding02_cell full-open">
                                <img src="../resources/images/pic/review_08.png" alt="" />
                            </div>
                            <!---->
                            <div class="sliding02_cell full-open">
                                <img src="../resources/images/pic/review_08.png" alt="" />
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
        <!-- // list -->

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
        <div class="flx_c jbg_ylw jm_tss1 jcr_wht j_bold" style="box-shadow: 0 4px 6px #0000001F;padding:19px 0; border-radius:0px;" onclick="location.href='product_booking.html'">
            Make a reservation
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