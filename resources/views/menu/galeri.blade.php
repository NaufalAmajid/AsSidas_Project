@extends('headerfooter.headerfooter')

@section('content')

<section class="single-page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ol class="breadcrumb header-bradcrumb">
				  <li><a href="index.html">Home </a></li>
           		  <li class="active">&nbsp; / &nbsp;</li>
				  <li class="active"> Galeri </li>
				</ol>
			</div>
		</div>
	</div>
</section>


<section class="portfolio section-sm" id="portfolio">
	<div class="container-fluid">
		<div class="row ">
			<div class="col-lg-12">

				<!-- section title -->
				<div class="title text-center">
					<h2>Galeri</h2>
					<p>Kumpulan Foto di Masjid Assidas</p>
					<div class="border"></div>
				</div>
				<!-- /section title -->

				<div class="portfolio-filter">
					
					<button type="button" data-filter="masjid">Masjid</button>
					<button type="button" data-filter="diniyyah">Madrasah Diniyyah</button>
					<button type="button" data-filter="pengajian">Pengajian Lapanan</button>
					<button type="button" data-filter="event">Event</button>
				</div>

				<div class="row filtr-container">
					<div class="col-md-3 col-sm-6 col-xs-6 filtr-item " data-category="mix, masjid, diniyyah">
						<div class="portfolio-block">
							<img class="img-fluid" src="{{ asset('template/images/portfolio/img.jpg') }}" alt="">
							<div class="caption">
								<a class="search-icon" href="{{ asset('template/images/portfolio/img.jpg') }}" data-lightbox="image-1">
									<i class="tf-ion-diniyyah-search-strong"></i>
								</a>
								<h4><a href="">Lihat Foto</a></h4>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-6 filtr-item " data-category="mix, masjid, diniyyah">
						<div class="portfolio-block">
							<img class="img-fluid" src="{{ asset('template/images/portfolio/img (2).png') }}" alt="">
							<div class="caption">
								<a class="search-icon" href="{{ asset('template/images/portfolio/img (2).png') }}" data-lightbox="image-1">
									<i class="tf-ion-diniyyah-search-strong"></i>
								</a>
								<h4><a href="">Lihat Foto</a></h4>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-6 filtr-item " data-category="mix, diniyyah, event">
						<div class="portfolio-block">
							<img class="img-fluid" src="{{ asset('template/images/portfolio/img-3.jpg') }}" alt="">
							<div class="caption">
								<a class="search-icon" href="{{ asset('template/images/portfolio/img-3.jpg') }}" data-lightbox="image-1">
									<i class="tf-ion-diniyyah-search-strong"></i>
								</a>
								<h4><a href="">Lihat Foto</a></h4>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-6 filtr-item " data-category="mix, pengajian. masjid">
						<div class="portfolio-block">
							<img class="img-fluid" src="{{ asset('template/images/portfolio/img-4.jpg') }}" alt="">
							<div class="caption">
								<a class="search-icon" href="{{ asset('template/images/portfolio/img-4.jpg') }}" data-lightbox="image-1">
									<i class="tf-ion-diniyyah-search-strong"></i>
								</a>
								<h4><a href="">Lihat Foto</a></h4>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-6 filtr-item " data-category="mix, event">
						<div class="portfolio-block">
							<img class="img-fluid" src="{{ asset('template/images/portfolio/img-5.jpg') }}" alt="">
							<div class="caption">
								<a class="search-icon" href="{{ asset('template/images/portfolio/img-5.jpg') }}" data-lightbox="image-1">
									<i class="tf-ion-diniyyah-search-strong"></i>
								</a>
								<h4><a href="">Lihat Foto</a></h4>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-6 filtr-item " data-category="mix, event, pengajian">
						<div class="portfolio-block">
							<img class="img-fluid" src="{{ asset('template/images/portfolio/img-6.jpg') }}" alt="">
							<div class="caption">
								<a class="search-icon" href="{{ asset('template/images/portfolio/img-6.jpg') }}" data-lightbox="image-1">
									<i class="tf-ion-diniyyah-search-strong"></i>
								</a>
								<h4><a href="">Lihat Foto</a></h4>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-6 filtr-item " data-category="mix, masjid">
						<div class="portfolio-block">
							<img class="img-fluid" src="{{ asset('template/images/portfolio/img-8.jpg') }}" alt="">
							<div class="caption">
								<a class="search-icon" href="{{ asset('template/images/portfolio/img-8.jpg') }}" data-lightbox="image-1">
									<i class="tf-ion-diniyyah-search-strong"></i>
								</a>
								<h4><a href="">Lihat Foto</a></h4>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-6 filtr-item " data-category="mix, masjid">
						<div class="portfolio-block">
							<img class="img-fluid" src="{{ asset('template/images/portfolio/img-9.jpg') }}" alt="">
							<div class="caption">
								<a class="search-icon" href="{{ asset('template/images/portfolio/img-9.jpg') }}" data-lightbox="image-1">
									<i class="tf-ion-diniyyah-search-strong"></i>
								</a>
								<h4><a href="">Lihat Foto</a></h4>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-6 filtr-item " data-category="mix, masjid">
						<div class="portfolio-block">
							<img class="img-fluid" src="{{ asset('template/images/portfolio/img-10.jpg') }}" alt="">
							<div class="caption">
								<a class="search-icon" href="{{ asset('template/images/portfolio/img-10.jpg') }}" data-lightbox="image-1">
									<i class="tf-ion-diniyyah-search-strong"></i>
								</a>
								<h4><a href="">Lihat Foto</a></h4>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-6 filtr-item " data-category="mix, masjid">
						<div class="portfolio-block">
							<img class="img-fluid" src="{{ asset('template/images/portfolio/img-11.jpg') }}" alt="">
							<div class="caption">
								<a class="search-icon" href="{{ asset('template/images/portfolio/img-11.jpg') }}" data-lightbox="image-1">
									<i class="tf-ion-diniyyah-search-strong"></i>
								</a>
								<h4><a href="">Lihat Foto</a></h4>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-6 filtr-item " data-category="mix, masjid">
						<div class="portfolio-block">
							<img class="img-fluid" src="{{ asset('template/images/portfolio/img-7.jpg') }}" alt="">
							<div class="caption">
								<a class="search-icon" href="{{ asset('template/images/portfolio/img-7.jpg') }}" data-lightbox="image-1">
									<i class="tf-ion-diniyyah-search-strong"></i>
								</a>
								<h4><a href="">Lihat Foto</a></h4>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-6 filtr-item " data-category="mix, event, pengajian">
						<div class="portfolio-block">
							<img class="img-fluid" src="{{ asset('template/images/portfolio/img-1.jpg') }}" alt="">
							<div class="caption">
								<a class="search-icon" href="{{ asset('template/images/portfolio/img-1.jpg') }}" data-lightbox="image-1">
									<i class="tf-ion-diniyyah-search-strong"></i>
								</a>
								<h4><a href="">Lihat Foto</a></h4>
							</div>
						</div>
					</div>
				</div>
			</div> <!-- /end col-lg-12 -->
		</div> <!-- end row -->
	</div> <!-- end container -->
</section> <!-- End section -->

@endsection