@extends('admin.index')

@section('styles')
<style>

</style>
@endsection

@section('content')
<div class="row">
    <div class="col">
        <h2>Events </h2>
    </div>
    <div class="pull-right">
        <a href="javascript:void(0)" class="btn btn-primary float-right">@lang('admin.event_add')</a>
    </div>
</div>
<div class="mt-5">
    <table class="table table-hover" id="main_table">
        <thead>
        <tr>
            <th>#</th>
            <th>@lang('admin.event_image')</th>
            <th>@lang('admin.event_title')</th>
            <th>@lang('admin.event_short_description')</th>
            <th>@lang('admin.event_date')</th>
            <th>@lang('admin.event_actions')</th>
        </tr>
        </thead>
        <tbody>
        @foreach($model as $item)

            <p>
                <a class="text-info" type="button" data-toggle="collapse" data-target="#collapse{{$item->Id}}" aria-expanded="false" aria-controls="collapseExample">
                    {{$item->Title}}
                </a>
            </p>
            <div class="collapse" id="collapse{{$item->Id}}">
                @php

                @endphp

                <div class="card card-body">


                </div>
                <div class="card card-body">


                </div>
            </div>
        @endforeach
        </tbody>
    </table>
</div>


@endsection

@section('scripts')

    <script>
        $(document).ready(function(){


        });
    </script>

    @include('components.table')
@endsection