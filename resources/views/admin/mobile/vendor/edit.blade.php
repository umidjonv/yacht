@extends('admin.layouts.mobile')

@section('content')
<div class="jbg_wht" style="position:relative; min-height:100%; padding-bottom:80px;">

    <!-- header -->
    <div class="jbg_header flx_side">
        <div class="flx_lft_m" style="width:60px; height:60px;">
            <div class="pdg_l05 tp_tab" onclick="location.href='javascript:history.go(-1);'">
                <span class="fa fa-2x fa-arrow-left" style="color:white; margin-left: 10px;"></span>
            </div>
        </div>
        <div class="flx_c jm_ts1 jcr_wht j_bold" style="height:60px;">
            Information management
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
                Changing information
            </div>
        </div>
        <!-- //title -->
    </div>
    <div class="pdg_s20">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
    <!-- // Section -->
    <!-- Section -->
    <form action="{{route('admin.mobile.vendor.save')}}" method="post">
        <input type="hidden" name="user[id]" value="{{$user->id}}"/>
        <input type="hidden" name="user[name]" value="{{$user->name}}"/>
        <input type="hidden" name="Id" value="{{$model->Id}}"/>
        <input type="hidden" name="vendorId" value="{{$model->Id}}"/>

        {{csrf_field()}}

    <div class="pdg_s15">
        <!-- List -->
        <div class="jbg_wht">
            <div style="border:1px solid #ccc;">
                <!-- -->
                <div class="w_100 flx_side_m" style="display:table; border-bottom:1px solid #eee;">
                    <div class="pdg_10 js_align_c jbg_grey5 jm_tss1 jcr_blu"
                         style="display:table-cell; width:90px;">
                        ID
                    </div>
                    <div class="pdg_s10 pdg_tb10 jm_tss1 jcr_grey1"
                         style="display:table-cell; width:calc(100%-90px);">
                        {{$user->name}}
                    </div>
                </div>
                <!-- -->
                <div class="w_100 flx_side_m" style="display:table; border-bottom:1px solid #eee;">
                    <div class="pdg_10 js_align_c jbg_grey5 jm_tss1 jcr_blu"
                         style="display:table-cell; width:90px;">
                        password
                    </div>
                    <div class="pdg_s10 pdg_tb10 jm_tss1 jcr_grey1"
                         style="display:table-cell; width:calc(100%-90px);">
                        <div class="pdg_b10"><input class="w_100 js_input02" name="" placeholder="Please change your password" type="password" name="user[password]"></div>
                        <div class="">
                            <!-- check -->
                            <div class="checkbox">
                                <input type="checkbox" class="form-check-input ml-2" name="user[isPasswordChange]" id="change_password">
                                <label for="change_password" class="form-check-label ml-4">
                                    Change password
                                </label>
                            </div>

                            <!-- check -->
                        </div>
                    </div>
                </div>
                <!-- -->
                <div class="w_100 flx_side_m" style="display:table; border-bottom:1px solid #eee;">
                    <div class="pdg_10 js_align_c jbg_grey5 jm_tss1 jcr_blu"
                         style="display:table-cell; width:90px;">
                        company name
                    </div>
                    <div class="pdg_s10 pdg_tb10 jm_tss1 jcr_grey1"
                         style="display:table-cell; width:calc(100%-90px);">
                        <input class="w_100 js_input02" name="CompanyName" placeholder="Please enter your company name" type="text" value="{{$model->CompanyName}}">
                    </div>
                </div>
                <!-- -->
                <div class="w_100 flx_side_m" style="display:table; border-bottom:1px solid #eee;">
                    <div class="pdg_10 js_align_c jbg_grey5 jm_tss1 jcr_blu"
                         style="display:table-cell; width:90px;">
                        Representative name
                    </div>
                    <div class="pdg_s10 pdg_tb10 jm_tss1 jcr_grey1"
                         style="display:table-cell; width:calc(100%-90px);">
                        <input class="w_100 js_input02" name="RepresentativeName" placeholder="Please enter a representative name" type="text" value="{{$model->RepresentativeName}}">
                    </div>
                </div>
                <!-- -->
                <div class="w_100 flx_side_m" style="display:table; border-bottom:1px solid #eee;">
                    <div class="pdg_10 js_align_c jbg_grey5 jm_tss1 jcr_blu"
                         style="display:table-cell; width:90px;">
                        Contact
                    </div>
                    <div class="pdg_s10 pdg_tb10 jm_tss1 jcr_grey1"
                         style="display:table-cell; width:calc(100%-90px);">
                        <div>
                            <div class="j_inline">
                                <input style="width:60px; text-align:center;" class="w-100 js_input03" name="Contact" id="Contact" value="{{$model->Contact}}" placeholder="" type="text">
                            </div>

                        </div>
                    </div>
                </div>
                <!-- -->
                <div class="w_100 flx_side_m" style="display:table; border-bottom:1px solid #eee;">
                    <div class="pdg_10 js_align_c jbg_grey5 jm_tss1 jcr_blu"
                         style="display:table-cell; width:90px;">
                        e-mail
                    </div>
                    <div class="pdg_s10 pdg_tb10 jm_tss1 jcr_grey1"
                         style="display:table-cell; width:calc(100%-90px);">
                        <div class="pdg_b10">
                            <input class="w_100 js_input02" name="Email" id="Email" value="{{ $user->email }}" placeholder="Please enter your email" type="email">
                        </div>
                        <div class="j_inline pdg_r05">
                            <!-- select -->
                            <div class="input_border">
                                <div class="js_slt01">
                                    <select id="CustomEmail" style="vertical-align:middle;">
                                        <optgroup label="optional">
                                            @foreach ($emails as $key=>$value)
                                                <option value="{{$key}}">{{$value}}</option>
                                            @endforeach

                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                            <!-- / select -->
                        </div>

                    </div>
                </div>
                <!-- -->
                <div class="w_100 flx_side_m" style="display:table; border-bottom:1px solid #eee;">
                    <div class="pdg_10 js_align_c jbg_grey5 jm_tss1 jcr_blu"
                         style="display:table-cell; width:90px;">
                        Business Number
                    </div>
                    <div class="pdg_s10 pdg_tb10 jm_tss1 jcr_grey1"
                         style="display:table-cell; width:calc(100%-90px);">
                        <input class="w_100 js_input02" name="BusinessNumber" value="{{$model->BussinessNumber}}" placeholder="" type="text">
                    </div>
                </div>
                <!-- -->
                <div class="w_100 flx_side_m" style="display:table; border-bottom:1px solid #eee;">
                    <div class="pdg_10 js_align_c jbg_grey5 jm_tss1 jcr_blu"
                         style="display:table-cell; width:90px;">
                        address
                    </div>
                    <div class="pdg_s10 pdg_tb10 jm_tss1 jcr_grey1"
                         style="display:table-cell; width:calc(100%-90px);">
                        <div class="pdg_b10">
                            <div class="j_inline pdg_r05">
                                <input style="width:90px; text-align:center;" class="js_input02" name="" value="123-12" placeholder="" type="text">
                            </div>
                            <!-- button -->
                            <a href="javascript:void(0);" class="bt_sml02_blu p-1" id="SearchAddress">search address</a>

                            <!--// button -->
                        </div>
                        <div class="pdg_b10">
                            <input class="w_100 js_input02" id="Address" name="Address" value="{{$model->Address}}" placeholder="" type="text">

                        </div>
                        <div>
                            <input class="w_100 js_input02" id="Area" name="Area" value="{{$model->Area}}" placeholder="" type="text">
                        </div>


                    </div>
                </div>
                <div id="wrap" style="display:none;border:1px solid;width:100%;height:300px;margin:5px 0;position:relative">
                    <a href="javascript:void(0)" onclick="foldDaumPostcode()" id="btnFoldWrap" class="bt_sml02_blu rounded-0" style="cursor:pointer;position:absolute;right:0px;top:0px;z-index:1;height: 20px;width: 20px;"><i class="fa fa-window-close" style="color:white"></i> </a>
                </div>
{{--                 --}}
{{--                <div class="w_100 flx_side_m" style="display:table; border-bottom:1px solid #eee;">--}}
{{--                    <div class="pdg_10 js_align_c jbg_grey5 jm_tss1 jcr_blu"--}}
{{--                         style="display:table-cell; width:90px;">--}}
{{--                        Activity area--}}
{{--                    </div>--}}
{{--                    <div class="pdg_s10 pdg_tb10 jm_tss1 jcr_grey1"--}}
{{--                         style="display:table-cell; width:calc(100%-90px);">--}}
{{--                        <div class="j_inline pdg_r05">--}}
{{--                            <!-- select -->--}}
{{--                            <div class="input_border">--}}
{{--                                <div class="js_slt01">--}}
{{--                                    <select name="" style="vertical-align:middle;">--}}
{{--                                        <optgroup label="hour">--}}
{{--                                            <option value="1">Gyeonggi-do</option>--}}
{{--                                            <option value="2">Gangwon-do</option>--}}
{{--                                            <option value="3">Chungcheong-do</option>--}}
{{--                                        </optgroup>--}}
{{--                                    </select>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <!-- / select -->--}}
{{--                        </div>--}}
{{--                        <div class="j_inline">--}}
{{--                            <!-- select -->--}}
{{--                            <div class="input_border">--}}
{{--                                <div class="js_slt01">--}}
{{--                                    <select name="" style="vertical-align:middle;">--}}
{{--                                        <optgroup label="minutes">--}}
{{--                                            <option value="1">Suwon</option>--}}
{{--                                            <option value="2">Yongin City</option>--}}
{{--                                        </optgroup>--}}
{{--                                    </select>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <!-- / select -->--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                --}}
                <div class="w_100 flx_side_m" style="display:table; border-bottom:1px solid #eee;">
                    <div class="pdg_10 js_align_c jbg_grey5 jm_tss1 jcr_blu"
                         style="display:table-cell; width:90px;">
                        Settlement fee
                    </div>
                    <div class="pdg_s10 pdg_tb10 jm_tss1 jcr_grey1"
                         style="display:table-cell; width:calc(100%-90px);">
                        {{$additional->SettlementFee}}%
                    </div>
                </div>
                <!-- -->
                <div class="w_100 flx_side_m" style="display:table; border-bottom:1px solid #eee;">
                    <div class="pdg_10 js_align_c jbg_grey5 jm_tss1 jcr_blu"
                         style="display:table-cell; width:90px;">
                        Bank account
                    </div>
                    <div class="pdg_s10 pdg_tb10 jm_tss1 jcr_grey1"
                         style="display:table-cell; width:calc(100%-90px);">

                        <div class="pdg_b10">
                            <div class="j_inline pdg_r05">
                                <!-- select -->
                                <div class="input_border">
                                    <div class="js_slt01">
                                        <select name="additional[BankId]" style="vertical-align:middle;">
                                            <optgroup label="Select bank">
                                                <option value="1">Kookmin Bank</option>
                                                <option value="2">Hana Bank</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                <!-- / select -->
                            </div>
                            <div class="j_inline">
                                <input style="width:110px;" class="w-100 js_input02" name="additional[BankAccountName]" value="{{$additional->BankAccountName}}" placeholder="Account holder name" type="text">
                            </div>
                        </div>
                        <div>
                            <input style="width:100%;" class="js_input02"  name="additional[BankAccount]" value="{{$additional->BankAccount}}" type="text">
                        </div>

                    </div>
                </div>
                <!-- -->
                <div class="w_100 flx_side_m" style="display:table; border-bottom:1px solid #eee;">
                    <div class="pdg_10 js_align_c jbg_grey5 jm_tss1 jcr_blu"
                         style="display:table-cell; width:90px; vertical-align:middle;">
                        Refund policy
                    </div>
                    <div class="pdg_s10 pdg_tb10 jm_tss1 jcr_grey1"
                         style="display:table-cell; width:calc(100%-90px);">

                        <div class="flx_rgt_m pdg_b10" style="border-bottom:1px dashed #ddd;">
                            <div class="js_align_r">
                                If canceled 7 days before the reservation date %
                            </div>
                            <div class="j_inline pdg_l10" style="width:70px;">
                                <input style="width:40px; text-align:center;" class="js_input02" name="additional[CancelledBefore7]" value="{{$additional->CancelledBefore7}}" placeholder="" type="text">
                            </div>
                        </div>


                        <div class="flx_rgt_m pdg_tb10" style="border-bottom:1px dashed #ddd;">
                            <div class="js_align_r">
                                If canceled 4-6 days before the reservation date %
                            </div>
                            <div class="j_inline pdg_l10" style="width:70px;">
                                <input style="width:40px; text-align:center;" class="js_input02" name="additional[CancelledBefore45]" value="{{$additional->CancelledBefore45}}" placeholder="" type="text">
                            </div>
                        </div>


                        <div class="flx_rgt_m pdg_tb10" style="border-bottom:1px dashed #ddd;">
                            <div class="js_align_r">
                                If canceled 1 to 3 days before the reservation date %
                            </div>
                            <div class="j_inline pdg_l10" style="width:70px;">
                                <input style="width:40px; text-align:center;" class="js_input02" name="additional[CancelledBefore13]" value="{{$additional->CancelledBefore13}}"placeholder="" type="text">
                            </div>
                        </div>


                        <div class="flx_rgt_m pdg_tb10">
                            <div class="js_align_r">
                                If canceled on the day of reservation %
                            </div>
                            <div class="j_inline pdg_l10" style="width:70px;">
                                <input style="width:40px; text-align:center;" class="js_input02" name="additional[CancelledOnDay]" value="{{$additional->CancelledOnDay}}" placeholder="" type="text">
                            </div>
                        </div>
                        <div class="flx_rgt_m pdg_b10" style="border-bottom:1px dashed #ddd;">
                            <!-- check -->
                            <div class="checkbox">
                                <input type="checkbox" class="form-check-input" id="IsCancellable" name="additional[IsCancellable]" {{$additional->IsCancellable?'checked="checked"':""}}>
                                <label for="IsCancellable">Non Cancellable</label>
                            </div>
                            <!-- check -->
                        </div>


                        <textarea class="w_100 js_txtarea mgn_t10" name="content" rows="6" placeholder="100% refund is possible when maritime alerts are issued." value="" style="padding:5px;"></textarea>
                    </div>
                </div>

            </div>
        </div>
        <!-- // List -->
    </div>
    <!-- // Section -->


    <!-- fixed Bottom Button -->
        <button class="btn btm_bt_wrap02 bt_sml02_blu rounded-0" type="submit">Save</button>

    </form>
    <!-- // fixed Bottom Button -->
</div>
    @endsection

@section('scripts')
    <script src="{{asset('js/jquery.mask.min.js')}}"></script>
    <script>
        $(document).ready(function(){
            $('#Contact').mask('000-0000-0000');


            $('#CustomEmail').change(function(){
               if($(this).val() !== 1)
               {
                   var email = $('#Email').val()
                   var splitted = email.split("@");
                   $('#Email').val(splitted[0]+"@"+$( "#CustomEmail option:selected" ).text());
               }
            });




        });
    </script>
    @include('components.address')
@endsection