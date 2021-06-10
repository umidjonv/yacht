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

                    <form action="{{route('admin.member.change_password')}}" method="post" id="change_password_form">
                        <input type="hidden" name="user_id"/>
                        {{csrf_field()}}

                        <div class="form-group">
                            <label class="form-control-plaintext">@lang('admin.password')</label>
                            <input type="password" name="password" class="form-control"/>

                        </div>
                        <div class="form-group">
                            <label class="form-control-plaintext">@lang('admin.retype_password')</label>
                            <input type="password" name="repassword" class="form-control"/>

                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <a href="javascript:void(0)"  class="btn btn-primary" id="change_password">@lang('admin.save')</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">

        <div class="col">
            @foreach($errors->all() as $error)
                <span class="text-danger">- {{$error}}</span>
            @endforeach


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
                                <a href="javascript:void(0)" class="btn btn-info" onclick="ChangeMemberStatus({{$item->Id}}, {{$item->MembershipStatus}})"><span class="fa fa-eye"></span> </a>
                                <a href="javascript:void(0)" class="btn btn-info" name="passwordBtn" data-password-id="{{$item->user()->first()->id}}"><span class="fa fa-key"></span> </a>
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
            window.ChangeMemberStatus = function(itemId, status)
            {
                var url = '{{url('/admin/member/activate')}}/'+itemId;
                var message = '@lang('admin.change_member_status_activate')';

                if(status == 1)
                {
                    url = '{{url('/admin/member/deactivate')}}/'+itemId;
                    message = '@lang('admin.change_member_status_deactivate')';
                }

                Swal.fire({
                    icon: 'warning',
                    text: '@lang('admin.change_member_status')',
                    showCancelButton: true,
                    confirmButtonText: message,
                    confirmButtonColor: '#e3342f',
                }).then((result) => {


                    $.ajax({

                        url:url,
                        method:'GET'

                    })
                    .done(function(data){
                        if(data == {{\App\Common\Enums\ResultStatus::Success}})
                        {
                            window.location.reload();
                        }
                    });
                });
            }

            $('[name="passwordBtn"]').click(function()
            {
                var id = $(this).attr('data-password-id');
                $('#modalPassword').modal('show');
                $('[name="user_id"]').val(id);
            });

            $('#change_password').click(function(){
                $('#change_password_form').submit();
            });
        });

    </script>

@endsection

