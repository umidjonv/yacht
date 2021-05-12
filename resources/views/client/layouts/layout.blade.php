<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{asset('favicon.ico')}}">

    <title>Client template</title>

      <link href="{{ asset('css/app.css') }}" rel="stylesheet">
      <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
      <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
      <link href="{{asset('css/signin.css')}}" rel="stylesheet">


  </head>

  <body>
  @yield('styles')


      <div class="container">
          <div class="row">
              <div class="col">
                  @yield('content')

              </div>
          </div>

      </div>
  <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
      @yield('scripts')
  </body>
</html>
