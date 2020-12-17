 @extends('user.baseU')
 <title>Our Service | App Android</title>
 @section ('content-user')

 <!-- page-title -->
 @section ('content-about')
 <div class="content-box clearfix">
    <div class="title-box pull-left">
        <h1>Android Aplication</h1>
        <p>to secure your data is our priority. IT Service</p>
    </div>
    <ul class="bread-crumb pull-right">
        <li>Android Aplication</li>
        <li><a href="/">Home</a></li>
    </ul>
</div>
@endsection
<!-- page-title end -->


 <!-- optimization-application -->
    <section class="optimization-application elements sec-pad-two">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div id="content_block_17">
                        <div class="content-box">
                            <div class="sec-title"><h2>Build Applications with Android</h2></div>
                            <!-- <h3>Reduce costs and optimize SaaS utilization based on data analytics and actionable insights.</h3> -->
                            <div class="text">
                                <p>In a world where marketing and advertising is now primarily digital, the term ‘digital agency’ almost seems redundant, doesn’t it?</p>
                                <p>However, with print, radio, television, and other traditional marketing techniques maintaining some relevance among modern strategic marketing campaigns.</p>
                            </div>
                            <ul class="list-item">
                                <li>Get insights only Google can give</li>
                                <li>Make your data work for you</li>
                            </ul>
                            <div class="btn-box"><a href="#" class="theme-btn">All Banefits<i class="fas fa-angle-right"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <div id="image_block_17">
                        <div class="image-box">
                            <figure class="image image-1"><img src="{{URL::asset('/public/user/images/resource/dashbord-17.jpg')}}" alt=""></figure>
                            <figure class="image image-2 wow slideInLeft" data-wow-delay="00ms" data-wow-duration="1500ms"><img src="{{URL::asset('/public/user/images/resource/dashbord-18.jpg')}}" alt=""></figure>
                            <figure class="image image-3 wow slideInUp" data-wow-delay="00ms" data-wow-duration="1500ms"><img src="{{URL::asset('/public/user/images/resource/dashbord-19.jpg')}}" alt=""></figure>
                            <figure class="image image-4 wow slideInRight" data-wow-delay="00ms" data-wow-duration="1500ms"><img src="{{URL::asset('/public/user/images/resource/dashbord-20.jpg')}}" alt=""></figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- optimization-application end -->

@endsection