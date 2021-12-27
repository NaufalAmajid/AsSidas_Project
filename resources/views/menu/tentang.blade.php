@extends('headerfooter.headerfooter')

@section('content')
    
<section class="single-page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Tentang Yayasan Murah Hati Ngargosari</h2>
				<ol class="breadcrumb header-bradcrumb">
				  <li><a href="index.html">Home</a></li>
          <li class="active"> &nbsp; / &nbsp; </li>
				  <li class="active"> Tentang</li>
				</ol>
			</div>
		</div>
	</div>
</section>

<section class="blog-details section">
    <div class="container">
      <div class="row">

        <div class="col-lg-8">
          <article class="post">
            <div class="post-image">
              <img src="{{asset ('template/images/logo-home.png') }}" alt="post-image" width="200" height="200">
            </div>
            <!-- Post Content -->
            <div class="post-content">
              <h3>Tentang Yayasan Murah Hati Ngargosari</h3>
              </ul>
              <p>Masjid Assidas adalah Masjid yang didirikan pada tahun .... yang berada di Boyolali. Tepatnya berada di
                Pucang, Ngargosari, Kec. Ampel, Kabupaten Boyolali, Jawa Tengah 57352. Dalam Rangka Mensyi'arkan Agama Islam,Selain sebagai Tempat Ibadah,
                Masjid Assidas Juga Memiliki Berbagai Progam yang sangat Mendukung kemajuan Islam. Di antaranya : Madrasah Diniyyah.Istighotsah,Kajian KItab Kuning,dll.</p>
              <p>Semua Artikel akan Dimuat disini,ini hanya sebagai contoh saja. </p>
              <!-- blockquote -->
              <blockquote data-aos="fade-left" data-aos-duration="1000">Pada Intinya ini merupakan Tampilan BlockNote pada tiap Artikel yang sudah di Post Oleh Admin.</blockquote>
              <p>Jika ada Saran Kritik dan Masukkan silahkan segera sampaikan kepada kami.
                Agar segera bisa di perbaiki untuk Kebaikan Bersama.</p> </div>

@endsection