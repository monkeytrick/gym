<!DOCTYPE html>
<html lang="en">
<head>
<!-- Meta -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="Anil z" name="author">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Want to start your yoga classes website online? Download yoga studio Premium website html template for your classes and course.">
<meta name="keywords" content="yoga teacher, yoga responsive, yoga instructor, yoga studio, yoga theme, yoga blog, yoga website, yoga fitness, yoga templates, meditation website templates">

<!-- SITE TITLE -->
<title>Dhyana - Yoga Studio & Meditation HTML Template</title>
<!-- Favicon Icon -->
<link rel="shortcut icon" type="image/x-icon" href="/images/favicon.png">
<!-- Animation CSS -->
<link rel="stylesheet" href="/css/animate.css">	
<!-- Latest cms/bootstrap min CSS -->
<link rel="stylesheet" href="/css/bootstrap/bootstrap.min.css">
<!-- Google Font -->
<link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700&display=swap" rel="stylesheet">   
<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">  
<!-- Icon Font CSS -->
<link rel="stylesheet" href="/css/ionicons.min.css">
<!-- FontAwesome CSS -->
<link rel="stylesheet" href="/css/all.min.css">
<!-- Flaticon Font CSS -->
<link rel="stylesheet" href="/css/flaticon.css">
<!-- Themify Font CSS -->
<link rel="stylesheet" href="/css/themify-icons.css">
<!--- owl carousel CSS-->
<link rel="stylesheet" href="/css/owl.carousel.min.css">
<link rel="stylesheet" href="/css/owl.theme.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<!-- Magnific Popup CSS -->
<link rel="stylesheet" href="/css/magnific-popup.css">
<!-- jquery-ui CSS -->
<link rel="stylesheet" href="/css/jquery-ui.css">
<!-- Style CSS -->
<link rel="stylesheet" href="/css/style.css">

<!-- <link rel="stylesheet" href="{{ asset('public/css/style.css') }}"> -->

<link rel="stylesheet" id="layoutstyle" href="/css/theme-default.css">

<meta name="csrf-token" content="{{ csrf_token() }}">

</head>

<body>

<!-- LOADER -->
<div id="preloader">
    <div class="loading_wrap">
    	<img src="/images/loading_logo.png" alt="logo" />
    </div>
</div>
<!-- END LOADER --> 

<!-- Log-in Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h5 class="modal-title" id="exampleModalLabel">Log in</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="login_form mb-3" id="loginform">
                    <div class="panel-body">
                        <form method="post" action="{{ route('login') }}" class="login form_style2">
                        @csrf
      
                           <div class="form-group">
                                <label for="email">Username or email <span class="required">*</span></label>
                                <input type="email" required class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                                        
                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror                        

                            </div>

                            <div class="form-group">
                                <label>Password <span class="required">*</span></label>
                                <input class="form-control @error('password') is-invalid @enderror" required type="password" name="password" required autocomplete="current-password">

                            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-default btn-block" name="login" value="Log in">Log in</button>
                            </div>
                            <div class="login_footer">
                            <div class="form-group">
                                <a href="#" style="color: #D30B36">Create Account</a>
                            </div>
                                <a href="#">Lost your password?</a>
                            </div>
                        </form>
                    </div>
                </div>
      </div>
    </div>
  </div>
</div>
<!-- End Log-in Modal -->

<!-- Booking Modal -->
<div class="modal fade" id="bookingModal" tabindex="-1" role="dialog" aria-labelledby="bookingModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h5 class="modal-title" id="exampleModalLabel">Confirm Booking</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="login_form mb-3">
                    <div class="panel-body">
                        <form method="post" action="booking" id="conf-booking" class="login form_style2">
                        @csrf
                           <input id="class-id" type="hidden" name="class" value="">
      
                           <div class="form-group">
                                <h5 id="modal-class-name">Class: </h5>
                            </div>

                            <div class="form-group">
                                <h5 id="modal-class-date"></h5>
                            </div>
                            <div class="form-group">
                                 <h5 id="modal-class-time"></h5>
                            </div>
                            <div class="form-group">
                                 <h5 id="modal-class-price"></h5>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-default btn-block">Confirm</button>
                            </div>
                        </form>
                    </div>
                </div>
      </div>
    </div>
  </div>
</div>
<!-- End Booking Modal -->



<!-- START HEADER -->
<header class="header_wrap fixed-top dark_skin main_menu_uppercase main_menu_weight_600 transparent_header">
    <div class="container">
        <nav class="navbar navbar-expand-lg"> 
            <a class="navbar-brand" href="index.html">
                <img class="logo_light" src="/images/logo_white.png" alt="logo" />
                <img class="logo_dark" src="/images/logo_dark.png" alt="logo" />
                <img class="logo_default" src="/images/logo_dark.png" alt="logo" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="ion-android-menu"></span> </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
				<ul class="navbar-nav">
                    <li class="dropdown">
                        <a class="dropdown-toggle nav-link active" href="#" data-toggle="dropdown">Home</a>
                        <div class="dropdown-menu">
                            <ul> 
                                <li><a class="dropdown-item nav-link nav_item active" href="index.html">Home Page One</a></li> 
                                <li><a class="dropdown-item nav-link nav_item" href="index-2.html">Home Page Two</a></li> 
                                <li><a class="dropdown-item nav-link nav_item" href="index-3.html">Home Page Three</a></li> 
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a class="nav-link" href="schedule.html">Schedule</a>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu">
                            <ul> 
                            	<li><a class="dropdown-item nav-link nav_item dropdown-toggler" href="#">About</a>
                                	<div class="dropdown-menu">
                                        <ul> 
                                            <li><a class="dropdown-item nav-link nav_item" href="about.html">About One</a></li>
                                            <li><a class="dropdown-item nav-link nav_item" href="about-2.html">About Two</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a class="dropdown-item nav-link nav_item dropdown-toggler" href="#">Team</a>
                                	<div class="dropdown-menu">
                                        <ul> 
                                            <li><a class="dropdown-item nav-link nav_item" href="team.html">Team</a></li>
                                            <li><a class="dropdown-item nav-link nav_item" href="team-single.html">Team Single</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a class="dropdown-item nav-link nav_item dropdown-toggler" href="#">Classes</a>
                                	<div class="dropdown-menu">
                                        <ul> 
                                            <li><a class="dropdown-item nav-link nav_item" href="classes.html">All Classes</a></li>
                                            <li><a class="dropdown-item nav-link nav_item" href="classes-details.html">Classes Details</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a class="dropdown-item nav-link nav_item dropdown-toggler" href="#">Events</a>
                                    <div class="dropdown-menu">
                                        <ul> 
                                            <li><a class="dropdown-item nav-link nav_item" href="events.html">All Events</a></li> 
                                            <li><a class="dropdown-item nav-link nav_item" href="events-details.html">Events Details</a></li> 
                                        </ul>
                                    </div>
                                </li>
                                <li><a class="dropdown-item nav-link nav_item dropdown-toggler" href="#">Gallery</a>
                                	<div class="dropdown-menu">
                                        <ul> 
                                            <li><a class="dropdown-item nav-link nav_item" href="gallery-three-columns.html">Grid 3 Columns</a></li>
                                            <li><a class="dropdown-item nav-link nav_item" href="gallery-four-columns.html">Grid 4 Columns</a></li>
                                            <li><a class="dropdown-item nav-link nav_item" href="gallery-masonry-three-columns.html">Masonry 3 Columns</a></li>
                                            <li><a class="dropdown-item nav-link nav_item" href="gallery-masonry-four-columns.html">Masonry 4 Columns</a></li>
                                            <li><a class="dropdown-item nav-link nav_item" href="gallery-detail.html">Gallery Detail</a></li>
                                        </ul>
                                    </div>
                                </li>  
                                <li><a class="dropdown-item nav-link nav_item" href="faq.html">FAQ</a></li> 
                                <li><a class="dropdown-item nav-link nav_item" href="coming-soon.html">Coming Soon</a></li>
                                <li><a class="dropdown-item nav-link nav_item" href="404.html">404 Page</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="dropdown dropdown-mega-menu">
                        <a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">Element</a>
                        <div class="dropdown-menu">
                        	<ul class="mega-menu d-lg-flex">
                            	<li class="mega-menu-col col-lg-3">
                                    <ul> 
                                        <li><a class="dropdown-item nav-link nav_item" href="accordions.html"><i class="ti-layout-accordion-separated"></i> Accordions</a></li> 
                                        <li><a class="dropdown-item nav-link nav_item" href="blockquotes.html"><i class="ti-quote-left"></i> Blockquotes</a></li>
                                        <li><a class="dropdown-item nav-link nav_item" href="buttons.html"><i class="ti-mouse"></i> Buttons</a></li>
                                        <li><a class="dropdown-item nav-link nav_item" href="call-to-action.html"><i class="ti-headphone-alt"></i> Call to Action</a></li>
                                        <li><a class="dropdown-item nav-link nav_item" href="columns.html"><i class="ti-layout-column3-alt"></i> Columns</a></li>
                                    </ul>
                                </li>
                                <li class="mega-menu-col col-lg-3">
                                    <ul>
                                    	<li><a class="dropdown-item nav-link nav_item" href="countdown.html"><i class="ti-alarm-clock"></i> Countdown</a></li> 
                                    	<li><a class="dropdown-item nav-link nav_item" href="counter.html"><i class="ti-timer"></i> Counters</a></li>
                                        <li><a class="dropdown-item nav-link nav_item" href="form-controls.html"><i class="ti-clipboard"></i> Form Controls</a></li>
                                        <li><a class="dropdown-item nav-link nav_item" href="heading.html"><i class="ti-text"></i> Heading</a></li>
                                    	<li><a class="dropdown-item nav-link nav_item" href="highlights.html"><i class="ti-underline"></i> Highligts</a></li> 
                                    </ul>
                                </li>
                                <li class="mega-menu-col col-lg-3">
                                    <ul>
                                    	<li><a class="dropdown-item nav-link nav_item" href="icon-boxes.html"><i class="ti-widget"></i> Icon Boxes</a></li> 
                                    	<li><a class="dropdown-item nav-link nav_item" href="lists.html"><i class="ti-list"></i> Lists</a></li> 
                                        <li><a class="dropdown-item nav-link nav_item" href="maps.html"><i class="ti-map-alt"></i> Maps</a></li>
                                    	<li><a class="dropdown-item nav-link nav_item" href="pricing-table.html"><i class="ti-layout-column3"></i> Pricing Table</a></li> 
                                        <li><a class="dropdown-item nav-link nav_item" href="progress-bars.html"><i class="ti-layout-list-post"></i> Progress Bars</a></li>
                                    </ul>
                                </li>
                                <li class="mega-menu-col col-lg-3">
                                    <ul>
                                    	<li><a class="dropdown-item nav-link nav_item" href="subscribe.html"><i class="ti-bookmark"></i> Subscribe</a></li> 
                                    	<li><a class="dropdown-item nav-link nav_item" href="tab.html"><i class="ti-layout-accordion-separated"></i> Tab</a></li> 
                                    	<li><a class="dropdown-item nav-link nav_item" href="testimonial.html"><i class="ti-layout-slider-alt"></i> Testimonials</a></li>
                                        <li><a class="dropdown-item nav-link nav_item" href="tooltips-popovers.html"><i class="ti-comment-alt"></i> Tooltip Popovers</a></li> 
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">Blog</a>
                        <div class="dropdown-menu">
                            <ul>
                                <li>
                                    <a class="dropdown-item nav-link nav_item dropdown-toggler" href="#">Blog Layout</a>
                                    <div class="dropdown-menu dropdown-reverse">
                                        <ul> 
                                            <li><a class="dropdown-item nav-link nav_item" href="blog-standard-left-sidebar.html">Blog Standard Left Sidebar</a></li> 
                                            <li><a class="dropdown-item nav-link nav_item" href="blog-standard-right-sidebar.html">Blog Standard Right Sidebar</a></li> 
                                            <li><a class="dropdown-item nav-link nav_item" href="blog-three-columns.html">Blog 3 Columns </a></li>
                                            <li><a class="dropdown-item nav-link nav_item" href="blog-four-columns.html">Blog 4 Columns</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a class="dropdown-item nav-link nav_item dropdown-toggler" href="#">Blog Masonry</a>
                                    <div class="dropdown-menu dropdown-reverse">
                                        <ul> 
                                            <li><a class="dropdown-item nav-link nav_item" href="blog-masonry-three-columns.html">Masonry 3 Columns</a></li>
                                            <li><a class="dropdown-item nav-link nav_item" href="blog-masonry-four-columns.html">Masonry 4 Columns</a></li>
                                            <li><a class="dropdown-item nav-link nav_item" href="blog-masonry-left-sidebar.html">Masonry Left Sidebar</a></li>
                                            <li><a class="dropdown-item nav-link nav_item" href="blog-masonry-right-sidebar.html">Masonry Right Sidebar</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a class="dropdown-item nav-link nav_item dropdown-toggler" href="#">Blog List</a>
                                    <div class="dropdown-menu dropdown-reverse">
                                        <ul> 
                                            <li><a class="dropdown-item nav-link nav_item" href="blog-list-left-sidebar.html">Left Sidebar</a></li>
                                            <li><a class="dropdown-item nav-link nav_item" href="blog-list-right-sidebar.html">Right Sidabar</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a class="dropdown-item nav-link nav_item dropdown-toggler" href="#">Sinlge Post</a>
                                    <div class="dropdown-menu dropdown-reverse">
                                        <ul> 
                                            <li><a class="dropdown-item nav-link nav_item" href="blog-single.html">Default</a></li>
                                            <li><a class="dropdown-item nav-link nav_item" href="blog-single-left-sidebar.html">Left Sidebar</a></li>
                                            <li><a class="dropdown-item nav-link nav_item" href="blog-single-right-sidebar.html">Right Sidebar</a></li>
                                            <li><a class="dropdown-item nav-link nav_item" href="blog-single-slider.html">Slider Post</a></li>
                                            <li><a class="dropdown-item nav-link nav_item" href="blog-single-video.html">Video post</a></li>
                                            <li><a class="dropdown-item nav-link nav_item" href="blog-single-audio.html">Audio Post</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">Shop</a>
                        <div class="dropdown-menu">
                            <ul> 
                                <li><a class="dropdown-item nav-link nav_item" href="shop.html">Shop List</a></li> 
                                <li><a class="dropdown-item nav-link nav_item" href="product-details.html">Product Detail</a></li> 
                                <li><a class="dropdown-item nav-link nav_item" href="cart.html">Cart</a></li> 
                                <li><a class="dropdown-item nav-link nav_item" href="checkout.html">Checkout</a></li> 
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a class="nav-link" href="contact.html">Contact</a>
                    </li>
                     @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <!-- <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a> -->
                                    <a class="nav-link" href="" data-toggle='modal' data-target='#exampleModal'>Login</a>
                                </li>
                            @endif
                            
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <!-- <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a> -->
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                </li>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                </ul>

        </nav>
    </div>
</header>
<!-- END HEADER --> 

@yield('content')

<!-- START FOOTER -->
<footer class="bg_dark footer_dark">
	<div class="top_footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-7 mb-4 mb-lg-0">
                    <h5 class="widget_title">Abouts us</h5>
                    <div class="footer_desc">
                    <p>Phasellus blandit massa enim. elit id varius nunc. Lorems ipsum dolor sit consectetur. If you are going to use a passage of Lorem Ipsum.</p>
                    </div>
                    <ul class="contact_info list_none">
                        <li>
                            <span class="fa fa-map-marker-alt "></span>
                            <address>256 Mohra Rd, North London, UK</address>
                        </li>
                        <li>
                            <span class="fa fa-mobile-alt"></span>
                            <p>+123 456 7890</p>
                        </li>
                        <li>
                            <span class="fa fa-envelope"></span>
                            <a href="mailto:info@yourmail.com">info@yourmail.com</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-2 col-sm-5 mb-4 mb-lg-0">
                	<h5 class="widget_title">Quick Links</h5>
                	<ul class="list_none widget_links links_style2">
                    	<li><a href="#">Join Us</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Features</a></li>
                        <li><a href="#">Feedback</a></li>
                        <li><a href="#">Support center</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-7 mb-4 mb-md-0">
                	<h5 class="widget_title">Letest Post</h5>
                    <ul class="recent_post border_bottom_dash list_none">
                        <li>
                        	<div class="post_footer">
                                <div class="post_content">
                                	<h6><a href="#">Lorem ipsum dolor sit amet nullam consectetur adipiscing elit.</a></h6>
                                    <span class="post_date"><i class="ion-android-time"></i>April 14, 2018</span>
                                </div>
                            </div>
                        </li>
                        <li>
                        	<div class="post_footer">
                                <div class="post_content">
                                	<h6><a href="#">Lorem ipsum dolor sit amet nullam consectetur adipiscing elit.</a></h6>
                                    <span class="post_date"><i class="ion-android-time"></i>April 14, 2018</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-5">
                	<h5 class="widget_title">Subscribe Newsletter</h5>
                    <div class="newsletter_form mb-4 mb-lg-5">
                        <form> 
                            <input type="text" class="form-control rounded-0" required="" placeholder="Enter Email Address">
                            <button type="submit" title="Subscribe" class="btn btn-default rounded-0" name="submit" value="Submit"><i class="ion-paper-airplane"></i></button>
                        </form>
                    </div>
                    <h5 class="widget_title">Stay Connected</h5>
                    <ul class="list_none social_icons radius_social">
                        <li><a href="#" class="sc_facebook"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#" class="sc_twitter"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#" class="sc_google"><i class="fab fa-google-plus-g"></i></a></li>
                        <li><a href="#" class="sc_instagram"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#" class="sc_pinterest"><i class="fab fa-pinterest"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12">
                <div class="bottom_footer border_top_transparent">
                    <div class="row">
                        <div class="col-md-6">
                            <p class="copyright m-md-0 text-center text-md-left">Copyright © 2019 - Template Made By <a href="https://bestwebcreator.com/" class="text_default">BestWebCreator</a></p>
                        </div>
                        <div class="col-md-6">
                            <ul class="list_none footer_link text-center text-md-right">
                                <li><a href="#">Terms of use</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shape_img">
        <div class="ol_shape10">
            <img src="/images/shape10.png" alt="shape36"/>
        </div>
    </div>
</footer>
<!-- END FOOTER -->

<a href="#" class="scrollup" style="display: none;"><i class="ion-ios-arrow-up"></i></a> 

<!-- Latest jQuery --> 
<script src="/js/jquery-1.12.4.min.js"></script>
<!-- jquery-ui js --> 
<script src="/js/jquery-ui.js"></script> 
<!-- popper min js --> 
<script src="/js/popper.min.js"></script>
<!-- Latest compiled and minified cms/bootstrap --> 
<script src="/js/bootstrap.min.js"></script> 
<!-- owl-carousel min js  --> 
<script src="js/owl.carousel.min.js"></script> 
<!-- magnific-popup min js  --> 
<script src="/js/magnific-popup.min.js"></script> 
<!-- waypoints min js  --> 
<script src="/js/waypoints.min.js"></script> 
<!-- parallax js  --> 
<script src="/js/parallax.js"></script> 
<!-- jquery dd js  --> 
<script src="/js/jquery.dd.min.js"></script>
<!-- countdown js  --> 
<script src="/js/jquery.countdown.min.js"></script> 
<!-- jquery.counterup.min js --> 
<script src="/js/jquery.counterup.min.js"></script>
<!-- jquery.parallax-scroll js -->
<script src="/js/jquery.parallax-scroll.js"></script>
<!-- fit video  -->
<script src="/js/jquery.fitvids.js"></script>
<!-- imagesloaded js -->
<script src="/js/imagesloaded.pkgd.min.js"></script>
<!-- isotope min js --> 
<script src="/js/isotope.min.js"></script>
<!-- cookie js -->
<script src="/js/js.cookie.js"></script>
<!-- scripts js --> 
<script src="/js/scripts.js"></script>


@stack('scripts')

</body>
</html>