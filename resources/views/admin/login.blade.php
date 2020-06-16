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
    <link rel="stylesheet" href="{{asset('admin/css/fontawesome-all.min.css')}}">
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
    <div class="m-account-w" data-bg-img="{{asset('admin/img/logo2.jpg')}}">
        <div class="m-account">
            <div class="row no-gutters">
                <div class="col-md-6" style="margin: auto">
                    <div class="m-account--form-w">
                        <div class="m-account--form">
                            <div class="logo">
                                <img src="{{asset('admin/img/logo.png')}}" alt="">
                            </div>
                            <form method="post" action="{{route('getLogin')}}">
                                @csrf
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
                                    <p>&copy; 2020</p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Scripts -->


@include('admin.content.jsdefault')

<!-- Page Level Scripts -->

</body>
</html>
