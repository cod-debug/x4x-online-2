<!DOCTYPE html>
<html lang="en">
   <head>
      <title>...</title>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0">
      <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CSource+Sans+Pro:400,700" rel="stylesheet">
      <link rel="stylesheet" href="{{ asset('bower_components/admin-lte/plugins/fontawesome-free/css/all.min.css') }}">
      <link href="{{ asset('data-login/bootstrap.css') }}" rel="stylesheet">
      <link href="{{ asset('data-login/all.min.css') }}" rel="stylesheet">
      <link href="{{ asset('data-login/v4-shims.min.css') }}" rel="stylesheet">
      <link href="{{ asset('data-login/style-basketball-dark.css') }}" rel="stylesheet">
      {{-- <link href="{{ asset('data-login/custom.css') }}" rel="stylesheet"> --}}
      <style type="text/css">
         .loginBtn {
            background-color: #58D68D
         }

         body {
            background-image: url('/images/bg2.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
            color: #9a9da2;
            font-size: 15px;
            line-height: 26px;
            font-family: Source Sans Pro,sans-serif;
            font-weight: 400;
        }
        
        .form-group {
            margin-bottom: 1rem!important;
        }
        
        .card__header:before {
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
        
        .form-control {
            background-color: #343a40!important;
            border-radius: 5px;
        }
        
        .form-control:focus {
            border-color: #80bdff!important;
        }
      </style>
   </head>
   <body data-template="template-basketball">
       
      <div class="site-wrapper clearfix">
         <div class="site-overlay"></div>
         <div class="site-content img-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">


                            <div class="card registration ">
                                <div class="card__header">
                                    <h4>Signin to Start</h4>
                                </div>
                                <div class="card__content">
                                    <!-- Login Form -->
                            <form action="{{ route('post.login') }}" method="post" class="form-horizontal text-left">
                                <div class="loginMessage" style="color: #FFF !important">
                                   {{ csrf_field() }}
                                    @include('partials._message')
                                </div><input name="__RequestVerificationToken" type="hidden" value="gnCOnUJ4K5eqNQk6gw2x9UuID2fxu6LYx4Zu5IF83a4Fw3B3f157_Fp-5xtlyhI8TX_RhuvCTsYG69hEfW1OSadvCZE1">                                        
                                        <div class="accountInputs">

                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <input autofocus="autofocus" class="form-control input input-lg input-block" data-val="true" data-val-required="The Username field is required." id="UserLogin_Username" name="email" placeholder="USERNAME" type="text" value="">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <input class="form-control input input-lg input-block" data-val="true" data-val-required="The Password field is required." id="UserLogin_Password" name="password" placeholder="PASSWORD" type="password">
                                                </div>
                                            </div>


                                        </div>
                                        <div class="form-actions no-margin-bottom ">

                                            <button class="btn btn-success btn-lg text-bold btn-block">LOGIN</button>
                                            
                                        </div>
</form>                                    <div class="row">
                                        <div class="col">
                                            <div class="text-center">
                                            </div>
                                        </div><!--/ .col -->
                                    </div><!-- / .row -->

                                </div>
                            </div>
                        </div>
                </div>
               <!--<div class="row">-->
               <!--   <div class="col-md-6 text-center justify-content-center align-items-center"></div>-->
               <!--   <div class="col-md-6">-->
               <!--      <div class="card" style="background: transparent !important; border: 1px solid #717D7E;">-->
               <!--         <div class="card__header" style="border-bottom: 1px solid #717D7E;">-->
               <!--            <h4><i class="fa fa-key"></i> SIGN-IN ACCOUNT TO CONTINUE...</h4>-->
               <!--         </div>-->
               <!--         <div class="card__content">-->
               <!--             <form action="{{ route('post.login') }}" method="post">-->
               <!--                 <div class="loginMessage" style="color: #FFF !important">-->
               <!--                     @include('partials._message')-->
               <!--                 </div>-->
               <!--                 <div>-->
               <!--                    <div class="form-group">-->
               <!--                       <label for="login-name"><i class="fas fa-user"></i> YOUR Username</label>-->
               <!--                       <input type="text" class="form-control" name="email" style="color: #FFCC00; font-weight: bold" placeholder="Enter your username...">-->
               <!--                    </div>-->
               <!--                    <div class="form-group">-->
               <!--                       <label for="login-password"><i class="fas fa-lock"></i> YOUR Password</label>-->
               <!--                       <input type="password" class="form-control" name="password" style="color: #FFCC00; font-weight: bold" placeholder="Enter your password...">-->
               <!--                    </div>-->
               <!--                    {{ csrf_field() }}-->
               <!--                    <div class="form-group form-group--sm">-->
               <!--                       <button class="btn btn-primary btn-lg btn-block" type="submit"><i class="fa fa-sign-in"></i> SIGN-IN Account</button>-->
               <!--                    </div>-->
               <!--                 </div>-->
               <!--             </form>-->
               <!--             <img src="{{ asset('data-login/login-logo.jpg') }}" alt="Chat Bot Query">-->
               <!--         </div>-->
               <!--      </div>-->
               <!--   </div>-->
               <!--</div>-->
            </div>
         </div>
      </div>
      <script src="{{ asset('data-login/jquery-3.1.1.min.js') }}"></script>
      <script src="{{ asset('data-login/popper.min.js') }}"></script>
      <script src="{{ asset('data-login/bootstrap.min.js') }}"></script>
   </body>
</html>