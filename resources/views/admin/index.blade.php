<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
    <link href="{{ asset('fontawesome/css/all.css') }}" rel="stylesheet">
    <link href="{{ asset('libs/gijgo/css/gijgo.min.css') }}" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/image-uploader.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/image-uploader.min.css') }}">

    <title>Administrator management page</title>

</head>

<body>
@yield('styles')

<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Yacht reservation</a>
    <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
    <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
            <a class="nav-link text-white" href="{{route('admin.logout')}}"> <i class="fa fa-sign-out"></i> Sign out</a>
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
                            Owner management
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.yacht') }}">
                            <span class="fa fa-ship"></span>
                            Yacht Management
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.product') }}">
                            <span class="fa fa-shopping-cart"></span>
                            Product Management
                        </a>
                    </li>
                </ul>
                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                    <span><span data-feather="users"></span> Membership information</span>

                </h6>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.member')}}">
                            <span class="fa fa-users"></span>
                            Members list
                        </a>
                    </li>
                </ul>
                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                    <span class="fa fa-calendar-alt"> Reservations</span>

                </h6>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.reservation')}}">
                            <span class="fa fa-calendar-alt"></span>
                            Reservation list
                        </a>
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
