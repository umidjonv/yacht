<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
{{--    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">--}}
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
    <link href="{{ asset('fontawesome/css/all.css') }}" rel="stylesheet">
    <link href="{{ asset('libs/gijgo/css/gijgo.min.css') }}" rel="stylesheet">

    <link type="text/css" rel="stylesheet" href="{{ asset('css/image-uploader.min.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/custom.css') }}">
    @yield('header_styles')

    <link rel="stylesheet" href="{{asset('libs/datatables/jquery.dataTables.css')}}"/>

    <title>@lang('admin.admin_page_title')</title>

</head>

<body>
@yield('styles')

<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">@lang('admin.site_title')</a>
    <input class="form-control form-control-dark " type="text" placeholder="Search" aria-label="Search" id="search">
    <a href="{{route('admin.profile')}}" class="text-white col-sm-2 col-md-2 mr-0" ><span class="fa fa-user"></span> {{auth()->user()->name}}</a>
    <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
             <a class="nav-link text-white t" href="{{route('admin.logout')}}"> <span class="fa fa-sign-out-alt"></span> </a>
        </li>

    </ul>

</nav>

<div class="container-fluid">
    <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.vendor')}}">
                            <span class="fa fa-user-shield"></span>
                            @lang("admin.owner_management")
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.yacht') }}">
                            <span class="fa fa-ship"></span>
                            @lang("admin.yacht_management")
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.product') }}">
                            <span class="fa fa-shopping-cart"></span>
                            @lang("admin.product_management")
                        </a>
                    </li>
                </ul>
                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                    <span><span data-feather="users"></span> @lang('admin.membership_info')</span>

                </h6>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.member')}}">
                            <span class="fa fa-users"></span>
                            @lang('admin.member_list')
                        </a>
                    </li>
                </ul>
                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                    <span class="fa fa-calendar-alt"> @lang('admin.reservations')</span>

                </h6>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.reservation')}}">
                            <span class="fa fa-calendar-alt"></span>
                            @lang('admin.reservation_list')
                        </a>
                    </li>
                </ul>
                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                    <span class="fa fa-blog"> @lang('admin.events')</span>

                </h6>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.event')}}">

                            @lang('admin.event_list')
                        </a>
                    </li>
                </ul>
                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                    <span class="fa fa-images"> @lang('admin.banner_management')</span>

                </h6>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.banner')}}">

                            @lang('admin.banner_list')
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.banner.edit')}}">

                            @lang('admin.banner_edit_title')
                        </a>
                    </li>
                </ul>
                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                    <span class="fa fa-comments"> @lang('admin.feedback')</span>

                </h6>

                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.feedback.index')}}">  @lang('admin.feedback_list')</a>
                    </li>

                </ul>



            </div>
        </nav>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">

        @yield('content')
        </main>


    </div>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
{{--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>--}}
<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('libs/gijgo/js/gijgo.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/image-uploader.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/image-uploader.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.mask.min.js') }}"></script>




<!-- Icons -->
<script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
<script>
    feather.replace()
</script>
@yield('scripts')

</body>
</html>
