<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Mojorejo Batu Official Website</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('assets/img/logopmm.png')}}" rel="icon">
  <link href="{{asset('assets/img/logopmm.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="{{asset('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i')}}" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">


</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="{{route('index')}}">Mojorejo<span>.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="{{route('index')}}">Home</a></li>
          <li><a href="#about">Tentang Desa</a></li>
          <li><a href="#portfolio">Galeri</a></li>
          <li><a href="#team">Perangkat</a></li>
          <li class="drop-down"><a href="">Pelayanan</a>
            <ul>
            <li><a href="#services">Layanan Pendaftaran Kartu Keluarga</a></li>
                  <li><a href="#services">Layanan Pengurusan Kartu Tanda Penduduk</a></li>
                  <li><a href="#services">Layanan Pengurusan Akta Kelahiran</a></li>
                  <li><a href="#services">Layanan Pengurusan Akta Kematian</a></li>
                  <li><a href="#services">Layanan Pengurusan Surat Pernyataan Kematian</a></li>
                  <li><a href="#services">Layanan Pengurusan Keramaian</a></li>
            </ul>
          </li>
          <li><a href="#contact">Kontak</a></li>

        </ul>
      </nav><!-- .nav-menu -->

      {{-- <a href="#about" class="get-started-btn scrollto">Get Started</a> --}}

    </div>
  </header><!-- End Header -->

  <main id="main">

    <section id="services" class="services">
    <div class="container" data-aos="fade-up">

    <div class="section-title">
          <h2>Berita</h2>
          <p>Portal Berita Desa Mojorejo</p>
          <a href="" style="visibility: <?php echo(count($berita) > 6) ? 'visible' : 'hidden'?>">lihat selengkapnya</a>
        </div>

        
        <div class="row flex-items-xs-middle flex-items-xs-center">
            
            @for ($i = 0; $i < count($berita); $i++)
                
            
            <div class="col-xs-12 col-lg-4">
            <div class="icon-box" style="margin-bottom: 20px;">
                
                    <img src="{{url('userfiles/images/'.$berita[$i]['gambar'])}}" class="card-img-top"
                            style="height: 275px; object-fit: cover; object-position: center;" alt="">
                
                    <div class="card-block mt-3">      
                        <h4 style="padding-top:20px;"><a href="{{route('berita.lihat-berita2', ['id'=>$berita[$i]->id])}}">{{$berita[$i]->judul_berita}}</a></h4>
                        {!! Str::limit($berita[$i]->isi_berita, 100) !!}
                        <div class="text-center" style="padding-top:20px;"><a href="/post/{{$berita[$i]->id}}" style="background: #ffc451; border: 0; padding: 10px 24px; color: #151515; transition: 0.4s; border-radius: 4px;">Selengkapnya</a></div>
                    </div>
                </div>
            </div>
            @endfor
        </div>

        {{-- <div class="row mt-5 d-flex justify-content-center">
                    <div class="card pb-0">
                    <a href="#" class="btn">Semua Berita</a>
                    </div>
                </div> --}}
    </div>
</section>

   

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Mojorejo<span>.</span></h3>
              <p>
              Desa Mojorejo <br>
              Kec. Junrejo, Kota Batu (65322)<br><br>
                <strong>Phone:</strong> +1 5589 55488 55<br>
                <strong>Email:</strong> info@example.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Tentang Desa</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Pelayanan</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Pelayanan</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Pendaftaran KK</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Pengurusan KTP</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Pengurusan Akta Kelahiran</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Pengurusan Akta Kematian</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Pengurusan Surat Pernyataan Kematian</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Tetaplah Terhubung</h4>
            <p>Masukkan Email kamu untuk mendapatkan informasi terbaru</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Mojorejo</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/ -->
        Designed by <a href="">Kelompok PMM 94</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <!-- <div id="preloader"></div> -->

  <!-- Vendor JS Files -->
  <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/vendor/venobox/venobox.min.js')}}"></script>
  <script src="{{asset('assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('assets/vendor/counterup/counterup.min.js')}}"></script>
  <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>
<!-- pemdesmojorejo308@gmail.com -->
