@extends('admin.index')

@section('content')


    <div class="modal fade" id="modalPassword" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">@lang('admin.member_change_password')</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form action="{{route('admin.member.change_password')}}" method="post">
                        <div class="form-group">
                            <label class="form-control-plaintext">@lang('admin.password')</label>
                            <input type="password" name="password" class="form-control"/>

                        </div>
                        <div class="form-group">
                            <label class="form-control-plaintext">@lang('admin.retype_password')</label>
                            <input type="repassword" name="password" class="form-control"/>

                        </div>

                    </form>
                </div>
                <div class="modal-footer">

                    <button type="submit" class="btn btn-primary">@lang('admin.save')</button>
                </div>
            </div>
        </div>
    </div>
    <div class="row">

        <div class="col">


            <h2>@lang('admin.member_list')</h2>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>@lang('admin.member_username')</th>
                        <th>@lang('admin.member_membershipstatus')</th>
                        <th>@lang('admin.member_currentpoint')</th>
                        <th>@lang('admin.member_accumpoint')</th>
                        <th>@lang('admin.member_reservpoint')</th>
                        <th>@lang('admin.member_lastvisited')</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($model as $item)
                        <tr>
                            <td>{{$item->Id}}</td>
                            <td>{{$item->user->name}}</td>

                            <td>{{$item->MembershipStatus == true ? 'active':'withdrawal' }}</td>
                            <td>{{$item->CurrentPoint}}</td>
                            <td>{{$item->AccumulatedPoint}}</td>
                            <td>{{$item->ReservationCount}}</td>
                            <td>{{$item->LastVisited}}</td>
                            <td>
                                <a href="javascript:void(0)" class="btn btn-info" onclick="ChangeMemberStatus({{$item->Id}})"><span class="fa fa-eye"></span> </a>
                                <a href="javascript:void(0)" class="btn btn-info" name="passwordBtn" data-password-id="{{$item->Id}}"><span class="fa fa-key"></span> </a>
                            </td>

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
            window.ChangeMemberStatus = function(itemId)
            {
                Swal.fire({
                    icon: 'warning',
                    text: '@lang('admin.change_member_status')',
                    showCancelButton: true,
                    confirmButtonText: '@lang('admin.change_member_status_title')',
                    confirmButtonColor: '#e3342f',
                }).then((result) => {
                    $.ajax({
                        url:'{{url('/admin/member/activate')}}/'+itemId,
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

            $('[name="passwordBtn"]').click(function()
            {
                $('#modalPassword').modal('show');
            });
        });

    </script>

@endsection

