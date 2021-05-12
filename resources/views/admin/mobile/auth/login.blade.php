@extends('admin.layouts.mobile')

@section('content')
    <form action="{{route('admin.mobile.login.attempt')}}"  method="post">
        {{csrf_field()}}
<div class="jbg_wht" style="position:relative; min-height:100%; padding-bottom:80px;">

    <div class="pdg_s30" style="padding:20% 0 10%;">
        <div class="flx_c jm_ts5 jcr_grey2 j_bold">
            Admin Login
        </div>
    </div>
    <!-- Section -->
    <div class="pdg_s20">
        <!-- input -->
        <div class="pdg_b10">
            <div class="login_border" style="width:100%;">
                <input class="w_100 js_input00" name="name" placeholder="Please enter your ID" type="text">
            </div>
        </div>
        <!-- // input -->
        <!-- input -->
        <div>
            <div class="login_border" style="width:100%;">
                <input class="w_100 js_input00" name="password" placeholder="Please enter your password" type="password">
            </div>
        </div>
        <!-- // input -->
    </div>
    <br>
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

    <div class="pdg_s20 pdg_t30">
        <!-- button -->
        <input class="flx_c jbg_btn01 jm_tss2 jcr_wht j_bold j_rd04 form-control" style="padding:15px 0;" type="submit" value="LOGIN"/>

        <!--// button -->
    </div>

    <div class="pdg_t30">
        <!-- link -->
        <div class="flx_c">
            <div class="flx_lft">
                <div class="flx_c pdg_s20">
                    <a class="jm_tss1 jcr_grey3" href="#">Find ID/Password</a>
                </div>
            </div>
        </div>
        <!--// link -->
    </div>
</div>
    </form>
@endsection