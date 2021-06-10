@extends('client.layouts.layout')
@section('styles')
    <style>
        .panel-heading{
            font-size: x-large;
            text-align: center;
        }
        .panel {
            background: white;
        }

    </style>
@endsection



@section('content')
<div class="col-md-12 d-flex justify-content-center">
            <div class="panel panel-default p-4 rounded">
                <label class="h4">@lang('auth.login_title')</label>
                <div class="float-right">
                    <a class="btn btn-link" href="{{ route('vendor_register') }}">
                        @lang('admin.register_company')
                    </a>
                </div>

                <div class="panel-body justify-content-center">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="control-label">@lang('auth.email')</label>


                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="control-label">@lang('auth.password')</label>


                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif

                        </div>

                        <div class="form-group">
                            <div class="col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> @lang('auth.remember')
                                    </label>
                                </div>
                            </div>

                        </div>

                        <div class="form-group">
                            <div class="col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    @lang('auth.login_title')
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    @lang('auth.forgot_password')?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
</div>
@endsection
