@extends('client.layouts.layout')

@section('content')
    <div class="row">
        <div class="col-12 text-center">
            <h2 class="alert alert-success">You registered, you will be notified of activation</h2>
        </div>

    </div>

@endsection

@section('scripts')
    <script>
        setTimeout(function(){
            window.location = "{{url("client/")}}";
        },3000 );


    </script>
@endsection
