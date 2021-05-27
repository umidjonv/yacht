@extends('admin.index')

@section('header_styles')
<link rel="stylesheet" href="{{asset('libs/datatables/jquery.dataTables.css')}}"/>
@endsection

@section('content')
<div class="row">
    <div class="col">
        <h2>Events </h2>
    </div>
    <div class="pull-right">
        <a href="{{route('admin.event.create')}}" class="btn btn-primary float-right">Add</a>
    </div>
</div>
<div class="mt-5">
    <table class="table table-hover" id="main_table">
        <thead>
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>Short description</th>
            <th>Description</th>
            <th>Event date</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($events as $event)
        <tr>
            <td>{{$event->Id}}</td>
            <td>{{$event->Title}}</td>
            <td>{{$event->ShortDescription}}</td>
            <td>{{$event->Description}}</td>
            <td>{{$event->EventDate}}</td>
            <td>
                <a href="{{route('admin.event.edit', $event->Id)}}" class="btn btn-warning"><span class="fa fa-edit"></span></a>
                <a href="Javascript:void(0)" class="btn btn-warning" onclick="attach_yacht({{$event->Id}});"><span class="fa fa-ship"></span></a>
{{--                <a href="{{route('admin.event.destroy', $event->id)}}" class="btn btn-danger"><span class="fa fa-trash"></span></a>--}}
            </td>

        </tr>
        @endforeach
        </tbody>
    </table>
</div>


@endsection

@section('scripts')
    <script src="{{asset('libs/datatables/jquery.dataTables.js')}}"></script>
    <script>
        $(document).ready(function(){


        });
    </script>

    @include('components.search')
@endsection