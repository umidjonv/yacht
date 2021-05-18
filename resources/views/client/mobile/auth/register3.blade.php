@extends('client.layouts.mobile')


@section('styles')
@endsection


@section('content')
    <div class="jbg_wht" style="position:relative; min-height:100%; padding-bottom:20px;" onclick="location.href='index.html'">

        <!-- LOGO -->
        <div class="js_align_c" style="padding-top:110px; padding-bottom:40px;">
            <img src="{{asset('mobile/client/images/app_logo.png')}}" width="120px" alt=""/>
        </div>
        <!--// LOGO -->
        <div class="js_align_c">
            <div class="jcr_grey02 jm_tss1 j_bold">

            </div>
            <div class="mgn_t05 jcr_grey02 jm_tss1 j_bold">
                Welcome to Yopple :) Please sign in
            </div>
        </div>

    </div>

@endsection


@section('scripts')

    <script>
        setTimeout(function () {
            window.location = "{{route('client.mobile.index')}}";

        }, 3000)
    </script>

@endsection