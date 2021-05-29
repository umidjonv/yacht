@extends('admin.index')

@section('styles')
<style>

</style>
@endsection

@section('content')
<div class="row">
    <div class="col">
        <h2>@lang('admin.banner_list') </h2>
    </div>
    <div class="pull-right">
        <a href="{{route('admin.banner.edit')}}" class="btn btn-primary float-right">@lang('admin.banner_change')</a>
    </div>
</div>
<div class="mt-5">
    <form action="{{route('admin.banner.update')}}" method="post">
        {{csrf_field()}}
    <table class="table table-hover" id="main_table">
        <thead>
        <tr>
            <th>#</th>
            <th>@lang('admin.banner_image')</th>
            <th>@lang('admin.banner_order')</th>
{{--            <th>@lang('admin.banner_event')</th>--}}

        </tr>
        </thead>
        <tbody>
        @foreach($model as $banner)
            @php
                $image = $banner->Image;
                $name = url('/storage/banners/'.$image);

            @endphp

        <tr>
            <td>{{$banner->Id}}
                <input type="hidden" name="banner{{$banner->Id}}.Id" value="{{$banner->Id}}"/>
            </td>
            <td>@if($name!="")<img class="img-thumbnail img-list-thumb" src="{{$name}}" /> @endif</td>
            <td>

                <input type="number" name="banner{{$banner->Id}}.Order" value="{{$banner->Order}}" class="form-control"/>
            </td>
{{--            <td>{{$banner->EventId}}</td>--}}



        </tr>
        @endforeach
        </tbody>
    </table>
        <br/>
        <button class="btn btn-primary">@lang('admin.banner_save')</button>
    </form>
</div>


@endsection

@section('scripts')



@endsection