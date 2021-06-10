@extends('admin.layouts.mobile')



@section('content')
    <!-- gnb -->

    @if (!auth()->check())
        <script>window.location = "{{route('admin.mobile.login.index')}}";</script>
    @else

    
        <div class="jbg_wht" style="position:relative; min-height:100%; padding-bottom:76px;">

            <!-- header -->
            <div class="jbg_header flx_side">
                <div class="flx_lft_m" style="width:90px; height:60px;">
                    <div class="pdg_l05 tp_tab" onclick="location.href='javascript:history.go(-1);'">
                        <svg width="32" height="20" viewBox="0 0 256 512">
                            <path
                                d="M231.293 473.899l19.799-19.799c4.686-4.686 4.686-12.284 0-16.971L70.393 256 251.092 74.87c4.686-4.686 4.686-12.284 0-16.971L231.293 38.1c-4.686-4.686-12.284-4.686-16.971 0L4.908 247.515c-4.686 4.686-4.686 12.284 0 16.971L214.322 473.9c4.687 4.686 12.285 4.686 16.971-.001z">
                            </path>
                        </svg>
                    </div>
                </div>
                <div class="flx_c jm_ts2 jcr_wht j_bold" style="height:60px;">
                    @lang("admin.product_management")
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
                        @lang("admin.product_admin_create_header")
                    </div>
                </div>
                <!-- //title -->
            </div>
            <!-- // Section -->
            <!-- Section -->
            <form action="{{ route('admin.mobile.product.store') }}" method="post" enctype="multipart/form-data" id="form">
                {{csrf_field()}}
            <div class="pdg_s15">
                <!-- List -->
                <div class="jbg_wht">
                    <div style="border:1px solid #ccc;">
                        <!-- -->
                        <div class="w_100 flx_side_m" style="display:table; border-bottom:1px solid #eee;">
                            <div class="pdg_10 js_align_c jbg_grey5 jm_tss1 jcr_blu"
                                style="display:table-cell; width:90px;">
                                @lang('admin.product_division')
                            </div>
                            <div class="pdg_s10 pdg_tb10 jm_tss1 jcr_grey1"
                                style="display:table-cell; width:calc(100% - 90px);">
                                <div class="form-group">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="Division" id="division.tour" {{ $product->Division == \App\Common\Enums\YachtDivision::tour ? 'checked' : ''}}  value="{{\App\Common\Enums\YachtDivision::tour}}">
                                        <label class="form-check-label" for="division.tour">@lang('admin.product_tour')</label>
            
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="Division" id="division.lodgement" {{ $product->Division == \App\Common\Enums\YachtDivision::lodgement ? 'checked' : '' }} value="{{\App\Common\Enums\YachtDivision::lodgement}}">
                                        <label class="form-check-label" for="division.lodgement">@lang('admin.product_lodgement')</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="Division" id="division.theme" {{ $product->Division == \App\Common\Enums\YachtDivision::theme ? 'checked' : '' }} value="{{\App\Common\Enums\YachtDivision::theme}}"/>
                                        <label class="form-check-label" for="division.theme">@lang('admin.product_theme')</label>
                                    </div>
            
                                </div>
                                {{-- <div>
                                    <div class="rbox_sel on">투어</div>
                                    <div class="rbox_sel">숙박</div>
                                    <div class="rbox_sel">테마</div>
                                </div> --}}
                            </div>
                        </div>
                        <!-- -->
                        <div class="w_100 flx_side_m" style="display:table; border-bottom:1px solid #eee;">
                            <div class="pdg_10 js_align_c jbg_grey5 jm_tss1 jcr_blu"
                                style="display:table-cell; width:90px;">
                                @lang('admin.product_displayed')
                            </div>
                            <div class="pdg_s10 pdg_tb10 jm_tss1 jcr_grey1"
                                style="display:table-cell; width:calc(100% - 90px);">
                                <div>
                                    <div class="rbox_sel on">@lang('admin.product_displayed')</div>
                                    <input type="hidden" name="IsDisplayed" value="1">
                                    {{-- <div class="rbox_sel">미진열</div> --}}
                                </div>
                            </div>
                        </div>					
                        <!-- -->
                        <div class="w_100 flx_side_m" style="display:table; border-bottom:1px solid #eee;">
                            <div class="pdg_10 js_align_c jbg_grey5 jm_tss1 jcr_blu"
                                style="display:table-cell; width:90px;">
                                @lang('admin.product_yacht_selection')
                            </div>
                            <div class="pdg_s10 pdg_tb10 jm_tss1 jcr_grey1"
                                style="display:table-cell; width:calc(100% - 90px);" id="yachtListBlock">
                                <div class="j_inline pdg_r05">
                                    <!-- select -->
                                    <div class="input_border">
                                        <div class="js_slt01">
                                            <select name="YachtId" style="vertical-align:middle;" id="yachtList">
                                                <optgroup label="@lang('admin.product_name')">
                                                    <option value=""></option> 
                                                    @if(!is_null($vendor))
                                                        @foreach ($vendor->yachts as $yacht)
                                                            <option value="{{ $yacht->Id }}" {{ $yacht->Id == $product->YachtId ? "selected" : "" }} >{{ $yacht->Name }}</option>    
                                                        @endforeach
                                                    @endif
                                                </optgroup>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- / select -->
                                </div>
                                <span><span>{{ $product->yacht->Capacity }}</span> @lang("admin.product_seater_txt"), <span>{{ $product->yacht->Length }}</span> @lang("admin.product_length_txt")<span>
                            </div>
                        </div>
                        <!-- -->
                        <div class="w_100 flx_side_m" style="display:table; border-bottom:1px solid #eee;">
                            <div class="pdg_10 js_align_c jbg_grey5 jm_tss1 jcr_blu"
                                style="display:table-cell; width:90px;">
                                @lang('admin.product_yacht_name')
                            </div>
                            <div class="pdg_s10 pdg_tb10 jm_tss1 jcr_grey1"
                                style="display:table-cell; width:calc(100% - 90px);">
                                <input class="w_100 js_input02" name="Name" value="{{ $product->Name }}" placeholder="@lang('admin.product_name_placeholder')" type="text">
                            </div>
                        </div>
                        <!-- -->
                        <div class="w_100 flx_side_m" style="display:table; border-bottom:1px solid #eee;">
                            <div class="pdg_10 js_align_c jbg_grey5 jm_tss1 jcr_blu"
                                style="display:table-cell; width:90px; vertical-align:middle;">
                                @lang('admin.product_introduction')
                            </div>
                            <div class="pdg_s10 pdg_tb10 jm_tss1 jcr_grey1"
                                style="display:table-cell; width:calc(100% - 90px);">
                                <textarea class="w_100 js_txtarea" name="Introduction" rows="3" placeholder="@lang('admin.product_introduction_placeholder')" value="" style="padding:5px;"> {{ $product->Introduction }}</textarea>
                            </div>
                        </div>
                        <!-- -->
                        <div class="w_100 flx_side_m" style="display:table; border-bottom:1px solid #eee;">
                            <div class="pdg_10 js_align_c jbg_grey5 jm_tss1 jcr_blu"
                                style="display:table-cell; width:90px;">
                                @lang('admin.product_budget')
                            </div>
                            <div class="pdg_s10 pdg_tb10 jm_tsss2 jcr_grey1"
                                style="display:table-cell; width:calc(100% - 90px);">
                                
                                <div class="form-group row">
                                    <div class="col-6">
                                        <label class="form-control-plaintext"><span class="text-danger">*</span> @lang('admin.product_adults')</label>
                                        <input type="text" class="form-control js_input02" name="CapacityAdult"  value="{{ $product->CapacityAdult }}"/>
                                    </div>
                                    <div class="col-6">
                                        <label class="form-control-plaintext"><span class="text-danger">*</span> @lang('admin.product_children')</label>
                                        <input type="text" class="form-control" name="CapacityChild" value="{{ $product->CapacityChild }}"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-6">
                                        <label class="form-control-plaintext"><span class="text-danger">*</span> @lang('admin.product_adult_price')</label>
                                        <input type="text" class="form-control" name="PriceAdult" value="{{ $product->PriceAdult }}" />
                                    </div>
                                    <div class="col-6">
                                        <label class="form-control-plaintext"><span class="text-danger">*</span> @lang('admin.product_child_price')</label>
                                        <input type="text" class="form-control" name="PriceChild" value="{{ $product->PriceChild }}"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-plaintext"><span class="text-danger">*</span> @lang('admin.product_price')</label>
                                    <input type="text" class="form-control" name="Price" id="Price"  value="{{ $product->Price }}" />
                                </div>
                                
                            </div>
                        </div>
                        <!-- -->
                        <div class="w_100 flx_side_m" style="display:table; border-bottom:1px dashed #ccc;">
                            <div class="pdg_10 js_align_c jbg_grey5 jm_tss1 jcr_blu"
                                style="display:table-cell; width:90px; vertical-align: middle;">
                                @lang("admin.product_image_text")
                            </div>
                            <div class="pdg_s10 jm_tsss2 jcr_grey1"
                                style="display:table-cell; width:calc(100% - 90px);">
                                
                                <div class="flx_c pdg_tb10 upload_input" id="uploadImage">
                                    <img src="{{ asset("mobile/admin/images/camera_icon.png") }}" height="60px" >
                                </div>							
                                <input type="file" multiple hidden id="uploadImageInput" accept="image/*" name="images[]">
                            </div>
                        </div>
                        <!-- -->
                        <div style="width:100%; height:130px; overflow-x:auto; border-bottom:1px dashed #ccc;">
                            <div style="height:60px;">
                                <!-- -->
                                <div class="w_100 pdg_l10" style="display:table;">
                                    <!-- sliding image -->
                                    <div class="w_100" style="height:130px; padding-top:10px; ">
                                        <div style="display:table-row;" id="imageListSection">
                                            <!-- image -->
                                            @if(!empty($product->images->toArray()))
                                                @foreach ($product->images as $image)
                                                    <div class="jbg_wht" style="display:table-cell;">
                                                        <div style="padding:0 10px 0 0;">
                                                                <div style="border:1px solid #ddd; padding:5px;">
                                                                <div class="jbg_grey5" style="  width:72px; height:72px; overflow:hidden;">
                                                                    <img src="{{ asset('storage/products/'.$image->Name) }}" height="76px">
                                                                </div>
                                                                <div class="flx_c pdg_t05 jcr_grey2 jm_tsss2">@lang("admin.product_delete")</div>
                                                            </div>
                                                        </div>                                   
                                                    </div>
                                                @endforeach
                                            @endif
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
                                @lang('admin.product_yacht_location')
                            </div>
                            <div class="pdg_s10 pdg_tb10 jm_tss1 jcr_grey1"
                                style="display:table-cell; width:calc(100% - 90px);">
                                <div class="j_inline pdg_r05">
                                    <!-- select -->
                                    <div class="input_border">
                                        <div class="js_slt01">
                                            <select name="Area" style="vertical-align:middle;">
                                                <optgroup label="">
                                                    @foreach ($areas as $key => $area)
                                                        <option value="{{ $key }}" {{ $product->Area == $key ? "selected" : "" }}>{{ $area }}</option>
                                                    @endforeach
                                                </optgroup>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- / select -->
                                </div>
                                {{-- <div class="j_inline">
                                    <!-- select -->
                                    <div class="input_border">
                                        <div class="js_slt01">
                                            <select name="" style="vertical-align:middle;">
                                                <optgroup label="시">
                                                    <option value="1">수원시</option>
                                                    <option value="2">용인시</option>
                                                    <option value="3">성남시</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- / select -->
                                </div> --}}
                            </div>
                        </div>

                        <div class="w_100 flx_side_m" style="display:table; border-bottom:1px solid #eee; ">
                            <div class="pdg_10 js_align_c jbg_grey5 jm_tss1 jcr_blu"
                                style="display:table-cell; width:90px; vertical-align: middle;">
                                @lang('admin.product_yacht_booking_time')
                            </div>
                            <div class="pdg_s10 pdg_tb10 js_align_r"
                                style="display:table-cell; width:calc(100% - 90px);">


                                <!-- add skedule -->
                                <div class="flx_side" style="padding:0 0 10px 0; ">
                                    <div>
                                        <div class="j_inline pdg_r05">
                                            <!-- select -->
                                            <div class="input_border">
                                                <div class="js_slt01">
                                                    <select name="" id="timeHour" style="vertical-align:middle;">
                                                        @for ($i = 0;$i < 24;$i++)
                                                            <option value="{{ $i < 10 ? "0".$i : $i }}">{{ $i < 10 ? "0".$i : $i }}</option>
                                                        @endfor
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- / select -->
                                        </div>
                                        <div class="j_inline pdg_r05">
                                            <!-- select -->
                                            <div class="input_border">
                                                <div class="js_slt01">
                                                    <select name="" id="timeMinute" style="vertical-align:middle;">
                                                        @for ($i = 0;$i < 60;$i++)
                                                            <option value="{{ $i < 10 ? "0".$i : $i }}">{{ $i < 10 ? "0".$i : $i }}</option>
                                                        @endfor
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- / select -->
                                        </div>
                                    </div>

                                    <div>                                   
                                        <!-- button -->
                                        <div class="bt_sml02_blu" style="width:50px;" id="addTime">
                                            @lang('admin.product_reservation_add')
                                        </div>
                                        <!--// button -->                                
                                    </div>                                
                                    
                                </div>
                                <!-- / add skedule -->

                                <!-- add skedule -->
                                <div class="flx_side" style="padding-top:10px; border-top:1px dashed #ccc;">
                                    <div style="width:70%; height:140px; background-color:#fff; overflow-y: scroll; border:1px solid #ccc;" id="timeList">
                                                       
                                    </div>

                                    <div>                                   
                                        <!-- button -->
                                        <div class="bt_sml02_blk" style="width:50px;" id="removetime">
                                            @lang('admin.product_reservation_remove')
                                        </div>
                                        <!--// button -->                                
                                    </div>                                
                                    
                                </div>
                                <!-- / add skedule -->


                                
                            </div>
                        </div>								
                        <!-- -->
                        {{-- <div class="w_100 flx_side_m" style="display:table; border-bottom:1px solid #eee;">
                            <div class="pdg_10 js_align_c jbg_grey5 jm_tss1 jcr_blu"
                                style="display:table-cell; width:90px; vertical-align:middle;">
                                @lang('admin.product_yacht_details')
                            </div>
                            <div class="pdg_s10 pdg_tb10 jm_tss1 jcr_grey1"
                                style="display:table-cell; width:calc(100% - 90px);">
                                <textarea class="w_100 js_txtarea" name="Details" rows="5" placeholder="@lang('admin.product_yacht_details_placeholder')" value="" style="padding:5px;"></textarea>
                            </div>
                        </div>					 --}}
                    </div>
                </div>
                <!-- // List  -->
            </div>
            <!-- // Section -->
            
            
            <!-- fixed Bottom Button -->
            <div class="flx_lft btm_bt_wrap02" id="saveBtn">
                <div class="w_100 flx_c jbg_header jm_tss1 jcr_wht" style="height:50px;">
                    <div class="jm_ts2 jcr_wht">
                        @lang("admin.product_save")
                    </div>
                </div>
            </div>
        </form>
            <!-- // fixed Bottom Button -->
        </div>

    @endif



@endsection
@section('scripts')
    <script>
        var selectedTime = null;
        function TimeSelection(element){
            selectedTime= $(element).children('span'    ).text();
            $(element).addClass('on');

            $('#timeList div').each(function(index, element){
                if($(element).children('span').text() != selectedTime)
                {
                    $(element).removeClass('on');
                }
            });

        }
        function readURL(input) {
            if (input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
        $(document).ready(function(){
            $("#saveBtn").click(function(){
                $("#form").submit();
            });

            $("#uploadImage").click(function(){
                $("#uploadImageInput").click();
            });

            $("#uploadImageInput").change(function(){
                var listElem = "";
                var elems = $(this)[0].files;
                for(i = 0; i < elems.length;i++){
                    var elem = elems[i];
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        listElem += '<div class="jbg_wht" style="display:table-cell;">'+
                                        '<div style="padding:0 10px 0 0;">'+
                                            '<div style="border:1px solid #ddd; padding:5px;">'+
                                                '<div class="jbg_grey5" style="  width:72px; height:72px; overflow:hidden;">'+
                                                    '<img src="'+ e.target.result + '" height="76px">'+
                                                '</div>'+
                                            '<div class="flx_c pdg_t05 jcr_grey2 jm_tsss2">삭제</div>'+
                                        '</div>'+
                                    '</div>'+                                   
                                '</div>';
                    }
                    $("#imageListSection").append(listElem);    
                    reader.readAsDataURL(elem);
                }
            });

            $('#addTime').click(function(){
                var hour = $('#timeHour').val();
                var minute = $('#timeMinute').val();
                var time = hour +':'+ minute;
                var item = '<div class="res_time" onclick="TimeSelection(this)"> '+
                                '<span>' + time + '</span>'
                                '<input type="hidden" value="'+time+'" name="ReservationTime[]" />'+
                            '</div>';
                var itemExist = false;
                    
                $('#timeList div').each(function(index, element){
                    if($(element).children('span').text() == time)
                    {
                        itemExist = true;
                    }
                });

                if(!itemExist) {
                    $('#timeList').append(item);

                }
            });

            $('#removetime').click(function(){
                if(selectedTime!=null)
                {
                    $('#timeList div').each(function(index, element){
                        if($(element).children('span').text() == selectedTime)
                        {
                            $(element).remove();
                            selectedTime = null;

                        }
                    });

                }
            });
            $('#IsDisplayed').click(function(){
                if($(this).prop( "checked" ) == true)
                {
                    $('[name="IsDisplayed"]').val(1);
                    $(this).val(1);
                }else{
                    $(this).val(0);
                    $('[name="IsDisplayed"]').val(0);
                }
            });

            $("#yachtList").change(function(){
                var id = $(this).val();
                $.ajax({
                    method:'get',
                    url: "{{route('admin.mobile.product.getyacht')}}",
                    data: "id="+id,
                    success:function(res){
                        var data = JSON.parse(res);
                        console.log(data);
                        // var elem = $("#yachtListBlock").children('span');
                        // elem.children("span:first-child").text(data.Capacity);
                        // elem.children("span:last-child").text(data.Length);
                    },
                    error:function(xhr){
                        console.log(xhr.responseText);
                    }
                });
            })



        });
    </script>
@endsection