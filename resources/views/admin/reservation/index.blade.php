@extends('admin.index')

@section('content')

    <div class="row">
        <div class="col">

            <h2>Reservation list</h2>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Product name</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Adults</th>
                        <th>Childs</th>
                        <th>Payment Amount</th>
                        <th>Total Amount</th>
                        <th>Payed or not</th>

                        <th></th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($model as $item)
                        <tr>
                            <td>{{$item->Id}}</td>
                            <td>{{$item->product()->first()->Name}}</td>
                            <td>{{$item->ReservationDate}}</td>
                            <td>{{$item->ReservationTime}}</td>
                            <td>{{$item->Adults}}</td>
                            <td>{{$item->Childs}}</td>
                            <td>{{$item->PaymentAmount}}</td>
                            <td>{{$item->TotalAmount}}</td>
                            <td>{{$item->IsPayed?"Payed":"Not payed"}}</td>


                            <td><a href="{{route('admin.reservation.view',['Id'=>$item->Id])}}" class="btn btn-info"><span class="fa fa-eye"></span> </a> </td>
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

