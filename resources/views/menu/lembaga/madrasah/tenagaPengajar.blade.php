@extends('headerfooter.headerfooter')

@section('content')

<section class="single-page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Tenaga Pengajar</h2>
                <h3>Madrasah Diniyyah Assidas</h3>
				<ol class="breadcrumb header-bradcrumb">
				  <li><a href="index.html">Home</a></li>
				  <li class="active">&nbsp; / &nbsp;</li> 
				  <li class="active"> Lembaga yang Dikelola</li>
                  <li class="active">&nbsp; / &nbsp;</li> 
				  <li class="active"> Madrasah Diniyyah</li>
                  <li class="active">&nbsp; / &nbsp;</li>  
				  <li class="active"> Tenaga Pengajar</li>
				</ol>
			</div>
		</div>
	</div>
</section>



	<!-- Start Our Team
		=========================================== -->
<section class="team" id="team">
	<div class="container">
		<div class="row">

			<!-- section title -->
			<div class="col-12">
				<div class="title text-center ">
					<h2>Bidang Pengajar dan Biografi Singkat</h2>
					<p>Berisi Nama Pengajar,Pelajaran apa Yang di Ampu dan Biografi Singkat Meliputi TTL dan Motivasi/Pesan untuk Pengunjung Web.</p>
					<div class="border"></div>
				</div>
			</div>
			<!-- /section title -->

			<!-- team member -->
			<div class="col-md-4 col-sm-6 ">
				<div class="team-member text-center">
					<div class="member-photo">
						<!-- member photo -->
						<img class="img-fluid" src="{{asset ('template/images/team/member-1.jpg') }}" alt="Meghna">
						<!-- /member photo -->

						<!-- member social profile -->
						<div class="mask">
							<ul class="clearfix">
								<li><a href="#"><i class="tf-ion-social-facebook"></i></a></li>
								<li><a href="#"><i class="tf-ion-social-twitter"></i></a></li>
								<li><a href="#"><i class="tf-ion-social-google-outline"></i></a></li>
								<li><a href="#"><i class="tf-ion-social-dribbble"></i></a></li>
							</ul>
						</div>
						<!-- /member social profile -->
					</div>

					<!-- member name & designation -->
					<div class="member-content">
						<h3>Ustadz Ajidin</h3>
						<span>Kepala Madrasah</span>
						<p>di isi dengan motivasi/kata-kata dari pemilik foto.</p>
					</div>
					<!-- /member name & designation -->

				</div>
			</div>
			<!-- end team member -->

			<!-- team member -->
			<div class="col-md-4 col-sm-6 ">
				<div class="team-member text-center">
					<div class="member-photo">
						<!-- member photo -->
						<img class="img-fluid" src="{{asset ('template/images/team/member-2.jpg') }}" alt="Meghna">
						<!-- /member photo -->

						<!-- member social profile -->
						<div class="mask">
							<ul class="clearfix">
								<li><a href="#"><i class="tf-ion-social-facebook"></i></a></li>
								<li><a href="#"><i class="tf-ion-social-twitter"></i></a></li>
								<li><a href="#"><i class="tf-ion-social-google-outline"></i></a></li>
								<li><a href="#"><i class="tf-ion-social-dribbble"></i></a></li>
							</ul>
						</div>
						<!-- /member social profile -->
					</div>

					<!-- member name & designation -->
					<div class="member-content">
						<h3>Monggo Siapa Namanya</h3>
						<span>Sekretasis Madrasah</span>
						<p>di isi dengan motivasi/kata-kata dari pemilik foto.</p>
					</div>
					<!-- /member name & designation -->
				</div>
			</div>
			<!-- end team member -->

			<!-- team member -->
			<div class="col-md-4 col-sm-6 ">
				<div class="team-member text-center">
					<div class="member-photo">
						<!-- member photo -->
						<img class="img-fluid" src="{{asset ('template/images/team/member-3.jpg') }}" alt="Meghna">
						<!-- /member photo -->

						<!-- member social profile -->
						<div class="mask">
							<ul class="clearfix">
								<li><a href="#"><i class="tf-ion-social-facebook"></i></a></li>
								<li><a href="#"><i class="tf-ion-social-twitter"></i></a></li>
								<li><a href="#"><i class="tf-ion-social-google-outline"></i></a></li>
								<li><a href="#"><i class="tf-ion-social-dribbble"></i></a></li>
							</ul>
						</div>
						<!-- /member social profile -->
					</div>

					<!-- member name & designation -->
					<div class="member-content">
						<h3>Monggo Siapa Namanya</h3>
						<span>Bendahara Madrasah</span>
						<p>di isi dengan motivasi/kata-kata dari pemilik foto.</p>
					</div>
					<!-- /member name & designation -->

				</div>
			</div>
			<!-- end team member -->
		</div> <!-- End row -->
	</div> <!-- End container -->
</section> <!-- End section -->

@endsection