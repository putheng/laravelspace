<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Register | Laravel Build</title>
  <link rel="stylesheet" type="text/css" href="{{ asset('css/perfect-scrollbar.min.css') }}"/>
  <link rel="stylesheet" href="{{ asset('css/material-design-iconic-font.min.css') }}?v={{ time() }}" type="text/css"/>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css"/>
  <link rel="stylesheet" href="{{ asset('css/custom.css') }}?v={{ time() }}" type="text/css"/>
</head>

<body class="be-splash-screen">
  <div class="be-wrapper be-login">
    <div class="be-content">
      <div class="main-content container-fluid">
        <div class="splash-container">
          <div class="card card-border-color card-border-color-primary">
            <div class="card-header"><img class="logo-img" src="{{ asset('images/icons/logo-xx.png') }}" alt="logo" width="102" height="27"><span class="splash-description">Please enter your user information.</span></div>
            <div class="card-body">
              <form>
                <div class="form-group">
                  <input class="form-control" id="username" type="text" placeholder="Username" autocomplete="off">
                </div>
                <div class="form-group">
                  <input class="form-control" id="password" type="password" placeholder="Password">
                </div>
                <div class="form-group row login-tools">
                  <div class="col-6 login-remember">
                    <label class="custom-control custom-checkbox">
                    <input class="custom-control-input" type="checkbox"><span class="custom-control-label">Remember Me</span>
                    </label>
                  </div>
                  <div class="col-6 login-forgot-password"><a href="{{ route('auth.password.reset') }}">Forgot Password?</a></div>
                </div>
                <div class="form-group login-submit">
                  <a class="btn btn-primary btn-xl" href="{{ route('dashboard.index') }}" data-dismiss="modal">
                    Sign me in
                  </a>
                </div>

                <div class="title">
                  <span class="splash-title pb-3">Or</span>
                </div>
                  <div class="form-group row social-signup pt-0">
                    <div class="col-6">
                      <button class="btn btn-lg btn-block btn-social btn-facebook btn-color" type="button"><i class="mdi mdi-facebook icon icon-left"></i>Facebook</button>
                    </div>
                    <div class="col-6">
                      <button class="btn btn-lg btn-block btn-social btn-google-plus btn-color" type="button"><i class="mdi mdi-google icon icon-left"></i>Google</button>
                    </div>
                  </div>
              </form>
            </div>
          </div>
          <div class="splash-footer"><span>Don't have an account? <a href="{{ route('auth.register') }}">Sign Up</a></span></div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>