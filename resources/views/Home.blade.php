@extends('headerfooter.headerfooter')

@section('content')

{{-- SLIDER --}}
<div class="hero-slider">
    <div class="slider-item th-fullpage hero-area"
        style="background-image: url({{ asset('template/images/portfolio/img-8.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <img data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".1"
                        src="{{asset ('template/images/logo-home.png')}}" alt="" width="200" height="200"
                        margin-bottom="10">
                    <h1 data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".1">YAYASAN MURAH HATI
                        NGARGOSARI <br>
                        Ampel Boyolali</h1>

                    <p data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".5">AKTA NOTARIS WIYANTO,SH.
                        NO.C.1191.HT.03.01.TH.2002</p>
                    <p data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".5">S.K KEMNHUM.HAM :
                        AHU-9015.AH.01.04.TAHUN 2011</p>
                    <p data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".5">Komplek Masjid ASSIDAS
                        Pucang 001/002, Ngargosari, Kec. Ampel, Kabupaten Boyolali, Jawa Tengah 57352</p>
                    <a data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".8" class="btn btn-main"
                        href="{{url ('tentang')}}">Tentang Yayasan Murah Hati Ngargosari</a>
                </div>
            </div>
        </div>
    </div>
    <div class="slider-item th-fullpage hero-area"
        style="background-image: url({{ asset('template/images/slider/slide-2.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".1">Madrasah Diniyyah <br>
                        Assidas</h1>
                    <p data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".5">Pendidikan Keagamaan
                        dengan Metode Mempelajari Kitab-kitab dari Para Ulama' Salaf
                        <br> untuk Berbagai Kalangan Anak-anak,Remaja,dan Orang Tua</p>
                    <a data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".8" class="btn btn-main"
                        href="{{url ('tentang')}}">Tentang Yayasan Murah Hati Ngargosari</a>
                </div>
            </div>
        </div>
    </div>
    <div class="slider-item th-fullpage hero-area"
        style="background-image: url({{ asset('template/images/slider/Slide3.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".1">Pengajian Rutin<br>
                        Selapanan</h1>
                    <p data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".5">Pengajian Rutin Untuk
                        Umum yang bertempat di Pendopo Masjid Assidas </p>
                    <a data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".8" class="btn btn-main"
                        href="{{url ('tentang')}}">Tentang Yayasan Murah Hati Ngargosari</a>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="blog-details section">
    <div class="container">
        <div class="title text-center">
            <h2>Yayasan Murah Hati Ngargosari
            </h2>
            <p>Komplek Masjid ASSIDAS Pucang 001/002, Ngargosari, Kec. Ampel, Kabupaten Boyolali, Jawa Tengah
                57352</p>
            <div class="border"></div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <article class="post">
                    <!-- Post Content -->
                    <div class="post-content">
                        <h3>Profil Yayasan Murah Hati Ngargosari</h3>
                        <p>Masjid Assidas adalah Masjid yang didirikan pada tahun .... yang berada di Boyolali. Tepatnya
                            berada di
                            Pucang, Ngargosari, Kec. Ampel, Kabupaten Boyolali, Jawa Tengah 57352. Dalam Rangka
                            Mensyi'arkan Agama Islam,Selain sebagai Tempat Ibadah,
                            Masjid Assidas Juga Memiliki Berbagai Progam yang sangat Mendukung kemajuan Islam. Di
                            antaranya : Madrasah Diniyyah.Istighotsah,Kajian KItab Kuning,dll.</p>
                        <p>Semua Artikel akan Dimuat disini,ini hanya sebagai contoh saja. </p>
                        <!-- blockquote -->
                        <blockquote data-aos="fade-left" data-aos-duration="1000">Pada Intinya ini merupakan Tampilan
                            BlockNote pada tiap Artikel yang sudah di Post Oleh Admin.</blockquote>
                        <p>Jika ada Saran Kritik dan Masukkan silahkan segera sampaikan kepada kami.
                            Agar segera bisa di perbaiki untuk Kebaikan Bersama.</p>

                        <!-- /section title -->
                    </div>
                </article>
				<article class="post">
                    <!-- Post Content -->
                    <div class="post-content">
                        <h3>Sejarah Berdirinya Yayasan Murah Hati Ngargosari</h3>
                        <p>Masjid Assidas adalah Masjid yang didirikan pada tahun .... yang berada di Boyolali. Tepatnya
                            berada di
                            Pucang, Ngargosari, Kec. Ampel, Kabupaten Boyolali, Jawa Tengah 57352. Dalam Rangka
                            Mensyi'arkan Agama Islam,Selain sebagai Tempat Ibadah,
                            Masjid Assidas Juga Memiliki Berbagai Progam yang sangat Mendukung kemajuan Islam. Di
                            antaranya : Madrasah Diniyyah.Istighotsah,Kajian KItab Kuning,dll.</p>
                        <p>Semua Artikel akan Dimuat disini,ini hanya sebagai contoh saja. </p>
                        <!-- blockquote -->
                        <blockquote data-aos="fade-left" data-aos-duration="1000">Pada Intinya ini merupakan Tampilan
                            BlockNote pada tiap Artikel yang sudah di Post Oleh Admin.</blockquote>
                        <p>Jika ada Saran Kritik dan Masukkan silahkan segera sampaikan kepada kami.
                            Agar segera bisa di perbaiki untuk Kebaikan Bersama.</p>

                        <!-- /section title -->
                    </div>
                </article>

				
				
            </div>
            <div class="col-lg-4">
                <!-- sidebar -->
                <aside class="sidebar">
                    <div class="widget-post widget">
                        <div class="service-2">
                            <div class="row text-center">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="service-item">
                                        <a href="{{ url('galeri') }}">
                                            <i class="tf-ion-ios-camera-outline"></i> </a>
                                        <h4>Galeri</h4>
                                        <p>Kumpulan Dokumentasi Kegiatan Yayasan Murah Hati Ngargosari.</p>
                                    </div>
                                </div>
								<div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="service-item">
                                        <a href="{{ url('tahunan') }}">
                                            <i class="tf-ion-ios-alarm-outline"></i> </a>
                                        <h4>Agenda</h4>
                                        <p>Agenda Kegiatan Yayasan Murah Hati Ngargosari.</p>
                                    </div>
                                </div>
								<div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="service-item">
                                        <a href="{{ url('artikel') }}">
                                            <i class="tf-ion-ios-book-outline"></i> </a>
                                        <h4>Artikel</h4>
                                        <p>Kumpulan Artikel Islam yang di Ambil dari Kitab-kitab Ulama' Salaf.</p>
                                    </div>
                                </div>
								<div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="service-item">
                                        <a href="{{ url('kontak') }}">
                                            <i class="tf-ion-android-phone-portrait"></i> </a>
                                        <h4>Kontak</h4>
                                        <p>Kami menerima Saran Masukan dan Kritikan demi Kemajuan dan Keberkahan Yayasan Murah Hati .</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>
<!--
  Start Call To Action
  ==================================== -->
<section class="call-to-action section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>Informasi Seputar YAYASAN MURAH HATI NGARGOSARI</h2>
                <p>Demi Kemajuan dan Keberkahan Yayasan Kami, <br> Silahkan Berikan Kritik dan Saran.</p>
                <a href="{{url ('kontak') }}" class="btn btn-main">Kontak</a>
            </div>
        </div> <!-- End row -->
    </div> <!-- End container -->
</section> <!-- End section -->

<!--
		  Start Counter Section
		  ==================================== -->

<section class="counter-wrapper section-sm">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="title">
                    <h2>Seputar Web ini</h2>
                    <p>Website ini dibuat dengan Tujuan Publikasi mengenai Kegiatan dan Program yang
						dikelola Oleh Yayasan Murah Hati Ngargosari dan Juga Sebagai bentuk Syi'ar Agama 
						Islam melalui Artikel-artikel yang di Bagikan.</p>
                </div>
            </div>
            <!-- first count item -->
            <div class="col-md-3 col-sm-6 col-xs-6 text-center ">
                <div class="counters-item">
                    <i class="tf-ion-ios-alarm-outline"></i>
                    <div>
                        <span class="counter" data-count="150">0</span>
                    </div>
                    <h3>Jumlah Pengunjung</h3>
                </div>
            </div>
            <!-- end first count item -->

            <!-- second count item -->
            <div class="col-md-3 col-sm-6 col-xs-6 text-center ">
                <div class="counters-item">
                    <i class="tf-ion-ios-book-outline"></i>
                    <div>
                        <span class="counter" data-count="130">0</span>
                    </div>
                    <h3>Jumlah Artikel</h3>
                </div>
            </div>
            <!-- end second count item -->

            <!-- third count item -->
            <div class="col-md-3 col-sm-6 col-xs-6 text-center ">
                <div class="counters-item">
                    <i class="tf-ion-ios-compose-outline"></i>
                    <div>
                        <span class="counter" data-count="99">0</span>
                    </div>
                    <h3>Ulasan Positif</h3>

                </div>
            </div>
            <!-- end third count item -->

            <!-- fourth count item -->
            <div class="col-md-3 col-sm-6 col-xs-6 text-center ">
                <div class="counters-item kill-border">
                    <i class="tf-ion-ios-bolt-outline"></i>
                    <div>
                        <span class="counter" data-count="250">0</span>
                    </div>
                    <h3>Donasi</h3>
                </div>
            </div>
            <!-- end fourth count item -->
        </div> <!-- end row -->
    </div> <!-- end container -->
</section> <!-- end section -->

<!-- Start Testimonial
  =========================================== -->

<section class="testimonial section" id="testimonial">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- testimonial wrapper -->
                <div class="testimonial-slider">
                    <!-- testimonial single -->
                    <div class="item text-center">
                        <i class="tf-ion-chatbubbles"></i>
                        <!-- client info -->
                        <div class="client-details">
                            <p>"Terkadang orang-orang dengan masa lalu yang buruk bisa menciptakan masa depan yang cerah."</p>
                        </div>
                        <!-- /client info -->
                        <!-- client photo -->
                        <div class="client-thumb">
                            <img src="images/client-logo/clients-1.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="client-meta">
                            <h3>Sahabat 'Umar Bin Khaththab</h3>
                            <span>Amiril Mukminin</span>
                        </div>
                        <!-- /client photo -->
                    </div>
                    <!-- /testimonial single -->

                    <!-- testimonial single -->
                    <div class="item text-center">
                        <i class="tf-ion-chatbubbles"></i>
                        <!-- client info -->
                        <div class="client-details">
                            <p>"Banyak orang yang telah meninggal, tapi nama baik mereka tetap kekal. Dan banyak orang yang masih hidup, tapi seakan mereka orang mati yang tak berguna."</p>
                        </div>
                        <!-- /client info -->
                        <!-- client photo -->
                        <div class="client-thumb">
                            <img src="images/client-logo/clients-2.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="client-meta">
                            <h3>Imam Syafi'i</h3>
                            <span>Salah Satu Imam Madzhab dalam Fiqih</span>
                        </div>
                        <!-- /client photo -->
                    </div>
                    <!-- /testimonial single -->

                    <!-- testimonial single -->
                    <div class="item text-center">
                        <i class="tf-ion-chatbubbles"></i>
                        <!-- client info -->
                        <div class="client-details">
                            <p>"Jangan berduka. Apa pun yang hilang darimu akan kembali lagi dalam wujud lain." </p>
                        </div>
                        <!-- /client info -->
                        <!-- client photo -->
                        <div class="client-thumb">
                            <img src="images/client-logo/clients-3.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="client-meta">
                            <h3>Jalaluddin Rumi</h3>
                            <span>Tokoh Sufi</span>
                        </div>
                        <!-- /client photo -->
                    </div>
                    <!-- /testimonial single -->
                </div>
            </div> <!-- end col lg 12 -->
        </div> <!-- End row -->
    </div> <!-- End container -->
</section> <!-- End Section -->

<!--
		  Start Blog Section
		  =========================================== -->

<section class="blog" id="blog">
    <div class="container">
        <div class="row">

            <!-- section title -->
            <div class="col-12">
                <div class="title text-center ">
                    <h2> Postingan <span class="color">Terakhir</span></h2>
                    <div class="border"></div>
                    <p>dari Kumpulan Artikel di Web Ini.</p>
                </div>
            </div>
            <!-- /section title -->
            <!-- single blog post -->
            <article class="col-md-4 col-sm-6 col-xs-12 clearfix ">
                <div class="post-item">
                    <div class="media-wrapper">
						<center>
                        <img src="{{asset ('template/images/blog/post-1.jpg') }}" alt="amazing caves coverimage" class="img-fluid"></center>
                    </div>

                    <div class="content">
                        <h3><a href="{{ url ('artikel')}}">Mengenal Tokoh Pencetus Ilmu Nahwu</a></h3>
                        <p>Masjid ASSIDAS adalah Masjid yang didirikan Pada Tahun 2002. Yang merupakan Bagian.....</p>
                        <a class="btn btn-main" href="{{ url ('artikel')}}">Selengkapnya</a>
                    </div>
                </div>
            </article>
            <!-- /single blog post -->

            <!-- single blog post -->
            <article class="col-md-4 col-sm-6 col-xs-12 ">
                <div class="post-item">
                    <div class="media-wrapper">
                        <img src="{{ asset ('template/images/blog/post-2.jpg') }}" alt="amazing caves coverimage" class="img-fluid">
                    </div>

                    <div class="content">
                        <h3><a href="{{ url ('artikel') }}">Hukum Sholat Berjama'ah</a></h3>
                        <p>Didalam Banyak Hadits Rosululloh SAW. Bersabda mengenai Keutamaan-keutamaaan
							Orang yang Sholat Berjama'ah.</p>
                        <a class="btn btn-main" href="{{ url ('artikel') }}">Selengkapnya..</a>
                    </div>
                </div>
            </article>
            <!-- end single blog post -->

            <!-- single blog post -->
            <article class="col-md-4 col-sm-6 col-xs-12 ">
                <div class="post-item">
                    <div class="media-wrapper">
                        <img src="{{ asset ('template/images/blog/post-3.jpg') }}" alt="amazing caves coverimage" class="img-fluid">
                    </div>

                    <div class="content">
                        <h3><a href="{{ url ('artikel') }}">Hints for Life</a></h3>
                        <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                            squid. 3 wolf
                            moon officia aute, non skateboard dolor brunch.</p>
                        <a class="btn btn-main" href="{{ url ('artikel') }}">Selengkapnya..</a>
                    </div>
                </div>
            </article>
            <!-- end single blog post -->
        </div> <!-- end row -->
    </div> <!-- end container -->
</section> <!-- end section -->


@endsection