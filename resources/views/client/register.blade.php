<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Create Account</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('bower_components/admin-lte/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset('bower_components/admin-lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('bower_components/admin-lte/dist/css/adminlte.min.css') }}">

  <style>
    .login-page{
        justify-content: normal !important;
    }
    .login-box{
        width: 460px;
    }
    .card,
    .card-body {
        background: #121212!important;
    }
    .card-header:before {
        content: "";
        display: block;
        position: absolute;
        width: 6px;
        left: 0;
        top: 0;
        bottom: 0;
        background-color: #fc0;
        border-radius: 3px 0 0 0;
    }
    .form-control{
        color: white!important;
    }
    .form-control:not(textarea) {
        height: 52px;
    }
    .control-label {
        font-size: 11px;
        text-transform: uppercase;
        font-family: Montserrat, sans-serif;
        color: #fff;
    }
    
    @media only screen and (max-width: 768px) {
        .login-box{
            width: 360px;
        }
    }
  </style>
</head>
<body class="dark-mode">
    <div class="container">
        <div class="login-logo">
        </div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-header">
                <h4 class="login-box-msg text-uppercase text-left pb-0">Already have an account?</h4>
            </div>
            <div class="card-body login-card-body">

              <p class="mt-3 mb-2 text-center">
                <a href="{{ route('home') }}" class="btn btn-success btn-block">CLICK HERE TO LOGIN</a>
              </p>
            </div>
            <!-- /.login-card-body -->
        </div>
        <div class="text-center">
            <h3 class="text-accent">OR</h3>
        </div>
        <div class="card mt-3">
            <div class="card-header">
                <h4 class="login-box-msg text-uppercase text-left pb-0">Register new account</h4>
            </div>
          <div class="card-body login-card-body">
              @include('partials._message')
                          <form  action="{{ route('create.account') }}" method="post" class="form-horizontal text-left">              
                          {{ csrf_field() }}
                                <div class="form-group">
                                        <label class="control-label col-sm-12" for="UserLogin_Username"><strong>Name</strong></label>
                                        <div class="col-sm-12">
                                            <input class="form-control input-lg" type="text" name="name">
                                        </div>
                                    </div>
                                <div class="form-group">
                                        <label class="control-label col-sm-12" for="UserLogin_Username"><strong>Username</strong></label>
                                        <div class="col-sm-12">
                                            <input class="form-control input-lg" data-val="true" data-val-length="Username must have a minimum length of 3 characters" data-val-length-max="100" data-val-length-min="3" data-val-regex="Enter only alphabets and numbers" data-val-regex-pattern="([a-zA-Z0-9 .&amp;'-_]+)" data-val-required="The Username field is required." id="UserLogin_Username" name="username" type="text" value="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-12" for="UserLogin_Username"><strong>Contact No.</strong></label>
                                        <div class="col-sm-12">
                                            <input class="form-control input-lg " data-val="true" data-val-required="The Contact No field is required." id="UserProfile_Email" name="UserProfile.Email" type="text" value="">
                                        </div>
                                    </div>
                                            <input type="hidden" class="form-control" value="{{$user->id}}" name="referred_by">
                                            <input type="hidden" class="form-control" value="{{$user->id}}" name="created_by">
                                            <input type="hidden" class="form-control" value="{{$user->type}}" name="referrer_type">
                                    <div class="form-group">
                                        <label class="control-label col-sm-12" for="UserLogin_Username"><strong>Password</strong></label>
                                        <div class="col-sm-12">
                                            <input class="form-control input-lg" data-val="true" data-val-length="Password must have a minimum length of 6 characters" data-val-length-max="100" data-val-length-min="6" data-val-required="The Password field is required." id="NewPassword" name="password" type="password">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-12" for="UserLogin_Username"><strong>Confirm Password</strong></label>
                                        <div class="col-sm-12">
                                            <input class="form-control input-lg" data-val="true" data-val-equalto="'Confirm Password' and 'Password' do not match." data-val-equalto-other="*.NewPassword" data-val-required="The Confirm Password field is required." id="ComparePassword" name="password_confirmation" type="password">
                                        </div>
                                    </div>
                                    <div class="form-actions no-margin-bottom ">
                                        <input type="submit" value="Register" class="btn btn-success btn-lg text-bold btn-block">
                                    </div>
                            </form>
                <!--<form action="{{ route('create.account') }}" method="post">-->

                <!--    <div class="input-group mb-3">-->
                <!--        <input type="text" class="form-control" name="name" placeholder="Name">-->
                <!--        <div class="input-group-append">-->
                <!--        <div class="input-group-text">-->
                <!--            <span class="fas fa-address-card"></span>-->
                <!--        </div>-->
                <!--        </div>-->
                <!--    </div>-->

                <!--    <input type="hidden" class="form-control" value="{{$user->id}}" name="referred_by">-->
                <!--    <input type="hidden" class="form-control" value="{{$user->id}}" name="created_by">-->
                <!--    <input type="hidden" class="form-control" value="{{$user->type}}" name="referrer_type">-->

                <!--    <div class="input-group mb-3">-->
                <!--        <input type="text" class="form-control" name="username" placeholder="Username">-->
                <!--        <div class="input-group-append">-->
                <!--        <div class="input-group-text">-->
                <!--            <span class="fas fa-user"></span>-->
                <!--        </div>-->
                <!--        </div>-->
                <!--    </div>-->

                <!--    <div class="input-group mb-3">-->
                <!--        <input type="number" class="form-control" name="contact_number" placeholder="Contact Number">-->
                <!--        <div class="input-group-append">-->
                <!--        <div class="input-group-text">-->
                <!--            <span class="fas fa-phone"></span>-->
                <!--        </div>-->
                <!--        </div>-->
                <!--    </div>-->

                <!--    <div class="input-group mb-3">-->
                <!--        <input type="password" class="form-control" name="password" placeholder="Password">-->
                <!--        <div class="input-group-append">-->
                <!--        <div class="input-group-text">-->
                <!--            <span class="fas fa-lock"></span>-->
                <!--        </div>-->
                <!--        </div>-->
                <!--    </div>-->

                <!--    <div class="input-group mb-3">-->
                <!--        <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password">-->
                <!--        <div class="input-group-append">-->
                <!--        <div class="input-group-text">-->
                <!--            <span class="fas fa-lock"></span>-->
                <!--        </div>-->
                <!--        </div>-->
                <!--    </div>-->

                <!--    <div class="row">-->
                <!--        {{ csrf_field() }}-->
                        <!-- /.col -->
                <!--        <div class="col-md-12">-->
                <!--        <button type="submit" class="btn btn-danger float-right">REGISTER</button>-->
                <!--        </div>-->
                        <!-- /.col -->
                <!--    </div>-->
                <!--</form>-->
          </div>
          <!-- /.login-card-body -->
        </div>
            </div>
        </div>
    </div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{ asset('bower_components/admin-lte/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('bower_components/admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('bower_components/admin-lte/dist/js/adminlte.min.js') }}"></script>
</body>
</html>
