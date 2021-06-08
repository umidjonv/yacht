@extends("admin.layouts.mobile")
@section("content")
    <div class="jbg_grey4" style="position:relative; min-height:100%; padding-bottom:20px;">

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
        <div class="jbg_wht pdg_s20 pdg_tb15">
            <!-- input -->
            <div class="w_100 flx_side_b">
                <div class="pdg_r10" style="width:calc(100% - 80px);">
                    <div class="flx_lft_m login_border flx_side_m" style="height:43px;">
                        <div class="jm_tss1 jcr_grey3 j_bold">
                            요트정보 <font class="jcr_red1 jm_ts1 j_bold">{{count($yachts)}}</font>건
                        </div>
                    </div>
                </div>
                <div style="width:80px;">
                    <!-- button -->
                    <div class="flx_c jbg_btn01 jm_tsss2 jcr_wht j_bold j_rd04" style="height: 43px"
                         onclick="location.href='{{route("admin.mobile.yacht.register")}}'">
                        등록
                    </div>
                    <!--// button -->
                </div>
            </div>
            <!-- // input -->
        </div>
        <!-- // Section -->
        <!-- Section -->
        <div class="pdg_s05 mgn_t20">
        @foreach($yachts as $yacht)
            <!-- List -->
                <!-- List_cell -->
                <div class="jbg_wht pdg_s15 pdg_t10 pdg_b20 mgn_b05 j_rd08">
                    <div class="flx_side">
                        <div style="width:calc(100% - 80px);">
                            <div class="pdg_t10 flx_lft">
                                @if(!empty($yacht->Images->toArray()))
                                <!-- thumbnail -->
                                <div class="pdg_t03" style="width:84px;">
                                    <div class="thumb_02 flx_c">
                                        <img src="{{asset("storage/yachts/".$yacht->Images[0]->Name)}}" alt=""/>
                                    </div>
                                </div>
                                <!-- // thumbnail -->
                                @endif
                                <div class="pdg_l10">
                                    <div class="cut_2 mgn_b10 jm_tss2 j_bold">
                                        {{$yacht->Name}}
                                    </div>
                                    <div class="jm_tss1 jcr_grey1">
                                        {{$yacht->Area}} {{$yacht->Address}}
                                    </div>
                                    <div class="jm_tss1 jcr_grey1">
                                        {{$yacht->Capacity}}인승, {{$yacht->Length}}pt
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flx_dn mgn_t10" style="margin-left:auto;">
                            <!-- button -->
                            <div class="mgn_b10 bt_sml02_wht" style="width:60px;"
                                 onclick="location.href='{{route("admin.mobile.yacht.edit", $yacht->Id)}}'">
                                수정
                            </div>
                            <!--// button -->
                            <!-- button -->
                            <div class="bt_sml02_blu" style="width:60px;">
                                삭제
                            </div>
                            <!--// button -->
                        </div>
                    </div>
                </div>
                <!-- // List_cell -->
                <!-- List_cell -->
            @endforeach
        </div>
        <!-- // Section -->
    </div>
@endsection