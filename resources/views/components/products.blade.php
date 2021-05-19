@foreach($model as $item)
    <!-- list_cell -->
    <div class="w_100 flx_lft pdg_b10 pdg_t15 line_bt01">
        <!-- thumbnail -->
        <div style="width:112px;">
            <div class="thumb_01 flx_c">
                <img src="{{asset('mobile/client/images/pic/review_01.png')}}" alt="" onclick="location.href='{{route('client.mobile.product.view', ['Id' => $item->Id])}}'" />
                <!-- pick -->
                <div class="up_bt02_wrap">
                    <div class="up_bt02 js_btn_toggle on">
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
                    feet: {{$item->yacht()->first()->Length}}  / seats: {{$item->CapacityAdult}}(adults)-{{$item->CapacityChild}}(childs)
                </div>
            </div>
            <div class="flx_side_m">
                <div class="flx_lft_b">
                    <div class="star_icon on">
                    </div>
                    <div class="jcr_grey2 jm_tsss2 j_bold" style="width:25px;">
                        4.2
                    </div>
                    <div class="comment">
                    </div>
                    <div class="jcr_grey2 jm_tsss2 j_bold">
                        999
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