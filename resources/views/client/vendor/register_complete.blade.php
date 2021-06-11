@extends('client.layouts.layout')

@section('content')
    <div class="row">
        <div class="col-12 text-center">
            <h2 class="alert alert-success">@lang('admin.register_vendor_complete')</h2>
        </div>

    </div>

@endsection

@section('scripts')
    <script>
        setTimeout(function(){
            window.location = "{{url("login/")}}";
        },3000 );


    </script>
@endsection
