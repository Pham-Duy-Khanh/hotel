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

    <!-- ==== Favicon ==== -->
    <link rel="icon" href="favicon.png" type="image/png">

    <!-- ==== Google Font ==== -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700%7CMontserrat:400,500">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{asset('admin/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/jquery-ui.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/perfect-scrollbar.min.css')}}">
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
    <!-- Forgot Password Page Start -->
    <div class="m-account-w" data-bg-img="assets/img/account/wrapper-bg.jpg">
        <div class="m-account m-account-lock">
            <!-- Forgot Password Form Start -->
            <div class="m-account--form-w">
                <div class="m-account--form m-account--lock">
                    <div class="m-account--user">
                        <img src="assets/img/avatars/01_80x80.png" alt="">

                        <h3 class="h3">Henry Foster <i class="fa fa-unlock"></i></h3>
                    </div>
                    <form method="post" action="{{ route('checkAdmin', Session::get('admin_id')) }}">
                        @csrf
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <i class="fas fa-key"></i>
                                </div>

                                <input type="password" name="password" placeholder="Password" class="form-control" autocomplete="off" required>
                            </div>
                            <div>
                                <p style="margin-left: 60px; color: red">{{Session::get('error')}}</p>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-block btn-rounded btn-info" id="submitLock">Unlock</button>
                        </div>

                        <div class="m-account--footer">
                            <p>&copy; 2018 ThemeLooks</p>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Forgot Password Form End -->
        </div>
    </div>
    <!-- Forgot Password Page End -->
</div>
<!-- Wrapper End -->

<!-- Scripts -->
@include('admin.content.jsdefault')
{{--<script src="{{asset('admin/js/lockScreen/checkAdmin.js')}}"></script>--}}

<!-- Page Level Scripts -->

</body>
</html>
