@extends('user.baseU')
<title>Dashboard | BigData</title>
@section ('content-user')


<!-- page-title -->
@section ('content-about')
<div class="content-box clearfix">
	<div class="title-box pull-left">
		<h1>Contact Us</h1>
		<p>to secure your data is our priority. IT Service</p>
	</div>
	<ul class="bread-crumb pull-right">
		<li>Contact Us</li>
		<li><a href="/">Home</a></li>
	</ul>
</div>
@endsection
<!-- page-titl -->

<!-- contact-section -->
<section class="contact-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 col-md-12 col-sm-12 offset-lg-1 big-column">
				<div class="info-content centred">
					<div class="row">
						<div class="col-lg-4 col-md-6 col-sm-12 info-column">
							<div class="single-info-box">
								<figure class="icon-box">
									<img src="{{URL::asset('/public/user/images/icons/info-icon-1.png')}}" alt="">
								</figure>
								<h2>Phone</h2>
								<div class="text">Silahkan Hubungi Kami Pada saat jam kerja</div>
								<div class="phone"><a href="tel:02125555682">(021) 2555 - 5682</a></div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-12 info-column">
							<div class="single-info-box">
								<figure class="icon-box">
									<img src="{{URL::asset('/public/user/images/icons/info-icon-2.png')}}" alt="">
								</figure>
								<h2>E-mail</h2>
								<div class="text">Kami akan membaca dan membalas apa yang anda email</div>
								<div class="phone"><a href="mailto:yourbigdata1@gmail.com">yourbigdata1@gmail.com</a></div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-12 info-column">
							<div class="single-info-box">
								<figure class="icon-box">
									<img src="{{URL::asset('/public/user/images/icons/info-icon-3.png')}}" alt="">
								</figure>
								<h2>Address</h2>
								<div class="text">Equity Tower lantai 49.<br />Jl. Jenderal Sudirman kav. 52-53 kawasan Sudirman Centre Business Distric (SCBD) Jakarta Selatan.</div>
								<div class="phone"><a href="https://goo.gl/maps/UXT9bnjn2QrZJGzp6" target="_blank">View on Google map</a></div>
							</div>
						</div>
					</div>
				</div>
				<!-- <div class="image-container">
					<figure class="image-box"><img src="{{URL::asset('/public/user/images/resource/contact-1.png')}}" alt=""></figure>
				</div> -->
				<div class="contact-form-area">
					<div class="sec-title center"><h2>Contact us</h2></div>
					<div class="form-inner">
						<form method="post" action="sendemail.php" id="contact-form" class="default-form"> 
							<div class="row">
								<div class="col-lg-6 col-md-12 col-sm-12 column">
									<div class="form-group">
										<i class="fas fa-user"></i>
										<input type="text" name="username" placeholder="Name" required>
									</div>
								</div>
								<div class="col-lg-6 col-md-12 col-sm-12 column">
									<div class="form-group">
										<i class="fas fa-envelope"></i>
										<input type="email" name="email" placeholder="Email" required>
									</div>
								</div>
								<div class="col-lg-6 col-md-12 col-sm-12 column">
									<div class="form-group">
										<i class="fas fa-file"></i>
										<input type="text" name="subject" placeholder="Subject" required>
									</div>
								</div>
								<div class="col-lg-6 col-md-12 col-sm-12 column">
									<div class="form-group">
										<i class="fas fa-phone"></i>
										<input type="text" name="phone" placeholder="Phone" required>
									</div>
								</div>
								<div class="col-lg-12 col-md-12 col-sm-12 column">
									<div class="form-group">
										<textarea name="message" placeholder="Write here message"></textarea>
									</div>
								</div>
								<div class="col-lg-12 col-md-12 col-sm-12 column">
									<div class="form-group message-btn centred">
										<button type="submit" class="theme-btn-two" name="submit-form">Submit Now</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- contact-section end -->

<!-- map-section -->
<!-- <section class="map-section">
	<div class="google-map-area">
		<div 
		class="google-map" 
		id="contact-google-map" 
		data-map-lat="40.712776" 
		data-map-lng="-74.005974" 
		data-icon-path="images/icons/map-marker.png"  
		data-map-title="Brooklyn, New York, United Kingdom" 
		data-map-zoom="12" 
		data-markers='{
		"marker-1": [40.712776, -74.005974, "<h4>Branch Office</h4><p>77/99 New York</p>","images/icons/map-marker.png"]
	}'>

</div>
</div>
</section> -->
<!-- map-section end -->

@endsection