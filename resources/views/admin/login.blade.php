<!DOCTYPE html>
<html dir="ltr" lang="en" class="no-outlines">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- ==== Document Title ==== -->
    <title>Dashboard - DAdmin</title>

    <!-- ==== Document Meta ==== -->
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700%7CMontserrat:400,500">

    <!-- Stylesheets -->

    <link rel="stylesheet" href="{{asset('admin/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/jquery-ui.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/perfect-scrollbar.min.css')}}">

    <link rel="stylesheet" href="{{asset('admin/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/morris.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/select2.min.css')}}">


    <link rel="stylesheet" href="{{asset('admin/css/jquery-jvectormap.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/horizontal-timeline.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/weather-icons.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/dropzone.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/ion.rangeSlider.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/ion.rangeSlider.skinFlat.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/datatables.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/fullcalendar.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/style.css')}}">

    <!-- Page Level Stylesheets -->

</head>
<body>

<!-- Wrapper Start -->
<div class="wrapper">
    <!-- Login Page Start -->
    <div class="m-account-w" data-bg-img="assets/img/account/wrapper-bg.jpg">
        <div class="m-account">
            <div class="row no-gutters">
                <div class="col-md-6">
                    <!-- Login Content Start -->
                    <div class="m-account--content-w" data-bg-img="assets/img/account/content-bg.jpg">
                        <div class="m-account--content">
                            <h2 class="h2">Don't have an account?</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <!-- Login Form Start -->
                    <div class="m-account--form-w">
                        <div class="m-account--form">
                            <!-- Logo Start -->
                            <div class="logo">
                                <img src="{{asset('admin/img/logo.png')}}" alt="">
                            </div>
                            <!-- Logo End -->





                            <form method="post">
                                <label class="m-account--title">Login to your account</label>

                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <i class="fas fa-user"></i>
                                        </div>

                                        <input type="text" name="username" placeholder="Username" class="form-control" autocomplete="off" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <i class="fas fa-key"></i>
                                        </div>

                                        <input type="password" name="password" placeholder="Password" class="form-control" autocomplete="off" required>
                                    </div>
                                </div>

                                <div class="m-account--actions">
                                    <a href="#" class="btn-link">Forgot Password?</a>

                                    <button type="submit" class="btn btn-rounded btn-info" id="login">Login</button>
                                </div>

                                <div class="m-account--footer">
                                    <p>&copy; 2018 ThemeLooks</p>
                                </div>
                            </form>






                        </div>
                    </div>
                    <!-- Login Form End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Login Page End -->
</div>
<!-- Wrapper End -->

<!-- Scripts -->


<script src="{{asset('admin/js/jquery.min.js')}}"></script>
<script src="{{asset('admin/js/jquery-ui.min.js')}}"></script>
<script src="{{asset('admin/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('admin/js/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('admin/js/jquery.sparkline.min.js')}}"></script>
<script src="{{asset('admin/js/raphael.min.js')}}"></script>
<script src="{{asset('admin/js/morris.min.js')}}"></script>
<script src="{{asset('admin/js/select2.min.js')}}"></script>
<script src="{{asset('admin/js/jquery-jvectormap.min.js')}}"></script>
<script src="{{asset('admin/js/jquery-jvectormap-world-mill.min.js')}}"></script>
<script src="{{asset('admin/js/horizontal-timeline.min.js')}}"></script>
<script src="{{asset('admin/js/jquery.validate.min.js')}}"></script>
<script src="{{asset('admin/js/jquery.steps.min.js')}}"></script>
<script src="{{asset('admin/js/dropzone.min.js')}}"></script>
<script src="{{asset('admin/js/ion.rangeSlider.min.js')}}"></script>
<script src="{{asset('admin/js/datatables.min.js')}}"></script>
<script src="{{asset('admin/js/main.js')}}"></script>
<script src="{{asset('admin/js/login/check.js')}}"></script>

<!-- Page Level Scripts -->

</body>
</html>
