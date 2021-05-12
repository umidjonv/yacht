<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Signin Template for Bootstrap</title>

      <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
      <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
      <link href="{{asset('css/signin.css')}}" rel="stylesheet">
      <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>

  </head>

  <body class="text-center">
    <form class="form-signin">
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <div class="checkbox mb-3">
            <label>
              <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <div class="form-group">
            <a href="{{route('vendor_login')}}" style="position:relative; left:-50px;">Forgot password</a>
            <a href="{{route('vandor_register')}}" class="float-right">Register New?</a>
        </div>

      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>

    </form>
  </body>
</html>
