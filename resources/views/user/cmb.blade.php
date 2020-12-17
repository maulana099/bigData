@extends('user.base-service')
<title>Our Service | IT Konsultan</title>
@section ('content-service-dua')

@section ('content-service')
<div class="title-box pull-left">
    <h1>Consultation <br/>
    Management Bussines</h1>
   <p>to secure your data is our priority. IT Service</p>
</div>
<ul class="bread-crumb pull-right">
    <li>CMB</li>
    <li><a href="/">Home</a></li>
</ul>
@endsection

<!-- solution-section -->
    <section class="solution-section elements sec-pad-two">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-12 col-sm-12 content-column">
                    <div id="content_block_32">
                        <div class="content-box margin_bottom_30 margin_right_30 wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <!-- <div class="icon-box">
                                <figure class="icon"><img src="{{URL::asset('/public/user/images/icons/icon-3.png')}}" alt=""></figure>
                                <figure class="icon"><img src="{{URL::asset('/public/user/images/icons/icon-7.png')}}" alt=""></figure>
                                <figure class="icon"><img src="{{URL::asset('/public/user/images/icons/icon-8.png')}}" alt=""></figure>
                            </div> -->
                            <div class="sec-title"><h2>Consultation Management Bussines</h2></div>
                            <div class="text">A big part of our design process is validation and nailing the details. InVision lets us iterate quickly, elevate quality, and ship fast.</div>
                            <div class="btn-box"><a href="#" class="theme-btn">Read More<i class="fas fa-angle-right"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 col-sm-12 image-column">
                    <div id="image_block_32">
                        <div class="image-box wow slideInRight" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <figure class="image">
                                <a href="{{URL::asset('/public/user/images/resource/manage.jpg')}}" class="lightbox-image">
                                <img src="{{URL::asset('/public/user/images/resource/manage.jpg')}}" width="671" alt=""></a>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- solution-section end -->

@endsection