@extends('admin.layouts.mobile')

@section('content')
<div class="jbg_wht" style="position:relative; min-height:100%; padding-bottom:76px;">

    <!-- header -->
    <div class="jbg_header flx_side">
        <div class="flx_lft_m" style="width:90px; height:60px;">
            <div class="pdg_l05 tp_tab" onclick="location.href='javascript:history.go(-1);'">
                <svg width="32" height="20" viewBox="0 0 256 512">
                    <path
                            d="M231.293 473.899l19.799-19.799c4.686-4.686 4.686-12.284 0-16.971L70.393 256 251.092 74.87c4.686-4.686 4.686-12.284 0-16.971L231.293 38.1c-4.686-4.686- 12.284-4.686-16.971 0L4.908 247.515c-4.686 4.686-4.686 12.284 0 16.971L214.322 473.9c4.687 4.686 12.285 4.686 16.971-.001z">
                    </path>
                </svg>
            </div>
        </div>
        <div class="flx_c jm_ts2 jcr_wht j_bold" style="height:60px;">
            Product management
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
                Product modification/registration
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
                        division
                    </div>
                    <div class="pdg_s10 pdg_tb10 jm_tss1 jcr_grey1"
                         style="display:table-cell; width:calc(100%-90px);">
                        <div>
                            <div class="rbox_sel on">Tour</div>
                            <div class="rbox_sel">Accommodation</div>
                            <div class="rbox_sel">Theme</div>
                        </div>
                    </div>
                </div>
                <!-- -->
                <div class="w_100 flx_side_m" style="display:table; border-bottom:1px solid #eee;">
                    <div class="pdg_10 js_align_c jbg_grey5 jm_tss1 jcr_blu"
                         style="display:table-cell; width:90px;">
                        Display condition
                    </div>
                    <div class="pdg_s10 pdg_tb10 jm_tss1 jcr_grey1"
                         style="display:table-cell; width:calc(100%-90px);">
                        <div>
                            <div class="rbox_sel on">display</div>
                            <div class="rbox_sel">Not displayed</div>
                        </div>
                    </div>
                </div>
                <!-- -->
                <div class="w_100 flx_side_m" style="display:table; border-bottom:1px solid #eee;">
                    <div class="pdg_10 js_align_c jbg_grey5 jm_tss1 jcr_blu"
                         style="display:table-cell; width:90px;">
                        Yacht selection
                    </div>
                    <div class="pdg_s10 pdg_tb10 jm_tss1 jcr_grey1"
                         style="display:table-cell; width:calc(100%-90px);">
                        <div class="j_inline pdg_r05">
                            <!-- select -->
                            <div class="input_border">
                                <div class="js_slt01">
                                    <select name="" style="vertical-align:middle;">
                                        <optgroup label="Select yacht">
                                            <option value="1">Ferry</option>
                                            <option value="2">Gumiho</option>
                                            <option value="3">Jewelry issue</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                            <!-- / select -->
                        </div>
                        30-seater, 40pt
                    </div>
                </div>
                <!-- -->
                <div class="w_100 flx_side_m" style="display:table; border-bottom:1px solid #eee;">
                    <div class="pdg_10 js_align_c jbg_grey5 jm_tss1 jcr_blu"
                         style="display:table-cell; width:90px;">
                        product name
                    </div>
                    <div class="pdg_s10 pdg_tb10 jm_tss1 jcr_grey1"
                         style="display:table-cell; width:calc(100%-90px);">
                        <input class="w_100 js_input02" name="" placeholder="Please enter your name" type="text">
                    </div>
                </div>
                <!-- -->
                <div class="w_100 flx_side_m" style="display:table; border-bottom:1px solid #eee;">
                    <div class="pdg_10 js_align_c jbg_grey5 jm_tss1 jcr_blu"
                         style="display:table-cell; width:90px; vertical-align:middle;">
                        Brief Introduction
                    </div>
                    <div class="pdg_s10 pdg_tb10 jm_tss1 jcr_grey1"
                         style="display:table-cell; width:calc(100%-90px);">
                        <textarea class="w_100 js_txtarea" name="content" rows="3" placeholder="Please write your introduction" value="" style="padding:5px;"></textarea>
                    </div>
                </div>
                <!-- -->
                <div class="w_100 flx_side_m" style="display:table; border-bottom:1px solid #eee;">
                    <div class="pdg_10 js_align_c jbg_grey5 jm_tss1 jcr_blu"
                         style="display:table-cell; width:90px;">
                        Reservation price
                    </div>
                    <div class="pdg_s10 pdg_tb10 jm_tsss2 jcr_grey1"
                         style="display:table-cell; width:calc(100%-90px);">

                        <div class="pdg_b10">
                            Person <div class="j_inline pdg_s05" style="width:120px">
                                <input class="w_100 js_input02" name="" placeholder="" type="text">
                            </div> circle
                        </div>

                        <div>
                            Postmark <div class="j_inline pdg_s05" style="width:120px">
                                <input class="w_100 js_input02" name="" placeholder="" type="text">
                            </div> circle
                        </div>
                    </div>
                </div>
                <!-- -->
                <div class="w_100 flx_side_m" style="display:table; border-bottom:1px dashed #ccc;">
                    <div class="pdg_10 js_align_c jbg_grey5 jm_tss1 jcr_blu"
                         style="display:table-cell; width:90px; vertical-align: middle;">
                        image
                    </div>
                    <div class="pdg_s10 jm_tsss2 jcr_grey1"
                         style="display:table-cell; width:calc(100%-90px);">
                        <div class="flx_c pdg_tb10">
                            <img src="../resources/images/camera_icon.png" height="60px">
                        </div>
                    </div>
                </div>





                <!-- -->
                <div style="width:100%; height:130px; overflow-x:auto; border-bottom:1px dashed #ccc;">
                    <div style="height:60px;">
                        <!-- -->
                        <div class="w_100 pdg_l10" style="display:table;">
                            <!-- sliding image -->
                            <div class="w_100" style="height:130px; padding-top:10px; ">
                                <div style="display:table-row;">
                                    <!-- image -->
                                    <div class="jbg_wht" style="display:table-cell;">
                                        <div style="padding:0 10px 0 0;">
                                            <div style="border:1px solid #ddd; padding:5px;">
                                                <div class="jbg_grey5" style=" width:72px; height:72px; overflow:hidden;">
                                                    <img src="../resources/images/review_05.png" height="76px">
                                                </div>
                                                <div class="flx_c pdg_t05 jcr_grey2 jm_tsss2">Delete</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- image -->
                                    <div class="jbg_wht" style="display:table-cell;">
                                        <div style="padding:0 10px 0 0;">
                                            <div style="border:1px solid #ddd; padding:5px;">
                                                <div class="jbg_grey5" style=" width:72px; height:72px; overflow:hidden;">
                                                    <img src="../resources/images/review_05.png" height="76px">
                                                </div>
                                                <div class="flx_c pdg_t05 jcr_grey2 jm_tsss2">Delete</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- image -->
                                    <div class="jbg_wht" style="display:table-cell;">
                                        <div style="padding:0 10px 0 0;">
                                            <div style="border:1px solid #ddd; padding:5px;">
                                                <div class="jbg_grey5" style=" width:72px; height:72px; overflow:hidden;">
                                                    <img src="../resources/images/review_05.png" height="76px">
                                                </div>
                                                <div class="flx_c pdg_t05 jcr_grey2 jm_tsss2">Delete</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- image -->
                                    <div class="jbg_wht" style="display:table-cell;"><div style="padding:0 10px 0 0;">
                                            <div style="border:1px solid #ddd; padding:5px;">
                                                <div class="jbg_grey5" style=" width:72px; height:72px; overflow:hidden;">
                                                    <img src="../resources/images/review_05.png" height="76px">
                                                </div>
                                                <div class="flx_c pdg_t05 jcr_grey2 jm_tsss2">Delete</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- image -->
                                    <div class="jbg_wht" style="display:table-cell;">
                                        <div style="padding:0 10px 0 0;">
                                            <div style="border:1px solid #ddd; padding:5px;">
                                                <div class="jbg_grey5" style=" width:72px; height:72px; overflow:hidden;">
                                                    <img src="../resources/images/review_05.png" height="76px">
                                                </div>
                                                <div class="flx_c pdg_t05 jcr_grey2 jm_tsss2">Delete</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- image -->
                                    <div class="jbg_wht" style="display:table-cell;">
                                        <div style="padding:0 10px 0 0;">
                                            <div style="border:1px solid #ddd; padding:5px;">
                                                <div class="jbg_grey5" style=" width:72px; height:72px; overflow:hidden;">
                                                    <img src="../resources/images/review_05.png" height="76px">
                                                </div>
                                                <div class="flx_c pdg_t05 jcr_grey2 jm_tsss2">Delete</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- image -->
                                    <div class="jbg_wht" style="display:table-cell;">
                                        <div style="padding:0 10px 0 0;">
                                            <div style="border:1px solid #ddd; padding:5px;">
                                                <div class="jbg_grey5" style=" width:72px; height:72px; overflow:hidden;">
                                                    <img src="../resources/images/review_05.png" height="76px">
                                                </div>
                                                <div class="flx_c pdg_t05 jcr_grey2 jm_tsss2">Delete</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- / sliding image -->
                        </div>
                        <!-- -->
                    </div>
                </div>
                <!-- / -->







                <div class="w_100 flx_side_m" style="display:table; border-bottom:1px solid #eee;">
                    <div class="pdg_10 js_align_c jbg_grey5 jm_tss1 jcr_blu"
                         style="display:table-cell; width:90px;">
                        Yacht location
                    </div>
                    <div class="pdg_s10 pdg_tb10 jm_tss1 jcr_grey1"
                         style="display:table-cell; width:calc(100%-90px);">
                        <div class="j_inline pdg_r05">
                            <!-- select -->
                            <div class="input_border">
                                <div class="js_slt01">
                                    <select name="" style="vertical-align:middle;">
                                        <optgroup label="degree">
                                            <option value="1">Gyeonggi-do</option>
                                            <option value="2">Gangwon-do</option>
                                            <option value="3">Chungcheongbuk-do</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                            <!-- / select -->
                        </div>
                        <div class="j_inline">
                            <!-- select -->
                            <div class="input_border">
                                <div class="js_slt01">
                                    <select name="" style="vertical-align:middle;">
                                        <optgroup label="hour">
                                            <option value="1">Suwon</option>
                                            <option value="2">Yongin City</option>
                                            <option value="3">Seongnam City</option></optgroup>
                                    </select>
                                </div>
                            </div>
                            <!-- / select -->
                        </div>
                    </div>
                </div>

                <div class="w_100 flx_side_m" style="display:table; border-bottom:1px solid #eee; ">
                    <div class="pdg_10 js_align_c jbg_grey5 jm_tss1 jcr_blu"
                         style="display:table-cell; width:90px; vertical-align: middle;">
                        Reservation time
                    </div>
                    <div class="pdg_s10 pdg_tb10 js_align_r"
                         style="display:table-cell; width:calc(100%-90px);">


                        <!-- add skedule -->
                        <div class="flx_side" style="padding:0 0 10px 0; ">
                            <div>
                                <div class="j_inline pdg_r05">
                                    <!-- select -->
                                    <div class="input_border">
                                        <div class="js_slt01">
                                            <select name="" style="vertical-align:middle;">
                                                <optgroup label="hour">
                                                    <option value="1">00</option>
                                                    <option value="2">01</option>
                                                    <option value="3">02</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- / select -->
                                </div>
                                <div class="j_inline pdg_r05">
                                    <!-- select -->
                                    <div class="input_border">
                                        <div class="js_slt01">
                                            <select name="" style="vertical-align:middle;">
                                                <optgroup label="hour">
                                                    <option value="1">00</option>
                                                    <option value="2">01</option>
                                                    <option value="3">02</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- / select -->
                                </div>
                            </div>

                            <div>
                                <!-- button -->
                                <div class="bt_sml02_blu" style="width:50px;">
                                    Add
                                </div>
                                <!--// button -->
                            </div>

                        </div>
                        <!-- / add skedule -->

                        <!-- add skedule -->
                        <div class="flx_side" style="padding-top:10px; border-top:1px dashed #ccc;">
                            <div style="width:70%; height:140px; background-color:#fff; overflow-y: scroll; border:1px solid #ccc;">
                                <div class="res_time">
                                    09:00
                                </div>
                                <div class="res_time on">
                                    10:00
                                </div>
                                <div class="res_time">
                                    11:00
                                </div>
                                <div class="res_time">
                                    13:30
                                </div>
                                <div class="res_time">
                                    15:00
                                </div>
                                <div class="res_time">
                                    16:30
                                </div>
                            </div>

                            <div>
                                <!-- button -->
                                <div class="bt_sml02_blk" style="width:50px;">
                                    delete
                                </div>
                                <!--// button -->
                            </div>

                        </div><!-- / add skedule -->



                    </div>
                </div>
                <!-- -->
                <div class="w_100 flx_side_m" style="display:table; border-bottom:1px solid #eee;">
                    <div class="pdg_10 js_align_c jbg_grey5 jm_tss1 jcr_blu"
                         style="display:table-cell; width:90px; vertical-align:middle;">
                        Detail
                    </div>
                    <div class="pdg_s10 pdg_tb10 jm_tss1 jcr_grey1"
                         style="display:table-cell; width:calc(100%-90px);">
                        <textarea class="w_100 js_txtarea" name="content" rows="5" placeholder="Please write your introduction" value="" style="padding:5px;"></textarea>
                    </div>
                </div>
            </div>
        </div>
        <!-- // List -->
    </div>
    <!-- // Section -->


    <!-- fixed Bottom Button -->
    <div class="flx_lft btm_bt_wrap02">
        <div class="w_100 flx_c jbg_header jm_tss1 jcr_wht" style="height:50px;">
            <div class="jm_ts2 jcr_wht">
                Save
            </div>
        </div>
    </div>
    <!-- // fixed Bottom Button -->
</div>
@endsection