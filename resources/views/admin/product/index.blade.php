@extends('admin.index')

@section('content')

    <div class="row">
        <div class="col">

            <h2>Product management</h2>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Division</th>
                        <th>Displayed</th>
                        <th>Capacity adult/child</th>
                        <th>Description</th>
                        <th>Price adult</th>
                        <th>Price child</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($model as $item)
                        <tr>
                            <td>{{$item->Id}}</td>
                            <td>{{$item->Name}}</td>
                            <td>{{(new \App\Common\Enums\YachtDivision())->Name($item->Division)}}</td>
                            <td>{{$item->Displayed}}</td>
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
        $(document).ready(function(){
            window.activateConfirm = function(itemId)
            {
                Swal.fire({
                    icon: 'warning',
                    text: 'Do you want activate?',
                    showCancelButton: true,
                    confirmButtonText: 'Activate',
                    confirmButtonColor: '#e3342f',
                }).then((result) => {
                    $.ajax({
                        url:'{{url('/admin/vendor/activate')}}/'+itemId,
                        method:'GET'

                    })
                    .done(function(data){
                        if(data.status == {{\App\Common\Enums\ResultStatus::Success}})
                        {
                            window.location.reload();
                        }
                    });
                });
            }
        });

    </script>

@endsection

