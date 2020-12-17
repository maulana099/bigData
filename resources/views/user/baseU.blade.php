<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <!-- <title>Appway - HTML 5 Template Preview</title> -->

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
    <link href="{{URL::asset('/public/user/css/imagebg.css')}}" rel="stylesheet">
    <link href="{{URL::asset('/public/user/css/style.css')}}" rel="stylesheet">
    <link href="{{URL::asset('/public/user/css/responsive.css')}}" rel="stylesheet">

</head>


<!-- page wrapper -->
<body class="boxed_wrapper">

    <!-- preloader -->
    <div class="preloader"></div>
    <!-- preloader -->

    <!-- main header -->
    <header class="main-header home-16">
        <div class="outer-container">
            <div class="container">
                <div class="main-box clearfix">
                    <div class="logo-box pull-left">
                        <figure class="logo"><a href="/"><img src="{{URL::asset('/public/user/images/logo-bd.png')}}" alt="" width="205"></a></figure>
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
                                            <li><a href="/IT/consulting">IT Consulting</a></li>
                                            <li><a href="/software-house">Sofware House</a></li>
                                            <li><a href="/website">Website</a></li>
                                            <li><a href="/android">App Android</a></li>
                                            <li><a href="/gap/analysis">Gap Analysis</a></li>
                                            <li><a href="/management-bussines">Consultation Management Bussines</a></li>
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
                <figure class="logo-box"><a href="/"><img src="{{URL::asset('/public/user/images/logo-bd.png')}}" width="180" alt=""></a></figure>
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
            <div class="nav-logo"><a href="/"><img src="{{URL::asset('/public/user/images/logo-bd.png')}}" alt="" title="" width="160"></a></div>
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

    <section class="page-title" style="background-image: url(/public/user/images/background/pagetitle-bg.png);">
        <div class="anim-icons">
            <div class="icon icon-1"><img src="{{URL::asset('/public/user/images/icons/anim-icon-17.png')}}" alt=""></div>
            <div class="icon icon-2 rotate-me"><img src="{{URL::asset('/public/user/images/icons/anim-icon-18.png')}}" alt=""></div>
            <div class="icon icon-3 rotate-me"><img src="{{URL::asset('/public/user/images/icons/anim-icon-19.png')}}" alt=""></div>
            <div class="icon icon-4"></div>
        </div>
        <div class="container">
            @yield ('content-about')
        </div>
    </section>

    @yield('content-user')

    <!-- clients-style-four -->
<section class="clients-style-four style-five">
    <div class="image-layer" style="background-image: url(/public/user/images/icons/layer-image-7.png);"></div>
    <div class="container">
        <div class="clients-carousel owl-carousel owl-theme owl-dots-none">
            <figure class="image-box"><a href="#">
                <img src="{{URL::asset('/public/user/images/experience/ex-1.png')}}" alt=""></a>
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


    <!-- main-footer -->
    <footer class="main-footer style-five style-six">
        <div class="anim-icons">
            <div class="icon icon-1"><img src="{{URL::asset('/public/user/images/icons/pattern-21.png')}}" alt=""></div>
        </div>
        <div class="image-layer" style="background-image: url(public/user/images/icons/footer-bg-5.png);"></div>
        <div class="container">
            <div class="footer-top">
                <div class="widget-section">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                            <div class="about-widget footer-widget">
                                <figure class="footer-logo"><a href="/"><img src="{{URL::asset('/public/user/images/logo-bd-2.png')}}" alt="" width="185"></a></figure>
                                <div class="text">Silahkan Unduh Aplikasi Untuk Berkonsultasi Gratis dengan perusahaan Kami</div>
                                <div class="apps-download">
                                    <h3>Download the App</h3>
                                    <div class="download-btn">
                                        <!-- <a href="#" class="app-store-btn">
                                            <i class="fab fa-apple"></i>
                                            <span>Download on the</span>
                                            App Store
                                        </a> -->
                                        <a href="#" class="google-play-btn">
                                            <i class="fab fa-android"></i>
                                            <span>Get on it</span>
                                            Google Play
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-12 footer-column">
                            <div class="links-widget footer-widget">
                                <h4 class="widget-title">Our Services</h4>
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
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="contact-widget footer-widget">
                                <h4 class="widget-title">Contact Us</h4>
                                <div class="widget-content">
                                    <ul class="contact-info clearfix">
                                        <li><i class="fas fa-map-marker-alt"></i>Equity Tower lantai 49. Jl. Jenderal Sudirman kav. 52-53. Jakarta Selatan.
                                        </li>
                                        <li><i class="fas fa-phone"></i><a href="tel:02125555682">(021) 2555 - 5682</a></li>
                                        <li><i class="fas fa-envelope"></i><a href="mailto:yourbigdata1@gmail.com">yourbigdata1@gmail.com</a></li>
                                    </ul>
                                </div>
                                <!-- <ul class="social-links clearfix">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-skype"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul> -->
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="links-widget footer-widget">
                                <h4 class="widget-title">About Company</h4>
                                <div class="widget-content">
                                    <ul class="list clearfix">
                                        <li><a href="#">Appway Online</a></li>
                                        <li><a href="#">Our Leadership</a></li>
                                        <li><a href="#">Carrers</a></li>
                                        <li><a href="#">What We Do</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="footer-bottom clearfix">
                <ul class="footer-nav pull-right">
                    <li><a href="#">Terms of Service</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Legal</a></li>
                </ul>
            </div> -->
        </div>
        <div class="copyright">&copy; 2020 <a href="/">Big Data</a> | Desain and Development By : Team IT bigdata</div>
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
    <script src="{{URL::asset('/public/user/js/circle-progress.js')}}"></script>
    <script src="{{URL::asset('/public/user/js/jquery.countTo.js')}}"></script>
    <script src="{{URL::asset('/public/user/js/scrollbar.js')}}"></script>
    <script src="{{URL::asset('/public/user/js/jquery.paroller.min.js')}}"></script>
    <script src="{{URL::asset('/public/user/js/countdown.js')}}"></script>
    <script src="{{URL::asset('/public/user/js/tilt.jquery.js')}}"></script>

    <!-- main-js -->
    <script src="{{URL::asset('/public/user/js/script.js')}}"></script>

</body><!-- End of .page_wrapper -->
</html>
