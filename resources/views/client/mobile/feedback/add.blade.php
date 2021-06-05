@extends('client.layouts.mobile')

@section('header_styles')

@endsection

@section('styles')


@endsection


@section('content')

    <div class="jbg_wht" style="position:relative; min-height:100%; padding-bottom:70px;">

        <!-- header -->
        <div class="jbg_wht flx_side line_bt01">
            <div class="flx_lft_m" style="width:65px; height:60px;">
                <div class=" pdg_l15" onclick="location.href='javascript:history.go(-1);'">
                    <img src="{{asset('mobile/client/images/icon/arrow_back.png')}}" height="20px" alt="" />
                </div>
            </div>
            <div class="flx_c" style="height:60px;">
                <div class="jcr_grey2 jm_tss1 j_bold" style="height:17px;">

                </div>
            </div>
            <div class="flx_rgt_m pdg_r10" style="width:65px; height:60px;">
                <div class="pdg_r10">
                    <img src="{{asset('mobile/client/images/icon/share.png')}}" height="20px" alt="" />
                </div>
                <div class="pick_toggle js_btn_toggle"></div>
            </div>
        </div>
        <!-- // header -->
        <!-- toggle menu -->
        <form action="{{route('client.mobile.feedback.save')}}" method="post">
            {{csrf_field()}}
            <input type="hidden" name="ProductId" value="{{$model->Id}}">
            <input type="hidden" name="VendorId" value="{{$vendorId}}">
            @if(isset($feedback))<input type="hidden" name="ParentId" value="{{$feedback->Id}}">@endif

        <div class="pdg_s15 pdg_t15">
            <div class="flx_side_m">
                <div class="flx_lft">
                    <div class="jcr_grey9 jm_tsss2">
                        @lang('client.feedback_public_title')
                    </div>
                </div>
                <div class="pdg_l10">

                    <div class="flx_rgt">
                        <div class="radio_box radio_box_open">
                            <input type="radio" name="IsPublic" id="type_01" value="{{true}}" checked>
                            <label for="type_01">@lang('client.feedback_public')</label>
                            <input type="radio" name="IsPublic" id="type_02" value="{{false}}">
                            <label for="type_02">@lang('client.feedback_private')</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- // toggle menu -->
        <!-- input area -->
        <!-- input -->
        <div class="pdg_s15 pdg_b15">
            <fieldset class="mgn_t10 login_border">
                <legend class="jm_tsss0 jcr_grey9" style="width:0px; padding:0 0; height:15px;"></legend>
                <div style="height:35px;">
                    <input class="w_100 js_input00" name="Title" placeholder="Title" type="text">
                </div>
            </fieldset>
            <fieldset class="mgn_t10 login_border">
                <legend class="jm_tsss0 jcr_grey9" style="width:0px; padding:0 0; height:15px;"></legend>
                <div style="height:170px;">
                    <textarea class="w_100 js_txtarea01" name="Message" rows="8" placeholder="Message" value="" style="padding:0 5px;"></textarea>
                </div>
            </fieldset>
        </div>
        <!-- // input -->
        <!-- // input area -->
        <!-- view_more -->
        <div class="pdg_s15">
            <!-- bt_mid -->
            <div class="bt_mid03 j_inline" style="padding:5px 30px;">
                Attachments
            </div><!-- // bt_mid -->
        </div>
        <!-- // view_more -->

        <!-- fixed Bottom Button -->
        <div class="btm_bt_wrap02" style="padding:12px 15px 12px;">
            <!-- button -->
            <button class="flx_c jbg_ylw jm_tss1 jcr_wht j_bold w-100" style="padding:19px 0; border-radius:0px;" type="submit">
                Inquiry registration
            </button>
            <!--// button -->
        </div>
        <!-- // fixed Bottom Button -->
        </form>

    </div>

@endsection



@section('scripts')

    <script>

    </script>

@endsection