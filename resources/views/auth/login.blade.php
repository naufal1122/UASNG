<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Style -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">


    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="icon" href="{{ url('images/favicon.png') }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
  </head>
  <body>


  <div class="d-lg-flex half">
    <div class="bg order-1 order-md-2" style="background-image: url('images/bg_1.jpg');"></div>
    <div class="contents order-2 order-md-1">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7">
            <div class="mb-4">
              <h3><b>Login</b></h3>
              <p class="mb-4">Masuk untuk menuju ke Aplikasi Perpustakaan</p>
            </div>
            @include('admin-lte/flash')
            <form method="POST" action="{{ route('login') }}">
                @csrf
              <div class="form-group">
                <label for="email">{{ __('E-Mail Address') }}</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                @enderror

              </div>
              <div class="form-group last mb-3">
                <label for="password">{{ __('Password') }}</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
              </div>

              @error('password')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

              <div class="d-flex mb-5 align-items-center">
                <label class="control control--checkbox mb-0"><span class="caption">{{ __('Remember Me') }}</span>
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                  <div class="control__indicator"></div>
                </label>
                @if (Route::has('password.request'))
                <span class="ml-auto"><a href="{{ route('password.request') }}" class="forgot-pass">{{ __('Forgot Your Password?') }}</a></span>
                @endif
              </div>

              <div class="form-group row">
                <div class="col-md-auto"></div>
                <div class="col-md-auto">
                  {!! NoCaptcha::display() !!}
                  {!! NoCaptcha::renderJs() !!}
                  @error('g-recaptcha-response')
                  <span class="text-danger" role="alert">
                    <strong>{{ $message }}</strong></span>
                    @enderror
                  </div>
                </div>

                <input type="submit" value="{{ __('Login') }}" class="btn btn-block btn-primary">

              <span class="d-block text-center my-4 text-muted">Belum punya akun? <a href="{{ route('register') }}" class="register">{{ __('Registrasi') }}</a></span>

            </form>
          </div>
        </div>
      </div>
    </div>


  </div>



    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
