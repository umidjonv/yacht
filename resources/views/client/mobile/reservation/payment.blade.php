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
                     @lang('client.reservation_payment_make')
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
            <div class="hd_tit mgn_b15 js_align_c"><span class="jcr_grey9 jm_tsss0">@lang('client.reservation_payment_info')</span></div>
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
                                @lang('client.reservation_reservation_date') <span class="jm_tsss2 pdg_l10">{{$model->ReservationDate}}</span>
                            </div>
                            <div class="cut_2 jcr_grey9 jm_tsss2 pdg_b03">
                                @lang('client.reservation_reservation_time') <span class="jm_tsss2 pdg_l10">{{$model->ReservationTime}}</span>
                            </div>
                            <div class="cut_2 jcr_grey9 jm_tsss2">
                                @lang('client.reservation_reservation_places') <span class="jm_tsss2 pdg_l10">{{$model->Adults}} / {{$model->Childs}} </span>
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
            <input type="hidden" name="UsedPoints" />
            <input type="hidden" name="TotalAmount" value="{{$model->TotalAmount}}"  />
            <input type="hidden" name="PaymentAmount" />
            <input type="hidden" name="BalancePoints" />
            <input type="hidden" name="AccumulatedPoint" value="{{$member->AccumulatedPoint}}" />

{{--            <div class="pdg_b20">--}}
{{--                <div class="hd_tit js_align_c"><span class="jcr_grey9 jm_tsss0">Booker</span></div>--}}
{{--                <div class="pdg_s15" style="height:60px; display: flex; align-items: flex-end;">--}}
{{--                    <fieldset class="w_100 login_border">--}}
{{--                        <legend class="jm_tsss0 jcr_grey9" style="width:0px; padding:0 0; height:15px;"></legend>--}}
{{--                        <input class="w_100 js_input00" name="" placeholder="name" type="text" style="font-size:1.30rem;">--}}
{{--                    </fieldset>--}}
{{--                </div>--}}
{{--            </div>--}}

            <div class="pdg_b20">
                <div class="hd_tit mgn_b15 js_align_c"><span class="jcr_grey9 jm_tsss0">@lang('client.use_points')</span></div>

                <div class="pdg_s15">
                    <div class="flx_side">
                        <div class="jm_tsss2 jcr_grey9">
                            @lang('client.retained_points')<span class="js_point02">{{$member->AccumulatedPoint}}</span>
                        </div>

                    </div>
                    <div class="pdg_r10">
                        <fieldset class="login_border">
                            <legend class="jm_tsss0 jcr_grey9 "style="width:0px; padding:0 0; height:15px;"></legend>
                            <div class="js_align_r">
                                <input class="w_25 js_input00 js_align_r" name="" placeholder="0" type="text" style="font-size:1.60rem; display:inline;" {{$member->AccumulatedPoint==0?"disabled":""}} id="points">

                                <font class="jm_ts1 pdg_s05"> P </font>
                            </div>
                        </fieldset>
                    </div>
                </div>
            </div>

            <div class="pdg_b20">
                <div class="hd_tit mgn_b15 js_align_c"><span class="jcr_grey9 jm_tsss0">@lang('client.payment_method')</span></div>

                <div class="pdg_s15">
                    <div class="radio_box radio_box_sq">
                        <input type="radio" name="pay" id="type_01" value="9" checked>
                        <label for="type_01">@lang('client.credit_card')</label>
                        <input type="radio" name="pay" id="type_02" value="11">
                        <label for="type_02">@lang('client.bank_transfer')</label>
                    </div>
                </div>
            </div>

            <div class="pdg_b20">
                <div class="hd_tit mgn_b15 js_align_c"><span class="jcr_grey9 jm_tsss0">@lang('client.payment_amount')</span></div>

                <div class="pdg_s15">
                    <div class="jbg_grey01 pdg_tb15 pdg_s10">
                        <div class="flx_side_m jbg_grey01 pdg_tb05 pdg_s05">
                            <div class="jm_tsss2 j_bold">@lang('client.product_amount')</div>
                            <div class="js_money02" style="font-weight: normal;">
                                {{$model->TotalAmount}}
                            </div>
                        </div>
                        <div class="flx_side_m jbg_grey01 pdg_tb05 pdg_s05">
                            <div class="jm_tsss2 j_bold">@lang('client.used_points')</div>
                            <div class="js_money02" style="font-weight: normal;" >
                                - <label id="usedPoints"  style="font-size: 14px;">0</label>
                            </div>
                        </div>
                        <div class="flx_side_m jbg_grey01 pdg_tb05 pdg_s05">
                            <div class="jm_tsss2 j_bold">@lang('client.total_payment_amount')</div>
                            <div class="js_money">
                                <label id="totalPayment" style="font-size: 14px;">{{$model->TotalAmount}}</label>
                            </div>
                        </div>
                    </div>
                    <div class="pdg_t10">
                        <div class="jm_tsss1 jcr_ylw j_bold" style="letter-spacing: -0.7;">
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
                    </div>
                </div>
            </div>
        </form>


        <!-- fixed Bottom Button -->
        <div class="btm_bt_wrap02 btm_bt_fix" style="padding:12px 15px 12px;">
            <!-- button -->
            <div class="flx_c jbg_ylw jm_tss1 jcr_wht j_bold" style="box-shadow: 0 4px 6px #0000001F; padding:19px 0; border-radius:0px;">
                @lang('client.make_payment')
            </div>
            <!--// button -->
        </div>
        <!-- // fixed Bottom Button -->

    </div>

@endsection



@section('scripts')

    <script>
        $('#points').keyup(function(){
            $('#usedPoints').text($(this).val());

            var accumulatedPoints = $('[name="AccumulatedPoint"]').val();
            var usedPoints = $(this).val();

            var balanced = accumulatedPoints - usedPoints;

            $('[name="BalancePoints"]').val(balanced);

            var totalAmount = $('[name="TotalAmount"]').val();
            var paymentAmount = totalAmount - usedPoints;

            $('[name="PaymentAmount"]').val(paymentAmount);
            $('#totalPayment').text(paymentAmount);

        });
    </script>

@endsection