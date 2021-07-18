<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content>
    <title>Đang nhập</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="/frontend/images/logo.png" href="favicon.ico">

    <!--**********************************
        all css files
    *************************************-->

    <!--***************************************************
       fontawesome,bootstrap,plugins and main style css
     ***************************************************-->
    <!-- cdn links -->

    <link rel="stylesheet" href="/frontend/css/fontawesome.min.css">
    <link rel="stylesheet" href="/frontend/css/ionicons.min.css">
    <link rel="stylesheet" href="/frontend/css/simple-line-icons.css">
    <link rel="stylesheet" href="/frontend/css/jquery-ui.min.css">
    <link rel="stylesheet" href="/frontend/css/bootstrap.min.css">
    <link rel="stylesheet" href="/frontend/css/plugins.css">
    <!-- <link rel="stylesheet" href="assets/css/plugins/aos.css" /> -->
    <link rel="stylesheet" href="/frontend/css/style.min.css">

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->

    <!--****************************
         Minified  css
    ****************************-->

    <!--***********************************************
       vendor min css,plugins min css,style min css
     ***********************************************-->
    <!-- <link rel="stylesheet" href="assets/css/vendor/vendor.min.css" />
    <link rel="stylesheet" href="assets/css/plugins/plugins.min.css" />
    <link rel="stylesheet" href="assets/css/style.min.css" /> -->
</head>

<body>
<div class="login-register-area pt-80 pb-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-12 ml-auto mr-auto">
                <div class="login-register-wrapper">
                    <div class="login-register-tab-list nav">
                        <a class="active" data-toggle="tab" href="#lg1">
                            <h4>Đăng nhập</h4>
                        </a>
                    </div>
                    <div class="tab-content">
                        <div id="lg1" class="tab-pane active">
                            <div class="login-form-container">
                                <div class="login-register-form">
                                    <form action="{{ route('login.store') }}" method="post">
                                        @csrf
                                        <input type="email" name="email" placeholder="Email" value="{{old('email')}}">
                                        @error('email')
                                        <div style="color: red">{{ $message }}</div>
                                        @enderror
                                        <input type="password" name="password" placeholder="Mật khẩu" value="{{old('password')}}">
                                        @error('password')
                                        <div style="color: red">{{ $message }}</div>
                                        @enderror
                                        <div class="button-box">
                                            <div class="login-toggle-btn">
                                                <input id="remember" name="remember" type="checkbox">
                                                <label for="remember">Nhớ tài khoản</label>
                                                <a href="#">Quên mật khẩu?</a>
                                            </div>
                                            @error('login')
                                            <div style="color: red">{{ $message }}</div>
                                            @enderror
                                            <button type="submit" class="btn btn-dark btn--md">
                                                <span>Đăng nhập</span>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div id="lg2" class="tab-pane">
                            <div class="login-form-container">
                                <div class="login-register-form">
                                    <form action="assets/php/contact.php" method="post">
                                        <input type="text" name="user-name" placeholder="Username">
                                        <input type="password" name="user-password" placeholder="Password">
                                        <input name="user-email" placeholder="Email" type="email">
                                        <div class="button-box">
                                            <button type="submit" class="btn btn-dark btn--md">
                                                <span>Register</span>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

</html>



{{--<!DOCTYPE html>--}}
{{--<html>--}}
{{--<head>--}}
{{--    <meta charset="utf-8">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="IE=edge">--}}
{{--    <title>Đăng nhập</title>--}}
{{--    <!-- Tell the browser to be responsive to screen width -->--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1">--}}
{{--    <!-- Font Awesome -->--}}
{{--    <link rel="stylesheet" href="/backend/plugins/fontawesome-free/css/all.min.css">--}}
{{--    <!-- Ionicons -->--}}
{{--    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">--}}
{{--    <!-- Tempusdominus Bbootstrap 4 -->--}}
{{--    <link rel="stylesheet" href="/backend/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">--}}
{{--    <!-- iCheck -->--}}
{{--    <link rel="stylesheet" href="/backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css">--}}
{{--    <!-- JQVMap -->--}}
{{--    <link rel="stylesheet" href="/backend/plugins/jqvmap/jqvmap.min.css">--}}
{{--    <!-- Theme style -->--}}
{{--    <link rel="stylesheet" href="/backend/dist/css/adminlte.min.css">--}}
{{--    <!-- overlayScrollbars -->--}}
{{--    <link rel="stylesheet" href="/backend/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">--}}
{{--    <!-- Daterange picker -->--}}
{{--    <link rel="stylesheet" href="/backend/plugins/daterangepicker/daterangepicker.css">--}}
{{--    <!-- summernote -->--}}
{{--    <link rel="stylesheet" href="/backend/plugins/summernote/summernote-bs4.css">--}}
{{--    <!-- Google Font: Source Sans Pro -->--}}
{{--    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">--}}
{{--</head>--}}
{{--<body class="hold-transition login-page">--}}



{{--<div class="login-box">--}}
{{--    <div class="login-logo">--}}
{{--        <a href="../../index2.html"><b>Admin</b>LTE</a>--}}
{{--    </div>--}}
{{--    <!-- /.login-logo -->--}}
{{--    <div class="card">--}}
{{--        <div class="card-body login-card-body">--}}
{{--            @if($errors->any())--}}
{{--                @foreach($errors->all() as $error)--}}
{{--                    <p style="color: red;">{{$error}}</p>--}}
{{--                @endforeach--}}
{{--            @endif--}}
{{--            <p class="login-box-msg">Sign in to start your session</p>--}}

{{--            <form action="{{ route('login.store') }}" method="post">--}}
{{--                @csrf--}}
{{--                <div class="input-group mb-3">--}}
{{--                    <input type="email" name='email' class="form-control" placeholder="Email">--}}
{{--                    <div class="input-group-append">--}}
{{--                        <div class="input-group-text">--}}
{{--                            <span class="fas fa-envelope"></span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="input-group mb-3">--}}
{{--                    <input type="password" name='password' class="form-control" placeholder="Password">--}}
{{--                    <div class="input-group-append">--}}
{{--                        <div class="input-group-text">--}}
{{--                            <span class="fas fa-lock"></span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="row">--}}
{{--                    <div class="col-8">--}}
{{--                        <div class="icheck-primary">--}}
{{--                            <input type="checkbox" id="remember">--}}
{{--                            <label for="remember">--}}
{{--                                Remember Me--}}
{{--                            </label>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- /.col -->--}}
{{--                    <div class="col-4">--}}
{{--                        <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>--}}
{{--                    </div>--}}
{{--                    <!-- /.col -->--}}
{{--                </div>--}}
{{--            </form>--}}

{{--            <div class="social-auth-links text-center mb-3">--}}
{{--                <p>- OR -</p>--}}
{{--                <a href="#" class="btn btn-block btn-primary">--}}
{{--                    <i class="fab fa-facebook mr-2"></i> Sign in using Facebook--}}
{{--                </a>--}}
{{--                <a href="#" class="btn btn-block btn-danger">--}}
{{--                    <i class="fab fa-google-plus mr-2"></i> Sign in using Google+--}}
{{--                </a>--}}
{{--            </div>--}}
{{--            <!-- /.social-auth-links -->--}}

{{--            <p class="mb-1">--}}
{{--                <a href="#">I forgot my password</a>--}}
{{--            </p>--}}
{{--            <p class="mb-0">--}}
{{--                <a href="register.html" class="text-center">Register a new membership</a>--}}
{{--            </p>--}}
{{--        </div>--}}
{{--        <!-- /.login-card-body -->--}}
{{--    </div>--}}
{{--</div>--}}


{{--<script src="/backend/plugins/jquery/jquery.min.js"></script>--}}
{{--<!-- jQuery UI 1.11.4 -->--}}
{{--<script src="/backend/plugins/jquery-ui/jquery-ui.min.js"></script>--}}
{{--<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->--}}
{{--<script>--}}
{{--    $.widget.bridge('uibutton', $.ui.button)--}}
{{--</script>--}}
{{--<!-- Bootstrap 4 -->--}}
{{--<script src="/backend/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>--}}
{{--<!-- ChartJS -->--}}
{{--<script src="/backend/plugins/chart.js/Chart.min.js"></script>--}}
{{--<!-- Sparkline -->--}}
{{--<script src="/backend/plugins/sparklines/sparkline.js"></script>--}}
{{--<!-- JQVMap -->--}}
{{--<script src="/backend/plugins/jqvmap/jquery.vmap.min.js"></script>--}}
{{--<script src="/backend/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>--}}
{{--<!-- jQuery Knob Chart -->--}}
{{--<script src="/backend/plugins/jquery-knob/jquery.knob.min.js"></script>--}}
{{--<!-- daterangepicker -->--}}
{{--<script src="/backend/plugins/moment/moment.min.js"></script>--}}
{{--<script src="/backend/plugins/daterangepicker/daterangepicker.js"></script>--}}
{{--<!-- Tempusdominus Bootstrap 4 -->--}}
{{--<script src="/backend/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>--}}
{{--<!-- Summernote -->--}}
{{--<script src="/backend/plugins/summernote/summernote-bs4.min.js"></script>--}}
{{--<!-- overlayScrollbars -->--}}
{{--<script src="/backend/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>--}}
{{--<!-- AdminLTE App -->--}}
{{--<script src="/backend/dist/js/adminlte.js"></script>--}}
{{--<!-- AdminLTE dashboard demo (This is only for demo purposes) -->--}}
{{--<script src="/backend/dist/js/pages/dashboard.js"></script>--}}
{{--<!-- AdminLTE for demo purposes -->--}}
{{--<script src="/backend/dist/js/demo.js"></script>--}}
{{--</body>--}}
{{--</html>--}}
