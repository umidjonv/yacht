@extends('admin.index')

@section('content')
    <div class="row">
        <div class="col">
            <a href="{{route('admin.product.add')}}" class="btn btn-primary">@lang('admin.product_reservation_add')</a>
        </div>
    </div>
    <div class="row">
        <div class="col">

            <h2>@lang('admin.product_info')</h2>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>@lang('admin.product_name')</th>
                        <th>@lang('admin.product_division')</th>
                        <th>@lang('admin.product_displayed')</th>
                        <th>@lang('admin.product_capacity')</th>
                        <th>@lang('admin.product_description')</th>
                        <th>@lang('admin.product_adult_price')</th>
                        <th>@lang('admin.product_child_price')</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($model as $item)
                        <tr>
                            <td>{{$item->Id}}</td>
                            <td>{{$item->Name}}</td>
                            <td>{{(new \App\Common\Enums\YachtDivision())->Name($item->Division)}}</td>
                            <td>@if($item->IsDisplayed)<span class="fa fa-eye"></span>@else <span class="fa fa-eye-slash"></span>@endif </td>
                            <td>{{$item->CapacityAdult}} / {{$item->CapacityChild}}</td>
                            <td>{{$item->PriceAdult}}</td>
                            <td>{{$item->PriceChild}}</td>
                            <td>{{$item->PriceAdult}}</td>

                            <td><a href="{{route('admin.product.edit',['Id'=>$item->Id])}}" class="btn btn-warning"><span class="fa fa-edit"></span> </a> </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>

@endsection

@section('scripts')
    <script type="text/javascript" src="{{ asset('js/sweetalert.min.js') }}"></script>
    <script>


    </script>

@endsection

