@extends('headerfooter.headerfooter')

@section('content')



<section class="single-page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Kontak</h2>
				<ol class="breadcrumb header-bradcrumb">
				  <li><a href="index.html">Home</a></li>
                  <li class="active">&nbsp; / &nbsp;</li> 
				  <li class="active"> Kontak</li>
				</ol>
			</div>
		</div>
	</div>
</section>

<section class="contact-us" id="contact">
	<div class="container">
		<div class="row">
			
			<!-- section title -->
			<div class="col-12">
			<div class="title text-center" >
				<h2>Kontak Masjid Assidas</h2>
				<p>Unnamed Road,, Pucang, Ngargosari, Kec. Ampel, Kabupaten Boyolali, Jawa Tengah 57352</p>
				<div class="border"></div>
			</div>
			</div>
			<!-- /section title -->
			
			<!-- Contact Details -->
			<div class="contact-details col-md-6 " >
				<h3>Rincian Kontak</h3>
				<p>Masjid Assidas Ampel Boyolali</p>
				<ul class="contact-short-info" >
					<li>
						<i class="tf-ion-ios-home"></i>
						<span>Unnamed Road,, Pucang, Ngargosari, Kec. Ampel, Kabupaten Boyolali, Jawa Tengah 57352</span>
					</li>
					<li>
						<i class="tf-ion-android-phone-portrait"></i>
						<span>Phone: <a href="https:wa.me/6285692066873/">Ustadz Ajidin</a></span>
					</li>
					<li>
						<i class="tf-ion-android-globe"></i>
						<span>Fax: +6285692066873</span>
					</li>
					<li>
						<i class="tf-ion-android-mail"></i>
						<span>Email: masjidassidas@gmail.com</span>
					</li>
				</ul>
				<!-- Footer Social Links -->
				<div class="social-icon">
					<ul>
						<li><a href="#"><i class="tf-ion-social-facebook"></i></a></li>
						<li><a href="#"><i class="tf-ion-social-twitter"></i></a></li>
						<li><a href="#"><i class="tf-ion-social-dribbble-outline"></i></a></li>
						<li><a href="#"><i class="tf-ion-social-linkedin-outline"></i></a></li>
					</ul>
				</div>
				<!--/. End Footer Social Links -->
			</div>
			<!-- / End Contact Details -->
				
			<!-- Contact Form -->
			<div class="contact-form col-md-6 " >
				<form id="contact-form" method="post" role="form">
					<div class="form-group">
						<input type="text" placeholder="Your Name" class="form-control" name="name" id="name">
					</div>
					
					<div class="form-group">
						<input type="email" placeholder="Your Email" class="form-control" name="email" id="email" autocomplete="none">
					</div>
					
					<div class="form-group">
						<input type="text" placeholder="Subject" class="form-control" name="subject" id="subject">
					</div>
					
					<div class="form-group">
						<textarea rows="6" placeholder="Message" class="form-control" name="message" id="message"></textarea>	
					</div>
					
					<div id="success" class="success">
						Terimakasih, Email Berhasil Terkirim ! :)
					</div>
					
					<div id="error" class="error">
						Mohon maaf, Kami tidak tahu apa yang terjadi,Silahakan Coba Lagi :(
					</div>
					<div id="cf-submit">
						<input type="submit" id="contact-submit" class="btn btn-transparent" value="Submit">
					</div>						
					
				</form>
			</div>
			<!-- ./End Contact Form -->
		
		</div> <!-- end row -->
	</div> <!-- end container -->
</section> <!-- end section -->

<!--================================
=            Google Map            =
=================================-->
<section class="map">
	<!-- Google Map -->
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.749561211013!2d110.59278421538006!3d-7.492879475978575!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a6e60c96048b7%3A0xcc6316138cc34414!2sKomplek%20Masjid%20As-Sidas!5e0!3m2!1sid!2sid!4v1637390001475!5m2!1sid!2sid" 
    width="100%" height="350px" style="border:0;" allowfullscreen="" loading="lazy">
    </iframe>
	<iframe src="" width="600" height="50px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</section>
<!--====  End of Google Map  ====-->

@endsection