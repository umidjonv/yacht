@extends('client.layouts.mobile')

@section('header_styles')

@endsection

@section('styles')


@endsection


@section('content')

    <div class="jbg_wht" style="position:relative; min-height:100%; padding-bottom:70px;">

        <!-- header -->
        <div class="jbg_wht flx_side" style="border-bottom:0px solid #ccc;">
            <div class="flx_lft_m" style="width:65px; height:60px;">
                <div class=" pdg_l15" onclick="location.href='javascript:history.go(-1);'">
                    <img src="{{asset('mobile/client/images/icon/arrow_back.png')}}" height="20px" alt="" />
                </div>
            </div>
            <div class="flx_c" style="height:60px;">
                <div class="jcr_grey2 jm_tss1 j_bold" style="height:17px;">
                    Make a reservation
                </div>
            </div>
            <div class="flx_rgt_m" style="width:65px; height:60px;">
                <!--<div class="pdg_r10">
                <img src="../resources/images/icon/share.png" height="20px" alt="" />
                </div>
                <div class="pdg_r15">
                <img src="../resources/images/icon/heart_big.png" height="20px" alt="" />
                </div>-->
            </div>
        </div>
        <!-- // header -->


        <div class="pdg_b20">
            <div class="hd_tit mgn_b15 js_align_c"><span class="jcr_grey9 jm_tsss0">Reservation information</span></div>
            <div class="pdg_s15">
                <div class="w_100 flx_side">
                    <!-- thumbnail -->
                    <div style="width:112px;">
                        <div class="thumb_01 flx_c">
                            <img src="{{asset('mobile/client/images/pic/review_03.png')}}" alt="" />
                        </div>
                    </div>
                    <!-- // thumbnail -->
                    <!-- info -->
                    <div class="pdg_l10" style="width:calc(100%-112px); height:110px;">
                        <div style="height:93px;">
                            <div class="jcr_grey2 jm_tss1 j_bold pdg_b08">
                                {{$model->product()->first()->Name}}
                            </div>
                            <div class="cut_2 jcr_grey9 jm_tsss2 pdg_b03">
                                Reservation date <span class="jm_tsss2 pdg_l10">{{$model->ReservationDate}}</span>
                            </div>
                            <div class="cut_2 jcr_grey9 jm_tsss2 pdg_b03">
                                Reservation time <span class="jm_tsss2 pdg_l10">{{$model->ReservationTime}}</span>
                            </div>
                            <div class="cut_2 jcr_grey9 jm_tsss2">
                                Reservations <span class="jm_tsss2 pdg_l10">{{$model->Adults}} adults/ {{$model->Childs}} childs</span>
                            </div>
                        </div>
                        <div class="js_money02">
                            {{$model->TotalAmount}}
                        </div>
                    </div>
                    <!-- // info -->
                </div>
            </div>
        </div>


        <form>
            <div class="pdg_b20">
                <div class="hd_tit js_align_c"><span class="jcr_grey9 jm_tsss0">Booker name</span></div>
                <div class="pdg_s15" style="height:60px; display: flex; align-items: flex-end;">
                    <fieldset class="w_100 login_border">
                        <legend class="jm_tsss0 jcr_grey9" style="width:0px; padding:0 0; height:15px;"></legend>
                        <input class="w_100 js_input00" name="" placeholder="name" type="text" style="font-size:1.30rem;">
                    </fieldset>
                </div>
            </div>

            <div class="pdg_b20">
                <div class="hd_tit mgn_b15 js_align_c"><span class="jcr_grey9 jm_tsss0">Use points</span></div>

                <div class="pdg_s15">
                    <div class="flx_side">
                        <div class="jm_tsss2 jcr_grey9">
                            Retained points<span class="js_point02">3000</span>
                        </div>
                        <div>
                            <div style="width:80px;">
                                <input type="checkbox" id="img_checkbox_01">
                                <label for="img_checkbox_01">
                                    <span></span><em>Full use</em>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="pdg_r10">
                        <fieldset class="login_border">
                            <legend class="jm_tsss0 jcr_grey9 "style="width:0px; padding:0 0; height:15px;"></legend>
                            <div class="js_align_r">
                                <input class="w_25 js_input00 js_align_r" name="" placeholder="0" type="text" style="font-size:1.60rem; display:inline;">
                                <font class="jm_ts1 pdg_s05"> P </font>
                            </div>
                        </fieldset>
                    </div>
                </div>
            </div>

            <div class="pdg_b20">
                <div class="hd_tit mgn_b15 js_align_c"><span class="jcr_grey9 jm_tsss0">Payment method</span></div>

                <div class="pdg_s15">
                    <div class="radio_box radio_box_sq">
                        <input type="radio" name="pay" id="type_01" value="9" checked>
                        <label for="type_01">Credit card</label>
                        <input type="radio" name="pay" id="type_02" value="11">
                        <label for="type_02">Real-time bank transfer</label>
                    </div>
                </div>
            </div>

            <div class="pdg_b20">
                <div class="hd_tit mgn_b15 js_align_c"><span class="jcr_grey9 jm_tsss0">Payment amount</span></div>

                <div class="pdg_s15">
                    <div class="jbg_grey01 pdg_tb15 pdg_s10">
                        <div class="flx_side_m jbg_grey01 pdg_tb05 pdg_s05">
                            <div class="jm_tsss2 j_bold">Product amount</div>
                            <div class="js_money02" style="font-weight: normal;">
                                33,000
                            </div>
                        </div>
                        <div class="flx_side_m jbg_grey01 pdg_tb05 pdg_s05">
                            <div class="jm_tsss2 j_bold">Product amount</div>
                            <div class="js_money02" style="font-weight: normal;">
                                - 0
                            </div>
                        </div>
                        <div class="flx_side_m jbg_grey01 pdg_tb05 pdg_s05">
                            <div class="jm_tsss2 j_bold">Total payment amount</div>
                            <div class="js_money">
                                33,000
                            </div>
                        </div>
                    </div>
                    <div class="pdg_t10">
                        <div class="jm_tsss1 jcr_ylw j_bold" style="letter-spacing: -0.7;">
                            ※ Refund policy 7 days before 100% / 4 to 6 days before 50% / 1 to 3 days before 30% / No cancellation on the day
                        </div>
                    </div>
                </div>
            </div>
        </form>


        <!-- fixed Bottom Button -->
        <div class="btm_bt_wrap02 btm_bt_fix" style="padding:12px 15px 12px;">
            <!-- button -->
            <div class="flx_c jbg_ylw jm_tss1 jcr_wht j_bold" style="box-shadow: 0 4px 6px #0000001F; padding:19px 0; border-radius:0px;" onclick="location.href='product_booking_fns.html'">
                Make a payment
            </div>
            <!--// button -->
        </div>
        <!-- // fixed Bottom Button -->

    </div>

@endsection



@section('scripts')


@endsection