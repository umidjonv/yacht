@extends('admin.index')

@section('content')

    <div class="row">
        <div class="col">

            <h2>Yacht owners</h2>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Representative Name</th>
                        <th>Contact</th>
                        <th>Email</th>
                        <th></th>
                        <th></th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $item)
                        <tr>
                            <td>{{$item->Id}}</td>
                            <td>{{$item->Name}}</td>
                            <td>{{$item->CompanyName}}</td>
                            <td>{{$item->Contact}}</td>
                            <td>{{$item->Email}}</td>
                            @if(!($item->IsActive))
                                <td><a href="javascript:void(0);" class="btn btn-outline-info" onclick="activateConfirm({{$item->Id}});">Activate</a></td>
                            @else
                                <td class="text-success">Active</td>
                            @endif
                            <td><a href="{{route('admin.vendor.yachts',['vendorId'=>$item->Id])}}">View yachts</a> </td>
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

