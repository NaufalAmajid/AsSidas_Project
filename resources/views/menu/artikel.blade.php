@extends('headerfooter.headerfooter')

@section('content')

<section class="single-page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>ARTIKEL</h2>
				<ol class="breadcrumb header-bradcrumb">
				  <li><a href="index.html">Home</a></li>
          <li class="active"> &nbsp; / &nbsp; </li>
				  <li class="active"> Artikel</li>
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
              <img class="img-fluid w-100" src="{{asset ('template/images/portfolio/img-8.jpg') }}" alt="post-image">
            </div>
            <!-- Post Content -->
            <div class="post-content">
              <h3>Mengenal Lebih Dekat dengan Masjid Assidas</h3>
              <ul class="list-inline">
                <li class="list-inline-item">
                  <a href="#">Admin</a>&nbsp;/
                </li>
                <li class="list-inline-item">
                  <a href="#">02 Komentar</a>&nbsp;/
                </li>
                <li class="list-inline-item">
                  <a href="#">30 Suka</a>
                </li>
              </ul>
              <p>Masjid Assidas adalah Masjid yang didirikan pada tahun .... yang berada di Boyolali. Tepatnya berada di
                Pucang, Ngargosari, Kec. Ampel, Kabupaten Boyolali, Jawa Tengah 57352. Dalam Rangka Mensyi'arkan Agama Islam,Selain sebagai Tempat Ibadah,
                Masjid Assidas Juga Memiliki Berbagai Progam yang sangat Mendukung kemajuan Islam. Di antaranya : Madrasah Diniyyah.Istighotsah,Kajian KItab Kuning,dll.</p>
              <p>Semua Artikel akan Dimuat disini,ini hanya sebagai contoh saja. </p>
              <!-- blockquote -->
              <blockquote data-aos="fade-left" data-aos-duration="1000">Pada Intinya ini merupakan Tampilan BlockNote pada tiap Artikel yang sudah di Post Oleh Admin.</blockquote>
              <p>Jika ada Saran Kritik dan Masukkan silahkan segera sampaikan kepada kami.
                Agar segera bisa di perbaiki untuk Kebaikan Bersama.</p>
              <!-- post share -->
              <ul class="post-content-share list-inline">
                <li class="list-inline-item">
                  <a href="#">
                    <i class="tf-ion-social-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="tf-ion-social-linkedin"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="tf-ion-social-facebook"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="tf-ion-social-skype"></i>
                  </a>
                </li>
              </ul>
              <h3>2 Komentar</h3>
              <ul class="comment-list">
                <!-- comment list -->
                <li class="comment-list-item">
                  <div class="comment-list-item-image">
                    <img src="{{ asset ('template/images/blog/comment-1.jpg') }}" alt="comment-img">
                  </div>
                  <div class="comment-list-item-content">
                    <h5>Muhammad Syaiful Anwar</h5>
                    <h6>Nov 20, 2021</h6>
                    <p>Masjid dengan Bangunan Megah di Padukan dengan Progam-progam yang Sangat Membanggakan. </p>
                    <a href="#" class="comment-btn">Balasan</a>
                  </div>
                </li>
                <li class="comment-list-item">
                  <div class="comment-list-item-image">
                    <img src="{{ asset ('template/images/blog/comment-2.jpg') }}" alt="comment-img">
                  </div>
                  <div class="comment-list-item-content">
                    <h5>Muhammad Naufal Majid</h5>
                    <h6>Oct 30, 2021</h6>
                    <p>Sangat Menginspirasi,Semoga Berkah. </p>
                    <a href="#" class="comment-btn">Balasan</a>
                  </div>
                </li>
              </ul>
              <h3>Tinggalkan Sebuah Komentar</h3>
              <!-- Comment Form -->
              <form action="#" class="comment-form">
                <div class="row">
                  <div class="col-lg-6 col-md-6">
                    <input type="text" name="first-name" class="form-control" id="first-name" placeholder="First Name" required>
                  </div>
                  <div class="col-lg-6 col-md-6">
                    <input type="email" name="mail" class="form-control" id="mail" placeholder="Email" required>
                  </div>
                  <div class="col-lg-12 col-md-12">
                    <textarea class="form-control" name="msg" id="msg" rows="6" placeholder="Message" required></textarea>
                  </div>
                </div>
                <button type="submit" value="send" class="btn btn-primary">Posting</button>
              </form>
            </div>
          </article>
        </div>
        <div class="col-lg-4">
          <!-- sidebar -->
          <aside class="sidebar">
            <div class="widget-search widget">
              <form action="#">
                <!-- Search bar -->
                <input class="form-control" type="text" placeholder="Search..." name="search">
                <button type="submit" class="widget-search-btn">
                  <i class="tf-ion-ios-search"></i>
                </button>
              </form>
            </div>
            <div class="widget-categories widget">
              <h2>Kategori</h2>
              <!-- widget categories list -->
              <ul class="widget-categories-list">
                <li>
                  <a href="#">Fiqih</a>
                </li>
                <li>
                  <a href="#">Ahlus Sunnah Wal Jama'ah</a>
                </li>
                <li>
                  <a href="#">Akhlaq</a>
                </li>
                <li>
                  <a href="#">Ilmu Nahwu dan Shorof</a>
                </li>
                <li>
                  <a href="#">Tajwid</a>
                </li>
                <li>
                  <a href="#">Qiro'ah</a>
                </li>
              </ul>
            </div>
            <div class="widget-post widget">
              <h2>Postingan Terakhir</h2>
              <!-- latest post -->
              {{-- <ul class="widget-post-list">
                <li class="widget-post-list-item">
                  <div class="widget-post-image">
                    <a href="single-post.html">
                      <img src="{{ asset ('template/images/blog/post-1.jpg') }}">
                    </a>
                  </div>
                  <div class="widget-post-content">
                    <a href="single-post.html">
                      <h5>Mengenal abu aswad</h5>
                    </a>
                    <h6>Oct 20, 2021</h6>
                  </div>
                </li>
                <li class="widget-post-list-item">
                  <div class="widget-post-image">
                    <a href="single-post.html">
                      <img src="{{ asset ('template/images/blog/post-2.jpg') }}">
                    </a>
                  </div>
                  <div class="widget-post-content">
                    <a href="single-post.html">
                      <h5>Sholat dhuha berjamaah dengan pengurus masjid</h5>
                    </a>
                    <h6>Oct 20, 2021</h6>
                  </div>
                </li>
                <li class="widget-post-list-item">
                  <div class="widget-post-image">
                    <a href="single-post.html">
                      <img src="{{ asset ('template/images/blog/post-3.jpg') }}" alt="post-img">
                    </a>
                  </div>
                  <div class="widget-post-content">
                    <a href="single-post.html">
                      <h5>Sejarah Kitab 'Aqidatul 'Awwam.</h5>
                    </a>
                    <h6>Nov 03, 2021</h6>
                  </div>
                </li>
              </ul> --}}
              <table class="widget-post-list">
                <tr>
                  <td class="widget-post-list-item">
                    <div class="widget-post-image">
                      <a href="single-post.html">
                        <img src="{{ asset ('template/images/blog/post-1.jpg') }}">
                      </a>
                    </div>
                  </td>
                  <td>
                    <div class="widget-post-content">
                      <a href="single-post.html">
                        <h5>Menegenal Abul Aswad Ad-Duwaly</h5>
                      </a>
                      <h6>Oct 20, 2021</h6>
                    </div>
                  </td>
                </tr>

                <tr>
                  <td class="widget-post-list-item">
                    <div class="widget-post-image">
                      <a href="single-post.html">
                        <img src="{{ asset ('template/images/blog/post-2.jpg') }}">
                      </a>
                    </div>
                  </td>
                  <td>
                    <div class="widget-post-content">
                      <a href="single-post.html">
                        <h5>Hukum Sholat Berjama'ah</h5>
                      </a>
                      <h6>Oct 20, 2021</h6>
                    </div>
                  </td>
                </tr>
                
                <tr>
                  <td class="widget-post-list-item">
                    <div class="widget-post-image">
                      <a href="single-post.html">
                        <img src="{{ asset ('template/images/blog/post-3.jpg') }}">
                      </a>
                    </div>
                  </td>
                  <td>
                    <div class="widget-post-content">
                      <a href="single-post.html">
                        <h5>Sejarah Kitab 'Aqidatul 'Awwam</h5>
                      </a>
                      <h6>Oct 20, 2021</h6>
                    </div>
                  </td>
                </tr>

              </table>
            </div>
          </aside>
        </div>
      </div>
    </div>
  </section>
  <!-- blog details part end -->

@endsection