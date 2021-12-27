<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html> <!--<![endif]-->
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="Bingo One page parallax responsive HTML Template ">

  <meta name="author" content="Themefisher.com">

  <title>Yayasan Murah Hati Ngargosari</title>

<!-- Mobile Specific Meta
  ================================================== -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('template/images/logo.png') }}" />

  <!-- CSS
  ================================================== -->
  <!-- Themefisher Icon font -->
  <link rel="stylesheet" href="{{ asset('template/plugins/themefisher-font/style.css') }}">
  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="{{ asset('template/plugins/bootstrap/css/bootstrap.min.css') }}">
  <!-- Lightbox.min css -->
  <link rel="stylesheet" href="{{ asset('template/plugins/lightbox2/dist/css/lightbox.min.css') }}">
  <!-- animation css -->
  <link rel="stylesheet" href="{{ asset('template/plugins/animate/animate.css') }}">
  <!-- Slick Carousel -->
  <link rel="stylesheet" href="{{ asset('template/plugins/slick/slick.css') }}">
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="{{ asset('template/css/style.css') }}">

</head>

<body id="body">

 <!--
  Start Preloader
  ==================================== -->
  <div id="preloader">
    <div class='preloader'>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
  <!--
  End Preloader
  ==================================== -->




<!--
Fixed Navigation
==================================== -->
<header class="navigation fixed-top">
  <div class="container">
    <!-- main nav -->
    <nav class="navbar navbar-expand-lg navbar-light">
      <!-- logo -->
      <a class="navbar-brand logo" href="index.html">
        <img class="logo-default" src="{{ asset('template/images/logo.png') }}" alt="logo"/>
        <img class="logo-white" src="{{ asset('template/images/logo.png') }}" alt="logo"/>
      </a>
      <!-- /logo -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
        aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navigation">
        <ul class="navbar-nav ml-auto text-center">
          <li class="nav-item">
            <a class="nav-link" href="{{ url('') }}" aria-haspopup="true" aria-expanded="false">
              Home
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ url('susunan') }}">Kepengurusan Yayasan</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ url('Gallery') }}">Gallery</a>
          </li>
          <li class="nav-item dropdown ">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Agenda Rutin
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ url('harian') }}">Harian</a>
              <a class="dropdown-item" href="{{ url('mingguan') }}">Mingguan</a>
              <a class="dropdown-item" href="{{ url('bulanan') }}">Bulanan</a>
              <a class="dropdown-item" href="{{ url('tahunan') }}">Tahunan</a>
            </div>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ url('Artikel') }}">Artikel</a>
          </li>
          <li class="nav-item dropdown ">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Lembaga yang Dikelola
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ url('masjid') }}">Masjid ASSIDAS</a>
              <a class="dropdown-item" href="{{ url('tpq') }}">TPQ</a>
              <a class="dropdown-item" href="{{ url('kajian') }}">Kajian Kitab Kuning</a>
            </div>
          </li>
          <li class="nav-item dropdown ">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Madrasah Diniyyah
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ url('susunanDiniyyah') }}">Susunan Kepengurusan</a>
              <a class="dropdown-item" href="{{ url('daftarkitab') }}">Kitab Yang Dikaji</a>
              <a class="dropdown-item" href="{{ url('tenagaPengajar') }}">Tenaga Pengajar</a>
              <a class="dropdown-item" href="{{ url('informasiPendaftaran') }}">Informasi Pendaftaran</a>
            </div>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ url('kontak') }}">Kontak</a>
          </li>
        </ul>
      </div>
    </nav>
    <!-- /main nav -->
  </div>
</header>
<!--
End Fixed Navigation
==================================== -->


@yield('content')

<footer id="footer" class="bg-one bottom">
    <div class="top-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-3 col-md-3 col-lg-3">
            <h3>Tentang</h3>
            <p>Masjid yang terletak di Pucang, Ngargosari, Kec. Ampel, Kabupaten Boyolali, Jawa Tengah 57352</p>
          </div>
          <!-- End of .col-sm-3 -->

          <div class="col-sm-3 col-md-3 col-lg-3">
            <ul>
              <li><h3>Program Kegiatan</h3></li>
              <li><a href="#">Istighotsah</a></li>
              <li><a href="#">Yaasin dan Tahlil</a></li>
              <li><a href="#">Madrasah Diniyyah</a></li>
            </ul>
          </div>
          <!-- End of .col-sm-3 -->

          <div class="col-sm-3 col-md-3 col-lg-3">
            <ul>
              <li><h3>Quick Links</h3></li>
              <li><a href="{{url ('susunan') }}">Susunan Takmir Masjid</a></li>
              <li><a href="{{url ('tentang') }}">Tentang</a></li>
              <li><a href="https:wa.me/6282134462498">Pertanyaan</a></li>
              <li><a href="{{url ('kontak') }}">Kontak</a></li>
            </ul>
          </div>
          <!-- End of .col-sm-3 -->

          <div class="col-sm-3 col-md-3 col-lg-3">
            <ul>
              <li><h3>Connect with us Socially</h3></li>
              <li><a href="#">Facebook</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Youtube</a></li>
              <li><a href="#">Instagram</a></li>
            </ul>
          </div>
          <!-- End of .col-sm-3 -->

        </div>
      </div> <!-- end container -->
    </div>
    <div class="footer-bottom">
      <h5>Copyright 2021. All rights reserved.</h5>
      <h6>Design and Developed by <a href="">DaquDev</a></h6>
    </div>
  </footer> <!-- end footer -->


      <!-- end Footer Area
      ========================================== -->



      <!--
      Essential Scripts
      =====================================-->
      <!-- Main jQuery -->
      <script src="{{ asset('template/plugins/jquery/jquery.min.js') }}"></script>
      <!-- Google Map -->
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ"></script>
      <script  src="{{ asset('template/plugins/google-map/gmap.js') }}"></script>

      <!-- Form Validation -->
      <script src="{{ asset('template/plugins/form-validation/jquery.form.js') }}"></script>
      <script src="{{ asset('template/plugins/form-validation/jquery.validate.min.js') }}"></script>

      <!-- Bootstrap4 -->
      <script src="{{ asset('template/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
      <!-- Parallax -->
      <script src="{{ asset('template/plugins/parallax/jquery.parallax-1.1.3.js') }}"></script>
      <!-- lightbox -->
      <script src="{{ asset('template/plugins/lightbox2/dist/js/lightbox.min.js') }}"></script>
      <!-- Owl Carousel -->
      <script src="{{ asset('template/plugins/slick/slick.min.js') }}"></script>
      <!-- filter -->
      <script src="{{ asset('template/plugins/filterizr/jquery.filterizr.min.js') }}"></script>
      <!-- Smooth Scroll js -->
      <script src="{{ asset('template/plugins/smooth-scroll/smooth-scroll.min.js') }}"></script>

      <!-- Custom js -->
      <script src="{{ asset('template/js/script.js') }}"></script>



    </body>
    </html>
