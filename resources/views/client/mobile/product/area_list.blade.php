@extends('client.layouts.mobile')


@section('styles')
@endsection


@section('content')
    <div class="pop pop_select js_pop" style="position:absolute; top:0; bottom:0; width:100%; height:100%; background:rgba(0,0,0,0.5); z-index :999;">
        <!-- contents -->
        <div class="jbg_wht pdg_s15" style="position:fixed; width:100%; height:auto; bottom:0;">
            <!-- List of cities in the region (province) -->
            @foreach(\App\Common\Arrays\Area::get() as $key => $value)
                <div class="line_bt01 flx_c" style="height:48px;" value="{{$key}}" onclick="SelectArea('{{ route('client.mobile.product.list', ['area'=>$key, 'sort'=>$sort])}}')">
                    <div class="pop_val w_100 js_align_c jcr_grey2 jm_tss1 j_bold">{{$value}}</div>
                </div>
            @endforeach
{{--            --}}
{{--            <div class="line_bt01 flx_c" style="height:48px;">--}}
{{--                <div class="pop_val w_100 js_align_c jcr_grey2 jm_tss1 j_bold">Jeju City</div>--}}
{{--            </div>--}}
{{--            <div class="line_bt01 flx_c" style="height:48px;">--}}
{{--                <div class="pop_val w_100 js_align_c jcr_grey2 jm_tss1 j_bold">Seogwipo City</div>--}}
{{--            </div>--}}
        </div>
        <!-- // contents -->
    </div>
    <!-- // pop -->

    <div class="jbg_wht" style="position:relative; min-height:100%; padding-bottom:20px;">
        <!-- header -->
        <header id="header">
            <div class="jbg_wht flx_side" style="border-bottom:0px solid #ccc;">
                <div class="flx_lft_m" style="width:65px; height:60px;">
                    <div class=" pdg_l15" onclick="location.href='{{route('client.mobile.index')}}'">
                        <img src="{{asset('mobile/client/images/icon/arrow_back.png')}}" height="20px" alt="" />
                    </div>
                </div>
                <div class="flx_c" style="height:60px;">
                    <div class="jcr_grey2 jm_tss1 j_bold" style="height:17px;">
                        {{\App\Common\Arrays\Area::name($area)}}
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
                    <div class="w_100 pdg_r05">
                        <fieldset class="input_border">
                            <input class="js_input_loca w_100 js_pop_open" name="" placeholder="@lang('client.area_list_state_province')" type="text">
                        </fieldset>
                    </div>
{{--                    <div class="w_50 pdg_l05">--}}
{{--                        <fieldset class="input_border">--}}
{{--                            <!-- 1. Entering the day of the week in the input value, please modify js--}}
{{--                            2. Change in the order of month and year shown in the calendar year and month. -->--}}
{{--                            <input class="js_input_date on w_100 datepicker" name="" placeholder="@lang('client.area_list_reservation_date')" type="text">--}}
{{--                        </fieldset>--}}
{{--                    </div>--}}
                </div>
                <script>
                    // $('.datepicker').pickadate({
                    // });
                </script>
                <!-- // 1st line -->
                <!-- 2nd line -->
                <div class="w_100 flx_side jbg_wht mgn_t08" style="border-radius:30px;">
                    <div>
                        <div class=" flx_c bt_r30 pdg_s05 {{$sort == \App\Common\Enums\UI\SortOrder::popularity?"on":""}}">
                            <a href="{{route('client.mobile.product.list', ['area'=>$area, 'sort'=>\App\Common\Enums\UI\SortOrder::popularity])}}">@lang('client.area_list_popularity')</a>
                        </div>
                    </div>
                    <div>
                        <div class=" flx_c bt_r30 pdg_s05 {{$sort == \App\Common\Enums\UI\SortOrder::registration?"on":""}}">
                            <a href="{{route('client.mobile.product.list', ['area'=>$area, 'sort'=>\App\Common\Enums\UI\SortOrder::registration])}}">@lang('client.area_list_registration_order')</a>
                        </div>
                    </div>
                    <div>
                        <div class=" flx_c bt_r30 pdg_s05 {{$sort == \App\Common\Enums\UI\SortOrder::low_price?"on":""}}">
                            <a href="{{route('client.mobile.product.list', ['area'=>$area, 'sort'=>\App\Common\Enums\UI\SortOrder::low_price])}}">@lang('client.area_list_low_price')</a>
                        </div>
                    </div>
                    <div>
                        <div class=" flx_c bt_r30 pdg_s05 {{$sort == \App\Common\Enums\UI\SortOrder::high_price?"on":""}}">
                            <a href="{{route('client.mobile.product.list', ['area'=>$area, 'sort'=>\App\Common\Enums\UI\SortOrder::high_price])}}">@lang('client.area_list_high_price')</a>
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

                    @include('components.products', ['model' => $model])
                    @endif
            </div>

            <!-- outermost_margin designation -->
            <div class="tab_con jbg_wht pdg_s15 pdg_b15 {{$sort == \App\Common\Enums\UI\SortOrder::registration?"on":""}}">

            @if($sort == \App\Common\Enums\UI\SortOrder::registration)

                    @include('components.products', ['model' => $model])
                @endif
            </div>
            <!-- outermost_margin designation -->

            <!-- outermost_margin designation -->
            <div class="tab_con jbg_wht pdg_s15 pdg_b15 {{$sort == \App\Common\Enums\UI\SortOrder::low_price?"on":""}}">

            @if($sort == \App\Common\Enums\UI\SortOrder::low_price)

                    @include('components.products', ['model' => $model])
                @endif
            </div>
            <!-- outermost_margin designation -->

            <!-- outermost_margin designation -->
            <div class="tab_con jbg_wht pdg_s15 pdg_b15 {{$sort == \App\Common\Enums\UI\SortOrder::high_price?"on":""}}">

            @if($sort == \App\Common\Enums\UI\SortOrder::high_price)

                    @include('components.products', ['model' => $model])
                @endif
            </div>


            <!-- outermost_margin designation -->
        </div>
    </div>
    <script>
        function SelectArea(url)
        {
            window.location = url;
        }
    </script>
@endsection


@section('scripts')

@endsection