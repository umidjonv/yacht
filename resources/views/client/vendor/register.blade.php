@extends('client.layouts.layout')

@section('styles')

@endsection

@section('content')
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            <div class="row text-center p-3">
                <h3>입국 신청</h3>
                <hr class="mt-2" align="center" width="100%" size="5" color="#fafafa" />
            </div>
            <form class="form" action="/client/vendor/register/save" method="post">
                {{ csrf_field() }}

                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label class="form-control-plaintext"><span class="text-danger">*</span>신분증</label>
                            <input class="form-control" type="text" name="name" value="{{old('name')}}"/>
                        </div>
                        <div class="form-group">
                            <label class="form-control-plaintext"><span class="text-danger">*</span> @lang('admin.company_name') </label>
                            <input class="form-control" type="text" name="CompanyName" value="{{old('CompanyName')}}"/>
                        </div>
                        <div class="form-group">
                            <label class="form-control-plaintext"><span class="text-danger">*</span>@lang('admin.password')</label>
                            <input class="form-control" type="password" name="Password"/>
                        </div>


                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label class="form-control-plaintext"><span class="text-danger">*</span> @lang('admin.email')</label>
                            <input class="form-control" type="email" name="email" value="{{old('email')}}"/>
                        </div>
                        <div class="form-group">
                            <label class="form-control-plaintext"><span class="text-danger">*</span> @lang('admin.contact')</label>
                            <input class="form-control" type="text" name="Contact" value="{{old('Contact')}}"/>
                        </div>
                        <div class="form-group">
                            <label class="form-control-plaintext"><span class="text-danger">*</span> @lang('admin.repassword')</label>
                            <input class="form-control" type="password" name="Repassword"/>
                        </div>


                    </div>
                </div>
                <div class="form-group">
                    <label class="form-control-plaintext">@lang('admin.address')</label>
                    <div class="form-row">
                        <input class="form-control col-sm-9" type="text" name="Address" id="Area" value="{{old('Address')}}" />
                        <a href="javascript:void(0)" class="btn btn-primary col-sm-2 ml-4" id="SearchAddress">@lang('admin.search')</a>

                    </div>
                </div>
                <div id="wrap">

                </div>

                <div class = "mt-3">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card p-3">
                                <div class="col-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            <h6>@lang('admin.agreement_policy')</h6>
                                        </label>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="g-2">
                                                    <label for="exampleFormControlTextarea1">@lang('admin.terms_service')</label>
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="g-2">
                                                    <label for="exampleFormControlTextarea1">@lang('admin.terms_privacy')</label>
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <button type="submit" class="btn btn-success mt-4" >@lang('admin.save')</button>

            </form>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
        <div class="col-2"></div>


    </div>

@endsection

@section('scripts')
    @include('components.address');
@endsection
