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
            <th>@lang('admin.banner_event')</th>

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
            <td> @if(isset($banner->EventId))
                <a href="{{route('admin.banner.events', ['id'=>$banner->Id])}}" class="btn btn-secondary"><span class="fa fa-blog"></span>
                    @lang('admin.banner_attached')
                </a>
                    <a href="{{route('admin.event.edit', ['event'=>$banner->EventId])}}" class="btn btn-secondary">
                        @php
                            $title = $banner->event()->first()->Title;
                            $title = strlen($title) > 30 ? substr($title,0,30)."..." : $title;
                        @endphp
                        {{$title}}

                    </a>
                    <a href="{{route('admin.banner.event_detach', ['id'=>$banner->Id])}}" class="btn btn-danger"><span class="fa fa-close"></span>
                        @lang('admin.banner_detach')
                    </a>


                @else
                    <a href="{{route('admin.banner.events', ['id'=>$banner->Id])}}" class="btn btn-outline-secondary"><span class="fa fa-blog"></span>
                        @lang('admin.banner_select_event')
                    </a>

                @endif
            </td>



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