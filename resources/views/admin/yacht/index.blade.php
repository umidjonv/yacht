@extends('admin.index')

@section('content')


    <div class="row">
        <div class="col">
            <h2>Yachts </h2>
            <a href="{{route('admin.yacht.add')}}" class="btn btn-primary float-right">Add</a>
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Capacity</th>

                    <th></th>
                    <th></th>

                </tr>
                </thead>
                <tbody>
                @foreach($data as $item)
                    <tr>
                        <td>{{$item->Id}}</td>
                        <td>{{$item->vendor()->first()->CompanyName}}</td>
                        <td>{{$item->Area}} {{$item->Address}}</td>
                        <td>{{$item->Capacity}}</td>
                        <td><a href="{{route('admin.yacht.change', ['id'=>$item->Id])}}" class="btn btn-warning"><span class="fa fa-edit"></span></a> </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
    </div>
@endsection

