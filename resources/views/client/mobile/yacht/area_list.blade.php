@extends('client.layouts.mobile')


@section('styles')
@endsection


@section('content')
    <div class="pop pop_select js_pop" style="position:absolute; top:0; bottom:0; width:100%; height:100%; background:rgba(0,0,0,0.5); z-index :999;">
        <!-- contents -->
        <div class="jbg_wht pdg_s15" style="position:fixed; width:100%; height:auto; bottom:0;">
            <!-- List of cities in the region (province) -->
            <div class="line_bt01 flx_c" style="height:48px;">
                <div class="pop_val w_100 js_align_c jcr_grey2 jm_tss1 j_bold">Jeju City</div>
            </div>
            <div class="line_bt01 flx_c" style="height:48px;">
                <div class="pop_val w_100 js_align_c jcr_grey2 jm_tss1 j_bold">Seogwipo City</div>
            </div>
        </div>
        <!-- // contents -->
    </div>
    <!-- // pop -->

    <div class="jbg_wht" style="position:relative; min-height:100%; padding-bottom:20px;">
        <!-- header -->
        <header id="header">
            <div class="jbg_wht flx_side" style="border-bottom:0px solid #ccc;">
                <div class="flx_lft_m" style="width:65px; height:60px;">
                    <div class=" pdg_l15" onclick="location.href='javascript:history.go(-1);'">
                        <img src="../resources/images/icon/arrow_back.png" height="20px" alt="" />
                    </div>
                </div>
                <div class="flx_c" style="height:60px;">
                    <div class="jcr_grey2 jm_tss1 j_bold" style="height:17px;">
                        Jeju
                    </div>
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
            <!-- search -->
            <div class="pdg_s15 pdg_tb13 jbg_grey02">
                <!-- 1st line -->
                <div class="flx_side">
                    <div class="w_50 pdg_r05">
                        <fieldset class="input_border">
                            <input class="js_input_loca w_100 js_pop_open" name="" placeholder="State/Province" type="text">
                        </fieldset>
                    </div>
                    <div class="w_50 pdg_l05">
                        <fieldset class="input_border">
                            <!-- 1. Entering the day of the week in the input value, please modify js
                            2. Change in the order of month and year shown in the calendar year and month. -->
                            <input class="js_input_date on w_100 datepicker" name="" placeholder="reservation date" type="text">
                        </fieldset>
                    </div>
                </div>
                <script>
                    $('.datepicker').pickadate({
                    });
                </script>
                <!-- // 1st line -->
                <!-- 2nd line -->
                <div class="w_100 flx_side jbg_wht mgn_t08" style="border-radius:30px;">
                    <div>
                        <div class=" flx_c bt_r30 pdg_s05 {{$sort == \App\Common\Enums\UI\SortOrder::popularity?"on":""}}">
                            <a href="{{route('client.mobile.yacht.list', \App\Common\Enums\UI\SortOrder::popularity)}}">Popularity</a>
                        </div>
                    </div>
                    <div>
                        <div class=" flx_c bt_r30 pdg_s05 {{$sort == \App\Common\Enums\UI\SortOrder::registration?"on":""}}">
                            <a href="{{route('client.mobile.yacht.list', \App\Common\Enums\UI\SortOrder::registration)}}">Registration order</a>
                        </div>
                    </div>
                    <div>
                        <div class=" flx_c bt_r30 pdg_s05 {{$sort == \App\Common\Enums\UI\SortOrder::low_price?"on":""}}">
                            <a href="{{route('client.mobile.yacht.list', \App\Common\Enums\UI\SortOrder::low_price)}}">Low price order</a>
                        </div>
                    </div>
                    <div>
                        <div class=" flx_c bt_r30 pdg_s05 {{$sort == \App\Common\Enums\UI\SortOrder::high_price?"on":""}}">
                            <a href="{{route('client.mobile.yacht.list', \App\Common\Enums\UI\SortOrder::high_price)}}">In order of high price</a>
                        </div>
                    </div>
                </div>
                <!-- // 2nd line -->
            </div>
            <!-- // search -->
        </header>
        <!-- // header -->


        <!-- outermost_margin designation -->
        <div class="inner-t">

            <div class="tab_con jbg_wht pdg_s15 pdg_b15 {{$sort == \App\Common\Enums\UI\SortOrder::popularity?"on":""}}">
                @if($sort == \App\Common\Enums\UI\SortOrder::popularity)

                    @foreach($model as $item)
                <!-- list_cell -->
                    <div class="w_100 flx_lft pdg_b10 pdg_t15 line_bt01">
                        <!-- thumbnail -->
                        <div style="width:112px;">
                            <div class="thumb_01 flx_c">
                                <img src="{{asset('mobile/client/images/pic/review_01.png')}}" alt="" onclick="location.href='product_view.html'" />
                                <!-- pick -->
                                <div class="up_bt02_wrap">
                                    <div class="up_bt02 js_btn_toggle on">
                                    </div>
                                </div>
                                <!-- // pick -->
                            </div>
                        </div>
                        <!-- // thumbnail -->
                        <!-- info -->
                        <div class="pdg_l10 w_100" style="height:120px; display:flex; flex-direction:column; justify-content:space-between; margin:-4px 0;">
                            <div style="height:85px;">
                                <div class="cut_1 jcr_grey2 jm_tss1 j_bold pdg_b08" onclick="location.href='product_view.html'">
                                    {{$item->Name}}
                                </div>
                                <div class="cut_2 jcr_grey9 jm_tsss2 lh_15" style="height:36px; overflow:hidden;">
                                    {{$item->Introduction}}
                                </div>
                                <div class="jcr_grey9 jm_tsss2 pdg_t05">
                                    feet: {{$item->yacht()->first()->Length}}  / seats: {{$item->CapacityAdult}}(adults)-{{$item->CapacityChild}}(childs)
                                </div>
                            </div>
                            <div class="flx_side_m">
                                <div class="flx_lft_b">
                                    <div class="star_icon on">
                                    </div>
                                    <div class="jcr_grey2 jm_tsss2 j_bold" style="width:25px;">
                                        4.2
                                    </div>
                                    <div class="comment">
                                    </div>
                                    <div class="jcr_grey2 jm_tsss2 j_bold">
                                        999
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
                    @endif
            </div>

            <!-- outermost_margin designation -->
            <div class="tab_con jbg_wht pdg_s15 pdg_b15 {{$sort == \App\Common\Enums\UI\SortOrder::registration?"on":""}}">

            @if($sort == \App\Common\Enums\UI\SortOrder::registration)

                @foreach($model as $item)
                    <!-- list_cell -->
                        <div class="w_100 flx_lft pdg_b10 pdg_t15 line_bt01">
                            <!-- thumbnail -->
                            <div style="width:112px;">
                                <div class="thumb_01 flx_c">
                                    <img src="{{asset('mobile/client/images/pic/review_01.png')}}" alt="" onclick="location.href='product_view.html'" />
                                    <!-- pick -->
                                    <div class="up_bt02_wrap">
                                        <div class="up_bt02 js_btn_toggle on">
                                        </div>
                                    </div>
                                    <!-- // pick -->
                                </div>
                            </div>
                            <!-- // thumbnail -->
                            <!-- info -->
                            <div class="pdg_l10 w_100" style="height:120px; display:flex; flex-direction:column; justify-content:space-between; margin:-4px 0;">
                                <div style="height:85px;">
                                    <div class="cut_1 jcr_grey2 jm_tss1 j_bold pdg_b08" onclick="location.href='product_view.html'">
                                        {{$item->Name}}
                                    </div>
                                    <div class="cut_2 jcr_grey9 jm_tsss2 lh_15" style="height:36px; overflow:hidden;">
                                        {{$item->Introduction}}
                                    </div>
                                    <div class="jcr_grey9 jm_tsss2 pdg_t05">
                                        feet: {{$item->yacht()->first()->Length}}  / seats: {{$item->CapacityAdult}}(adults)-{{$item->CapacityChild}}(childs)
                                    </div>
                                </div>
                                <div class="flx_side_m">
                                    <div class="flx_lft_b">
                                        <div class="star_icon on">
                                        </div>
                                        <div class="jcr_grey2 jm_tsss2 j_bold" style="width:25px;">
                                            4.2
                                        </div>
                                        <div class="comment">
                                        </div>
                                        <div class="jcr_grey2 jm_tsss2 j_bold">
                                            999
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
                @endif
            </div>
            <!-- outermost_margin designation -->

            <!-- outermost_margin designation -->
            <div class="tab_con jbg_wht pdg_s15 pdg_b15 {{$sort == \App\Common\Enums\UI\SortOrder::low_price?"on":""}}">

            @if($sort == \App\Common\Enums\UI\SortOrder::low_price)

                @foreach($model as $item)
                    <!-- list_cell -->
                        <div class="w_100 flx_lft pdg_b10 pdg_t15 line_bt01">
                            <!-- thumbnail -->
                            <div style="width:112px;">
                                <div class="thumb_01 flx_c">
                                    <img src="{{asset('mobile/client/images/pic/review_01.png')}}" alt="" onclick="location.href='product_view.html'" />
                                    <!-- pick -->
                                    <div class="up_bt02_wrap">
                                        <div class="up_bt02 js_btn_toggle on">
                                        </div>
                                    </div>
                                    <!-- // pick -->
                                </div>
                            </div>
                            <!-- // thumbnail -->
                            <!-- info -->
                            <div class="pdg_l10 w_100" style="height:120px; display:flex; flex-direction:column; justify-content:space-between; margin:-4px 0;">
                                <div style="height:85px;">
                                    <div class="cut_1 jcr_grey2 jm_tss1 j_bold pdg_b08" onclick="location.href='product_view.html'">
                                        {{$item->Name}}
                                    </div>
                                    <div class="cut_2 jcr_grey9 jm_tsss2 lh_15" style="height:36px; overflow:hidden;">
                                        {{$item->Introduction}}
                                    </div>
                                    <div class="jcr_grey9 jm_tsss2 pdg_t05">
                                        feet: {{$item->yacht()->first()->Length}}  / seats: {{$item->CapacityAdult}}(adults)-{{$item->CapacityChild}}(childs)
                                    </div>
                                </div>
                                <div class="flx_side_m">
                                    <div class="flx_lft_b">
                                        <div class="star_icon on">
                                        </div>
                                        <div class="jcr_grey2 jm_tsss2 j_bold" style="width:25px;">
                                            4.2
                                        </div>
                                        <div class="comment">
                                        </div>
                                        <div class="jcr_grey2 jm_tsss2 j_bold">
                                            999
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
                @endif
            </div>
            <!-- outermost_margin designation -->

            <!-- outermost_margin designation -->
            <div class="tab_con jbg_wht pdg_s15 pdg_b15 {{$sort == \App\Common\Enums\UI\SortOrder::high_price?"on":""}}">

            @if($sort == \App\Common\Enums\UI\SortOrder::high_price)

                @foreach($model as $item)
                    <!-- list_cell -->
                        <div class="w_100 flx_lft pdg_b10 pdg_t15 line_bt01">
                            <!-- thumbnail -->
                            <div style="width:112px;">
                                <div class="thumb_01 flx_c">
                                    <img src="{{asset('mobile/client/images/pic/review_01.png')}}" alt="" onclick="location.href='product_view.html'" />
                                    <!-- pick -->
                                    <div class="up_bt02_wrap">
                                        <div class="up_bt02 js_btn_toggle on">
                                        </div>
                                    </div>
                                    <!-- // pick -->
                                </div>
                            </div>
                            <!-- // thumbnail -->
                            <!-- info -->
                            <div class="pdg_l10 w_100" style="height:120px; display:flex; flex-direction:column; justify-content:space-between; margin:-4px 0;">
                                <div style="height:85px;">
                                    <div class="cut_1 jcr_grey2 jm_tss1 j_bold pdg_b08" onclick="location.href='product_view.html'">
                                        {{$item->Name}}
                                    </div>
                                    <div class="cut_2 jcr_grey9 jm_tsss2 lh_15" style="height:36px; overflow:hidden;">
                                        {{$item->Introduction}}
                                    </div>
                                    <div class="jcr_grey9 jm_tsss2 pdg_t05">
                                        feet: {{$item->yacht()->first()->Length}}  / seats: {{$item->CapacityAdult}}(adults)-{{$item->CapacityChild}}(childs)
                                    </div>
                                </div>
                                <div class="flx_side_m">
                                    <div class="flx_lft_b">
                                        <div class="star_icon on">
                                        </div>
                                        <div class="jcr_grey2 jm_tsss2 j_bold" style="width:25px;">
                                            4.2
                                        </div>
                                        <div class="comment">
                                        </div>
                                        <div class="jcr_grey2 jm_tsss2 j_bold">
                                            999
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
                @endif
            </div>


            <!-- outermost_margin designation -->
        </div>
    </div>
@endsection


@section('scripts')
@endsection