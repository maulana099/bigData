@extends('user.base-service')
<title>Our Service | IT Konsultan</title>
@section ('content-service-dua')

@section ('content-service')
<div class="title-box pull-left">
    <h1>IT Consultation</h1>
    <p>to secure your data is our priority. IT Service</p>
</div>
<ul class="bread-crumb pull-right">
    <li>IT Konsultan</li>
    <li><a href="/">Home</a></li>
</ul>

@endsection

<!-- service-details -->
<section class="service-details">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                <div class="service-sidebar">
                    <div class="sidebar">
                        <h3>Our Services</h3>
                        <!-- <div class="text">Excepteur sint occaecat cupidatat pro ident sunt culpa officia desernt mollit</div> -->
                        <ul class="list">
                            <li class="active"><a href="/IT/consulting">IT Consulting</a></li>
                            <li><a href="/sofware-houser">Sofware House</a></li>
                            <li><a href="/website">Website</a></li>
                            <li><a href="/android">App Android</a></li>
                            <li><a href="/gap/analysis">Gap Analysis</a></li>
                            <li><a href="/management-bussines">Consultation Management Bussines</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                <div class="service-details-content">
                    <div class="inner-box">
                         <div class="bottom-content">
                            <h3>IT Consulting</h3>
                            <div class="text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspe ndisse ultrices gravida. Risus commodo viverra maecenasccumsanamet, consectetur adipiscing elit, sed do eiusmod tempor incid idunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices Letraset sheets containing gravida.</p>
                            </div>
                            <ul class="list-item">
                                <li>IT Audit</li>
                                <li> Vulnerability Assessment & Penetration Testing</li>
                                <li>IT Master Plan</li>
                            </ul>
                        </div>
                        <br/>
                        <div class="two-column">
                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                                    <figure class="image-box wow fadeInRight" data-wow-delay="300ms" data-wow-duration="1500ms"><img src="{{URL::asset('/public/user/images/resource/service-details-2.jpg')}}" alt=""></figure>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                                    <figure class="image-box wow fadeInRight" data-wow-delay="300ms" data-wow-duration="1500ms"><img src="{{URL::asset('/public/user/images/resource/service-details-2.jpg')}}" alt=""></figure>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- service-details end -->

<!-- clients-style-four -->
<section class="clients-style-four style-five">
    <div class="image-layer" style="background-image: url(/public/images/icons/layer-image-7.png);"></div>
    <div class="container">
        <div class="clients-carousel owl-carousel owl-theme owl-dots-none">
            <figure class="image-box"><a href="#"><img src="{{URL::asset('/public/user/images/clients/client-1.png')}}" alt=""></a></figure>
            <figure class="image-box"><a href="#"><img src="{{URL::asset('/public/user/images/clients/client-2.png')}}" alt=""></a></figure>
            <figure class="image-box"><a href="#"><img src="{{URL::asset('/public/user/images/clients/client-3.png')}}" alt=""></a></figure>
            <figure class="image-box"><a href="#"><img src="{{URL::asset('/public/user/images/clients/client-4.png')}}" alt=""></a></figure>
        </div>
    </div>
</section>
<!-- clients-style-four end -->

@endsection