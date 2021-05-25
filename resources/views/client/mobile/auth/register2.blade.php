@extends('client.layouts.mobile')


@section('styles')
@endsection


@section('content')
    <div class="jbg_wht" style="position:relative; min-height:100%; padding-bottom:100px;">
        <!-- header -->
        <div class="jbg_wht flx_side line_bt01">
            <div class="flx_lft_m" style="width:65px; height:60px;">
                <div class="pdg_l15" onclick="location.href='javascript:history.go(-1);'">
                    <img src="{{asset('mobile/client/images/icon/arrow_back.png')}}" height="20px" alt="" />
                </div>
            </div>
            <div class="flx_c" style="height:60px;">
                <div class="jcr_grey2 jm_tss1 j_bold" style="height:17px;">
                    @lang('client.register_title')
                </div>
            </div>
            <div class="flx_rgt_m" style="width:65px; height:60px;">

            </div>
        </div>

        <form action="{{route('client.mobile.register2_complete')}}" method="post">
            {{csrf_field()}}
        <!-- // header -->

        <!-- 최외곽_여백 지정 -->
        <div style="padding:15px 15px 0;">
            <!-- input -->
            <div style="height:60px;  display: flex; align-items: flex-end;">
                <fieldset class="w_100 login_border">
                    <legend class="jm_tsss0 jcr_grey9" style="width:60px; padding:0 5px; height:15px;">@lang('client.register_id')</legend>
                    <input class="w_100 js_input00" name="name" placeholder="" value="{{old('name')}}" type="text" style="font-size:1.30rem;">
                </fieldset>

            </div>
            <div class="w-100 border-0">
                <!-- 버튼 -->
                <div class="flx_c jbg_wht jm_tsss2 jcr_ylw j_bold" style="padding:5px 0;">
                    {{$errors->first('name')}}
                </div>
                <!--// 버튼 -->
            </div>
            <div style="height:60px;  display: flex; align-items: flex-end;">
                <fieldset class="w_100 login_border">
                    <legend class="jm_tsss0 jcr_grey9" style="width:auto; padding:0 5px; height:15px;">@lang('client.password')</legend>
                    <input class="w_100 js_input_pw" name="password" placeholder="" value="{{old('password')}}" type="password">
                </fieldset>
            </div>
            <div class="w-100 border-0">
                <!-- 버튼 -->
                <div class="flx_c jbg_wht jm_tsss2 jcr_ylw j_bold" style="padding:5px 0;">
                    {{$errors->first('password')}}
                </div>
                <!--// 버튼 -->
            </div>
            <div style="height:60px; display: flex; flex-direction:column; justify-content:flex-end;">
                <div>
                    <fieldset class="w_100 login_border">
                        <legend class="jm_tsss0 jcr_grey9" style="width:auto; padding:0 5px; height:15px;">@lang('client.register_retry_password')</legend>
                        <input class="w_100 js_input_pw" name="repassword" placeholder="" value="{{old('repassword')}}" type="password">
                    </fieldset>
                </div>
            </div>
            <div class="w-100 border-0">
                <!-- 버튼 -->
                <div class="flx_c jbg_wht jm_tsss2 jcr_ylw j_bold" style="padding:5px 0;">
                    {{$errors->first('repassword')}}
                </div>
                <!--// 버튼 -->
            </div>
            <div class="flx_side_b" style="height:60px; display: flex; align-items: flex-end;">
                <div class="pdg_r10" style="width:calc(100% - 80px);">
                    <fieldset class="login_border">
                        <legend class="jm_tsss0 jcr_grey9 " style="width:auto; padding:0 5px; height:15px;">@lang('client.register_contact')
                        </legend>
                        <div class="js_align_c">
                            <input class="w_75 js_input00 js_align_c" id="phone" name="phone" placeholder="" type="text" value="{{old('phone')}}"
                                   style="font-size:1.40rem;  display:inline;">

                        </div>
                    </fieldset>
                </div>
                <div style="width:80px;">
                    <!-- 버튼 -->
                    <div class="flx_c jbg_wht jm_tsss2 jcr_ylw j_bold" style="padding:13px 0; border:1px solid #ccc;">
                        @lang('client.register_contact_activation')
                    </div>
                    <!--// 버튼 -->
                </div>
            </div>
            <div class="w-100 border-0">
                <!-- 버튼 -->
                <div class="flx_c jbg_wht jm_tsss2 jcr_ylw j_bold" style="padding:5px 0;">
                    {{$errors->first('phone')}}
                </div>
                <!--// 버튼 -->
            </div>
            <div style="height:80px; flex-direction:column; justify-content:flex-end; display: none;">
                <div>
                    <fieldset class="login_border">
                        <legend class="jm_tsss1 jcr_grey9" style="width:0px; padding:0 0; height:15px;"></legend>
                        <div class="flx_side" style="height:35px;">
                            <div>
                                <input class="w_70 js_input00" name="returned_code" placeholder="" type="text" value="852301" style="font-size:1.50rem; border:0px solid #ccc; display:inline;">
                            </div>
                            <div class="w_30 jm_tsss2 jcr_ylw js_align_r pdg_r05 pdg_t05">
                                03:00
                            </div>
                        </div>
                    </fieldset>
                </div>
                <div style="height:20px; display: flex; align-items: flex-end;">
                    <div class="jm_tsss1 jcr_ylw j_bold">
                        @lang('client.register_code_not_match')
                    </div>
                </div>
            </div>
            <!-- // input -->
        </div>
        <!--// 최외곽_여백 지정 -->

        <!-- fixed Bottom Button -->
        <div class="btm_bt_wrap02" style="padding:12px 15px 12px;">
            <!-- 버튼 -->
            <button class="w-100 flx_c jbg_ylw jm_tss1 jcr_wht j_bold" style="padding:19px 0; border-radius:0px;" type="submit" >
                @lang('client.register_sign_up')
            </button>
            <!--// 버튼 -->
        </div>
        </form>
        <!-- // fixed Bottom Button -->
    </div>
@endsection


@section('scripts')
    <script>



        $(document).ready(function(){
            $("#phone").mask("999-9999-9999");


        });
    </script>

@endsection