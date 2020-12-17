<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

	<title>Dashboard - Big Data</title>

	<!-- Fav Icon -->
	<link rel="icon" href="{{URL::asset('/public/user/images/faticon-bd.ico')}}" type="image/x-icon">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

	<!-- Stylesheets -->
	<link href="{{URL::asset('/public/user/css/font-awesome-all.css')}}" rel="stylesheet">
	<link href="{{URL::asset('/public/user/css/flaticon.css')}}" rel="stylesheet">
	<link href="{{URL::asset('/public/user/css/owl.css')}}" rel="stylesheet">
	<link href="{{URL::asset('/public/user/css/bootstrap.css')}}" rel="stylesheet">
	<link href="{{URL::asset('/public/user/css/jquery.fancybox.min.css')}}" rel="stylesheet">
	<link href="{{URL::asset('/public/user/css/animate.css')}}" rel="stylesheet">
	<link href="{{URL::asset('/public/user/css/style.css')}}" rel="stylesheet">
	<link href="{{URL::asset('/public/user/css/responsive.css')}}" rel="stylesheet">

</head>


<!-- page wrapper -->
<body class="boxed_wrapper">

	<!-- preloader -->
	<div class="preloader"></div>
	<!-- preloader -->

	<!-- main header -->
	<header class="main-header home-4">
		<div class="outer-container">
			<div class="container">
				<div class="main-box clearfix">
					<div class="logo-box pull-left">
						<figure class="logo">
							<a href="index.html">
								<img src="{{URL::asset('/public/user/images/logo-bd.png')}}" alt="" width="210"></a>
							</figure>
						</div>
						<div class="menu-area pull-right clearfix">
							<!--Mobile Navigation Toggler-->
							<div class="mobile-nav-toggler">
								<i class="icon-bar"></i>
								<i class="icon-bar"></i>
								<i class="icon-bar"></i>
							</div>
							<nav class="main-menu navbar-expand-md navbar-light">
								<div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
									<ul class="navigation clearfix">
										<li class="current dropdown"><a href="/">Home</a>

										</li> 
										<li class="dropdown"><a href="/about">About</a>

										</li>
										<li class="dropdown"><a href="/our-service">Our Service</a>
											<ul>
												<li><a href="{{ url('/IT/consulting')}}">IT Consulting</a></li>
												<li><a href="{{ url('/software-house')}}">Sofware House</a></li>
												<li><a href="{{ url('/website')}}">Website</a></li>
												<li><a href="{{ url('/android')}}">App Android</a></li>
												<li><a href="{{ url('/gap/analysis')}}">Gap Analysis</a></li>
												<li><a href="{{ url('/management-bussines')}}">Consultation Management Bussines</a></li>
											</ul>
										</li>
										<li class="dropdown"><a href="/visi-misi">Visi Misi</a>

										</li>
                                        <li class="dropdown"><a href="/team">Team</a>
                                        <!-- <ul>
                                            <li><a href="blog.html">Latest News</a></li>
                                            <li><a href="blog-details.html">News Details</a></li>
                                        </ul> -->
                                    </li>                              
                                    <li><a href="/contact">Contact</a></li>
                                </ul>
                            </div>
                        </nav>
                        <div class="btn-box"><a href="/"><i class="fab fa-whatsapp"></i> Contact Live</a></div>
                    </div>
                </div>
            </div>
        </div>

        <!--sticky Header-->
        <div class="sticky-header">
        	<div class="container clearfix">
        		<figure class="logo-box"><a href="/">
        			<img src="{{URL::asset('/public/user/images/logo-bd.png')}}" alt="" width="180"></a>
        		</figure>
        		<div class="menu-area">
        			<nav class="main-menu clearfix">
        				<!--Keep This Empty / Menu will come through Javascript-->
        			</nav>
        		</div>
        	</div>
        </div>
    </header>
    <!-- main-header end -->

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
    	<div class="menu-backdrop"></div>
    	<div class="close-btn"><i class="fas fa-times"></i></div>

    	<nav class="menu-box">
    		<div class="nav-logo"><a href="/">
    			<img src="{{URL::asset('/public/user/images/logo-bd-2.png')}}" alt="" width="165"></a>
    		</div>
    		<div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
    		<div class="contact-info">
    			<h4>Contact Info</h4>
    			<ul>
    				<li>Chicago 12, Melborne City, USA</li>
    				<li><a href="tel:+8801682648101">+88 01682648101</a></li>
    				<li><a href="mailto:info@example.com">info@example.com</a></li>
    			</ul>
    		</div>
    		<div class="social-links">
    			<ul class="clearfix">
    				<li><a href="#"><span class="fab fa-twitter"></span></a></li>
    				<li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
    				<li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
    				<li><a href="#"><span class="fab fa-instagram"></span></a></li>
    				<li><a href="#"><span class="fab fa-youtube"></span></a></li>
    			</ul>
    		</div>
    	</nav>
    </div><!-- End Mobile Menu -->

    <!-- banner-section -->
    <section class="banner-style-four" style="background-image: url(/public/user/images/icons/banner-bg-3.png);">
    	<div class="pattern-bg" style="background-image: url(/public/user/images/icons/pattern-5.png);"></div>
    	<div class="anim-icons">
    		<div class="icon icon-1"><img src="{{URL::asset('/public/user/images/icons/anim-icon-1.png')}}" alt=""></div>
    		<div class="icon icon-2 rotate-me"><img src="{{URL::asset('/public/user/images/icons/anim-icon-2.png')}}" alt=""></div>
    		<div class="icon icon-3 rotate-me"><img src="{{URL::asset('/public/user/images/icons/anim-icon-3.png')}}" alt=""></div>
    	</div>
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-6 col-md-12 col-sm-12 content-column">
    				<div class="content-box wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
    					<h1>To secure your data is our Priority</h1>
    					<div class="text">Gunakan Aplikasi untuk meningkatkan bisnis anda</div>
    					<div class="btn-box">
    						<a href="#app" class="link-btn">Get it on<i class="fas fa-angle-double-right"></i></a>
    						<!-- <a href="https://www.youtube.com/watch?v=nfP5N9Yc72A&amp;t=28s" class="lightbox-image video-btn" data-caption="">Overview Video<i class="flaticon-play-button"></i></a> -->
    					</div>
    				</div>
    			</div>
    			<div class="col-lg-6 col-md-12 col-sm-12 image-column">
    				<div class="image-box">
    					<div class="layer-bg" style="background-image: url(/public/user/images/icons/leaf-1.png);"></div>
    					<figure class="image clearfix float-bob-y"><img src="{{URL::asset('/public/user/images/resource/home-5.png')}}" alt=""></figure>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>
    <!-- banner-section end -->

    <!-- feature-style-seven -->
    <section class="feature-style-seven">
    	<div class="pattern-bg1" style="background-image: url(/public/user/images/icons/shap-10.png);"></div>
    	<div class="pattern-bg2" style="background-image: url(/public/user/images/icons/shap-11.png);"></div>
    	<div class="container">
    		<div class="inner-box">
    			<div class="row align-items-center">
    				<div class="col-lg-6 col-md-12 col-sm-12 image-column">
    					<div id="image_block_19">
    						<div class="image-box js-tilt">
    							<figure class="image clearfix wow slideInLeft" data-wow-delay="00ms" data-wow-duration="1500ms"><img src="{{URL::asset('/public/user/images/resource/about.png')}}" width="608" alt=""></figure>
    						</div>
    					</div>
    				</div>
    				<div class="col-lg-6 col-md-12 col-sm-12 content-column">
    					<div id="content_block_19">
    						<div class="content-box wow fadeInRight" data-wow-delay="300ms" data-wow-duration="1500ms">
    							<div class="icon-box wow zoomIn animated" data-wow-delay="300ms" data-wow-duration="1500ms"><i class="far fa-comments"></i></div>
    							<div class="sec-title"><h2>BIG DATA<br/>Bhineka Inti Global Data</h2></div>
    							<div class="text">Pada tahun 2015, <b>BIG DATA CONSULTING</b> dibentuk dan menjadi lembaga training dan konsultansi yang memberikan jasa konsultasi dan pelatihan, khususnya di bidang Teknologi Informasi.! <br/>
                                    <b>BIG DATA CONSULTING</b> berubah menjadi lembaga yang berbadan hukum sejak bulan Maret tahun 2020.
                                </div>
                                <div class="btn-box"><a href="/about" class="theme-btn">See More<i class="fas fa-angle-right"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    		<!-- <div class="inner-box">
    			<div class="row align-items-center">
    				<div class="col-lg-6 col-md-12 col-sm-12 content-column">
    					<div id="content_block_19">
    						<div class="content-box wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
    							<div class="icon-box wow zoomIn animated" data-wow-delay="300ms" data-wow-duration="1500ms"><i class="far fa-paper-plane"></i></div>
    							<div class="sec-title"><h2>Mengapa Memilih Kami.?</h2></div>
    							<div class="text">That cheeky bugger down the pub squiffy arse spiffing cup of char on your bike mate, quaint I Jeffrey I don't want no agro you mug zonked Richard, barney bobby matie boy David a the full monty. Don't get shirty with me faff about cheesed off cheeky bubble.!</div>
    							<div class="btn-box"><a href="#service" class="theme-btn">See More<i class="fas fa-angle-right"></i></a></div>
    						</div>
    					</div>
    				</div>
    				<div class="col-lg-6 col-md-12 col-sm-12 image-column">
    					<div id="image_block_20">
    						<div class="image-box js-tilt">
    							<figure class="image clearfix wow slideInRight" data-wow-delay="00ms" data-wow-duration="1500ms"><img src="{{URL::asset('/public/user/images/resource/illustration-8.png')}}" alt=""></figure>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div> -->
    	</div>
    </section>
    <!-- feature-style-seven end -->

    <!-- transactions-work -->
    <section class="transactions-work">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div id="content_block_39">
                        <div class="content-box">
                            <div class="sec-title"><h2>Mengapa Memilih Kami.?</h2></div>
                            <h5>To secure your data is our priority.!</h5>
                            <div class="text">
                                <p>BIG DATA CONSULTING berubah menjadi lembaga yang berbadan hukum sejak bulan Maret tahun 2020 dengan bisnis utama yang mengedepankan pada layanan.</p>
                                <p></p>
                            </div>
                            <!-- <div class="btn-box"><a href="#" class="theme-btn-two">Read More</a></div> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 inner-column">
                    <div id="content_block_40">
                        <div class="inner-box">
                            <div class="single-item wow fadeInLeft" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <div class="count-box" style="background-image: url(/public/user/images/icons/icon-9.png);">01</div>
                                <div class="box">
                                    <div class="pattern-bg">
                                        <div class="pattern-1" style="background-image: url(/public/user/images/icons/shap-19.png);"></div>
                                        <div class="pattern-2" style="background-image: url(/public/user/images/icons/shap-20.png);"></div>
                                    </div>
                                    <h4><a href="#">Develoment Application</a></h4>
                                    <div class="text">Aktivitas Pemrograman Komputer lainnya</div>
                                </div>
                            </div>
                            <div class="single-item wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                                <div class="count-box" style="background-image: url(/public/user/images/icons/icon-10.png);">02</div>
                                <div class="box">
                                    <div class="pattern-bg">
                                        <div class="pattern-1" style="background-image: url(/public/user/images/icons/shap-19.png);"></div>
                                        <div class="pattern-2" style="background-image: url(/public/user/images/icons/shap-21.png);"></div>
                                    </div>
                                    <h4><a href="#">Information Security</a></h4>
                                    <div class="text">Aktivitas Konsultasi Keamanan Informasi</div>
                                </div>
                            </div>
                            <div class="single-item wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
                                <div class="count-box" style="background-image: url(/public/user/images/icons/icon-11.png);">03</div>
                                <div class="box">
                                    <div class="pattern-bg">
                                        <div class="pattern-1" style="background-image: url(/public/user/images/icons/shap-19.png);"></div>
                                        <div class="pattern-2" style="background-image: url(/public/user/images/icons/shap-22.png);"></div>
                                    </div>
                                    <h4><a href="#">Management Bussiness</a></h4>
                                    <div class="text">Aktivitas Konsultasi Manajemen Lainnya</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- transactions-work end -->

    <!-- service-style-two -->
    <section class="service-style-two centred" id="service">
    	<div class="container">
    		<div class="sec-title center">
    			<h2>Our Service</h2>
    			<p>Get what you need to manage your business.</p>
    		</div>
    		<div class="inner-content">
    			<div class="row">
    				<div class="col-lg-4 col-md-6 col-sm-12 service-block">
    					<div class="service-block-two wow fadeInLeft animated" data-wow-delay="00ms" data-wow-duration="1500ms">
    						<div class="inner-box">
    							<div class="icon-box">
    								<img src="{{URL::asset('/public/user/images/icons/konsultan.png')}}" width="75">
    							</div>
    							<h4><a href="/IT/consulting">IT Consultation</a></h4>
    							<!-- <div class="text">IT Audit, Vulnerability Assessment & Penetration Testing,  IT Master Plan</div> -->
    						</div>
    					</div>
    				</div>
    				<div class="col-lg-4 col-md-6 col-sm-12 service-block">
    					<div class="service-block-two wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
    						<div class="inner-box">
    							<div class="icon-box"><img src="{{URL::asset('/public/user/images/icons/software-house.png')}}" width="75">
    							</div>
    							<h4><a href="/software-house">Development Application</a></h4>
    							<!-- <div class="text">Development Application.</div> -->
    						</div>
    					</div>
    				</div>
    				<div class="col-lg-4 col-md-6 col-sm-12 service-block">
    					<div class="service-block-two wow fadeInRight animated" data-wow-delay="00ms" data-wow-duration="1500ms">
    						<div class="inner-box">
    							<div class="icon-box"><img src="{{URL::asset('/public/user/images/icons/website.png')}}" width="75">
    							</div>
    							<h4><a href="#">Website Development</a></h4>
    							<!-- <div class="text"></div> -->
    						</div>
    					</div>
    				</div>
    				<div class="col-lg-4 col-md-6 col-sm-12 service-block">
    					<div class="service-block-two wow fadeInLeft animated" data-wow-delay="300ms" data-wow-duration="1500ms">
    						<div class="inner-box">
    							<div class="icon-box">
    								<img src="{{URL::asset('/public/user/images/icons/android.png')}}" width="75">
    							</div>
    							<h4><a href="#app">IT Support</a></h4>
    							<!-- <div class="text">Help Desk, Networking, PC Checking.</div> -->
    						</div>
    					</div>
    				</div>
    				<div class="col-lg-4 col-md-6 col-sm-12 service-block">
    					<div class="service-block-two wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
    						<div class="inner-box">
    							<div class="icon-box">
    								<img src="{{URL::asset('/public/user/images/icons/gap-2.png')}}" width="75">
    							</div>
    							<h4><a href="#">Gap Analysis</a></h4>
    							<!-- <div class="text">Initial Assessment.</div> -->
    						</div>
    					</div>
    				</div>
    				<div class="col-lg-4 col-md-6 col-sm-12 service-block">
    					<div class="service-block-two wow fadeInRight animated" data-wow-delay="300ms" data-wow-duration="1500ms">
    						<div class="inner-box">
    							<div class="icon-box">
    								<img src="{{URL::asset('/public/user/images/icons/management.png')}}" width="75">
    							</div>
    							<h4><a href="#">Consultation Management Bussiness</a></h4>
    							<!-- <div class="text"></div> -->
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>
    <!-- service-style-two end -->

    <!-- feature-style-eight -->
    <section class="feature-style-eight">
        <div class="pattern-bg">
            <div class="pattern-1 wow slideInRight" data-wow-delay="00ms" data-wow-duration="1500ms" style="background-image: url(public/user/images/icons/bg-shap-2.png);"></div>
            <div class="pattern-2 wow slideInLeft" data-wow-delay="00ms" data-wow-duration="1500ms" style="background-image: url(public/user/images/icons/bg-shap-3.png);"></div>
        </div>
        <div class="container">
            <div class="inner-box">
                <div class="row align-items-center">
                    <!-- <div class="col-lg-7 col-md-12 col-sm-12 image-column">
                        <div id="image_block_22">
                            <div class="image-box wow slideInLeft" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <figure class="image clearfix js-tilt"><img src="{{URL::asset('/public/user/images/resource/illustration-11.png')}}" alt=""></figure>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="col-lg-5 col-md-12 col-sm-12 content-column">
                        <div id="content_block_21">
                            <div class="content-box wow fadeInRight" data-wow-delay="500ms" data-wow-duration="1500ms">
                                <div class="icon-box wow zoomIn animated" data-wow-delay="300ms" data-wow-duration="1500ms"><i class="flaticon-shield"></i></div>
                                <div class="sec-title"><h2>Register Free</h2></div>
                                <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium autem dolorem eaque est eum fugit harum maiores minima nisi nobis, possimus, quas qui quo ratione sequi suscipit vel vero voluptas?</div>
                                <div class="btn-box"><a href="#" class="theme-btn">Sign up free<i class="fas fa-angle-right"></i></a></div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
            <div class="inner-box">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-12 col-sm-12 content-column">
                        <div id="content_block_21">
                            <div class="content-box wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                                <div class="icon-box wow zoomIn animated" data-wow-delay="600ms" data-wow-duration="1500ms"><i class="flaticon-user-1"></i></div>
                                <div class="sec-title"><h2>Download Your Application Android</h2></div>
                                <div class="text">Selain informasi yang kami berikan melalui website kami juga menyediakan informasi melalui aplikasi mobile android untuk informasi lengkap nya silahkan unduh.</div>
                                <div class="btn-box">
                                    <a href="#">
                                        <img src="{{URL::asset('/public/user/images/gallery/play.png')}}" width="200">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12 col-sm-12 image-column">
                        <div id="image_block_22">
                            <div class="image-box wow slideInRight" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <figure class="image clearfix js-tilt"><img src="{{URL::asset('/public/user/images/resource/app.png')}}" alt=""></figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="inner-box">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-md-12 col-sm-12 image-column">
                        <div id="image_block_22">
                            <div class="image-box wow slideInLeft" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <figure class="image clearfix js-tilt"><img src="{{URL::asset('/public/user/images/resource/illustration-13.png')}}" alt=""></figure>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12 col-sm-12 content-column">
                        <div id="content_block_21">
                            <div class="content-box wow fadeInRight" data-wow-delay="300ms" data-wow-duration="1500ms">
                                <div class="icon-box wow zoomIn" data-wow-delay="600ms" data-wow-duration="1500ms"><i class="flaticon-shield"></i></div>
                                <div class="sec-title"><h2>Start Receiving Payments</h2></div>
                                <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium autem dolorem eaque est eum fugit harum maiores minima nisi nobis, possimus, quas qui quo ratione sequi suscipit vel vero voluptas?</div>
                                <div class="btn-box"><a href="#" class="theme-btn">Learn  More<i class="fas fa-angle-right"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- feature-style-eight end -->

    <!-- feature-style-six -->
    <!-- <section class="feature-style-six" id="app">
    	<div class="container">
    		<div class="inner-box">
    			<div class="row align-items-center">
    				<div class="col-lg-5 col-md-12 col-sm-12 content-column">
    					<div id="content_block_15">
    						<div class="content-box wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
    							<div class="sec-title"><h2>Download Your Aplication Android</h2></div>
    							<div class="text">Get everything you'll ever need to manage your paperwork.There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected you are going.</div>
    							<div class="btn-box">
    								<a href="#">
    									<img src="{{URL::asset('/public/user/images/gallery/play.png')}}" width="200">
    								</a>
    							</div>
    						</div>
    					</div>
    				</div>
    				<div class="col-lg-7 col-md-12 col-sm-12 image-column">
    					<div id="image_block_14">
    						<div class="image-box">
    							<div class="bg-layer" style="background-image: url(/public/user/images/icons/image-shap-5.png);"></div>
    							<figure class="image image-1 clearfix wow slideInRight animated" data-wow-delay="00ms" data-wow-duration="1500ms"><img src="{{URL::asset('/public/user/images/resource/mobile.png')}}" width="775" alt=""></figure>
    							<figure class="image image-2 wow slideInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms"><img src="{{URL::asset('/public/user/images/gallery/android-1.png')}}" width="195" alt=""></figure>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
    		<div class="inner-box">
    			<div class="row align-items-center">
    				<div class="col-lg-7 col-md-12 col-sm-12 image-column">
    					<div id="image_block_15">
    						<div class="image-box">
    							<figure class="image clearfix wow slideInLeft animated" data-wow-delay="00ms" data-wow-duration="1500ms"><img src="{{URL::asset('/public/user/images/resource/screen-1.png')}}" alt=""></figure>
    						</div>
    					</div>
    				</div>
    				<div class="col-lg-5 col-md-12 col-sm-12 content-column">
    					<div id="content_block_15">
    						<div class="content-box wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
    							<div class="sec-title"><h2>How we help our clients measure social</h2></div>
    							<div class="text">Get everything you'll ever need to manage your paperwork. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected you are going.</div>
    							<div class="btn-box"><a href="#" class="theme-btn">Learn More<i class="fas fa-angle-right"></i></a></div>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section> -->
    <!-- feature-style-six -->

    <!-- clients-style-four -->
    <section class="clients-style-four style-five">
        <div class="image-layer" style="background-image: url(/public/user/images/icons/layer-image-7.png);"></div>
        <div class="container">
            <div class="clients-carousel owl-carousel owl-theme owl-dots-none">
                <figure class="image-box"><a href="#">
                    <img src="{{URL::asset('/public/user/images/experience/ex-1.png')}}" alt="" ></a>
                </figure>
                <figure class="image-box"><a href="#">
                    <img src="{{URL::asset('/public/user/images/experience/ex-2.png')}}" alt=""></a>
                </figure>
                <figure class="image-box"><a href="#">
                    <img src="{{URL::asset('/public/user/images/experience/ex-3.png')}}" alt=""></a>
                </figure>
                <figure class="image-box"><a href="#">
                    <img src="{{URL::asset('/public/user/images/experience/ex-4.png')}}" alt=""></a>
                </figure>
                <figure class="image-box"><a href="#">
                    <img src="{{URL::asset('/public/user/images/experience/ex-5.png')}}" alt=""></a>
                </figure>
                <figure class="image-box"><a href="#">
                    <img src="{{URL::asset('/public/user/images/experience/ex-6.png')}}" alt=""></a>
                </figure>
                <figure class="image-box"><a href="#">
                    <img src="{{URL::asset('/public/user/images/experience/ex-7.png')}}" alt=""></a>
                </figure>
                <figure class="image-box"><a href="#">
                    <img src="{{URL::asset('/public/user/images/experience/ex-8.png')}}" alt=""></a>
                </figure>
                <figure class="image-box"><a href="#">
                    <img src="{{URL::asset('/public/user/images/experience/ex-9.png')}}" alt=""></a>
                </figure>
                <figure class="image-box"><a href="#">
                    <img src="{{URL::asset('/public/user/images/experience/ex-10.png')}}" alt=""></a>
                </figure>
                <figure class="image-box"><a href="#">
                    <img src="{{URL::asset('/public/user/images/experience/ex-11.png')}}" alt=""></a>
                </figure>
            </div>
        </div>
    </section>
    <!-- clients-style-four end -->


    <!-- testimonial-style-four -->
    <!-- <section class="testimonial-style-four">
    	<div class="image-layer" style="background-image: url(/public/user/images/icons/shap-6.png);"></div>
    	<div class="container-fluid">
    		<div class="sec-title center">
    			<h2>Employee And Team</h2>
    			<p>Trusted by more than 9,000 businesses in 140 countries.<br />all of our resources are free</p>
    		</div>
    		<div class="testimonial-inner">
    			<div class="three-column-carousel owl-carousel owl-theme">
    				<div class="testimonial-content">
    					<div class="inner-box">
    						<figure class="icon-box"><img src="{{URL::asset('/public/user/images/icons/icon-1.png')}}" alt=""></figure>
    						<div class="author-info">
    							<figure class="image-box"><img src="{{URL::asset('/public/user/images/resource/testimonial-6.png')}}" alt=""></figure>
    							<h5 class="name">TeamSnap</h5>
    							<span class="designation">VP Experience</span>
    						</div>
    						<div class="text">“We don't take ourselves too seriously, but seriously enough to ensure we're creating the best product and experience for our customers. I feel like Help Scout does the same.”</div>
    					</div>
    				</div>
    				<div class="testimonial-content">
    					<div class="inner-box">
    						<figure class="icon-box"><img src="{{URL::asset('/public/user/images/icons/icon-2.png')}}" alt=""></figure>
    						<div class="author-info">
    							<figure class="image-box"><img src="{{URL::asset('/public/user/images/resource/testimonial-6.png')}}" alt=""></figure>
    							<h5 class="name">Steven smith</h5>
    							<span class="designation">Programmer</span>
    						</div>
    						<div class="text">“We don't take ourselves too seriously, but seriously enough to ensure we're creating the best product and experience for our customers. I feel like Help Scout does the same.”</div>
    					</div>
    				</div>
    				<div class="testimonial-content">
    					<div class="inner-box">
    						<figure class="icon-box"><img src="{{URL::asset('/public/user/images/icons/icon-1.png')}}" alt=""></figure>
    						<div class="author-info">
    							<figure class="image-box"><img src="{{URL::asset('/public/user/images/resource/testimonial-5.png')}}" alt=""></figure>
    							<h5 class="name">TeamSnap</h5>
    							<span class="designation">VP Experience</span>
    						</div>
    						<div class="text">“We don't take ourselves too seriously, but seriously enough to ensure we're creating the best product and experience for our customers. I feel like Help Scout does the same.”</div>
    					</div>
    				</div>
    				<div class="testimonial-content">
    					<div class="inner-box">
    						<figure class="icon-box"><img src="{{URL::asset('/public/user/images/icons/icon-1.png')}}" alt=""></figure>
    						<div class="author-info">
    							<figure class="image-box"><img src="{{URL::asset('/public/user/images/resource/testimonial-5.png')}}" alt=""></figure>
    							<h5 class="name">TeamSnap</h5>
    							<span class="designation">VP Experience</span>
    						</div>
    						<div class="text">“We don't take ourselves too seriously, but seriously enough to ensure we're creating the best product and experience for our customers. I feel like Help Scout does the same.”</div>
    					</div>
    				</div>
    				<div class="testimonial-content">
    					<div class="inner-box">
    						<figure class="icon-box"><img src="{{URL::asset('/public/user/images/icons/icon-2.png')}}" alt=""></figure>
    						<div class="author-info">
    							<figure class="image-box"><img src="{{URL::asset('/public/user/images/resource/testimonial-6.png')}}" alt=""></figure>
    							<h5 class="name">Steven smith</h5>
    							<span class="designation">Programmer</span>
    						</div>
    						<div class="text">“We don't take ourselves too seriously, but seriously enough to ensure we're creating the best product and experience for our customers. I feel like Help Scout does the same.”</div>
    					</div>
    				</div>
    				<div class="testimonial-content">
    					<div class="inner-box">
    						<figure class="icon-box"><img src="{{URL::asset('/public/user/images/icons/icon-1.png')}}" alt=""></figure>
    						<div class="author-info">
    							<figure class="image-box"><img src="{{URL::asset('/public/user/images/resource/testimonial-5.png')}}" alt=""></figure>
    							<h5 class="name">TeamSnap</h5>
    							<span class="designation">VP Experience</span>
    						</div>
    						<div class="text">“We don't take ourselves too seriously, but seriously enough to ensure we're creating the best product and experience for our customers. I feel like Help Scout does the same.”</div>
    					</div>
    				</div>
    				<div class="testimonial-content">
    					<div class="inner-box">
    						<figure class="icon-box"><img src="{{URL::asset('/public/user/images/icons/icon-1.png')}}" alt=""></figure>
    						<div class="author-info">
    							<figure class="image-box"><img src="{{URL::asset('/public/user/images/resource/testimonial-5.png')}}" alt=""></figure>
    							<h5 class="name">TeamSnap</h5>
    							<span class="designation">VP Experience</span>
    						</div>
    						<div class="text">“We don't take ourselves too seriously, but seriously enough to ensure we're creating the best product and experience for our customers. I feel like Help Scout does the same.”</div>
    					</div>
    				</div>
    				<div class="testimonial-content">
    					<div class="inner-box">
    						<figure class="icon-box"><img src="{{URL::asset('/public/user/images/icons/icon-2.png')}}" alt=""></figure>
    						<div class="author-info">
    							<figure class="image-box"><img src="{{URL::asset('/public/user/images/resource/testimonial-6.png')}}" alt=""></figure>
    							<h5 class="name">Steven smith</h5>
    							<span class="designation">Programmer</span>
    						</div>
    						<div class="text">“We don't take ourselves too seriously, but seriously enough to ensure we're creating the best product and experience for our customers. I feel like Help Scout does the same.”</div>
    					</div>
    				</div>
    				<div class="testimonial-content">
    					<div class="inner-box">
    						<figure class="icon-box"><img src="{{URL::asset('/public/user/images/icons/icon-1.png')}}" alt=""></figure>
    						<div class="author-info">
    							<figure class="image-box"><img src="{{URL::asset('/public/user/images/resource/testimonial-5.png')}}" alt=""></figure>
    							<h5 class="name">TeamSnap</h5>
    							<span class="designation">VP Experience</span>
    						</div>
    						<div class="text">“We don't take ourselves too seriously, but seriously enough to ensure we're creating the best product and experience for our customers. I feel like Help Scout does the same.”</div>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section> -->
    <!-- testimonial-style-four end -->


    <!-- main-footer -->
    <footer class="main-footer style-two">
    	<div class="image-layer" style="background-image: url(/public/user/images/icons/footer-bg-2.png);"></div>
    	<div class="container">
    		<div class="footer-top">
    			<div class="widget-section">
    				<div class="row">
    					<div class="col-lg-4 col-md-6 col-sm-12 footer-column">
    						<div class="about-widget footer-widget">
    							<figure class="footer-logo"><a href="/">
    								<img src="{{URL::asset('/public/user/images/logo-bd-2.png')}}" alt="" width="210"></a>
    							</figure>
    							<div class="text">Lorem ipsum dolor sit consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim lorem sed do eiusmod.</div>
    							<ul class="social-links">
    								<li><h6>Follow Us :</h6></li>
    								<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
    								<li><a href="#"><i class="fab fa-twitter"></i></a></li>
    								<li><a href="#"><i class="fab fa-skype"></i></a></li>
    								<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
    							</ul>
    						</div>
    					</div>
    					<div class="col-lg-3 col-md-6 col-sm-12 footer-column">
    						<div class="links-widget footer-widget">
    							<h4 class="widget-title">Our Service</h4>
    							<div class="widget-content">
    								<ul class="list clearfix">
    									<li><a href="/IT/consulting">IT Consulting</a></li>
    									<li><a href="/sofware-houser">Sofware House</a></li>
    									<li><a href="/website">Website</a></li>
    									<li><a href="/android">App Android</a></li>
    									<li><a href="/gap/analysis">Gap Analysis</a></li>
    									<li><a href="/management-bussines">Consultation Management Bussines</a></li>
    								</ul>
    							</div>
    						</div>
    					</div>
    					<div class="col-lg-2 col-md-6 col-sm-12 footer-column">
    						<div class="links-widget footer-widget">
    							<h4 class="widget-title">Links</h4>
    							<div class="widget-content">
    								<ul class="list clearfix">
    									<li><a href="#">Home</a></li>
    									<li><a href="#">Services</a></li>
    									<li><a href="#">Price Plan</a></li>
    									<li><a href="#">Testimonials</a></li>
    									<li><a href="#">News</a></li>
    									<li><a href="#">Contact</a></li>
    								</ul>
    							</div>
    						</div>
    					</div>
    					<div class="col-lg-3 col-md-6 col-sm-12 footer-column">
    						<div class="contact-widget footer-widget">
    							<h4 class="widget-title">Contact Info</h4>
    							<div class="widget-content">
    								<ul class="list clearfix">
    									<li><i class="fas fa-map-marker-alt"></i>Equity Tower lantai 49.<br />Jl. Jenderal Sudirman kav. 52-53 kawasan Sudirman Centre Business Distric (SCBD) Jakarta Selatan.</li>
    									<li>
    										<i class="fas fa-phone-volume"></i>
    										<a href="tel:02125555682">(021) 2555 - 5682</a><br/>
    										<a href="tel:02129651222">(021) 2965 - 1222</a>
                                     </li>
                                     <li>
                                      <i class="fas fa-envelope"></i>
                                      <a href="mailto:yourbigdata1@gmail.com">yourbigdata1@gmail.com</a>
                                  </li>
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="footer-bottom">
       <div class="copyright">&copy; 2020 <a href="/">Big Data</a> | Desain and Development By : Team IT bigdata</div>
   </div>
</div>
</footer>
<!-- main-footer end -->

<!--Scroll to top-->
<button class="scroll-top scroll-to-target" data-target="html">
 <span class="fa fa-arrow-up"></span>
</button>


<!-- jequery plugins -->
<script src="{{URL::asset('/public/user/js/jquery.js')}}"></script>
<script src="{{URL::asset('/public/user/js/popper.min.js')}}"></script>
<script src="{{URL::asset('/public/user/js/bootstrap.min.js')}}"></script>
<script src="{{URL::asset('/public/user/js/owl.js')}}"></script>
<script src="{{URL::asset('/public/user/js/wow.js')}}"></script>
<script src="{{URL::asset('/public/user/js/validation.js')}}"></script>
<script src="{{URL::asset('/public/user/js/jquery.fancybox.js')}}"></script>
<script src="{{URL::asset('/public/user/js/appear.js')}}"></script>
<script src="{{URL::asset('/public/user/js/scrollbar.js')}}"></script>
<script src="{{URL::asset('/public/user/js/jquery.paroller.min.js')}}"></script>
<script src="{{URL::asset('/public/user/js/tilt.jquery.js')}}"></script>

<!-- main-js -->
<script src="{{URL::asset('/public/user/js/script.js')}}"></script>

</body><!-- End of .page_wrapper -->
</html>
