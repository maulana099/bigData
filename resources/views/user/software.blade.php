 @extends('user.base-service')
 <title>Our Service | Software House</title>
 @section ('content-service-dua')

 <!-- page-title -->
 @section ('content-service')
 <div class="content-box clearfix">
    <div class="title-box pull-left">
        <h1>Software House</h1>
       <p>to secure your data is our priority. IT Service</p>
    </div>
    <ul class="bread-crumb pull-right">
        <li>Software House</li>
        <li><a href="/">Home</a></li>
    </ul>
</div>
@endsection
<!-- page-title end -->


 <!-- software-product -->
    <section class="software-product elements" style="background-image: url(/public/user/images/background/softwere-product-bg.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div id="content_block_30">
                        <div class="content-box">
                            <div class="sec-title"><h2>Software House</h2></div>
                            <div class="text">Tickety-boo cheers plastered twit chimney pot off his nut hotpot spend a penny have it, so I said squiffy A bit of how's your father mufty pukka knees up absolutely bladdered brown bread, James Bond boot spiffing ummm I'm telling vagabond arse over tit burke.</div>
                            <div class="btn-box"><a href="#">Learn More</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <div id="image_block_29">
                        <div class="image-box wow slideInRight" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <figure class="image clearfix float-bob-y"><img src="{{URL::asset('/public/user/images/resource/sofware-house-1.png')}}" width="575" alt=""></figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- software-product end -->


@endsection