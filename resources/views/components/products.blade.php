@foreach($model as $item)
    <!-- list_cell -->
    <div class="w_100 flx_lft pdg_b10 pdg_t15 line_bt01">
        <!-- thumbnail -->
        <div style="width:112px;">
            <div class="thumb_01 flx_c">
                @php
                    $user= auth()->user();
                    $yacht = $item->yacht()->first();
                    $favour = $item->favourite()->where('UserId', $user->id)->first();
                    $image = $yacht->images()->first();
                    $rating = $item->rating()->first();
                @endphp
                <img src=" {{isset($image)?url('/storage/yachts/'.$image->Name):url('/storage/images/yacht.png')}}" alt="" onclick="location.href='{{route('client.mobile.product.view', ['Id' => $item->Id])}}'" />
                <!-- pick -->
                <div class="up_bt02_wrap">
                    <div class="up_bt02 js_btn_toggle {{$favour!=null?"on":""}}" name="favour" data-id="{{$item->Id}}">
                    </div>
                </div>
                <!-- // pick -->
            </div>
        </div>
        <!-- // thumbnail -->
        <!-- info -->
        <div class="pdg_l10 w_100" style="height:120px; display:flex; flex-direction:column; justify-content:space-between; margin:-4px 0;">
            <div style="height:85px;">
                <div class="cut_1 jcr_grey2 jm_tss1 j_bold pdg_b08" onclick="location.href='{{route('client.mobile.product.view', ['Id' => $item->Id])}}'">
                    {{$item->Name}}
                </div>
                <div class="cut_2 jcr_grey9 jm_tsss2 lh_15" style="height:36px; overflow:hidden;">
                    {{$item->Introduction}}
                </div>
                <div class="jcr_grey9 jm_tsss2 pdg_t05">
                    @lang('component.product_feet'): {{$item->yacht()->first()->Length}}  / @lang('component.product_seats'): {{$item->CapacityAdult}}(@lang('component.product_adults'))-{{$item->CapacityChild}}(@lang('component.product_childs'))
                </div>
            </div>
            <div class="flx_side_m">
                <div class="flx_lft_b">
                    <div class="star_icon on">
                    </div>
                    <div class="jcr_grey2 jm_tsss2 j_bold" style="width:25px;">
                        @if(isset($rating))
                            {{$rating->Rating}}
                        @else
                            0
                        @endif

                    </div>
                    <div class="comment">
                    </div>

                </div>
                <div class="js_money02">
                    {{$item->Price}}
                </div>
            </div>
        </div>
        <!-- // info -->
    </div>
    <!-- // list_cell -->
@endforeach

@section('scripts')
<script>

    $('[name="favour"]').click(function(){

       var classValue = $(this).attr('class');
       var elementId = $(this).attr("data-id");

       var urlAjax = "{{url('client/mobile/product/favourite')}}/"+elementId;

       if(classValue === "up_bt02 js_btn_toggle on")
       {
           urlAjax = "{{url('client/mobile/product/favourite/remove')}}/"+elementId;
       }

       $.ajax({
           url:urlAjax,
           method:'get',
           success:function(data){
               console.log(data);
           },
           error:function(error){


               console.log(JSON.parse(error));
           }

       });
    });

</script>
@endsection