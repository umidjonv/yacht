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
        <a href="{{route('admin.event.create')}}" class="btn btn-primary float-right">@lang('admin.event_add')</a>
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
        @foreach($model as $event)
            @php
                $image = $event->images()->first();
                $name = "";

            @endphp
            @if($image!=null)
                @php
                    $name = url('/storage/events/'.$event->images()->first()->Name);
                @endphp
            @endif
        <tr>
            <td>{{$event->Id}}</td>
            <td>@if($name!="")<img class="img-thumbnail img-list-thumb" src="{{$name}}" /> @endif</td>
            <td>{{$event->Title}}</td>
            <td>{{$event->ShortDescription}}</td>

            <td>{{$event->EventDate}}</td>
            <td>
                <a href="javascript:void(0)" class="btn btn-info"><span class="fa fa-paperclip" onclick="attachToBanner({{$event->Id}},{{$banner->Id}})"></span></a>
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

            window.attachToBanner = function(eventId, bannerId)
            {
                $.ajax({
                    method:"post",
                    data:{
                        "eventId": eventId,
                        "bannerId":bannerId,
                        "_token":"{{csrf_token()}}"

                    },
                    url:"{{url('admin/banner/attach')}}",
                    success:function(data){
                        if(data == "success") {
                            window.location = "{{route('admin.banner')}}"
                            console.log('attached')
                        }else{
                            console.log(data)
                        }


                    },
                    error:function(xhr){
                        console.log(xhr.error);

                    }
                });
            };


        });
    </script>

    @include('components.table')
@endsection