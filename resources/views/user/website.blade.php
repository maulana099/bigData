@extends('user.baseU')
<title>About Me | BigData</title>
@section ('content-user')

<!-- page-title -->
@section ('content-about')
<div class="content-box clearfix">
    <div class="title-box pull-left">
        <h1>App Website</h1>
        <p>to secure your data is our priority. IT Service</p>
    </div>
    <ul class="bread-crumb pull-right">
        <li>App Website</li>
        <li><a href="/">Home</a></li>
    </ul>
</div>
@endsection
<!-- page-title end -->

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
                            <li><a href="/IT/consulting">IT Consulting</a></li>
                            <li><a href="/software-house">Sofware House</a></li>
                            <li class="active"><a href="/website">Website</a></li>
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
                        <div class="top-content">
                            <div class="sec-title">
                                <h2>App Website</h2>
                            </div>
                            <div class="text">
                                <p>Quis ipsum suspen disse ultrices gravida. here are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.Lorem ipsum dolor sit amet, consectetur adipiscied do eiusmod tempor incidid labore et dolore magna aliqua. Quis ipsum suspen disse ultrices gravida. here are many variations of passages of them Lorem Ipsum available, but the majority have suffered alteration in some form. Lorem ipsum dolor sit amet felis etiam euismod vestibulum majority have suffered alteration in some form vivamus.</p>
                            </div>
                            <figure class="image-box"><img src="{{URL::asset('/public/user/images/resource/website-2.png')}}" alt=""></figure>
                            <h3>Use of HTML & CSS</h3>
                            <div class="text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscied do eiusmod tempor incidid labore et dolore magna aliqua. Quis ipsum suspen disse ultrices gravida. here are many variations of passages of them Lorem Ipsum available, but the majority have suffered alteration in some form. Lorem ipsum dolor sit amet, consectetur adipiscied do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                        <div class="two-column">
                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                                    <div class="content-box">
                                        <h3>Convert HTML to WordPress</h3>
                                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscied do eiusmod tempor incidid labore et dolore magna aliqua. Quis ipsum suspen disse ultrices gravida. here are many variations of passages of them Lorem Ipsum available, but the majority have suffered alteration in some form. Lorem ipsum dolor sit amet, consectetur adipiscied do eiusmod tempor incididunt ut labore magna aliqua.</div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                                    <figure class="image-box wow fadeInRight" data-wow-delay="300ms" data-wow-duration="1500ms"><img src="{{URL::asset('/public/user/images/resource/website.jpg')}}" alt=""></figure>
                                </div>
                            </div>
                        </div>
                        <div class="bottom-content">
                            <h3>Handover & Support</h3>
                            <div class="text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspe ndisse ultrices gravida. Risus commodo viverra maecenasccumsanamet, consectetur adipiscing elit, sed do eiusmod tempor incid idunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices Letraset sheets containing gravida.</p>
                            </div>
                            <ul class="list-item">
                                <li>Various Analysis Options</li>
                                <li>Page Load Details (time, size, number of requests)</li>
                                <li>Waterfall, Video and Report History</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- service-details end -->

@endsection