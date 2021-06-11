@extends('admin.layouts.mobile')



@section('content')
    <!-- gnb -->

    @if (!auth()->check())
        <script>window.location = "{{route('admin.mobile.login.index')}}";</script>
    @else

        <div class="gnb jbg_wht">
            <!-- contents -->
            <div class="jbg_header pdg_t15 pdg_b30">
                <div class="jcr_wht pdg_r20 js_align_r pdg_b05">
                    <span class="fa fa-close"></span>
                    <img src="{{asset('mobile/admin/images/ic_close02.png')}}" class="js_menu_close" height="24px">
                </div>
                <div class="jcr_wht jm_ts3 pdg_b15" style="padding-left:10%;">
                    {{auth()->user()->name??'Login'}}
                </div>
                <div class="pdg_r20 js_align_r" style="height:30px;">
                    <div class="j_inline flx_c jcr_wht jm_tss1 pdg_s20 pdg_tb05 j_rd04" style="border:1px solid #ccc;">
                        <a href="{{route('admin.mobile.login.logout')}}">Log out</a>
                    </div>
                </div>

            </div>
            <div>
                <div class="pdg_tb15 line_bt01 jm_ts2 bg_arrow02" style="padding-left:13%;" >
                    <a href="{{route('admin.mobile.vendor.edit', ['id'=> auth()->user()->id])}}">@lang("admin.information_management")</a>
                </div>
                <div class="pdg_tb15 line_bt01 jm_ts2 bg_arrow02" style="padding-left:13%;" onclick="location.href='{{route("admin.mobile.yacht.index")}}'">
                    @lang("admin.yacht_management")
                </div>
                <div class="pdg_tb15 line_bt01 jm_ts2 bg_arrow02" style="padding-left:13%;" onclick="location.href='{{ route('admin.mobile.product.index') }}'">
                    @lang("admin.product_management")
                </div>
                <div class="pdg_tb15 line_bt01 jm_ts2 bg_arrow02" style="padding-left:13%;" onclick="location.href='menu_04.html'">
                    @lang("admin.reservation_management")
                </div>
                <div class="pdg_tb15 line_bt01 jm_ts2 bg_arrow02" style="padding-left:13%;" onclick="location.href='menu_05.html'">
                    @lang("admin.inquiry_management")
                </div>
                <div class="pdg_tb15 line_bt01 jm_ts2 bg_arrow02" style="padding-left:13%;" onclick="location.href='menu_06.html'">
                    @lang("calculate")
                </div>
            </div>
            <!-- // contents -->
        </div>
        <div class="gnb_bg"></div>
        <!-- // gnb -->


        <div class="jbg_grey4" style="position:relative; min-height:100%; padding-bottom:10px;">

            <!-- header -->
            <div class="jbg_header flx_side">
                <div class="flx_lft_m" style="width:90px; height:60px;">
                    <div class="pdg_l05 tp_tab js_menu_open">
                        <svg width="32" height="20" viewBox="0 0 448 512">
                            <path
                                    d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837 -7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163 -16 16v40c0 8.837 7.163 16 16 16z">
                        </svg>
                    </div>
                </div>
                <div class="flx_c jm_ts2 jcr_wht j_bold" style="height:60px;">
                    Yopple
                </div>
                <div class="flx_rgt_m" style="width:90px; height:60px;">
                </div>
            </div>
            <!-- // header -->
            <!-- Tab -->
            <div class="pdg_s20">
                <div class="pdg_t15">
                    <div class="flx_side_m jtab_menu_wrap01">
                        <div class="w_333 flx_c jtab_menu01" onclick="location.href='{{route("admin.mobile.yacht.index")}}'">
                            @lang("admin.yacht_management")
                        </div>
                        <div class="w_333 flx_c jtab_menu01" onclick="location.href='{{ route('admin.mobile.product.index') }}'">
                            @lang("admin.product_management")
                        </div>
                        <div class="w_333 flx_c jtab_menu01" onclick="location.href='menu_04.html'">
                            @lang("admin.reservation_management")
                        </div>
                    </div>
                </div>
            </div>
            <!-- // Tab -->
            <!-- Section -->
            <div class="pdg_s05 mgn_t20">
                <!-- List -->
                <!-- List_cell -->
                <div class="jbg_wht pdg_s20 pdg_t20 pdg_b10 mgn_b05 j_rd08">
                    <div class="pdg_b05 mgn_b15 line_bt04 jm_ts2 j_bold">
                        @lang("admin.product_management")
                    </div>
                    <!-- -->
                    <div class="flx_side">
                        <div style="width:calc(100%-80px);">
                            <div class="mgn_b10 jm_tss2">
                                @lang('admin.waiting_for_approve')
                            </div>
                        </div>
                        <div style="width:80px;">
                            <div class="mgn_b10 jcr_red1 jm_tss2 j_bold js_align_r">
                                5
                            </div>
                        </div>
                    </div><!--// -->
                    <!-- -->
                    <div class="flx_side">
                        <div style="width:calc(100%-80px);">
                            <div class="mgn_b10 jm_tss2">
                                @lang('admin.all_product')
                            </div>
                        </div>
                        <div style="width:80px;">
                            <div class="mgn_b10 jcr_red1 jm_tss2 j_bold js_align_r">
                                5
                            </div>
                        </div>
                    </div><!--// -->
                    <!-- -->
                    <div class="flx_side">
                        <div style="width:calc(100%-80px);">
                            <div class="mgn_b10 jm_tss2">
                                @lang('admin.product_on_sale')
                            </div>
                        </div>
                        <div style="width:80px;">
                            <div class="mgn_b10 jcr_red1 jm_tss2 j_bold js_align_r">
                                5
                            </div>
                        </div>
                    </div><!--// --><!-- -->
                    <div class="flx_side">
                        <div style="width:calc(100%-80px);">
                            <div class="mgn_b10 jm_tss2">
                                @lang('admin.waiting_q_a')
                            </div>
                        </div>
                        <div style="width:80px;">
                            <div class="mgn_b10 jcr_red1 jm_tss2 j_bold js_align_r">
                                5
                            </div>
                        </div>
                    </div><!--// -->
                </div>
                <!-- // List_cell -->
                <!-- List_cell -->
                <div class="jbg_wht pdg_s20 pdg_t20 pdg_b10 mgn_b05 j_rd08">
                    <div class="pdg_b05 mgn_b15 line_bt04 jm_ts2 j_bold">
                        @lang("admin.reservation_management")
                    </div>
                    <!-- -->
                    <div class="flx_side">
                        <div style="width:calc(100%-80px);">
                            <div class="mgn_b10 jm_tss2">
                                @lang('admin.reservation_acceptance')
                            </div>
                        </div>
                        <div style="width:80px;">
                            <div class="mgn_b10 jcr_red1 jm_tss2 j_bold js_align_r">
                                999
                            </div>
                        </div>
                    </div><!--// -->
                    <!-- -->
                    <div class="flx_side">
                        <div style="width:calc(100%-80px);">
                            <div class="mgn_b10 jm_tss2">
                                @lang('admin.reservation_confirm')
                            </div>
                        </div>
                        <div style="width:80px;">
                            <div class="mgn_b10 jcr_red1 jm_tss2 j_bold js_align_r">
                                5
                            </div>
                        </div>
                    </div><!--// -->
                    <!-- -->
                    <div class="flx_side">
                        <div style="width:calc(100%-80px);">
                            <div class="mgn_b10 jm_tss2">
                                @lang("admin.completed")
                            </div>
                        </div>
                        <div style="width:80px;">
                            <div class="mgn_b10 jcr_red1 jm_tss2 j_bold js_align_r">
                                5
                            </div>
                        </div>
                    </div><!--// -->
                    <!-- -->
                    <div class="flx_side">
                        <div style="width:calc(100%-80px);">
                            <div class="mgn_b10 jm_tss2">
                                @lang('admin.cancel_request')
                            </div>
                        </div>
                        <div style="width:80px;">
                            <div class="mgn_b10 jcr_red1 jm_tss2 j_bold js_align_r">
                                5
                            </div>
                        </div>
                    </div><!--// -->
                </div>
                <!-- // List_cell -->
                <!-- // List -->
            </div>
            <!-- // Section -->
            <div class="pdg_s20 pdg_t15">
                <!-- button -->
                <div class="flx_c jbg_btn01 jm_tss2 jcr_wht j_bold j_rd04" style="padding:15px 0;" onclick="location.href='schedule.html'">
                    @lang("admin.reserve_schedule")
                </div>
                <!--// button -->
            </div>



        </div>

    @endif



@endsection