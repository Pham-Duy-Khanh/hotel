<!DOCTYPE html>
<!-- saved from url=(0040)http://localhost:8080/hotel/public/login -->
<html style="" class=" js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface no-generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tour Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

  <!-- Facebook and Twitter integration -->
    <meta property="og:title" content="">
    <meta property="og:image" content="">
    <meta property="og:url" content="">
    <meta property="og:site_name" content="">
    <meta property="og:description" content="">
    <meta name="twitter:title" content="">
    <meta name="twitter:image" content="">
    <meta name="twitter:url" content="">
    <meta name="twitter:card" content="">
    
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <link rel="stylesheet" href="css/style.css">

    <!-- Modernizr JS -->
    <script src="js/modernizr-2.6.2.min.js"></script>

    <link href="css/bootstrap_profile.css" rel="stylesheet">
    <link href="css/style_profile.css" rel="stylesheet">
        </head>
    <body>
        
    <div class="colorlib-loader" style="display: none;"></div>

    <div id="page"><a href="http://localhost:8080/hotel/public/login#" class="js-colorlib-nav-toggle colorlib-nav-toggle colorlib-nav-white"><i></i></a><div id="colorlib-offcanvas"><ul>
                                <li><a href="http://localhost:8080/hotel/public/index.html">Home</a></li>
                                <li><a href="http://localhost:8080/hotel/public/hotels.html">Hotels</a></li>
                                <li><a href="http://localhost:8080/hotel/public/services.html">Services</a></li>
                                <li><a href="http://localhost:8080/hotel/public/blog.html">Blog</a></li>
                                <li><a href="http://localhost:8080/hotel/public/about.html">About</a></li>
                                <li class="active"><a href="http://localhost:8080/hotel/public/contact.html">Contact</a></li>
                            </ul></div>
        <nav class="colorlib-nav" role="navigation" style="    background-color: teal;">
            <div class="top-menu">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-2">
                            <div id="colorlib-logo"><a href="http://localhost:8080/hotel/public/index.html">Tour</a></div>
                        </div>
                        <div class="col-xs-10 text-right menu-1">
                            <ul>
                                <li><a href="http://localhost:8080/hotel/public/index.html">Home</a></li>
                                <li><a href="http://localhost:8080/hotel/public/hotels.html">Hotels</a></li>
                                <li><a href="http://localhost:8080/hotel/public/services.html">Services</a></li>
                                <li><a href="http://localhost:8080/hotel/public/blog.html">Blog</a></li>
                                <li><a href="http://localhost:8080/hotel/public/about.html">About</a></li>
                                <li class="active"><a href="http://localhost:8080/hotel/public/contact.html">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        

        <div id="colorlib-contact">
                        <body class="theme-red ls-closed">
    <section class="content">
        <div class="container">
            <div class="col-xs-12 col-sm-12">
                <div class="card">
                    <div class="body">
                        <div>
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab" aria-expanded="true">Thông Tin Cá Nhân </a></li>

                                <li role="presentation" class=""><a href="#room_Information" aria-controls="settings" role="tab" data-toggle="tab" aria-expanded="false">Thông Tin Phòng Đặt </a></li>

                                <li role="presentation" class=""><a href="#profile_settings" aria-controls="settings" role="tab" data-toggle="tab" aria-expanded="false">Sửa Thông Tin Cá Nhân </a></li>

                                <li role="presentation" class=""><a href="#change_password_settings" aria-controls="settings" role="tab" data-toggle="tab" aria-expanded="false">Đổi Mật Khẩu </a></li>
                            </ul>
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade active in" id="home">
                                    @foreach($show_profile as $profile )
                                    <form class="form-horizontal">
                                        <div class="form-group">
                                            <label for="NameSurname" class="col-sm-2 control-label">Họ Tên</label>
                                            <div class="col-sm-10">
                                                <div class="form-line focused">
                                                    <input type="text" class="form-control" id="NameSurname" name="NameSurname" placeholder="Name Surname" value="{{ $profile->name }}" required="" disabled> </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="Email" class="col-sm-2 control-label">Email</label>
                                            <div class="col-sm-10">
                                                <div class="form-line focused">
                                                    <input type="email" class="form-control" id="Email" name="Email" placeholder="Email" value="{{ $profile->email }}" required="" disabled> </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="Phone" class="col-sm-2 control-label">Số Điện Thoại</label>
                                            <div class="col-sm-10">
                                                <div class="form-line focused">
                                                    <input type="number" class="form-control" id="NameSurname" name="NameSurname" placeholder="Name Surname" value="{{ $profile->phone }}" required="" disabled> </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="CMND" class="col-sm-2 control-label">Thẻ Căn Cước</label>
                                            <div class="col-sm-10">
                                                <div class="form-line focused">
                                                    <input type="number" class="form-control" id="NameSurname" name="NameSurname" placeholder="Name Surname" value="{{ $profile->idcard }}" required="" disabled> </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="Address" class="col-sm-2 control-label">Địa Chỉ</label>
                                            <div class="col-sm-10">
                                                <div class="form-line focused">
                                                    <input type="text" class="form-control" id="NameSurname" name="NameSurname" placeholder="Name Surname" value="{{ $profile->address }}" required="" disabled> </div>
                                            </div>
                                        </div>
                                    </form>
                                    @endforeach
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="room_Information">
                                    <form class="form-horizontal">
                                        <div class="form-group">
                                            <label for="NameSurname" class="col-sm-2 control-label">Name Surname</label>
                                            <div class="col-sm-10">
                                                <div class="form-line focused">
                                                    <input type="text" class="form-control" id="NameSurname" name="NameSurname" placeholder="Name Surname" value="Marc K. Hammond" required=""> </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="Email" class="col-sm-2 control-label">Email</label>
                                            <div class="col-sm-10">
                                                <div class="form-line focused">
                                                    <input type="email" class="form-control" id="Email" name="Email" placeholder="Email" value="example@example.com" required=""> </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="InputExperience" class="col-sm-2 control-label">Experience</label>
                                            <div class="col-sm-10">
                                                <div class="form-line">
                                                    <textarea class="form-control" id="InputExperience" name="InputExperience" rows="3" placeholder="Experience"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="InputSkills" class="col-sm-2 control-label">Skills</label>
                                            <div class="col-sm-10">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" id="InputSkills" name="InputSkills" placeholder="Skills"> </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-sm-10">
                                                <input type="checkbox" id="terms_condition_check" class="chk-col-red filled-in">
                                                <label for="terms_condition_check">I agree to the <a href="#">terms and conditions</a></label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-sm-10">
                                                <button type="submit" class="btn btn-danger">SUBMIT</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="profile_settings">
                                    <form class="form-horizontal">
                                        <div class="form-group">
                                            <label for="NameSurname" class="col-sm-2 control-label">Họ Tên</label>
                                            <div class="col-sm-10">
                                                <div class="form-line focused">
                                                    <input type="text" class="form-control" id="NameSurname" name="NameSurname" placeholder="Name Surname" value="Marc K. Hammond" required="" > </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="Email" class="col-sm-2 control-label">Email</label>
                                            <div class="col-sm-10">
                                                <div class="form-line focused">
                                                    <input type="email" class="form-control" id="Email" name="Email" placeholder="Email" value="example@example.com" required="" > </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="Phone" class="col-sm-2 control-label">Số Điện Thoại</label>
                                            <div class="col-sm-10">
                                                <div class="form-line focused">
                                                    <input type="number" class="form-control" id="NameSurname" name="NameSurname" placeholder="Name Surname" value="0981981399" required="" > </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="CMND" class="col-sm-2 control-label">Thẻ Căn Cước</label>
                                            <div class="col-sm-10">
                                                <div class="form-line focused">
                                                    <input type="number" class="form-control" id="NameSurname" name="NameSurname" placeholder="Name Surname" value="0981981399" required="" > </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="Address" class="col-sm-2 control-label">Địa Chỉ</label>
                                            <div class="col-sm-10">
                                                <div class="form-line focused">
                                                    <input type="text" class="form-control" id="NameSurname" name="NameSurname" placeholder="Name Surname" value="105 A21 Tập Thể Đồng Xa,Mai Dịch,Cầu Giấy,Hà Nội" required="" > </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-sm-10">
                                                <button type="submit" class="btn btn-danger">SUBMIT</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="change_password_settings">
                                    <form class="form-horizontal">
                                        <div class="form-group">
                                            <label for="OldPassword" class="col-sm-3 control-label">Old Password</label>
                                            <div class="col-sm-9">
                                                <div class="form-line">
                                                    <input type="password" class="form-control" id="OldPassword" name="OldPassword" placeholder="Old Password" required=""> </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="NewPassword" class="col-sm-3 control-label">New Password</label>
                                            <div class="col-sm-9">
                                                <div class="form-line">
                                                    <input type="password" class="form-control" id="NewPassword" name="NewPassword" placeholder="New Password" required=""> </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="NewPasswordConfirm" class="col-sm-3 control-label">New Password (Confirm)</label>
                                            <div class="col-sm-9">
                                                <div class="form-line">
                                                    <input type="password" class="form-control" id="NewPasswordConfirm" name="NewPasswordConfirm" placeholder="New Password (Confirm)" required=""> </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-offset-3 col-sm-9">
                                                <button type="submit" class="btn btn-danger">SUBMIT</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

 </body>
        </div>
        

        <footer id="colorlib-footer" role="contentinfo">
            <div class="container">
                <div class="row row-pb-md">
                    <div class="col-md-3 colorlib-widget">
                        <h4>Tour Agency</h4>
                        <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
                        <p>
                            
                        </p>
                    </div>
                    <div class="col-md-2 colorlib-widget">
                        <h4>Book Now</h4>
                        <p>
                            </p><ul class="colorlib-footer-links">
                                <li><a href="http://localhost:8080/hotel/public/login#">Flight</a></li>
                                <li><a href="http://localhost:8080/hotel/public/login#">Hotels</a></li>
                                <li><a href="http://localhost:8080/hotel/public/login#">Tour</a></li>
                                <li><a href="http://localhost:8080/hotel/public/login#">Car Rent</a></li>
                                <li><a href="http://localhost:8080/hotel/public/login#">Beach &amp; Resorts</a></li>
                                <li><a href="http://localhost:8080/hotel/public/login#">Cruises</a></li>
                            </ul>
                        <p></p>
                    </div>
                    <div class="col-md-2 colorlib-widget">
                        <h4>Top Deals</h4>
                        <p>
                            </p><ul class="colorlib-footer-links">
                                <li><a href="http://localhost:8080/hotel/public/login#">Edina Hotel</a></li>
                                <li><a href="http://localhost:8080/hotel/public/login#">Quality Suites</a></li>
                                <li><a href="http://localhost:8080/hotel/public/login#">The Hotel Zephyr</a></li>
                                <li><a href="http://localhost:8080/hotel/public/login#">Da Vinci Villa</a></li>
                                <li><a href="http://localhost:8080/hotel/public/login#">Hotel Epikk</a></li>
                            </ul>
                        <p></p>
                    </div>
                    <div class="col-md-2">
                        <h4>Blog Post</h4>
                        <ul class="colorlib-footer-links">
                            <li><a href="http://localhost:8080/hotel/public/login#">The Ultimate Packing List For Female Travelers</a></li>
                            <li><a href="http://localhost:8080/hotel/public/login#">How These 5 People Found The Path to Their Dream Trip</a></li>
                            <li><a href="http://localhost:8080/hotel/public/login#">A Definitive Guide to the Best Dining and Drinking Venues in the City</a></li>
                        </ul>
                    </div>

                    <div class="col-md-3 col-md-push-1">
                        <h4>Contact Information</h4>
                        <ul class="colorlib-footer-links">
                            <li>291 South 21th Street, <br> Suite 721 New York NY 10016</li>
                            <li><a href="tel://1234567920">+ 1235 2355 98</a></li>
                            <li><a href="mailto:info@yoursite.com">info@yoursite.com</a></li>
                            <li><a href="http://localhost:8080/hotel/public/login#">yoursite.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p>
                            <span class="block">Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a> , <a href="http://pexels.com/" target="_blank">Pexels.com</a></span>
                        </p>
                    </div>
                </div>
            </div>
        </footer>
    </div>


    <!-- jQuery -->


        <script src="js1/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="js1/bootstrap.js"></script>


</body></html>