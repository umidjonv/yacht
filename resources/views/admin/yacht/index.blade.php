@extends('admin.index')

@section('content')


    <div class="row">
        <div class="col">
            <h2>@lang('admin.yacht_list')</h2>
            <a href="{{route('admin.yacht.add')}}" class="btn btn-primary float-right">@lang('admin.yacht_add')</a>
            <table class="table table-hover" id="main_table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>@lang('admin.yacht_image')</th>
                    <th>@lang('admin.yacht_name')</th>
                    <th>@lang('admin.yacht_company')</th>
                    <th>@lang('admin.yacht_address')</th>
                    <th>@lang('admin.yacht_capacity')</th>

                    <th></th>


                </tr>
                </thead>
                <tbody>
                @foreach($data as $item)
                    @php
                    $image = $item->images()->first();
                    $name = "";

                    @endphp
                    @if($image!=null)
                        @php
                        $name = url('/storage/yachts/'.$item->images()->first()->Name);
                        @endphp
                        @endif
                    <tr>
                        <td>{{$item->Id}}</td>
                        <td>@if($name!="")<img class="img-thumbnail  img-list-thumb" src="{{$name}}" /> @endif</td>
                        <td>{{$item->Name}}</td>
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

@section('scripts')
    @include('components.table')
@endsection