@extends('admin.index')

@section('content')

    <div class="row">
        <div class="col">

            <h2>@lang('admin.reservation_list')</h2>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>@lang('admin.product_name')</th>
                        <th>@lang('admin.date_created')</th>
                        <th>@lang('admin.time')</th>
                        <th>@lang('admin.product_adults')</th>
                        <th>@lang('admin.product_children')</th>
                        <th>@lang('admin.reservation_payment')</th>
                        <th>@lang('admin.reservation_total_amount')</th>
                        <th>@lang('admin.reservation_paid')</th>

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
                            <td>{{$item->IsPayed?__('admin.reservation_paid_yes'):__('admin.reservation_paid_not')}}</td>


{{--                            <td><a href="{{route('admin.reservation.view',['Id'=>$item->Id])}}" class="btn btn-info"><span class="fa fa-eye"></span> </a> </td>--}}
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

