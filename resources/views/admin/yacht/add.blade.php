@extends('admin.index')

@section("styles")
    <style>
        .allDay{
            position: relative;
            top:40px;
        }
        .allDay.hide{
            visibility: hidden;
        }
        .blockTitle{
            font-size: large;
            font-weight: bold;
            position: relative;
            left: 20px;
            top: 15px;

        }
        .blockTitle.check{

        }

    </style>
@endsection
{{
    $id = (is_null($model) ? 0 : $model->Id)

}}


@section('content')

    <div class="row bg-light">
        <div class="col-6">
            <h2>Yacht information</h2>

            <form action="{{ $id == 0 ? route('admin.yacht.store') : route('admin.yacht.update', ['id'=>$id]) }}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <input type="hidden" value="{{ is_null($model) ? '0' : $model->Id }}" name="Id" />
                <div class="p-2 bg-white">
                    <div class="form-group">
                        <label class="form-control-plaintext"><span class="text-danger">*</span> Company name</label>
                        <select class="form-control" name="VendorId" value="{{old('VendorId', $model->VendorId)}}">
                            <option value="0">Select...</option>
                            @foreach($vendors as $vendor)
                                @if($model->VendorId == $vendor->Id)
                                    <option selected value="{{ $vendor->Id }}">{{ $vendor->CompanyName }}</option>
                                @else
                                    <option value="{{ $vendor->Id }}">{{ $vendor->CompanyName }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-control-plaintext"><span class="text-danger">*</span> Yacht Name</label>
                        <input type="text" class="form-control" name="Name" value="{{old('Name', $model->Name)}}"/>
                    </div>

                    <div class="form-group">
                        <label class="form-control-plaintext"><span class="text-danger">*</span> Load images</label>
                        <div class="input-images">
                            <input type="file" name="image[]" multiple class="custom-file-input" id="customFile" accept="image/jpeg, image/png, image/jpg">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-control-plaintext" ><span class="text-danger">*</span> Address</label>

                        <div class="input-group mb-3">
                            <input class="form-control" name="Area" id="Area" value="{{old('Area', $model->Area)}}">
                            <div class="input-group-append">
                                <a href="javascript:void(0)" class="btn btn-primary" id="SearchAddress" ><i class="fa fa-search"></i> </a>
                            </div>
                        </div>

                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="Address" id="Address" value="{{old('Address', $model->Address)}}"/>
                    </div>
                    <div class="form-group">
                        <label class="form-control-plaintext">Capacity</label>
                        <input type="number" class="form-control" name="Capacity" value="{{ old('Capacity', $model->Capacity) }}"/>
                    </div>

                    <div class="form-group">
                        <label class="form-control-plaintext">Length</label>
                        <input type="number" class="form-control" name="Length" value="{{ old('Length', $model->Length) }}"/>
                    </div>
                </div>

                <div class="form-group">
                    <div class="blockTitle">
                        <label  class="form-control-plaintext ">Activity</label>
                    </div>
                </div>
                <div class="p-2 bg-white">

                    <div class="form-group row">
                        <div class="col-sm-3">
                            <label class="form-control-plaintext"><span class="text-danger">*</span> Start activity</label>
                            <input type="text" class="form-control" name="activity[StartTime]" id="startTime" value="{{ old('activity.StartTime',$activity->StartTime)}}"/>
                        </div>
                        <div class="col-sm-3">
                            <label class="form-control-plaintext" ><span class="text-danger">*</span> End activity</label>
                            <input type="text" class="form-control" name="activity[EndTime]" id="endTime" value="{{ is_null($activity) ? '': $activity->EndTime}}"/>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-check-inline allDay">
                                <input type="checkbox" class="form-check-input" name="activity[IsAllDay]" id="activity[IsAllDay]" >
                                <label class="form-check-label" for="activity[IsAllDay]">All day</label>
                            </div>
                        </div>

                    </div>
                    <div class="form-group row">
                    <div class="col-sm-4">
                        <label class="form-control-plaintext"  for="activity[Regularity]"><span class="text-danger">*</span> Regularity</label>
                        <select class="form-control"  id="regularity" name="activity[Regularity]" value="{{ is_null($activity) ? '': $activity->Regularity}}">
                            <option value="{{ \App\Common\Enums\ScheduleFrequency::Regular }}">Regular</option>
                            <option value="{{ \App\Common\Enums\ScheduleFrequency::Weekdays }}">Weekdays</option>
                            <option value="{{ \App\Common\Enums\ScheduleFrequency::Weekends }}">Weekends</option>
                            <option value="{{ \App\Common\Enums\ScheduleFrequency::ByDay }}">By days</option>
                        </select>


                    </div>

                    <div class="col-sm-8">
                        <div class="allDay hide" id="days">
                            <div class="form-check-inline">
                                <input type="checkbox" class="form-check-input" name="activity[ByDay][1]" id="activity[ByDay][1]" >
                                <label class="form-check-label" for="activity[ByDay][1]">Monday</label>
                            </div>
                            <div class="form-check-inline">
                                <input type="checkbox" class="form-check-input" name="activity[ByDay][2]" id="activity[ByDay][2]" >
                                <label class="form-check-label" for="activity[ByDay][2]">Tuesday</label>
                            </div>

                            <div class="form-check-inline">
                                <input type="checkbox" class="form-check-input" name="activity[ByDay][3]" id="activity[ByDay][3]" >
                                <label class="form-check-label" for="activity[ByDay][3]">Wednesday</label>
                            </div>

                            <div class="form-check-inline">
                                <input type="checkbox" class="form-check-input" name="activity[ByDay][4]" id="activity[ByDay][4]" >
                                <label class="form-check-label" for="activity[ByDay][4]">Thursday</label>
                            </div>

                            <div class="form-check-inline">
                                <input type="checkbox" class="form-check-input" name="activity[ByDay][5]" id="activity[ByDay][5]" >
                                <label class="form-check-label" for="activity[ByDay][5]">Friday</label>
                            </div>

                            <div class="form-check-inline">
                                <input type="checkbox" class="form-check-input" name="activity[ByDay][6]" id="activity[ByDay][6]" >
                                <label class="form-check-label" for="activity[ByDay][6]">Saturday</label>
                            </div>

                            <div class="form-check-inline">
                                <input type="checkbox" class="form-check-input" name="activity[ByDay][7]" id="activity[ByDay][7]">
                                <label class="form-check-label" for="activity[ByDay][7]">Sunday</label>
                            </div>
                        </div>

                    </div>


                </div>
                </div>

                <div class="form-group">
                    <div class="checkbox blockTitle">

                        <input type="checkbox" class="form-check-input" id="IsSchedule"/>
                        <label for="IsSchedule" class="form-check-label ">Temporary schedule</label>

                    </div>
                </div>

                <div class="p-2 bg-white">

                    <div class="form-group row" id="schedule">

                        <div class="col-sm-4">

                            <label class="form-control-plaintext">Start date</label>
                            <input type="text" class="form-control" name="schedule[StartDate]" id="startDate"/>
                        </div>
                        <div class="col-sm-4">
                            <label class="form-control-plaintext" >End date</label>
                            <input type="text" class="form-control" name="schedule[EndDate]" id="endDate"/>
                        </div>
                        <div class="col-sm-4">
                            <label class="form-control-plaintext" >Type</label>
                            <div class="form-check-inline">

                                <select class="form-control" name="schedule[IsActive]">
                                    <option>Active</option>
                                    <option>Inactive</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Save"/>
                </div>


            </form>
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
    </div>

@endsection

@section('scripts')
    <script>
        $('.input-images').imageUploader();
        let preloaded = [
            {id: 1, src: 'https://picsum.photos/500/500?random=1'},
            {id: 2, src: 'https://picsum.photos/500/500?random=2'},
            {id: 3, src: 'https://picsum.photos/500/500?random=3'},
            {id: 4, src: 'https://picsum.photos/500/500?random=4'},
            {id: 5, src: 'https://picsum.photos/500/500?random=5'},
            {id: 6, src: 'https://picsum.photos/500/500?random=6'},
        ];

        $('.input-images-2').imageUploader({
            preloaded: preloaded,
            imagesInputName: 'photos',
            preloadedInputName: 'old'
        });
    </script>
    <script>
        var $startTime = $('#startTime').timepicker({
            format: 'HH:MM',
            mode: '24hr'
        });
        var $endTime = $('#endTime').timepicker({
            format: 'HH:MM',
            mode: '24hr'
        });

        var $startDate = $('#startDate').datepicker({
            format: 'mm/dd/yyyy',

        })

        var $endDate = $('#endDate').datepicker({
            format: 'mm/dd/yyyy',

        })

        $('#startTime').mask('99:99');
        $('#endTime').mask('99:99');

        // $('#startTime').click(function(){
        //     $startTime.open();
        // });
        //
        // $('#endTime').click(function(){
        //     $endTime.open();
        // });

        $('#startDate').click(function(){
            $startDate.open();
        });

        $('#endDate').click(function(){
            $endDate.open();
        });

    </script>
    <script>
        $(document).ready(function(){
            $("#regularity").on('change', function(){
                if($(this).val() === "{{\App\Common\Enums\ScheduleFrequency::ByDay}}"){
                    $('#days').attr("class","allDay");
                }else{
                    $('#days').attr("class","allDay hide");
                }
            });

            $('#schedule').hide();

            $('#IsSchedule').on('change', function(){
                if(this.checked)
                {
                    $('#schedule').show();
                }else{
                    $('#schedule').hide();

                }
            });
        });
    </script>

    <script src="//t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>
    <script>
        // Search for an address
        // var element_wrap = document.getElementById('wrap');
        //
        // function foldDaumPostcode() {
        //     //Make the element containing the iframe invisible.
        //     element_wrap.style.display = 'none';
        // }
        $(document).ready(function(){
            $('#SearchAddress').click(function(){
                // 현재 scroll 위치를 저장해놓는다.
                var currentScroll = Math.max(document.body.scrollTop, document.documentElement.scrollTop);
                var addWindow = new daum.Postcode({

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
                            $('#Area').val(extraAddr);
                            //document.getElementById("addr1").value = extraAddr;
                            //document.getElementById("addr2").value = '';

                        } else {
                            $('#Area').val('');
                            //document.getElementById("addr1").value = '';
                            //document.getElementById("addr2").value = '';
                        }

                        // 우편번호와 주소 정보를 해당 필드에 넣는다.
                        //document.getElementById('sample3_postcode').value = data.zonecode;
                        $('#Area').val(addr);
                        $('#Address').focus();

                        //document.getElementById("addr1").value = addr;
                        // 커서를 상세주소 필드로 이동한다.

                        //document.getElementById("addr2").focus();

                        // iframe을 넣은 element를 안보이게 한다.
                        // (autoClose:false 기능을 이용한다면, 아래 코드를 제거해야 화면에서 사라지지 않는다.)


                        // 우편번호 찾기 화면이 보이기 이전으로 scroll 위치를 되돌린다.



                    },
                    // 우편번호 찾기 화면 크기가 조정되었을때 실행할 코드를 작성하는 부분. iframe을 넣은 element의 높이값을 조정한다.
                    // onresize : function(size) {
                    //     element_wrap.style.height = size.height+'px';
                    // },
                    // width : '100%',
                    // height : '100%'
                }).open({
                    autoClose:true

                });


                // iframe을 넣은 element를 보이게 한다.
                //element_wrap.style.display = 'block';
            });
        });




    </script>
@endsection
