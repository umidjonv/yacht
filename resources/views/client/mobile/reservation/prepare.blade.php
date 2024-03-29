@extends('client.layouts.mobile')

@section('header_styles')
    <link href="{{asset('libs/bootstrap-datepicker/css/bootstrap-datepicker.css')}}" rel="stylesheet" />

@endsection

@section('styles')
    <style>
        .datepicker-inline {
            width: 100%;
        }
        .datepicker table {
            width: 100%;
        }

        .day, .datepicker-switch, .dow{
            font-size: 11px;
        }


    </style>


@endsection


@section('content')

@endsection
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
                @lang('client.make_reservation')
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

    <!-- calendar -->
    <div class="pdg_b20">
        <div class="hd_tit mgn_b15 js_align_c"><span class="jcr_grey9 jm_tsss0">@lang('client.reservation_date')</span></div>
        <div class="pdg_s15">
            <div id="datepicker" value="12/03/2021"></div>


        </div>
    </div>
    <!-- // calendar -->


    <form action="{{route('client.mobile.reservation.save')}}" method="post">
        {{csrf_field()}}
        <input type="hidden" name="VendorId" value="{{old('VendorId', $VendorId)}}"/>
        <input type="hidden" name="ProductId" value="{{old('ProductId', $model->Id)}}"/>
        <input type="hidden" name="UserId" value="{{old('UserId', \Illuminate\Support\Facades\Auth::user()->id)}}"/>
        <input type="hidden" id="selectedDate" name="ReservationDate" value="{{old('ReservationDate')}}" />
        <input type="hidden" name="RequestDate" />
        <input type="hidden" name="PriceChild" value="{{old('PriceChild', $model->PriceChild)}}"/>
        <input type="hidden" name="PriceAdult" value="{{old('Price', $model->PriceAdult)}}"/>
        <input type="hidden" name="Price" value="{{old('Price', $model->Price)}}"/>
        <input type="hidden" name="TotalAmount" value="{{old('TotalAmount')}}" />

        <div class="p-4">
            <button  type="button" class="btn btn-warning form-control" data-toggle="modal" data-target="#exampleModal" id="time_btn">@lang('client.select_time')</button>

        </div>
        <div class="modal fade"  tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" id="exampleModal">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >

                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">@lang('client.select_time')</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        @for($time=0, $box=0; $time<24;$time++, $box++)
                            @if($box==4)

                                @php
                                    $box = 0
                                @endphp
                            @endif

                            @if($box==0)
                                <div class="radio_box">
                            @endif

                                <input type="radio" name="time" id="time_{{$time<10?"0".$time:$time}}" value="{{$time<10?"0".$time:$time}}:00" />
                                <label for="time_{{$time<10?"0".$time:$time}}" class="">{{$time<10?"0".$time:$time}}:00</label>

                            @if($box==3)
                                </div>
                            @endif


                        @endfor



                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">@lang('client.close')</button>

                    </div>
                </div>

        </div>
        </div>
        <fieldset>

            <div class="pdg_b20">
                @if ($errors->any())
                    @foreach($errors->all() as $error)
                        <div class="mgn_t10 jm_tsss1 jcr_ylw j_bold">
                            {{$error}}
                        </div>
                    @endforeach
                @endif
            </div>


            <div class="pdg_b20">
                <div class="hd_tit mgn_b15 js_align_c"><span class="jcr_grey9 jm_tsss0">@lang('client.reservation_number')</span></div>
                <div class="pdg_s15">

                    <div class="jbg_grey01 pdg_s10">
                        <div class="flx_side_m pdg_tb15 pdg_s05 line_bt01 " style="border-color: #ccc">
                            <div class="flx_lft_m row">
                                <span class="jm_tsss2 j_bold col-sm-5">@lang('client.adults')</span>
                                <span class="pdg_l05 jm_tsss2 jcr_grey9 col-sm-7">@lang('client.adults_description')</span>
                            </div>
                            <div class="flx_side_m count ml-1">
                                <input type="text" name="Adults" value="{{old('Adults')}}"/>
                                <div class="flx_side count_btn">
                                    <input type="button" class="button_count" name="minus" target="Adults">
                                    <input type="button" class="button_count" name="plus" target="Adults">
                                </div>
                            </div>
                        </div>
                        <div class="flx_side_m jbg_grey01 pdg_tb15 pdg_s05 line_bt01" style="border-color: #ccc">
                            <div class="flx_lft_m row">
                                <span class="jm_tsss2 j_bold col-sm-4">@lang('client.children')</span><br/>
                                <span class="pdg_l05 jm_tsss2 jcr_grey9 col-sm-6">@lang('client.children_description')</span>
                            </div>
                            <div class="flx_side_m count ml-1">
                                <input type="text" class="" name="Childs" value="{{old('Childs')}}"/>
                                <div class="flx_side count_btn">
                                    <input type="button" class="button_count" name="minus" target="Childs" >
                                    <input type="button" class="button_count" name="plus" target="Childs">
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="TotalAmount" />
                        <div class="flx_side_m jbg_grey01 pdg_tb15 pdg_s05">
                            <div class="jm_tsss2 j_bold">Total</div>
                            <div class="js_money">
                                <label id="calculatedPrice">{{old('TotalAmount', 0)}}</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </fieldset>



    <!-- fixed Bottom Button -->
    <div class="btm_bt_wrap02 btm_bt_fix" style=" padding:12px 15px 12px;">
        <!-- button -->
        <button class="btn btn-warning form-control" style="box-shadow: 0 4px 6px #0000001F; padding:19px 0; border-radius:0px;" type="submit" >
            @lang('client.payment')
        </button>
        <!--// button -->
    </div>
    <!-- // fixed Bottom Button -->
    </form>

</div>


@section('scripts')
    <script src="{{asset('libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{asset('libs/bootstrap-datepicker/locales/bootstrap-datepicker.ko.min.js')}}"></script>

    <script>
        $('#datepicker').datepicker({
            format: 'yyyy-mm-dd',
            //language: 'ko'
        });
        $('#selectedDate').val($.now());

        $('#datepicker').on('changeDate', function() {
            $('#selectedDate').val(
                $('#datepicker').datepicker('getFormattedDate')
            );
        });

        $('#datepicker').datepicker('setDate', '{{old('ReservationDate')}}');

        @if(old('time', 0) != 0)
            $('[name="time"]').each(function(index, element){
                if($(element).val() == '{{old('time')}}')
                {
                    $(element).prop('checked', true);

                }
            });

        $('#time_btn').text('{{old('time')}}');


        @endif


        $('#time_btn').click(function(){
            $('#exampleModal').modal('show');
        });

        $('[name="time"]').on('click', function(){

            $('#time_btn').text($(this).val());
            $(this).prop("checked", true);
            $('#exampleModal').modal('hide');

        });



        $.ajax({
            method:'get',
            data:{'date':$('#datepicker').datepicker('getFormattedDate') },
            url:"{{route('client.mobile.reservation.get_times')}}",
            success:function(data){
                //$[]
            }
        });

        $('[name="Adults"]').val(1);
        $('[name="Childs"]').val(1);

        var price = $('[name="Price"]').val();
        var adultprice = $('[name="PriceAdult"]').val();
        var childprice = $('[name="PriceChild"]').val();
        var adultcount = $('[name="Adults"]').val();
        var childcount = $('[name="Childs"]').val();
        CalculateTotal();

        // $('[name="Adults"]').change(function(){
        //    adultcount = $(this).val();
        //
        //     CalculateTotal();
        // });
        //
        // $('[name="Childs"]').change(function(){
        //     childcount = $(this).val();
        //     CalculateTotal();
        //
        // });

        $('[name="plus"]').click(function(){
            var target = $(this).attr('target');
            var selector = '[name="'+target+'"]';
            var val = $(selector).val();
            $(selector).val(++val);

            if(target == "Adults")
            {
                adultcount = $(selector).val();
            }else
            {
                childcount = $(selector).val();
            }
            CalculateTotal();

        });

        $('[name="minus"]').click(function(){
            var target = $(this).attr('target');
            var selector = '[name="'+target+'"]';
            var val = $(selector).val();
            $(selector).val(--val);

            if(target == "Adults")
            {
                adultcount = $(selector).val();
            }else
            {
                childcount = $(selector).val();
            }
            CalculateTotal();

        });

        function CalculateTotal()
        {
            var total = parseFloat(adultprice*adultcount) + parseFloat(childcount*childprice) + parseFloat(price);

            $('[name="TotalAmount"]').val(total);
            $('#calculatedPrice').text(total);

        }


    </script>

@endsection