
<!doctype html>
<html lang="en">
    <head>
     <title>Holidays</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="icon" href="room/images/loc.png" type="image/x-icon">
        
    
   
        <!-- Google Fonts -->   
        <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i%7CMerriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
        
        <link rel="stylesheet" href="room/fonts/flaticon/font/flaticon.css">
        <link rel="stylesheet" href="room/css/icomoon.css">
        
        <!-- Font Awesome Stylesheet -->
        <link rel="stylesheet" href="room/css/font-awesome.min.css">
            
        <!-- Custom Stylesheets --> 
        <link rel="stylesheet" href="room/css/style.css">
        <link rel="stylesheet" id="cpswitch" href="room/css/orange.css">
        <link rel="stylesheet" href="room/css/responsive.css">
        
        <!--Date-Picker Stylesheet-->
        <link rel="stylesheet" href="room/css/datepicker.css">
        
        <!-- Slick Stylesheet -->
        <link rel="stylesheet" href="room/css/slick.css">
        <link rel="stylesheet" href="room/css/slick-theme.css">
        <link rel="stylesheet" href="room/css/animate.css">
  <!-- Icomoon Icon Fonts-->
  
  <!-- Bootstrap  -->
  <link rel="stylesheet" href="room/css/bootstrap.css">
  <link rel="stylesheet" href="room/css/style1.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    </head>
    
    
    <body>
    
        <!--====== LOADER =====-->
         <div id="page">
        <nav class="colorlib-nav" role="navigation" >
      <div class="top-menu">
        <div class="container-fluid">
          <div class="row">
            <div class="col-xs-2">
              <div id="colorlib-logo"><a href="index.html">Tour</a></div>
            </div>
            <div class="col-xs-10 text-right menu-1">
              <ul>
                <li class="active"><a href="index.html">Home</a></li>
                <li class="has-dropdown">
                  <a href="tours.html">Tours</a>
                  <ul class="dropdown">
                    <li><a href="#">Destination</a></li>
                    <li><a href="#">Cruises</a></li>
                    <li><a href="#">Hotels</a></li>
                    <li><a href="#">Booking</a></li>
                  </ul>
                </li>
                <li><a href="hotels.html">Hotels</a></li>
                <li><a href="services.html">Services</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="about.html">About</a></li>
                @if (Session::has('customer_id'))

                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span><i class="fa fa-user"></i></span>  &nbsp;{{Session::get('email')}} </a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ route('profile') }}" style="background-color: cadetblue;"><span><i class="fa fa-user" ></i></span> &nbsp; Manager My Account</a></li>
                                <li><a href="{{ route('logout_user') }}" style="background-color: cadetblue;"><span><i class="fa fa-sign-out"></i></span> &nbsp;Logout</a></li>
                               
                            </ul>     
                            </li>
                   @else
                     <li><a href="{{route('login')}}">Contact</a></li>
                       @endif 
              </ul>
            </div>
          </div>
        </div>
      </div>
    </nav>
        <aside id="colorlib-hero"  >
            <div class="flexslider">
                <ul class="slides">
                <li style="background-image: url(images/cover-img-3.jpg);width: 100%;float: left;margin-right: -100%;position: relative;opacity: 1;display: block;z-index: 2;">
                    <div class="overlay"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
                                <div class="slider-text-inner text-center" style="color: white">
                                    <h2>by colorlib.com</h2>
                                    <h1>Login</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                </ul>
            </div>
        </aside>
     
        <div class="top1"></div>
        <!--===== INNERPAGE-WRAPPER ====-->
        <section class="innerpage-wrapper">
            <div id="hotel-details" class="innerpage-section-padding">
                <div class="container">
                    <div class="row mt-3">           
                        
                        <div class="col-xs-12 col-sm-12 col-md-3 mt-3 side-bar left-side-bar" style="margin-top: 147px">
                            
                            <div class="side-bar-block booking-form-block">
                                <h2 class="selected-price">$568.00 <span>De Forte</span></h2>
                            
                                <div class="booking-form">
                                    <h3>Book Hotel</h3>
                                    <p>Find your dream hotel today</p>
                                    
                                    <form>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="First Name" required/>                                       
                                        </div>
                                        
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Last Name" required/>                                       
                                        </div>
                                        
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Email" required/>                                       
                                        </div>
                                        
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Phone" required/>                                       
                                        </div>
                                        
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Country" required/>                                       
                                        </div>
                                        
                                        <div class="form-group">
                                            <input type="text" class="form-control dpd1" placeholder="Arrival Date" required/>                                              <i class="fa fa-calendar"></i>
                                        </div>
                                        
                                        <div class="form-group">
                                            <input type="text" class="form-control dpd2" placeholder="Departure Date" required/>                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-sm-6 col-md-12 col-lg-6 no-sp-r">
                                                <div class="form-group right-icon">
                                                    <select class="form-control">
                                                        <option selected>Rooms</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                    </select>
                                                    <i class="fa fa-angle-down"></i>
                                                </div>
                                            </div>
                                            
                                            <div class="col-sm-6 col-md-12 col-lg-6 no-sp-l">    
                                                <div class="form-group right-icon">
                                                    <select class="form-control">
                                                        <option selected>Beds</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                    </select>
                                                    <i class="fa fa-angle-down"></i>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-sm-6 col-md-12 col-lg-6 no-sp-r">
                                                <div class="form-group right-icon">
                                                    <select class="form-control">
                                                        <option selected>Adults</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                    </select>
                                                    <i class="fa fa-angle-down"></i>
                                                </div>
                                            </div>
                                            
                                            <div class="col-sm-6 col-md-12 col-lg-6 no-sp-l">    
                                                <div class="form-group right-icon">
                                                    <select class="form-control">
                                                        <option selected>Childs</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                    </select>
                                                    <i class="fa fa-angle-down"></i>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group right-icon">
                                            <select class="form-control">
                                                <option selected>Payment Method</option>
                                                <option>Credit Card</option>
                                                <option>Paypal</option>
                                            </select>
                                            <i class="fa fa-angle-down"></i>
                                        </div>
                                        
                                        <div class="checkbox custom-check">
                                            <input type="checkbox" id="check01" name="checkbox"/>
                                            <label for="check01"><span><i class="fa fa-check"></i></span>By continuing, you are agree to the <a href="#">Terms & Conditions.</a></label>
                                        </div>
                                        
                                        <button class="btn btn-block btn-orange">Confirm Booking</button>
                                    </form>

                                </div><!-- end booking-form -->
                            </div><!-- end side-bar-block -->
                            
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-12">
                                    <div class="side-bar-block main-block ad-block">
                                        <div class="main-img ad-img">
                                            <a href="#">
                                                <img src="room/images/car-ad.jpg" class="img-responsive" alt="car-ad" />
                                                <div class="ad-mask">
                                                    <div class="ad-text">
                                                        <span>Luxury</span>
                                                        <h2>Car</h2>
                                                        <span>Offer</span>
                                                    </div><!-- end ad-text -->
                                                </div><!-- end columns -->
                                            </a>
                                        </div><!-- end ad-img -->
                                    </div><!-- end side-bar-block -->
                                </div><!-- end columns -->
                                
                                <div class="col-xs-12 col-sm-6 col-md-12">    
                                    <div class="side-bar-block support-block">
                                        <h3>Need Help</h3>
                                        <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum.</p>
                                        <div class="support-contact">
                                            <span><i class="fa fa-phone"></i></span>
                                            <p>+1 123 1234567</p>
                                        </div><!-- end support-contact -->
                                    </div><!-- end side-bar-block -->
                                </div><!-- end columns -->
                                
                            </div><!-- end row -->
                        </div><!-- end columns -->
                        
                        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 content-side" style="margin-top: 147px">
                            
                            <div class="detail-slider">
                                <div class="feature-slider">
                                    <div><img src="images/images/1.jpg" class="img-responsive" alt="feature-img"/></div>
                                    <div><img src="images/images/2.jpg" class="img-responsive" alt="feature-img"/></div>
                                    <div><img src="images/images/3.jpg" class="img-responsive" alt="feature-img"/></div>
                                    <div><img src="images/images/4.jpg" class="img-responsive" alt="feature-img"/></div>
                                    <div><img src="images/images/5.jpg" class="img-responsive" alt="feature-img"/></div>
                                </div><!-- end feature-slider -->
                                
                                <div class="feature-slider-nav">
                                    <div><img src="images/images/1.jpg" class="img-responsive" alt="feature-thumb"/></div>
                                    <div><img src="images/images/2.jpg" class="img-responsive" alt="feature-thumb"/></div>
                                    <div><img src="images/images/3.jpg" class="img-responsive" alt="feature-thumb"/></div>
                                    <div><img src="images/images/4.jpg" class="img-responsive" alt="feature-thumb"/></div>
                                    <div><img src="images/images/5.jpg" class="img-responsive" alt="feature-thumb"/></div>
                                </div><!-- end feature-slider-nav -->
                            </div>  <!-- end detail-slider -->

                            <div class="detail-tabs">
                                <ul class="nav nav-tabs nav-justified">
                                    <li class="active"><a href="#hotel-overview" data-toggle="tab">Hotel Overview</a></li>
                                    <li><a href="#restaurant" data-toggle="tab">Restaurant</a></li>
                                    <li><a href="#pick-up" data-toggle="tab">Pick Up Services</a></li>
                                    <li><a href="#luxury-gym" data-toggle="tab">Luxury Gym</a></li>
                                    <li><a href="#sports-club" data-toggle="tab">Sports Club</a></li>
                                </ul>
                                
                                <div class="tab-content">

                                    <div id="hotel-overview" class="tab-pane in active">
                                        <div class="row">
                                            <div class="col-sm-4 col-md-4 tab-img">
                                                <img src="room/images/hotel-detail-tab-1.jpg" class="img-responsive" alt="flight-detail-img" />
                                            </div><!-- end columns -->
                                            
                                            <div class="col-sm-8 col-md-8 tab-text">
                                                <h3>Hotel Overview</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                            </div><!-- end columns -->
                                        </div><!-- end row -->
                                    </div><!-- end hotel-overview -->
                                    
                                    <div id="restaurant" class="tab-pane">
                                        <div class="row">
                                            <div class="col-sm-4 col-md-4 tab-img">
                                                <img src="room/images/hotel-detail-tab-2.jpg" class="img-responsive" alt="flight-detail-img" />
                                            </div><!-- end columns -->
                                            
                                            <div class="col-sm-8 col-md-8 tab-text">
                                                <h3>Restaurant</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate.</p>
                                            </div><!-- end columns -->
                                        </div><!-- end row -->
                                    </div><!-- end restaurant -->
                                    
                                    <div id="pick-up" class="tab-pane">
                                        <div class="row">
                                            <div class="col-sm-4 col-md-4 tab-img">
                                                <img src="room/images/hotel-detail-tab-3.jpg" class="img-responsive" alt="flight-detail-img" />
                                            </div><!-- end columns -->
                                            
                                            <div class="col-sm-8 col-md-8 tab-text">
                                                <h3>Pick Up Services</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.<br/> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                            </div><!-- end columns -->
                                        </div><!-- end row -->
                                    </div><!-- end pick-up -->
                                    
                                    <div id="luxury-gym" class="tab-pane">
                                        <div class="row">
                                            <div class="col-sm-4 col-md-4 tab-img">
                                                <img src="room/images/hotel-detail-tab-4.jpg" class="img-responsive" alt="flight-detail-img" />
                                            </div><!-- end columns -->
                                            
                                            <div class="col-sm-8 col-md-8 tab-text">
                                                <h3>Luxury Gym</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                            </div><!-- end columns -->
                                        </div><!-- end row -->
                                    </div><!-- end luxury-gym -->
                                    
                                    <div id="sports-club" class="tab-pane">
                                        <div class="row">
                                            <div class="col-sm-4 col-md-4 tab-img">
                                                <img src="room/images/hotel-detail-tab-5.jpg" class="img-responsive" alt="flight-detail-img" />
                                            </div><!-- end columns -->
                                            
                                            <div class="col-sm-8 col-md-8 tab-text">
                                                <h3>Sports Club</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br/> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                            </div><!-- end columns -->
                                        </div><!-- end row -->
                                    </div><!-- end sports-club -->
                                    
                                </div><!-- end tab-content -->
                            </div><!-- end detail-tabs -->
                            
                            <div class="available-blocks" id="available-rooms">
                                <h2>Available Rooms</h2>
                                <div class="list-block main-block room-block">
                                    <div class="list-content">
                                        <div class="main-img list-img room-img">
                                            <a href="#">
                                                <img src="room/images/available-room-1.jpg" class="img-responsive" alt="room-img" />
                                            </a>
                                            <div class="main-mask">
                                                <ul class="list-unstyled list-inline offer-price-1">
                                                    <li class="price">$150.00<span class="divider">|</span><span class="pkg">7 Nights</span></li>
                                                    <li class="rating">
                                                        <span><i class="fa fa-star orange"></i></span>
                                                        <span><i class="fa fa-star orange"></i></span>
                                                        <span><i class="fa fa-star orange"></i></span>
                                                        <span><i class="fa fa-star orange"></i></span>
                                                        <span><i class="fa fa-star lightgrey"></i></span>
                                                    </li>
                                                </ul>
                                            </div><!-- end main-mask -->
                                        </div><!-- end room-img -->
                                        
                                        <div class="list-info room-info">
                                            <h3 class="block-title"><a href="#">Single Room</a></h3>
                                            <p class="block-minor">Max Guests:02</p>
                                            <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper.</p>
                                            <a href="#" class="btn btn-orange btn-lg">View More</a>
                                         </div><!-- end room-info -->
                                    </div><!-- end list-content -->
                                </div><!-- end room-block -->
                                
                                <div class="list-block main-block room-block">
                                    <div class="list-content">
                                        <div class="main-img list-img room-img">
                                            <a href="#">
                                                <img src="room/images/available-room-2.jpg" class="img-responsive" alt="room-img" />
                                            </a>
                                            <div class="main-mask">
                                                <ul class="list-unstyled list-inline offer-price-1">
                                                    <li class="price">$250.00<span class="divider">|</span><span class="pkg">7 Nights</span></li>
                                                    <li class="rating">
                                                        <span><i class="fa fa-star orange"></i></span>
                                                        <span><i class="fa fa-star orange"></i></span>
                                                        <span><i class="fa fa-star orange"></i></span>
                                                        <span><i class="fa fa-star orange"></i></span>
                                                        <span><i class="fa fa-star lightgrey"></i></span>
                                                    </li>
                                                </ul>
                                            </div><!-- end main-mask -->
                                        </div><!-- end room-img -->
                                        
                                        <div class="list-info room-info">
                                            <h3 class="block-title"><a href="#">Double Room</a></h3>
                                            <p class="block-minor">Max Guest:03</p>
                                            <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper.</p>
                                            <a href="#" class="btn btn-orange btn-lg">View More</a>
                                         </div><!-- end room-info -->
                                    </div><!-- end list-content -->
                                </div><!-- end room-block -->
                                
                                <div class="list-block main-block room-block">
                                    <div class="list-content">
                                        <div class="main-img list-img room-img">
                                            <a href="#">
                                                <img src="room/images/available-room-3.jpg" class="img-responsive" alt="room-img" />
                                            </a>
                                            <div class="main-mask">
                                                <ul class="list-unstyled list-inline offer-price-1">
                                                    <li class="price">$350.00<span class="divider">|</span><span class="pkg">7 Nights</span></li>
                                                    <li class="rating">
                                                        <span><i class="fa fa-star orange"></i></span>
                                                        <span><i class="fa fa-star orange"></i></span>
                                                        <span><i class="fa fa-star orange"></i></span>
                                                        <span><i class="fa fa-star orange"></i></span>
                                                        <span><i class="fa fa-star lightgrey"></i></span>
                                                    </li>
                                                </ul>
                                            </div><!-- end main-mask -->
                                        </div><!-- end room-img -->
                                        
                                        <div class="list-info room-info">
                                            <h3 class="block-title"><a href="#">Twin Room</a></h3>
                                            <p class="block-minor">Max Guest:04</p>
                                            <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper.</p>
                                            <a href="#" class="btn btn-orange btn-lg">View More</a>
                                         </div><!-- end room-info -->
                                    </div><!-- end list-content -->
                                </div><!-- end room-block -->
                                
                                <div class="list-block main-block room-block">
                                    <div class="list-content">
                                        <div class="main-img list-img room-img">
                                            <a href="#">
                                                <img src="room/images/available-room-4.jpg" class="img-responsive" alt="room-img" />
                                            </a>
                                            <div class="main-mask">
                                                <ul class="list-unstyled list-inline offer-price-1">
                                                    <li class="price">$558.00<span class="divider">|</span><span class="pkg">7 Nights</span></li>
                                                    <li class="rating">
                                                        <span><i class="fa fa-star orange"></i></span>
                                                        <span><i class="fa fa-star orange"></i></span>
                                                        <span><i class="fa fa-star orange"></i></span>
                                                        <span><i class="fa fa-star orange"></i></span>
                                                        <span><i class="fa fa-star lightgrey"></i></span>
                                                    </li>
                                                </ul>
                                            </div><!-- end main-mask -->
                                        </div><!-- end room-img -->
                                        
                                        <div class="list-info room-info">
                                            <h3 class="block-title"><a href="#">Deluxe Room</a></h3>
                                            <p class="block-minor">Max Guest:05</p>
                                            <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper.</p>
                                            <a href="#" class="btn btn-orange btn-lg">View More</a>
                                         </div><!-- end room-info -->
                                    </div><!-- end list-content -->
                                </div><!-- end room-block -->
                                
                            </div><!-- end available-rooms -->
                            
                            
                            <div class="pages">
                                <ol class="pagination">
                                    <li><a href="#" aria-label="Previous"><span aria-hidden="true"><i class="fa fa-angle-left"></i></span></a></li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#" aria-label="Next"><span aria-hidden="true"><i class="fa fa-angle-right"></i></span></a></li>
                                </ol>
                            </div><!-- end pages -->
                        </div><!-- end columns -->

                    </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end hotel-details -->
        </section><!-- end innerpage-wrapper -->
        
        

  
        
        <!--======================= FOOTER =======================-->
        <footer id="colorlib-footer" role="contentinfo">
  <div class="container">
    <div class="row row-pb-md">
      <div class="col-md-3 colorlib-widget">
        <h4>Tour Agency</h4>
        <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
        <p>
          <ul class="colorlib-social-icons">
            <li><a href="#"><i class="icon-twitter"></i></a></li>
            <li><a href="#"><i class="icon-facebook"></i></a></li>
            <li><a href="#"><i class="icon-linkedin"></i></a></li>
            <li><a href="#"><i class="icon-dribbble"></i></a></li>
          </ul>
        </p>
      </div>
      <div class="col-md-2 colorlib-widget">
        <h4>Book Now</h4>
        <p>
          <ul class="colorlib-footer-links">
            <li><a href="#">Flight</a></li>
            <li><a href="#">Hotels</a></li>
            <li><a href="#">Tour</a></li>
            <li><a href="#">Car Rent</a></li>
            <li><a href="#">Beach &amp; Resorts</a></li>
            <li><a href="#">Cruises</a></li>
          </ul>
        </p>
      </div>
      <div class="col-md-2 colorlib-widget">
        <h4>Top Deals</h4>
        <p>
          <ul class="colorlib-footer-links">
            <li><a href="#">Edina Hotel</a></li>
            <li><a href="#">Quality Suites</a></li>
            <li><a href="#">The Hotel Zephyr</a></li>
            <li><a href="#">Da Vinci Villa</a></li>
            <li><a href="#">Hotel Epikk</a></li>
          </ul>
        </p>
      </div>
      <div class="col-md-2">
        <h4>Blog Post</h4>
        <ul class="colorlib-footer-links">
          <li><a href="#">The Ultimate Packing List For Female Travelers</a></li>
          <li><a href="#">How These 5 People Found The Path to Their Dream Trip</a></li>
          <li><a href="#">A Definitive Guide to the Best Dining and Drinking Venues in the City</a></li>
        </ul>
      </div>

      <div class="col-md-3 col-md-push-1">
        <h4>Contact Information</h4>
        <ul class="colorlib-footer-links">
          <li>291 South 21th Street, <br> Suite 721 New York NY 10016</li>
          <li><a href="tel://1234567920">+ 1235 2355 98</a></li>
          <li><a href="mailto:info@yoursite.com">info@yoursite.com</a></li>
          <li><a href="#">yoursite.com</a></li>
        </ul>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 text-center">
        <p>
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart2" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span> 
          <span class="block">Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a> , <a href="http://pexels.com/" target="_blank">Pexels.com</a></span>
        </p>
      </div>
    </div>
  </div>
</footer>
</div>

<div class="gototop js-top">
  <a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
</div>

</script>



         <!-- Page Scripts Starts -->
        <script src="room/js/jquery.min.js"></script>
        <script src="room/js/bootstrap.min.js"></script>
        <script src="room/js/bootstrap-datepicker.js"></script>
        <script src="room/js/slick.min.js"></script>
       
        <script src="room/js/custom-date-picker.js"></script>
        <script src="room/js/custom-slick.js"></script>
        <!-- Page Scripts Ends -->
        <!-- Page Scripts Ends -->
    </body>
</html>