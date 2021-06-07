@extends('client.layouts.mobile')


@section('styles')
    <link href="{{asset('libs/summernote/summernote.css')}}" rel="stylesheet"/>
@endsection


@section('content')
    <div class="jbg_wht" style="position:relative; min-height:100%; padding-bottom:70px;">
        <!-- header -->
        <header id="header">
            <div class="jbg_wht flx_side line_bt01">
                <div class="flx_lft_m" style="width:65px; height:60px;">
                    <div class=" pdg_l15" onclick="location.href='{{route('client.mobile.index')}}'">
                        <img src="{{asset('/mobile/client/images/icon/arrow_back.png')}}" height="20px" alt="" />
                    </div>
                </div>
                <div class="flx_c" style="height:60px;">
                    <div class="jcr_grey2 jm_tss1 j_bold" style="height:17px;">
                        {{$model->Title}}
                    </div>
                </div>
                <div class="flx_rgt_m" style="width:65px; height:60px;">
                    <!-- <div class=" pdg_r10">
                    <img src="../resources/images/icon/share.png" height="20px" alt="" />
                    </div> -->
                    <!-- <div class=" pdg_r15">
                    <img src="../resources/images/icon/heart_big.png" height="20px" alt="" />
                    </div> -->
                </div>
            </div>
        </header>
        <!-- // header -->


        <!-- Specify outermost_margin -->
        <div class="inner-t2">
            <div class="pdg_s15 pdg_t15">
                <div class="jcr_grey2 jm_tsss2 j_bold lh_17">
                    {{$model->ShortDescription}}
                </div>
            </div>
            <!--// Specify outermost_margin -->

            @if(isset($images))
            <!-- Specify outermost_margin -->

            <div class="pdg_s15 pdg_tb15 line_bt04">
                <!-- poster_image -->
                <div style="padding-top:100%; background:#000;">
                    <div class="w_100" style="margin-top:-100%; overflow:hidden;">
                        <div>
                            @foreach($images as $image)
                                <img src="{{asset('/storage/events/').'/'.$image->Name}}" width="100%" alt=""/>
                            @endforeach
                        </div>
                    </div>
                </div>
                <!-- // poster_image -->
            </div>
            @endif

            <div class="pdg_s15 pdg_t15">
                <div class="jcr_grey2 jm_tsss2 j_bold lh_17">

                    <textarea class="summernote">
                        {{$model->Description}}

                    </textarea>

                    <div id="descriptionContent">

                    </div>

                </div>
            </div>

            <!--// Specify outermost_margin -->



            <!-- list -->
            <!-- -->
            <div class="pdg_s15 pdg_t15">
                <div class="flx_side_m pdg_b05">
                    <div class="flx_lft">
                        <div class="jcr_grey9 jm_tsss0">
                            mincho11@****.***
                        </div>
                    </div>
                    <div>
                        <div class="jcr_grey9 jm_tsss0">
                            2020.10.19
                        </div>
                    </div>
                </div>
                <div class="pdg_b15 line_bt01">
                    <div class="jcr_grey2 jm_tsss2 j_bold">
                        Congrats on the expansion :)
                    </div>
                </div>
            </div>
            <!-- // -->
            <!-- -->
            <div class="pdg_s15 pdg_t15">
                <div class="flx_side_m pdg_b05">
                    <div class="flx_lft">
                        <div class="jcr_grey9 jm_tsss0">
                            mincho11@****.***
                        </div>
                    </div>
                    <div>
                        <div class="jcr_grey9 jm_tsss0">
                            2020.10.19
                        </div>
                    </div>
                </div>
                <div class="pdg_b15 line_bt01">
                    <div class="jcr_grey2 jm_tsss2 j_bold">
                        How do I participate in the event?
                    </div>
                </div>
                <div class="pdg_15 jbg_grey01">
                    <div class="pdg_r15 jcr_grey9 jm_tsss0 j_bold">
                        manager
                    </div>
                    <div class="jcr_grey2 jm_tsss2 j_bold pdg_t10 lh_17">
                        Hello, if you wish to participate in the event, please use the email address shown in the image.
                    </div>
                </div>
            </div>
            <!-- // -->
            <!-- -->
            <div class="pdg_s15 pdg_t15">
                <div class="flx_side_m pdg_b05">
                    <div class="flx_lft">
                        <div class="jcr_grey9 jm_tsss0">
                            mincho11@****.***
                        </div>
                    </div>
                    <div>
                        <div class="jcr_grey9 jm_tsss0">
                            2020.10.19
                        </div>
                    </div>
                </div>
                <div class="pdg_b15 line_bt01">
                    <div class="jcr_grey2 jm_tsss2 j_bold">
                        Congrats on the expansion :)
                    </div>
                </div>
            </div>
            <!-- // -->
            <!-- -->
            <div class="pdg_s15 pdg_t15">
                <div class="flx_side_m pdg_b05">
                    <div class="flx_lft">
                        <div class="jcr_grey9 jm_tsss0">
                            mincho11@****.***
                        </div>
                    </div>
                    <div>
                        <div class="jcr_grey9 jm_tsss0">
                            2020.10.19
                        </div>
                    </div>
                </div>
                <div class="pdg_b15 line_bt01">
                    <div class="jcr_grey2 jm_tsss2 j_bold">
                        Congrats on the expansion :)
                    </div>
                </div>
            </div>
            <!-- // -->
            <!-- -->
            <div class="pdg_s15 pdg_t15">
                <div class="flx_side_m pdg_b05">
                    <div class="flx_lft">
                        <div class="jcr_grey9 jm_tsss0">
                            mincho11@****.***
                        </div>
                    </div>
                    <div>
                        <div class="jcr_grey9 jm_tsss0">
                            2020.10.19
                        </div>
                    </div>
                </div>
                <div class="pdg_b15 line_bt01">
                    <div class="jcr_grey2 jm_tsss2 j_bold">
                        Congrats on the expansion :)
                    </div>
                </div>
            </div>
            <!-- // -->
            <!-- -->
            <div class="pdg_s15 pdg_t15">
                <div class="flx_side_m pdg_b05">
                    <div class="flx_lft">
                        <div class="jcr_grey9 jm_tsss0">
                            mincho11@****.***
                        </div>
                    </div>
                    <div>
                        <div class="jcr_grey9 jm_tsss0">
                            2020.10.19
                        </div>
                    </div>
                </div>
                <div class="pdg_b15 line_bt01">
                    <div class="jcr_grey2 jm_tsss2 j_bold">
                        Congrats on the expansion :)
                    </div>
                </div>
            </div>
            <!-- // -->
            <!-- -->
            <div class="pdg_s15 pdg_t15">
                <div class="flx_side_m pdg_b05">
                    <div class="flx_lft">
                        <div class="jcr_grey9 jm_tsss0">
                            mincho11@****.***
                        </div>
                    </div>
                    <div>
                        <div class="jcr_grey9 jm_tsss0">
                            2020.10.19
                        </div>
                    </div>
                </div>
                <div class="pdg_b15 line_bt01">
                    <div class="jcr_grey2 jm_tsss2 j_bold">
                        Congrats on the expansion :)
                    </div>
                </div>
            </div>
        </div>
        <!-- // -->
        <!-- // list --><!-- fixed Bottom Button -->
        <div class="btm_bt_wrap">
            <!-- button -->
            <div class="jbg_grey01" style="position: fixed;bottom: 0;left: 0;width: 100%; padding:3px 15px 8px;">
                <div class="flx_side_b">
                    <div class="pdg_r10" style="width:calc(100% - 80px);">
                        <fieldset class="login_border">
                            <legend class="jm_tsss0 jcr_grey9" style="width:0px; padding:0 0; height:15px;" ></legend>
                            <input class="w_100 js_input00" name="" placeholder="" type="txt">
                        </fieldset>
                    </div>
                    <div style="width:80px;">
                        <!-- button -->
                        <div class="flx_c jbg_ylw jm_tsss2 jcr_wht j_bold" style="padding:13px 0; border-radius:0px;">
                            input
                        </div>
                        <!--// button -->
                    </div>
                </div>
            </div>
            <!--// button -->
        </div>
        <!-- // fixed Bottom Button -->

    </div>
@endsection


@section('scripts')

    <script src="{{asset('libs/summernote/summernote.min.js')}}"></script>
    <script>

        var content = "{{$model->Description}}";
        $(document).ready(function(){
            $('.summernote').summernote({
                toolbar:[],
                airMode:true,
                air: [
                    ['picture', []],
                    ['color', []],
                    ['font', []]
                ]
            });


        });


    </script>
@endsection