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
        <a href="{{route('admin.banner.edit')}}" class="btn btn-primary float-right">@lang('admin.event_add')</a>
    </div>
</div>
<div class="mt-5">
    <table class="table table-hover" id="main_table">
        <thead>
        <tr>
            <th>#</th>
            <th>@lang('admin.banner_image')</th>
            <th>@lang('admin.banner_order')</th>
            <th>@lang('admin.banner_event')</th>

        </tr>
        </thead>
        <tbody>
        @foreach($model as $banner)
            @php
                $image = $banner->Image;
                $name = url('/storage/banners/'.$banner->Image);

            @endphp

        <tr>
            <td>{{$banner->Id}}</td>
            <td>@if($name!="")<img class="img-thumbnail img-list-thumb" src="{{$name}}" /> @endif</td>
            <td>{{$banner->Order}}</td>
            <td>{{$banner->EventId}}</td>

            <td>
{{--                <a href="{{route('admin.banner.edit', )}}" class="btn btn-warning"><span class="fa fa-edit"></span></a>--}}
{{--                <a href="Javascript:void(0)" class="btn btn-warning" onclick="attach_yacht({{$event->Id}});"><span class="fa fa-ship"></span></a>--}}
{{--                <a href="{{route('admin.event.destroy', $event->id)}}" class="btn btn-danger"><span class="fa fa-trash"></span></a>--}}
            </td>

        </tr>
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