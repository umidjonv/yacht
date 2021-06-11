@extends('admin.index')

@section('content')

    <div class="container bootstrap snippet">
        <div class="row">
            <div class="col-sm-10"><h1>@lang('admin.profile')</h1></div>

        </div>
        <div class="row">
            <div class="col-sm-3"><!--left col-->


                <div class="text-center">
                    <img src="{{asset('storage/users/'.auth()->user()->photo) ?? "https://ssl.gstatic.com/accounts/ui/avatar_2x.png"}}"
                         class="avatar img-circle img-thumbnail" alt="avatar">
                    <h6>@lang('admin.upload_photo')</h6>
                    <label for="upload-profile-photo"
                           class="btn btn-outline-info">{{__("profile_upload_photo")}}</label>
                </div>


                {{--                <ul class="list-group">--}}
                {{--                    <li class="list-group-item text-muted">Activity <i class="fa fa-dashboard fa-1x"></i></li>--}}
                {{--                    <li class="list-group-item text-right"><span class="pull-left"><strong>Shares</strong></span> 125</li>--}}
                {{--                    <li class="list-group-item text-right"><span class="pull-left"><strong>Likes</strong></span> 13</li>--}}
                {{--                    <li class="list-group-item text-right"><span class="pull-left"><strong>Posts</strong></span> 37</li>--}}
                {{--                    <li class="list-group-item text-right"><span class="pull-left"><strong>Followers</strong></span> 78</li>--}}
                {{--                </ul>--}}


            </div><!--/col-3-->
            <div class="col-sm-9">

                <div class="tab-content">
                    <div class="tab-pane active" id="home">
                        @include('admin.messages')
                        <hr>
                        <form class="form" action="{{route('admin.profile.update', auth()->user()->id)}}" method="post"
                              id="registrationForm" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <input type="file" class="form-control-file" name="photo"
                                   accept="image/jpeg, image/png, image/jpg" id="upload-profile-photo" hidden/>
                            <input type="hidden" name="_method" value="put">
                            <div class="form-group">
                                <div class="col-xs-6">
                                    <label for="first_name"><h4>@lang('admin.id')</h4></label>
                                    <input type="text" class="form-control" value="{{auth()->user()->name}}" disabled/>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-xs-6">
                                    <label for="mobile"><h4>@lang('admin.contact')</h4></label>
                                    <input type="text" class="form-control" name="contact" id="mobile"
                                           placeholder="enter mobile number" value="{{auth()->user()->contact}}">
                                </div>
                            </div>
                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="email"><h4>@lang('admin.email')</h4></label>
                                    <input type="email" class="form-control" name="email" id="email"
                                           placeholder="you@email.com" value="{{auth()->user()->email}}">
                                </div>
                            </div>

                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="password"><h4>@lang('admin.old_password')</h4></label>
                                    <input type="password" class="form-control" name="old_password" id="old_password"
                                           placeholder="{{__("old_password")}}">
                                </div>
                            </div>

                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="password"><h4>@lang('admin.password')</h4></label>
                                    <input type="password" class="form-control" name="password" id="password"
                                           placeholder="password">
                                </div>
                            </div>
                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="password2"><h4>@lang('admin.repassword')</h4></label>
                                    <input type="password" class="form-control" name="password_confirmation"
                                           id="password2" placeholder="password2" title="enter your password2.">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <br>
                                    <button class="btn btn-lg btn-success" type="submit"><i
                                                class="glyphicon glyphicon-ok-sign"></i> @lang('admin.save')</button>

                                </div>
                            </div>
                        </form>

                        <hr>

                    </div><!--/tab-pane-->


                </div><!--/tab-pane-->
            </div><!--/tab-content-->

        </div><!--/col-9-->
    </div>



@endsection

@section('scripts')
    <script>
        $(function () {
            var thumbnail = $(".img-thumbnail");
            var defaultPhoto = thumbnail.attr('src');
            $(document).on('change', '#upload-profile-photo', function () {
                let thisElem = $(this);
                let file = thisElem[0].files;
                if (file.length !== 0) {
                    thumbnail.attr('src', URL.createObjectURL(file[0]));
                } else {
                    thumbnail.attr('src', defaultPhoto);
                }
            });
        });
    </script>

@endsection
