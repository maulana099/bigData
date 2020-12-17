@extends('user.baseU')
<title>Visi Misi | BigData</title>
@section ('content-user')

<!-- page-title -->
@section ('content-about')
<div class="content-box clearfix">
	<div class="title-box pull-left">
		<h1>Visi Misi</h1>
		<p>to secure your data is our priority. IT Service</p>
	</div>
	<ul class="bread-crumb pull-right">
		<li>Visi Misi</li>
		<li><a href="/">Home</a></li>
	</ul>
</div>
@endsection
<!-- page-title end -->

<!-- feature-style-ten -->
<section class="feature-style-ten elements sec-pad-two">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                <div id="content_block_29">
                    <div class="content-box wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="bg-layer wow slideInLeft" data-wow-delay="00ms" data-wow-duration="1500ms" style="background-image: url(/public/user/images/icons/pattern-9.png);"></div>
                        <h2>Visi Misi <br/> PT. Bhineka Inti Global Data</h2>
                        <div class="text">
                            
                            Menjadi perusahaan yang unggul dan terpercaya dalam layanan dibidang IT dan manajemen bisnis di Indonesia.
                        </div>
                        <div class="text">
                            
                            Menjadi perusahaan yang bersertifikasi sesuai dengan layanan yang diberikan
                            Menjadi penyedia jasa yang handal dan terpercaya dalam bidang IT dan Manajemen Bisnis
                            Menjadi perusahaan yang selalu berinovasi sesuai dengan perkembangan teknologi
                            Menjadi perusahaan yang menjaga kualitas dan profesionalisme serta berkomitmen dalam memberikan setiap layanan
                            Melindungi kerahasiaan dan keamanan informasi seluruh data mitra/partner
                        </div>
                        <!-- <div class="btn-box"><a href="#" class="theme-btn">Read More<i class="fas fa-arrow-right"></i></a></div> -->
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                <div id="image_block_28">
                    <div class="image-box">
                        <div class="anim-icons">
                            <div class="icon icon-1"><img src="{{URL::asset('/public/user/images/icons/anim-icon-4.png')}}" alt=""></div>
                            <div class="icon icon-2 rotate-me"><img src="{{URL::asset('/public/user/images/icons/anim-icon-5.png')}}" alt=""></div>
                            <div class="icon icon-3 rotate-me"><img src="{{URL::asset('/public/user/images/icons/anim-icon-6.png')}}" alt=""></div>
                        </div>
                        <figure class="image clearfix wow slideInRight" data-wow-delay="00ms" data-wow-duration="1500ms"><img src="{{URL::asset('/public/user/images/resource/visi-misi.png')}}" width="600" alt=""></figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- feature-style-ten end -->

@endsection