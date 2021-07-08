@extends('layouts.layout')

@section('content')
<!-- START SECTION BANNER -->
<section class="banner_slider banner_slide_half p-0">
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active bg_light_pink">
            	<div class="banner_slide_content">
                    <div class="container">
                        <div class="row justify-content-end align-items-center">
                        	<div class="col-xl-6 col-md-5">
								<div class="banner_img text-center">
                                    <div class="animation" data-animation="fadeInLeft" data-animation-delay="0.5s">
                                        <img data-parallax='{"y": -30, "smoothness": 20}' src="/images/banner_img1.png" alt="image"/>
                                    </div>
                                    <div class="circle_bg1">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-7">
                                <div class="banner_content animation" data-animation="zoomIn" data-animation-delay="0.4s" data-parallax='{"y": 30, "smoothness": 10}'>
                                    <h2 class="animation" data-animation="fadeInDown" data-animation-delay="0.5s"> Welcome to Yoga Studio</h2>
                                    <p class="animation" data-animation="fadeInUp" data-animation-delay="0.6s">Yoga has always been something more, than just a workout routine. It's always been more of a philosophy, a lifestyle for a mind & body balance. </p>
                                    <a class="btn btn-default rounded-0 animation" href="#" data-animation="fadeInUp" data-animation-delay="0.7s">Learn More</a>
                                    <a class="btn btn-white rounded-0 animation" href="#" data-animation="fadeInUp" data-animation-delay="0.8s">Contact Us</a>
                        		</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner_shape">
                    <div class="shape1">
                    	<div class="animation" data-animation="fadeInLeft" data-animation-delay="0.5s">
                        	<img src="/images/slider_pattern1.png" alt="image"/>
                        </div>
                    </div>
                    <div class="shape2">
                    	<div class="animation" data-animation="fadeInLeft" data-animation-delay="0.5s">
                        	<img src="/images/slider_pattern2.png" alt="image"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item bg_light_yellow">
                <div class="banner_slide_content">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-5">
                                <div class="banner_img2 text-center">
                                    <div class="animation border_img" data-animation="fadeInRight" data-animation-delay="0.5s">
                                        <img data-parallax='{"y": -30, "smoothness": 20}' src="/images/banner_img2.png" alt="image"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-7 order-md-first">
                                <div class="banner_content animation" data-animation="fadeIn" data-animation-delay="0.4s" data-parallax='{"y": 30, "smoothness": 10}'>
                                    <h2 class="animation" data-animation="fadeInDown" data-animation-delay="0.5s">Find lifestyle to the yoga </h2>
                                    <p class="animation" data-animation="fadeInUp" data-animation-delay="0.6s">Through and through we were trying to make our Yoga studio a peaceful, meditational place of tranquility, which according to our ever-growing list of attendees we've succeeded at.</p>
                                    <a class="btn btn-default rounded-0 animation" href="#" data-animation="fadeInUp" data-animation-delay="0.7s">Learn More</a>
                                    <a class="btn btn-white rounded-0 animation" href="#" data-animation="fadeInUp" data-animation-delay="0.8s">Contact Us</a>
                        		</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner_shape">
                    <div class="shape3">
                    	<div class="animation" data-animation="fadeInLeft" data-animation-delay="0.5s">
                        	<img src="/images/slider_pattern3.png" alt="image"/>
                        </div>
                    </div>
                    <div class="shape4">
                    	<div class="animation" data-animation="fadeInLeft" data-animation-delay="0.5s">
                        	<img src="/images/slider_pattern4.png" alt="image"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item bg_light_gold">
                <div class="banner_slide_content">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-5">
                                <div class="banner_img3 text-center">
                                    <div class="animation" data-animation="fadeInRight" data-animation-delay="0.5s">
                                        <img data-parallax='{"y": -30, "smoothness": 20}' src="/images/banner_img3.png" alt="image"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-7 order-md-first">
                                <div class="banner_content animation" data-animation="fadeIn" data-animation-delay="0.4s" data-parallax='{"y": 30, "smoothness": 10}'>
                                    <h2 class="animation" data-animation="fadeInDown" data-animation-delay="0.5s">Yoga Studio for Everyone</h2>
                                    <p class="animation" data-animation="fadeInUp" data-animation-delay="0.6s">Our Yoga studio has become one of the most popular yoga venues in USA. It is time to go beyond your limits and discover your passion. </p>
                                    <a class="btn btn-default rounded-0 animation" href="#" data-animation="fadeInUp" data-animation-delay="0.7s">Learn More</a>
                                    <a class="btn btn-white rounded-0 animation" href="#" data-animation="fadeInUp" data-animation-delay="0.8s">Contact Us</a>
                       			 </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner_shape">
                    <div class="shape5">
                    	<div class="animation" data-animation="fadeInLeft" data-animation-delay="0.5s">
                        	<img src="/images/slider_pattern5.png" alt="image"/>
                        </div>
                    </div>
                    <div class="shape6">
                    	<div class="animation" data-animation="fadeInLeft" data-animation-delay="0.5s">
                        	<img data-parallax='{"y": 30, "smoothness": 20}' src="/images/slider_pattern6.png" alt="image"/>
                        </div>
                    </div>
                    <div class="shape7">
                    	<div class="animation" data-animation="fadeInLeft" data-animation-delay="0.5s">
                        	<img data-parallax='{"y": -30, "smoothness": 20}' src="/images/slider_pattern7.png" alt="image"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     <div class="carousel_nav">
        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev"><i class="ion-chevron-left"></i></a>
        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next"><i class="ion-chevron-right"></i></a>
    </div>
    </div>
</section>
<!-- END SECTION BANNER -->

<!-- START SECTION BENIFIT -->
<section class="pb_70">
	<div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8 col-md-10 text-center animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                <div class="heading_s1">	
                    <span class="sub_heading">What we do</span>
                    <h2>Benifits of Yoga</h2>
                </div>
                <p>Contrary to popular belief Lorem is not simply random text. It has roots in adipiscing ncididunt piece of classical literature</p>
                <div class="small_divider clearfix"></div>
            </div>
        </div>
		<div class="row">
        	<div class="col-lg-4 col-sm-6">
            	<div class="icon_box box_shadow4 text-center icon_box_style1 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                	<div class="box_icon">
                    	<i class="flaticon-strong-body"></i>
                    </div>
                    <div class="intro_desc">
                    	<h5>Strong Body life</h5>
                        <p> Lorem ipsum dolor sit amet, consectetur blandit magna adipiscing elit ncididunt labore et dolore magna aliqua enim. </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
            	<div class="icon_box box_shadow4 text-center icon_box_style1 animation" data-animation="fadeInUp" data-animation-delay="0.3s">
                	<div class="box_icon">
                    	<i class="flaticon-flexibility"></i>
                    </div>
                    <div class="intro_desc">
                    	<h5>increased flexibility</h5>
                        <p> Lorem ipsum dolor sit amet, consectetur blandit magna adipiscing elit ncididunt labore et dolore magna aliqua enim. </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
            	<div class="icon_box box_shadow4 text-center icon_box_style1 animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                	<div class="box_icon">
                    	<i class="flaticon-healthy-lifestyle"></i>
                    </div>
                    <div class="intro_desc">
                    	<h5>healthy lifestyle</h5>
                        <p> Lorem ipsum dolor sit amet, consectetur blandit magna adipiscing elit ncididunt labore et dolore magna aliqua enim. </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- END SECTION BENIFIT -->

<!-- START SECTION ABOUT -->
<section class="bg_light_pink pb_70">
<div class="container">
    	<div class="row justify-content-center">
        	<div class="col-xl-6 col-lg-8 col-md-10 text-center animation" data-animation="fadeInUp" data-animation-delay="0.2s">
            	<div class="heading_s1">
                	<span class="sub_heading">Yoga teacher</span>
                	<h2>Our Awesome Team</h2>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur blandit magna adipiscing elit ncididunt labore et dolore magna aliqua enim. </p>
                <div class="small_divider clearfix"></div>
            </div>
        </div>
        <div class="row">
        	<div class="col-lg-3 col-sm-6">
            	<div class="team_box animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                	<div class="team_img">
                    	<img src="/images/team1.jpg" alt="team1">
                        <ul class="list_none social_icons social_style1 rounded_social">
                            <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                            <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                            <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                            <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                        </ul>
                    </div>
                    <div class="team_info text-center">
                        <div class="team_title">
                            <h5><a href="#">Elena Mark</a></h5>
                            <span>Yoga Teacher</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
            	<div class="team_box animation" data-animation="fadeInUp" data-animation-delay="0.3s">
                	<div class="team_img">
                    	<img src="/images/team2.jpg" alt="team2">
                        <ul class="list_none social_icons social_style1 rounded_social">
                            <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                            <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                            <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                            <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                        </ul>
                    </div>
                    <div class="team_info text-center">
                        <div class="team_title">
                            <h5><a href="#">Grace Wong</a></h5>
                            <span>Yoga Teacher</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
            	<div class="team_box animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                	<div class="team_img">
                    	<img src="/images/team3.jpg" alt="team3">
                        <ul class="list_none social_icons social_style1 rounded_social">
                            <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                            <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                            <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                            <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                        </ul>
                    </div>
                    <div class="team_info text-center">
                        <div class="team_title">
                            <h5><a href="#">Maria Redwood</a></h5>
                            <span>Yoga Teacher</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION ABOUT -->

<!-- START SECTION CLASSES -->
<section class="pb_70">
	<div class="container">
    	<div class="row justify-content-center">
        	<div class="col-xl-6 col-lg-8 col-md-10 text-center animation" data-animation="fadeInUp" data-animation-delay="0.2s">
            	<div class="heading_s1">
                	<span class="sub_heading">Choose Your Level Best</span>
                	<h2>Some Of Our Classes</h2>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur blandit magna adipiscing elit ncididunt labore et dolore magna aliqua enim. </p>
                <div class="small_divider clearfix"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="classes_box box_shadow1 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                    <div class="classes_img">
                        <img src="/images/classes_img1.jpg" alt="image" />
                        <div class="link_container">
                            <a href="#"><i class="ion-plus"></i></a>
                        </div>
                    </div>
                    <div class="classes_info">
                         <div class="classes_teacher">
                            <img src="/images/cl_teacher_img1.jpg" alt="image" />
                            <span>Maria</span>
                        </div>
                        <div class="classes_title">
                            <span class="badge badge-pill badge-info">Hatha</span>
                            <h4><a href="#">Yoga For Beginners</a></h4>
                        </div>
                        <ul class="classes_schedule">
                            <li><i class="ion-calendar"></i>Mon, Thu, Fri</li>
                            <li><i class="ion-android-alarm-clock"></i>9:00 - 11:00</li>
                        </ul>

                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="classes_box box_shadow1 animation" data-animation="fadeInUp" data-animation-delay="0.3s">
                    <div class="classes_img">
                        <img src="/images/classes_img2.jpg" alt="image" />
                        <div class="link_container">
                            <a href="#"><i class="ion-plus"></i></a>
                        </div>
                    </div>
                    <div class="classes_info">
                         <div class="classes_teacher">
                            <img src="/images/cl_teacher_img2.jpg" alt="image" />
                            <span>Elena</span>
                        </div>
                        <div class="classes_title">
                            <span class="badge badge-pill badge-success">Kundalini</span>
                            <h4><a href="#">Balance Body & Mind</a></h4>
                        </div>
                        <ul class="classes_schedule">
                            <li><i class="ion-calendar"></i>Tue, Wed, Sat</li>
                            <li><i class="ion-android-alarm-clock"></i>9:00 - 11:00</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="classes_box box_shadow1 animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                    <div class="classes_img">
                        <img src="/images/classes_img3.jpg" alt="image" />
                        <div class="link_container">
                            <a href="#"><i class="ion-plus"></i></a>
                        </div>
                    </div>
                    <div class="classes_info">
                         <div class="classes_teacher">
                            <img src="/images/cl_teacher_img3.jpg" alt="image" />
                            <span>Regina</span>
                        </div>
                        <div class="classes_title">
                            <span class="badge badge-pill badge-danger">Pilates</span>
                            <h4><a href="#">Increased Flexibility</a></h4>
                        </div>
                        <ul class="classes_schedule">
                            <li><i class="ion-calendar"></i>Mon, Thu, Fri</li>
                            <li><i class="ion-android-alarm-clock"></i>11:00 - 12:00</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION CLASSES -->

<section>
        <div class="container">
            <div class="row align-items-center">
                <!-- <div class="col-lg-6 col-md-5">
                    <div class="text-center mb-4 mb-md-0 animation animated fadeInUp" data-animation="fadeInUp" data-animation-delay="0.2s" style="animation-delay: 0.2s; opacity: 1;">
                        <img src="/images/event_img.png" alt="event_img">
                    </div>
                </div> -->
                <div class="col-lg-12 col-md-12">
                    <div class="heading_s1 animation animated fadeInUp" data-animation="fadeInUp" data-animation-delay="0.3s" style="animation-delay: 0.3s; opacity: 1;">
                        <span class="sub_heading">Yoga Events &amp; Workshops</span>
                        <h3>Upcoming Classes</h3>
                        <div class="col-12 text-center">
            	<ul class="classes_filter animation" data-animation="fadeInUp" data-animation-delay="0.2s">
            
            <!-- Display class type filters -->
                    
                    <li><a href="#" class="class-options current" data-filter="all">All Classes</a></li>
                @php
                    $class_holder = [];
                @endphp


                @foreach($classes as $class) 
                    @if(!in_array($class->class_name, $class_holder, true))
                    @php
                       array_push($class_holder, $class->class_name)
                    @endphp
                    @endif                
                @endforeach

                @foreach($class_holder as $class_name_show)
                     <li><a href="#" class="class-options" data-filter={{$class_name_show}}>{{$class_name_show}}</a></li>
                @endforeach
<!-- 
                	<li><a href="#" class="current" data-filter="all">All Classes</a></li>
                    <li><a href="#" data-filter="hatha">Hatha</a></li>
                    <li><a href="#" data-filter="kundalini">Kundalini</a></li>
                    <li><a href="#" data-filter="pilates">Pilates</a></li>
                    <li><a href="#" data-filter="alignment">Alignment</a></li>
                    <li><a href="#" data-filter="yoga-dance">Yoga Dance</a></li> -->
                </ul>
            </div>
                    </div>
                    <div class="xs_divider clearfix"></div>
                    <!-- <div class="event_box box_shadow4 animation animated fadeInUp" data-animation="fadeInUp" data-animation-delay="0.4s" style="animation-delay: 0.4s; opacity: 1;">
                        <div class="event_date">
                            <h5><span>24</span> Apr</h5>
                        </div>
                        <div class="event_info">
                            <h5 class="event_title"><a href="#">Yoga Fitness Experience</a></h5>
                            <ul class="list_none event_meta">
                                <li><i class="ti-time"></i>9:00 am 4:00 pm</li>
                                <li><i class="ti-location-pin"></i>New York City</li>
                            </ul>
                            <a href="#" class="text_default">Read More</a>
                        </div>
                    </div> -->

                    @foreach($classes as $class)
                        <div class="event_box box_shadow4 animation animated fadeInUp" data-animation="fadeInUp" data-animation-delay="0.5s" style="animation-delay: 0.5s; opacity: 1;">
                            <div class="event_date">
                                <h5><span>{{ date('j', strtotime($class->class_date)) }}</span> {{ date('M', strtotime($class->class_date)) }} </h5>
                            </div>
                            <div class="event_info">
                                <h5 class="event_title"><a href="{{ url('bookings/' . $class->class_id) }}">{{$class->class_name}}</a></h5>
                                <ul class="list_none event_meta">
                                    
                                    <li><i class="ti-time">{{ date('g', strtotime($class->class_date)) }}</i></li>

                                    <!-- {{\Carbon\Carbon::create($class->class_date)->month}} -->

                                    <li><i class="ti-location-pin"></i>¥{{$class->class_reg_price}}</li>
                                </ul>
                                @if(Auth::check())
                                    <!-- <a class="booking-ref" href="{{ url('bookings/' . $class->class_id) }}">Book Now</a>          -->
                                    <a href="" class="book-class" data-class="{{$class->class_name}}" data-time="{{$class->class_time}}" data-date="{{$class->class_date}}" 
                                    data-date="{{$class->class_date}}" data-price="{{$class->class_reg_price}}" data-id="{{$class->class_id}}" data-toggle='modal' data-target='#bookingModal'>Book Now</a>                                                       
                                @else 
                                    <a href="" data-toggle='modal' data-target='#exampleModal'>Book Now</a>                                
                                @endif
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>

<!-- END SECTION CLASSES TIMETABLE -->

<!-- START SECTION PRICING TABLE -->
<section class="bg_light_yellow pb_70">
	<div class="container">
    	<div class="row justify-content-center">
        	<div class="col-xl-6 col-lg-8 col-md-10 text-center animation" data-animation="fadeInUp" data-animation-delay="0.2s">
            	<div class="heading_s1">
                	<span class="sub_heading">Choose Our Package</span>
                	<h2>Yoga Pricing Plan</h2>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur blandit magna adipiscing elit ncididunt labore et dolore magna aliqua enim. </p>
                <div class="small_divider clearfix"></div>
            </div>
        </div>
    	<div class="row">
            <div class="col-lg-4">
                <div class="pricing_box pricing_style1 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                    <div class="pr_title_wrap border-bottom">
                        <h4 class="pr_title">regular member</h4>
                        <div class="price_tage">
                            <h2>$49<span>/ Month</span></h2>
                        </div>
                    </div>
                    <div class="pr_content pt-3">
                        <ul class="list_none pr_list">
                            <li>Basic Options</li>
                            <li>Full Access</li>
                            <li>Customers Support</li>
                            <li>Free Updates</li>
                            <li>Advanced Options</li>
                        </ul>
                    </div>
                    <div class="pr_footer">
                        <a href="#" class="btn btn-dark rounded-0">Buy Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="pricing_box pricing_style1 animation" data-animation="fadeInUp" data-animation-delay="0.3s">
                    <div class="pricing_ribbon">Popular</div>
                    <div class="pr_title_wrap bg_default text_white">
                        <h4 class="pr_title">V.i.p Member</h4>
                        <div class="price_tage">
                            <h2>$99<span>/ Month</span></h2>
                        </div>
                    </div>
                    <div class="pr_content pt-3">
                        <ul class="list_none pr_list">
                            <li>Standard Options</li>
                            <li>Full Access</li>
                            <li>Customers Support</li>
                            <li>Free Updates</li>
                            <li>Advanced Options</li>
                        </ul>
                    </div>
                    <div class="pr_footer">
                        <a href="#" class="btn btn-default rounded-0">Buy Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="pricing_box pricing_style1 animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                    <div class="pr_title_wrap border-bottom">
                        <h4 class="pr_title">Premium Member</h4>
                        <div class="price_tage">
                            <h2>$199<span>/ Month</span></h2>
                        </div>
                    </div>
                    <div class="pr_content pt-3">
                        <ul class="list_none pr_list">
                            <li>Unlimited Options</li>
                            <li>Full Access</li>
                            <li>Customers Support</li>
                            <li>Free Updates</li>
                            <li>Advanced Options</li>
                        </ul>
                    </div>
                    <div class="pr_footer">
                        <a href="#" class="btn btn-dark rounded-0">Buy Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shape_img">
        <div class="ol_shape8">
            <div class="animation" data-animation="fadeInLeft" data-animation-delay="0.5s">
                <img src="/images/shape8.png" alt="image"/>
            </div>
        </div>
        <div class="ol_shape9">
            <div class="animation" data-animation="fadeInLeft" data-animation-delay="0.5s">
                <img src="/images/shape9.png" alt="image"/>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION PRICING TABLE -->

<!-- START SECTION TESTIMONIAL -->
<section>
	<div class="container">
    	<div class="row justify-content-center">
        	<div class="col-xl-6 col-lg-8 col-md-10 text-center animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                <div class="heading_s1">
                	<span class="sub_heading">Testimonial</span>
                    <h2>Our Client Say!</h2>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                <div class="xs_divider clearfix d-none d-md-block"></div>
            </div>
        </div>
        <div class="row">
        	<div class="col-12 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
            	<div class="testimonial_slider testimonial_style1 carousel_slider owl-carousel owl-theme" data-margin="15" data-loop="true" data-autoplay="true" data-responsive='{"0":{"items": "1"}, "768":{"items": "2"}, "1199":{"items": "3"}}'>
                    <div class="testimonial_box">
                        <div class="testi_meta">
                        	<div class="testimonial_img">
                                <img src="/images/client_img1.jpg" alt="client">
                            </div>
                        	<div class="testi_user">
                            	<h5>Merry Walter</h5>
                                <span>Web Designer</span>
                            </div>
                        </div>
                        <div class="testi_desc">
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Phasellus blandit massa enim Nullam varius nunc.Lorem ipsum doloramet consectetur adipiscing</p>
                        </div>
                    </div>
                    <div class="testimonial_box">
                        <div class="testi_meta">
                        	<div class="testimonial_img">
                                <img src="/images/client_img2.jpg" alt="client">
                            </div>
                        	<div class="testi_user">
                            	<h5>Elena Mark</h5>
                                <span>Web Designer</span>
                            </div>
                        </div>
                        <div class="testi_desc">
                            	<p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Phasellus blandit massa enim Nullam varius nunc.Lorem ipsum doloramet consectetur adipiscing</p>
                            </div>
                    </div>
                    <div class="testimonial_box">
                        <div class="testi_meta">
                        	<div class="testimonial_img">
                                <img src="/images/client_img3.jpg" alt="client">
                            </div>
                        	<div class="testi_user">
                            	<h5>Calvin William</h5>
                                <span>Web Designer</span>
                            </div>
                        </div>
                        <div class="testi_desc">
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Phasellus blandit massa enim Nullam varius nunc.Lorem ipsum doloramet consectetur adipiscing</p>
                        </div>
                    </div>
                    <div class="testimonial_box">
                        <div class="testi_meta">
                        	<div class="testimonial_img">
                                <img src="/images/client_img4.jpg" alt="client">
                            </div>
                        	<div class="testi_user">
                            	<h5>Maria Wolter</h5>
                                <span>Web Designer</span>
                            </div>
                        </div>
                        <div class="testi_desc">
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Phasellus blandit massa enim Nullam varius nunc.Lorem ipsum doloramet consectetur adipiscing</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION TESTIMONIAL -->

<!-- START SECTION TEACHER -->
<section class="bg_light_pink pb_70">
	<div class="container">
    	<div class="row justify-content-center">
        	<div class="col-xl-6 col-lg-8 col-md-10 text-center animation" data-animation="fadeInUp" data-animation-delay="0.2s">
            	<div class="heading_s1">
                	<span class="sub_heading">Yoga teacher</span>
                	<h2>Our Awesome Team</h2>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur blandit magna adipiscing elit ncididunt labore et dolore magna aliqua enim. </p>
                <div class="small_divider clearfix"></div>
            </div>
        </div>
        <div class="row">
        	<div class="col-lg-3 col-sm-6">
            	<div class="team_box animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                	<div class="team_img">
                    	<img src="/images/team1.jpg" alt="team1">
                        <ul class="list_none social_icons social_style1 rounded_social">
                            <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                            <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                            <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                            <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                        </ul>
                    </div>
                    <div class="team_info text-center">
                        <div class="team_title">
                            <h5><a href="#">Elena Mark</a></h5>
                            <span>Yoga Teacher</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
            	<div class="team_box animation" data-animation="fadeInUp" data-animation-delay="0.3s">
                	<div class="team_img">
                    	<img src="/images/team2.jpg" alt="team2">
                        <ul class="list_none social_icons social_style1 rounded_social">
                            <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                            <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                            <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                            <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                        </ul>
                    </div>
                    <div class="team_info text-center">
                        <div class="team_title">
                            <h5><a href="#">Grace Wong</a></h5>
                            <span>Yoga Teacher</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
            	<div class="team_box animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                	<div class="team_img">
                    	<img src="/images/team3.jpg" alt="team3">
                        <ul class="list_none social_icons social_style1 rounded_social">
                            <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                            <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                            <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                            <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                        </ul>
                    </div>
                    <div class="team_info text-center">
                        <div class="team_title">
                            <h5><a href="#">Maria Redwood</a></h5>
                            <span>Yoga Teacher</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
            	<div class="team_box animation" data-animation="fadeInUp" data-animation-delay="0.5s">
                	<div class="team_img">
                    	<img src="/images/team4.jpg" alt="team4">
                        <ul class="list_none social_icons social_style1 rounded_social">
                            <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                            <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                            <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                            <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                        </ul>
                    </div>
                    <div class="team_info text-center">
                        <div class="team_title">
                            <h5><a href="#">Merry Walter</a></h5>
                            <span>Yoga Teacher</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION TEACHER -->

<!-- START SECTION BLOG -->
<section class="pb_70">
	<div class="container">
    	<div class="row justify-content-center">
        	<div class="col-xl-6 col-lg-8 col-md-10 text-center animation" data-animation="fadeInUp" data-animation-delay="0.2s">
            	<div class="heading_s1">
                	<span class="sub_heading">Our Letest Articles</span>
                	<h2>From Our Blog & News</h2>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur blandit magna adipiscing elit ncididunt labore et dolore magna aliqua enim. </p>
                <div class="small_divider clearfix"></div>
            </div>
        </div>
        <div class="row justify-content-center">
        	<div class="col-lg-4 col-md-6">
            	<div class="blog_post box_shadow4 animation" data-animation="fadeInUp" data-animation-delay="0.3s">
                	<div class="blog_img">
                        <a href="#">
                            <img src="/images/blog_small_img1.jpg" alt="blog_small_img1">
                        </a>
                    </div>
                    <div class="blog_content">
                    	<h5 class="blog_title"><a href="#">Varius Phasellus blandit massa enim</a></h5>
                        <ul class="list_none blog_meta">
                        	<li><a href="#"><img src="/images/cl_teacher_img1.jpg" alt="image"><span>Dayna</span></a></li>
                            <li><a href="#"><i class="far fa-calendar"></i>Mar 23, 2018</a></li>
                            <li><a href="#"><i class="far fa-comments"></i>4</a></li>
                        </ul>
                        <p>Phasellus blandit massa enim elit variununc Lorems ipsum consectetur industry. If you are use dolor sit enim passage of Lorem Ipsum.</p>
                        <a href="#" class="blog_link">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
            	<div class="blog_post box_shadow4 animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                	<div class="blog_img">
                        <a href="#">
                            <img src="/images/blog_small_img2.jpg" alt="blog_small_img2">
                        </a>
                    </div>
                    <div class="blog_content">
                    	<h5 class="blog_title"><a href="#">Varius Phasellus blandit massa enim</a></h5>
                        <ul class="list_none blog_meta">
                        	<li><a href="#"><img src="/images/cl_teacher_img3.jpg" alt="image"><span>Dayna</span></a></li>
                            <li><a href="#"><i class="far fa-calendar"></i>Mar 23, 2018</a></li>
                            <li><a href="#"><i class="far fa-comments"></i>4</a></li>
                        </ul>
                        <p>Phasellus blandit massa enim elit variununc Lorems ipsum consectetur industry. If you are use dolor sit enim passage of Lorem Ipsum.</p>
                        <a href="#" class="blog_link">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
            	<div class="blog_post box_shadow4 animation" data-animation="fadeInUp" data-animation-delay="0.5s">
                	<div class="blog_img">
                        <a href="#">
                            <img src="/images/blog_small_img3.jpg" alt="blog_small_img3">
                        </a>
                    </div>
                    <div class="blog_content">
                    	<h5 class="blog_title"><a href="#">Varius Phasellus blandit massa enim</a></h5>
                        <ul class="list_none blog_meta">
                        	<li><a href="#"><img src="/images/cl_teacher_img4.jpg" alt="image"><span>Dayna</span></a></li>
                            <li><a href="#"><i class="far fa-calendar"></i>Mar 23, 2018</a></li>
                            <li><a href="#"><i class="far fa-comments"></i>4</a></li>
                        </ul>
                        <p>Phasellus blandit massa enim elit variununc Lorems ipsum consectetur industry. If you are use dolor sit enim passage of Lorem Ipsum.</p>
                        <a href="#" class="blog_link">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION BLOG -->
@endsection

@push('scripts')
    <script src="/js/booking-conf.js"></script>
    <script src="/js/class-options-menu.js"></script>
@endpush