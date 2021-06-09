@extends("admin.layouts.mobile")
@section("content")
    <div class="jbg_wht" style="position:relative; min-height:100%; padding-bottom:80px;">
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
                요트관리
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
                    정보수정/등록
                </div>
            </div>
            <!-- //title -->
        </div>
        <!-- // Section -->
        <form action="{{route("admin.mobile.yacht.save")}}" method="post" enctype="multipart/form-data" id="yacht-register-form">
            {{csrf_field()}}
            <!-- Section -->
            <div class="pdg_s15">
                <!-- List -->
                <div class="jbg_wht">
                    <div style="border:1px solid #ccc;">
                        <!-- -->
                        <div class="w_100 flx_side_m" style="display:table; border-bottom:1px solid #eee;">
                            <div class="pdg_10 js_align_c jbg_grey5 jm_tss1 jcr_blu"
                                 style="display:table-cell; width:90px;">
                                업체명
                            </div>
                            <div class="pdg_s10 pdg_tb10 jm_tss1 jcr_grey1"
                                 style="display:table-cell; width:calc(100% - 90px);">
                                {{auth()->user()->vendor->CompanyName}}
                            </div>
                        </div>
                        <!-- -->
                        <div class="w_100 flx_side_m" style="display:table; border-bottom:1px solid #eee;">
                            <div class="pdg_10 js_align_c jbg_grey5 jm_tss1 jcr_blu"
                                 style="display:table-cell; width:90px;">
                                요트명
                            </div>
                            <div class="pdg_s10 pdg_tb10 jm_tss1 jcr_grey1"
                                 style="display:table-cell; width:calc(100% - 90px);">
                                <input class="w_100 js_input02" name="Name" value="{{old("Name")}}" placeholder="요트명을 입력해주세요" type="text">
                            </div>
                        </div>
                        <!--
                        <div class="w_100 flx_side_m" style="display:table; border-bottom:1px solid #ccc;">
                            <div class="pdg_10 js_align_c jbg_grey5 jm_tss1 jcr_blu"
                                style="display:table-cell; width:90px; vertical-align: middle;">
                                이미지
                            </div>
                            <div class="pdg_s10 pdg_tb10 js_align_c"
                                style="display:table-cell; width:calc(100% - 90px);">

                                image 1
                                <div class="jbg_wht j_inline" style="margin:10px auto;">
                                    <div style="padding:0 10px 0 0;">
                                            <div style="border:1px solid #ddd; padding:5px;">
                                            <div class="jbg_grey5" style="height:150px; overflow:hidden;">
                                                <img src="../resources/images/camera_icon.png" height="150px">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                / image 1
                                image 2
                                <div class="jbg_wht j_inline" style="margin:10px auto;">
                                    <div style="padding:0 10px 0 0;">
                                            <div style="border:1px solid #ddd; padding:5px;">
                                            <div class="jbg_grey5" style="height:150px; overflow:hidden;">
                                                <img src="../resources/images/review_01.png" height="150px">
                                            </div>
                                            <div class="flx_c pdg_t05 jcr_grey2 jm_tsss2">삭제</div>
                                        </div>
                                    </div>
                                </div>
                                / image 2
                            </div>
                        </div> -->
                        <!-- -->
                        <div class="w_100 flx_side_m" style="display:table; border-bottom:1px solid #eee;">
                            <div class="pdg_10 js_align_c jbg_grey5 jm_tss1 jcr_blu"
                                 style="display:table-cell; width:90px;">
                                요트위치
                            </div>
                            <div class="pdg_s10 pdg_tb10 jm_tss1 jcr_grey1"
                                 style="display:table-cell; width:calc(100% - 90px);">
                                <div class="j_inline pdg_r05">
                                    <!-- select -->
                                    <div class="input_border">
                                        <div class="js_slt01">
                                            <select name="Area" style="vertical-align:middle;">
                                                <optgroup label="도">
                                                    @foreach($areas as $key => $area)
                                                        <option value="{{$key}}" @if($key === old("Area")) selected @endif >{{$area}}</option>
                                                    @endforeach
                                                </optgroup>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- / select -->
                                </div>
{{--                                <div class="j_inline">--}}
{{--                                    <!-- select -->--}}
{{--                                    <div class="input_border">--}}
{{--                                        <div class="js_slt01">--}}
{{--                                            <select name="" style="vertical-align:middle;">--}}
{{--                                                <optgroup label="시">--}}
{{--                                                    <option value="1">수원시</option>--}}
{{--                                                    <option value="2">용인시</option>--}}
{{--                                                    <option value="3">성남시</option>--}}
{{--                                                </optgroup>--}}
{{--                                            </select>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <!-- / select -->--}}
{{--                                </div>--}}
                            </div>
                        </div>
                        <!-- -->
                        <!-- -->
                        <div class="w_100 flx_side_m" style="display:table; border-bottom:1px solid #eee;">
                            <div class="pdg_10 js_align_c jbg_grey5 jm_tss1 jcr_blu"
                                 style="display:table-cell; width:90px;">
                                탑승위치
                            </div>
                            <div class="pdg_s10 pdg_tb10 jm_tsss2 jcr_grey1"	style="display:table-cell; width:calc(100% - 90px);">
                                <input type="text" name="Postcode" value="{{old("Postcode")}}" id="sample2_postcode" placeholder="우편번호" class="js_input03">
                                <input type="button" onclick="sample2_execDaumPostcode()" value="검색"><br>
                                <div id="layer" style="display:none;position:fixed;overflow:hidden;z-index:1;-webkit-overflow-scrolling:touch;">
                                    <img src="//t1.daumcdn.net/postcode/resource/images/close.png" id="btnCloseLayer" style="cursor:pointer;position:absolute;right:-3px;top:-3px;z-index:1" onclick="closeDaumPostcode()" alt="닫기 버튼">
                                </div>
                            </div>
                            <script src="//t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>
                            <script>
                                // 우편번호 찾기 화면을 넣을 element
                                var element_layer = document.getElementById('layer');

                                function closeDaumPostcode() {
                                    // iframe을 넣은 element를 안보이게 한다.
                                    element_layer.style.display = 'none';
                                }

                                function sample2_execDaumPostcode() {
                                    new daum.Postcode({
                                        oncomplete: function(data) {
                                            // 검색결과 항목을 클릭했을때 실행할 코드를 작성하는 부분.

                                            // 각 주소의 노출 규칙에 따라 주소를 조합한다.
                                            // 내려오는 변수가 값이 없는 경우엔 공백('')값을 가지므로, 이를 참고하여 분기 한다.
                                            var addr = ''; // 주소 변수
                                            var extraAddr = ''; // 참고항목 변수
                                            //사용자가 선택한 주소 타입에 따라 해당 주소 값을 가져온다.
                                            if (data.userSelectedType === 'R') { // 사용자가 도로명 주소를 선택했을 경우
                                                addr = data.roadAddress;
                                            } else { // 사용자가 지번 주소를 선택했을 경우(J)
                                                addr = data.jibunAddress;
                                            }
                                            var inputValue = '';
                                            // 사용자가 선택한 주소가 도로명 타입일때 참고항목을 조합한다.
                                            if(data.userSelectedType === 'R'){
                                                // 법정동명이 있을 경우 추가한다. (법정리는 제외)
                                                // 법정동의 경우 마지막 문자가 "동/로/가"로 끝난다.
                                                if(data.bname !== '' && /[동|로|가]$/g.test(data.bname)){
                                                    extraAddr += data.bname;
                                                }
                                                // 건물명이 있고, 공동주택일 경우 추가한다.
                                                if(data.buildingName !== '' && data.apartment === 'Y'){
                                                    extraAddr += (extraAddr !== '' ? ', ' + data.buildingName : data.buildingName);
                                                }
                                                // 표시할 참고항목이 있을 경우, 괄호까지 추가한 최종 문자열을 만든다.
                                                if(extraAddr !== ''){
                                                    extraAddr = ' (' + extraAddr + ')';
                                                }
                                                // 조합된 참고항목을 해당 필드에 넣는다.
                                                // document.getElementById("sample2_extraAddress").value = extraAddr;
                                                inputValue += extraAddr;

                                            } else {
                                                inputValue += '';
                                                // document.getElementById("sample2_extraAddress").value = '';
                                            }

                                            // document.getElementById('sample2_postcode').value = data.zonecode;
                                            // 우편번호와 주소 정보를 해당 필드에 넣는다.
                                            inputValue += ` ${addr}`;
                                            document.getElementById('sample2_postcode').value = inputValue;
                                            // document.getElementById("sample2_address").value = addr;
                                            // 커서를 상세주소 필드로 이동한다.
                                            // document.getElementById("sample2_detailAddress").focus();

                                            // iframe을 넣은 element를 안보이게 한다.
                                            // (autoClose:false 기능을 이용한다면, 아래 코드를 제거해야 화면에서 사라지지 않는다.)
                                            element_layer.style.display = 'none';
                                        },
                                        width : '100%',
                                        height : '100%',
                                        maxSuggestItems : 5
                                    }).embed(element_layer);

                                    // iframe을 넣은 element를 보이게 한다.
                                    element_layer.style.display = 'block';

                                    // iframe을 넣은 element의 위치를 화면의 가운데로 이동시킨다.
                                    initLayerPosition();
                                }

                                // 브라우저의 크기 변경에 따라 레이어를 가운데로 이동시키고자 하실때에는
                                // resize이벤트나, orientationchange이벤트를 이용하여 값이 변경될때마다 아래 함수를 실행 시켜 주시거나,
                                // 직접 element_layer의 top,left값을 수정해 주시면 됩니다.
                                function initLayerPosition(){
                                    var width = 300; //우편번호서비스가 들어갈 element의 width
                                    var height = 400; //우편번호서비스가 들어갈 element의 height
                                    var borderWidth = 5; //샘플에서 사용하는 border의 두께

                                    // 위에서 선언한 값들을 실제 element에 넣는다.
                                    element_layer.style.width = width + 'px';
                                    element_layer.style.height = height + 'px';
                                    element_layer.style.border = borderWidth + 'px solid';
                                    // 실행되는 순간의 화면 너비와 높이 값을 가져와서 중앙에 뜰 수 있도록 위치를 계산한다.
                                    element_layer.style.left = (((window.innerWidth || document.documentElement.clientWidth) - width)/2 - borderWidth) + 'px';
                                    element_layer.style.top = (((window.innerHeight || document.documentElement.clientHeight) - height)/2 - borderWidth) + 'px';
                                }
                            </script>
                        </div>
                        <!-- -->
                        <div class="w_100 flx_side_m" style="display:table; border-bottom:1px solid #eee;">
                            <div class="pdg_10 js_align_c jbg_grey5 jm_tss1 jcr_blu"
                                 style="display:table-cell; width:90px;">
                                정원
                            </div>
                            <div class="pdg_s10 pdg_tb10 jm_tsss2 jcr_grey1"
                                 style="display:table-cell; width:calc(100% - 90px);">
                                <div class="j_inline pdg_r05" style="width:calc(100% - 35px);">
                                    <input class="w_100 js_input02" name="Capacity" value="{{old("Capacity")}}" placeholder="인원을 입력해주세요" type="text">
                                </div>인승
                            </div>
                        </div>
                        <!-- -->
                        <div class="w_100 flx_side_m" style="display:table; border-bottom:1px solid #eee;">
                            <div class="pdg_10 js_align_c jbg_grey5 jm_tss1 jcr_blu"
                                 style="display:table-cell; width:90px;">
                                제원
                            </div>
                            <div class="pdg_s10 pdg_tb10 jm_tsss2 jcr_grey1"
                                 style="display:table-cell; width:calc(100% - 90px);">
                                <div class="j_inline pdg_r05" style="width:calc(100% - 35px);">
                                    <input class="w_100 js_input02" name="Length" value="{{old("Length")}}" placeholder="제원을 입력해주세요" type="text">
                                </div>pt
                            </div>
                        </div>
                        <!-- -->
                        <div class="w_100 flx_side_m" style="display:table; border-bottom:1px dashed #ccc;">
                            <div class="pdg_10 js_align_c jbg_grey5 jm_tss1 jcr_blu"
                                 style="display:table-cell; width:90px;">
                                운영시간
                            </div>
                            <div class="pdg_s10 pdg_tb10 jm_tsss2 jcr_grey1"
                                 style="display:table-cell; width:calc(100% - 90px);">
                                <div class="flx_lft_m">
                                    <div class="lg_chk j_inline" style="width:22px;">
                                        <input type="checkbox" name="AllDay" @if(old("AllDay")) checked @endif id="img_checkbox">
                                        <label for="img_checkbox">
                                            <span></span>
                                        </label>
                                    </div>
                                    <div class="j_inline jcr_grey1 jm_tss1 pdg_l05">
                                        종일 (선택)
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w_100 js_align_c"
                             style="padding:10px 10px 10px; display:table; border-bottom:1px solid #eee;">
                            <div class="j_inline pdg_r05">
                                <!-- select -->
                                <div class="input_border">
                                    <div class="js_slt01">
                                        <select name="Open[From][Hours]" style="vertical-align:middle;">
                                            @for($i=0;$i<24;$i++)
                                                <option value="{{$i}}" @if($i == old("Open.From.Hours")) selected @endif>{{$i}}</option>
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
                                        <select name="Open[From][Minutes]" style="vertical-align:middle;">
                                            <optgroup label="분">
                                                @for($i=0;$i<60;$i++)
                                                    <option value="{{$i}}" @if($i == old("Open.From.Minutes")) selected @endif>{{$i}}</option>
                                                @endfor
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                <!-- / select -->
                            </div>
                            ~
                            <div class="j_inline pdg_s05">
                                <!-- select -->
                                <div class="input_border">
                                    <div class="js_slt01">
                                        <select name="Open[To][Hours]" style="vertical-align:middle;">
                                            <optgroup label="시">
                                                @for($i=0;$i<24;$i++)
                                                    <option value="{{$i}}" @if($i == old("Open.To.Hours")) selected @endif>{{$i}}</option>
                                                @endfor
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
                                        <select name="Open[To][Minutes]" style="vertical-align:middle;">
                                            <optgroup label="분">
                                                @for($i=0;$i<60;$i++)
                                                    <option value="{{$i}}" @if($i == old("Open.To.Minutes")) selected @endif>{{$i}}</option>
                                                @endfor
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                <!-- / select -->
                            </div>
                        </div>
                        <!-- -->
                        <div class="w_100 flx_side_m" style="display:table; border-bottom:1px solid #eee;">
                            <div class="pdg_10 js_align_c jbg_grey5 jm_tss1 jcr_blu"
                                 style="display:table-cell; width:90px;">
                                정기휴무
                            </div>
                            <div class="flx_lft_m pdg_s10 pdg_tb10 jm_tss1 jcr_grey1"
                                 style="display:table-cell; width:calc(100% - 90px);">
                                매주
                                <div class="j_inline pdg_l10">
                                    <!-- select -->
                                    <div class="input_border">
                                        <div class="js_slt01">
                                            <select name="Regularity[From]" style="vertical-align:middle;">
                                                <optgroup label="요일">
                                                    <option value="1">월</option>
                                                    <option value="2">화</option>
                                                    <option value="3">수</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- / select -->
                                </div>
                                ㆍ
                                <div class="j_inline pdg_s03">
                                    <!-- select -->
                                    <div class="input_border">
                                        <div class="js_slt01">
                                            <select name="Regularity[To]" style="vertical-align:middle;">
                                                <optgroup label="요일">
                                                    <option value="1">월</option>
                                                    <option value="2">화</option>
                                                    <option value="3">수</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- / select -->
                                </div>
                            </div>
                        </div>
                        <!-- -->
{{--                        <div class="w_100 flx_side_m" style="display:table; border-bottom:1px dashed #ccc;">--}}
{{--                            <div class="pdg_10 js_align_c jbg_grey5 jm_tss1 jcr_blu"--}}
{{--                                 style="display:table-cell; width:90px;">--}}
{{--                                임시휴무--}}
{{--                            </div>--}}
{{--                            <div class="pdg_s10 pdg_tb10 jm_tsss2 jcr_grey1"--}}
{{--                                 style="display:table-cell; width:calc(100% - 90px);">--}}
{{--                                <div>--}}
{{--                                    <div class="rbox_sel">활성</div>--}}
{{--                                    <div class="rbox_sel on">비활성</div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="w_100 js_align_c"--}}
{{--                             style="padding:10px 10px 10px; display:table; border-bottom:1px solid #ccc;">--}}
{{--                            <div class="j_inline pdg_r05">--}}
{{--                                <!-- select -->--}}
{{--                                <div class="input_border">--}}
{{--                                    <div class="js_slt01">--}}
{{--                                        <select name="Closed[From][Hours]" style="vertical-align:middle;">--}}
{{--                                            <optgroup label="시">--}}
{{--                                                @for($i=0;$i<24;$i++)--}}
{{--                                                    <option value="{{$i}}">{{$i}}</option>--}}
{{--                                                @endfor--}}
{{--                                            </optgroup>--}}
{{--                                        </select>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!-- / select -->--}}
{{--                            </div>--}}
{{--                            <div class="j_inline pdg_r05">--}}
{{--                                <!-- select -->--}}
{{--                                <div class="input_border">--}}
{{--                                    <div class="js_slt01">--}}
{{--                                        <select name="Closed[From][Minutes]" style="vertical-align:middle;">--}}
{{--                                            <optgroup label="분">--}}
{{--                                                @for($i=0;$i<60;$i++)--}}
{{--                                                    <option value="{{$i}}">{{$i}}</option>--}}
{{--                                                @endfor--}}
{{--                                            </optgroup>--}}
{{--                                        </select>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!-- / select -->--}}
{{--                            </div>--}}
{{--                            ~--}}
{{--                            <div class="j_inline pdg_s05">--}}
{{--                                <!-- select -->--}}
{{--                                <div class="input_border">--}}
{{--                                    <div class="js_slt01">--}}
{{--                                        <select name="Closed[To][Hours]" style="vertical-align:middle;">--}}
{{--                                            <optgroup label="시">--}}
{{--                                                @for($i=0;$i<24;$i++)--}}
{{--                                                    <option value="{{$i}}">{{$i}}</option>--}}
{{--                                                @endfor--}}
{{--                                            </optgroup>--}}
{{--                                        </select>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!-- / select -->--}}
{{--                            </div>--}}
{{--                            <div class="j_inline">--}}
{{--                                <!-- select -->--}}
{{--                                <div class="input_border">--}}
{{--                                    <div class="js_slt01">--}}
{{--                                        <select name="Closed[To][Minutes]" style="vertical-align:middle;">--}}
{{--                                            <optgroup label="분">--}}
{{--                                                @for($i=0;$i<60;$i++)--}}
{{--                                                    <option value="{{$i}}">{{$i}}</option>--}}
{{--                                                @endfor--}}
{{--                                            </optgroup>--}}
{{--                                        </select>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!-- / select -->--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                </div>
                <!-- // List  -->
            </div>
            <!-- // Section -->

            <!-- fixed Bottom Button -->
            <div class="flx_lft btm_bt_wrap02" onclick="document.querySelector('#yacht-register-form').submit()">
                <div class="w_100 flx_c jbg_header jm_tss1 jcr_wht" style="height:50px;">
                    <div class="jm_ts2 jcr_wht">
                        저장
                    </div>
                </div>
            </div>
            <!-- // fixed Bottom Button -->
        </form>

    </div>
@endsection
@section("scripts")
@endsection