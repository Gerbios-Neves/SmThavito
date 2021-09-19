<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from foxythemes.net/preview/products/beagle/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 May 2021 10:14:25 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="{{asset('beagle/img/logo-fav.png')}}">
    <title>Autenticacao</title>
    <link rel="stylesheet" type="text/css" href="{{asset('beagle/lib/perfect-scrollbar/css/perfect-scrollbar.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('beagle/lib/material-design-icons/css/material-design-iconic-font.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('beagle/css/app.css')}}" type="text/css"/>
  </head>
  <body class="be-splash-screen">
    <div class="be-wrapper be-login">
      <div class="be-content">
        <div class="main-content container-fluid">
          <div class="splash-container">
            <div class="card card-border-color card-border-color-primary">
              <div class="card-header"><img class="logo-img" src="{{asset('beagle/img/logo-xx.png')}}" alt="logo" width="102" height="27"><span class="splash-description">Por favor, introduza as suas credencias de Usuario.</span></div>
              <div class="card-body">
                <form method="POST" action="{{ route('login')}}">
                 @csrf
                  <div class="form-group">
                    <input class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" id="email" type="email" placeholder="Introduza o Email" autocomplete="off">
                      @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                  </div>
                  <div class="form-group">
                    <input class="form-control @error('password') is-invalid @enderror" name="password" id="password" type="password" placeholder="Introduza o Password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                  <!-- <div class="form-group row login-tools">
                    <div class="col-6 login-remember">
                      <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="checkbox1">
                        <label class="custom-control-label" for="checkbox1">Remember Me</label>
                      </div>
                    </div>
                    <div class="col-6 login-forgot-password">
                      <a href="pages-forgot-password.html">Forgot Password?</a>
                    </div>
                  </div> -->
                  <div class="form-group login-submit">
                    <button class="btn btn-primary btn-xl" type="submit"  data-dismiss="modal"> {{ __('Login') }} </button>
                    <!-- @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif -->
                  </div>
                </form>
              </div>
            </div>
            <!-- <div class="splash-footer">
              <span>Don't have an account? <a href="pages-sign-up.html">Sign Up</a></span>
            </div> -->
          </div>
        </div>
      </div>
    </div>
    <script src="{{asset('beagle/lib/jquery/jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('beagle/lib/perfect-scrollbar/js/perfect-scrollbar.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('beagle/lib/bootstrap/dist/js/bootstrap.bundle.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('beagle/js/app.js')}}" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
      	//-initialize the javascript
      	App.init();
      });
      
    </script>
  </body>

<!-- Mirrored from foxythemes.net/preview/products/beagle/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 May 2021 10:14:25 GMT -->
</html>