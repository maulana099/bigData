@extends('user.base-service')
<title>Our Service | IT Konsultan</title>
@section ('content-service-dua')

@section ('content-service')
<div class="title-box pull-left">
    <h1>Gap Analysis</h1>
    <p>to secure your data is our priority. IT Service</p>
</div>
<ul class="bread-crumb pull-right">
    <li>Gap Analysis</li>
    <li><a href="/">Home</a></li>
</ul>
@endsection
	
	<!-- feature-style-three -->
    <section class="feature-style-three elements">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div id="content_block_02">
                        <div class="content-box wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="sec-title"><h2>Gap Analysis</h2></div>
                            <div class="text">
                                <p>On the other hand we denounce with righteous indignation and dislike men who are so beguiled and demoralized.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                            </div>
                            <div class="btn-box"><a href="#" class="theme-btn">Learn More<i class="fas fa-angle-right"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <div id="iamge_block_02">
                        <div class="image-box">
                            <div class="bg-layer" style="background-image: url(/public/user/images/icons/image-shap-1.png);"></div>
                            <figure class="image image-1 wow slideInRight" data-wow-delay="300ms" data-wow-duration="1500ms"><img src="{{URL::asset('/public/user/images/resource/dashbord-1.jpg')}}" alt=""></figure>
                            <figure class="image image-2 wow slideInRight" data-wow-delay="00ms" data-wow-duration="1500ms"><img src="{{URL::asset('/public/user/images/resource/dashbord-2.jpg')}}" alt=""></figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- feature-style-three -->

@endsection