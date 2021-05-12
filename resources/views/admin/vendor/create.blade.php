@extends('admin.index')

@section('content')


<div class="row">
    <div class="col">
        <a href="{{URL::route('vendor')}}" class="btn btn-dark float-right">Back</a>
    </div>
</div>
<br/>
    <div class="row">
        <div class="col">
            <form method="POST" action="/profile">
                @csrf

            </form>

        </div>
    </div>

@endsection

