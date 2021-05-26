@extends('admin.index')

@section('content')

    <div class="row">
        <div class="col">

            <h2>@lang('admin.pindex_vendor_list_title')</h2>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>@lang('admin.pindex_name')</th>
                        <th>@lang('admin.pindex_representative')</th>
                        <th>@lang('admin.pindex_contact')</th>
                        <th>@lang('admin.pindex_email')</th>
                        <th></th>
                        <th></th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $item)
                        <tr>
                            <td>{{$item->Id}}</td>
                            <td>{{$item->user()->first()->name}}</td>
                            <td>{{$item->CompanyName}}</td>
                            <td>{{$item->Contact}}</td>
                            <td>{{$item->user()->first()->name}}</td>
                            @if(!($item->IsActive))
                                <td><a href="javascript:void(0);" class="btn btn-outline-info" onclick="activateConfirm({{$item->Id}});">@lang('admin.pindex_activate')</a></td>
                            @else
                                <td class="text-success">@lang('admin.pindex_active')</td>
                            @endif
                            <td><a href="{{route('admin.vendor.yachts',['vendorId'=>$item->Id])}}">@lang('admin.pindex_view_yacht')</a> </td>
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
                    text: '@lang('admin.pindex_agree_activate')',
                    showCancelButton: true,
                    confirmButtonText: '@lang('admin.pindex_activate')',
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

