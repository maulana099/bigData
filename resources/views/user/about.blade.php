@extends('user.baseU')
<title>About Me | BigData</title>
@section ('content-user')

<!-- page-title -->
@section ('content-about')
<div class="content-box clearfix">
    <div class="title-box pull-left">
        <h1>Tentang Kami</h1>
        <p>to secure your data is our priority. IT Service</p>
    </div>
    <ul class="bread-crumb pull-right">
        <li>About</li>
        <li><a href="/">Home</a></li>
    </ul>
</div>
@endsection
<!-- page-title end -->

<!-- our-history -->
<section class="our-history">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                <div id="content_block_53">
                    <div class="content-box wow fadeInLeft" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="sec-title"><h2>Our History</h2></div>
                        <div class="text">
                            <p>Pada tahun 2015, BIG DATA CONSULTING dibentuk dan menjadi lembaga training dan konsultansi yang memberikan jasa konsultasi dan pelatihan, khususnya di bidang Teknologi Informasi.</p>
                            <p>BIG DATA CONSULTING berubah menjadi lembaga yang berbadan hukum sejak bulan Maret tahun 2020 dengan bisnis utama yang mengedepankan pada layanan :
                                <br/>1. Kode KBLI 62019 : Aktivitas Pemrograman Komputer lainnya,
                                <br/>2. Kode KBLI 62021 : Aktivitas Konsultasi Keamanan Informasi,<br/>
                            3. Kode KBLI 70209 : Aktivitas Konsultasi Manajemen Lainnya.</p>
                        </div>
                        <h5>Big Data, IT Konsultan.</h5>
                        <figure class="signatur">
                            <img src="{{URL::asset('/public/user/images/icons/signatur.png')}}" alt="">
                        </figure>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                <div id="image_block_47">
                    <div class="image-box js-tilt">
                        <figure class="image wow slideInRight" data-wow-delay="00ms" data-wow-duration="1500ms"><img src="{{URL::asset('/public/user/images/resource/about.png')}}" alt=""></figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- our-history end -->

<!-- testimonial-style-ten -->
<section class="testimonial-style-ten">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-12 col-md-12 user-column">
                <div class="user-thumb">
                    <div class="thumb-box">
                        <div class="pattern-bg1" style="background-image: url(/public/user/images/icons/thumb-bg.png);"></div>
                        <div class="pattern-bg2" style="background-image: url(/public/user/images/icons/map-shap-3.png);"></div>
                        <figure class="thumb thumb-1"><img src="{{URL::asset('/public/user/images/resource/about-bd.png')}}" width="164" alt=""></figure>
                        <figure class="thumb thumb-2">
                            <!-- <img src="{{URL::asset('/public/user/images/icons/android.png')}}" alt="" width="80"> -->
                        </figure>
                        <figure class="thumb thumb-3">
                            <img src="{{URL::asset('/public/user/images/icons/android.png')}}" alt="" width="80">
                        </figure>
                        <figure class="thumb thumb-4">
                            <img src="{{URL::asset('/public/user/images/icons/gap-2.png')}}" alt="" width="80">
                        </figure>
                        <figure class="thumb thumb-5">
                            <img src="{{URL::asset('/public/user/images/icons/website.png')}}" alt="" width="80">
                        </figure>
                        <figure class="thumb thumb-6">
                            <img src="{{URL::asset('/public/user/images/icons/management.png')}}" alt="" width="80">
                        </figure>
                        <figure class="thumb thumb-7">
                            <img src="{{URL::asset('/public/user/images/icons/software-house.png')}}" alt="" width="80">
                        </figure>
                        <figure class="thumb thumb-8">
                            <img src="{{URL::asset('/public/user/images/icons/konsultan.png')}}" alt="" width="80">
                        </figure>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-12 col-md-12 content-column">
                <div class="content-box">
                    <div class="sec-title"><h2>it's about us</h2></div>
                    <div class="testimonial-carousel-2 owl-carousel owl-theme">
                        <div class="testimonial-content">
                            <div class="inner-box">
                                <div class="text">“Selain Mengedepankan layanan yang kami prioritaskan kami juga memiliki service seperti berikut : .”</div>
                                <div class="author-info">
                                    <p>1. IT Consulting</p>
                                    <p>2. Development Application</p>
                                    <p>3. Web Design</p>
                                    <p>4. Company Profile design</p>
                                    <p>5. Vulnerability Assessment</p>
                                    <p>6. Penetration Testing (Certified)</p>
                                    <p>7. ISO Consulting</p>
                                    <p>8. Management Business Consulting</p>
                                    <p>9. IT Master Plan</p>
                                    <p>10. PCI DSS</p>
                                    <p>11. Cloud Service DC dan DRC</p>
                                        <!-- <ul class="rating clearfix">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul> -->
                                        <!-- <h4 class="name">Ryan Donnon</h4>
                                            <span class="designation">Head of IT, First Round Capital</span> -->
                                        </div>
                                    </div>
                                </div>
                            <!-- <div class="testimonial-content">
                                <div class="inner-box">
                                    <div class="text">“Even if you use Okta for deprovisioning, it can’t do everything you need to do. BetterCloud picks up where Okta leaves off.”</div>
                                    <div class="author-info">
                                        <ul class="rating clearfix">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                        <h4 class="name">Ryan Donnon</h4>
                                        <span class="designation">Head of IT, First Round Capital</span>
                                    </div>
                                </div>
                            </div> -->
                            <!-- <div class="testimonial-content">
                                <div class="inner-box">
                                    <div class="text">“Even if you use Okta for deprovisioning, it can’t do everything you need to do. BetterCloud picks up where Okta leaves off.”</div>
                                    <div class="author-info">
                                        <ul class="rating clearfix">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                        <h4 class="name">Ryan Donnon</h4>
                                        <span class="designation">Head of IT, First Round Capital</span>
                                    </div>
                                </div>
                            </div> -->
                            <!-- <div class="testimonial-content">
                                <div class="inner-box">
                                    <div class="text">“Even if you use Okta for deprovisioning, it can’t do everything you need to do. BetterCloud picks up where Okta leaves off.”</div>
                                    <div class="author-info">
                                        <ul class="rating clearfix">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                        <h4 class="name">Ryan Donnon</h4>
                                        <span class="designation">Head of IT, First Round Capital</span>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial-style-ten end -->

    <!-- counter-style-three -->
    <section class="counter-style-three">
        <div class="anim-icons">
            <div class="icon icon-1 rotate-me"></div>
            <div class="icon icon-2"></div>
            <div class="icon icon-3 rotate-me"></div>
        </div>
        <div class="container">
            <div class="sec-title center">
                <h2>Some Funfucts Shear</h2>
                <p>The full monty burke posh excuse my French Richard cheeky bobby spiffing crikey<br />Why gormless, pear shaped.!</p>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12 counter-block">
                    <div class="inner-box wow zoomIn animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="layer-bg" style="background-image: url(/public/user/images/icons/pattern-25.png);"></div>
                        <div class="count-outer count-box">
                            <span class="count-text" data-speed="1500" data-stop="693">0</span>
                        </div>
                        <div class="text">Happy Clients</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 counter-block">
                    <div class="inner-box wow zoomIn animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="layer-bg" style="background-image: url(/public/user/images/icons/pattern-26.png);"></div>
                        <div class="count-outer count-box">
                            <span class="count-text" data-speed="1500" data-stop="453">0</span>
                        </div>
                        <div class="text">Trusted Users</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 counter-block">
                    <div class="inner-box wow zoomIn animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="layer-bg" style="background-image: url(/public/user/images/icons/pattern-27.png);"></div>
                        <div class="count-outer count-box">
                            <span class="count-text" data-speed="1500" data-stop="276">0</span>
                        </div>
                        <div class="text">Our Projects</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 counter-block">
                    <div class="inner-box wow zoomIn animated" data-wow-delay="900ms" data-wow-duration="1500ms">
                        <div class="layer-bg" style="background-image: url(/public/user/images/icons/pattern-28.png);"></div>
                        <div class="count-outer count-box">
                            <span class="count-text" data-speed="1500" data-stop="93">0</span>
                        </div>
                        <div class="text">Our Awards</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- counter-style-three end -->

    <!-- subscribe-style-five -->
<!-- <section class="subscribe-style-five">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                <div id="image_block_38">
                    <div class="image-box">
                        <div class="bg-layer" style="background-image: url(/public/user/images/icons/user-icon.png);"></div>
                        <figure class="image float-bob-y clearfix"><img src="{{URL::asset('/public/user/images/resource/user-16.png')}}" alt=""></figure>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                <div id="content_block_41">
                    <div class="content-box">
                        <div class="sec-title"><h2>Subscribe our Newsletter</h2></div>
                        <div class="text">Lorem ipsum dolor sit amet consectetur adipiscing elit donec tempus pellentesque dui vel tristique purus justo</div>
                        <form action="#" method="post" class="subscribe-form">
                            <div class="form-group">
                                <input type="email" name="email" placeholder="Enter Your Email" required="">
                                <button type="submit" class="theme-btn-two">Subscribe Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- subscribe-style-five end -->


@endsection