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

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">
          <h1>Website Profil Desa Mojorejo<span>.</span></h1>
          <h2>Dikelola oleh PMM UMM Kelompok 94 Gelombang 3</h2>
        </div>
      </div>
<!--
      <div class="row mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
        <div class="col-xl-2 col-md-4 col-6">
          <div class="icon-box">
            <i class="ri-store-line"></i>
            <h3><a href="">Lorem Ipsum</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4 col-6 ">
          <div class="icon-box">
            <i class="ri-bar-chart-box-line"></i>
            <h3><a href="">Dolor Sitema</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4 col-6 mt-4 mt-md-0">
          <div class="icon-box">
            <i class="ri-calendar-todo-line"></i>
            <h3><a href="">Sedare Perspiciatis</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4 col-6 mt-4 mt-xl-0">
          <div class="icon-box">
            <i class="ri-paint-brush-line"></i>
            <h3><a href="">Magni Dolores</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4 col-6 mt-4 mt-xl-0">
          <div class="icon-box">
            <i class="ri-database-2-line"></i>
            <h3><a href="">Nemos Enimade</a></h3>
          </div>
        </div>
      </div>
      -->
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="{{asset('assets/img/about3.jpg')}}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
            <h3>Tentang Desa Mojorejo</h3>
            <p class="font-italic">
            Desa Mojorejo merupakan desa yang terletak di Kecamatan Junrejo, Kota Batu, Jawa
Timur. Desa Mojorejo memiliki 2 Dusun yaitu : 
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i>  Dusun Ngandat.</li>
              <li><i class="ri-check-double-line"></i> Dusun Kajang.</li>
            </ul>
            <p>
            Desa Mojorejo memiliki letak geografis yang cukup menguntungkan dan cukup
penting. Secara umum Desa Mojorejo juga merupakan sebuah desa dengan mayoritas
penduduk yang berprofesi sebagai petani dan pengusaha. Mayoritas pertanian yang ada
adalah petani padi, jagung, dan beberapa jenis sayur mayur.
<br/><br/>
Home industri juga tumbuh di desa ini antara lain pembuatan kripik kentang, kripik telo, kripik sukun dan banyak lainnya. Home industri tersebut sudah dipasarkan antara lain ke surabaya, solo, yogyakarta dan sekitarnya, nuansa pedesaan masih sangat kental dengan ciri gotong royongnya dalam melaksanakan kegiatan ??? kegiatan kemasyarakatan.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container" data-aos="zoom-in">

        <div class="owl-carousel clients-carousel">
          <img src="{{asset('assets/img/karang_taruna.png')}}" alt="">
          <img src="{{asset('assets/img/linmas.png')}}" alt="">
          <img src="{{asset('assets/img/pkk.png')}}" alt="">
          <img src="{{asset('assets/img/bpd.png')}}" alt="">
          <img src="{{asset('assets/img/bumdes_logo..jpg')}}" alt="">

        </div>

      </div>
    </section><!-- End Clients Section -->

    <!-- ======= Features Section ======= -->
    <!-- <section id="features" class="features">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="image col-lg-6" style='background-image: url("assets/img/features.jpg");' data-aos="fade-right"></div>
          <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
            <div class="icon-box mt-5 mt-lg-0" data-aos="zoom-in" data-aos-delay="150">
              <i class="bx bx-receipt"></i>
              <h4>Est labore ad</h4>
              <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
            </div>
            <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
              <i class="bx bx-cube-alt"></i>
              <h4>Harum esse qui</h4>
              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
            </div>
            <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
              <i class="bx bx-images"></i>
              <h4>Aut occaecati</h4>
              <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
            </div>
            <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
              <i class="bx bx-shield"></i>
              <h4>Beatae veritatis</h4>
              <p>Expedita veritatis consequuntur nihil tempore laudantium vitae denat pacta</p>
            </div>
          </div>
        </div>

      </div>
    </section>End Features Section -->



        <!-- ======= Services Section 2 ======= -->
        <section id="services" class="services">
      <div class="container" data-aos="fade-up" style="margin-bottom: 20px;">

        <div class="section-title">
          <h2>Pelayanan Pemerintah Desa Mojorejo</h2>
          <p>Pelayanan</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
            <div class="icon"><i class="bx bx-home-smile"></i></div>
              <h4><a href="">Layanan Pendaftaran Kartu Keluarga</a></h4>
              <p>Layanan Ini Mencakup Pendaftaran Isian Kartu Keluarga (KK)</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
            <div class="icon"><i class="bx bx-credit-card-front"></i></div>
              <h4><a href="">Layanan Pengurusan Kartu Tanda Penduduk</a></h4>
              <p>Layanan Ini Mencakup Pengajuan KTP Baru, KTP Hilang, dan Perubahan Data KTP</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
            <div class="icon"><i class="bx bx-user-plus"></i></div>
              <h4><a href="">Layanan Pengurusan Akta Kelahiran</a></h4>
              <p>Layanan Ini Mencakup Pendaftaran Akta Kelahiran</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
            <div class="icon"><i class="bx bx-user-minus"></i></div>
              <h4><a href="">Layanan Pengurusan Akta Kematian</a></h4>
              <p>Layanan Ini Mencakup Pendaftaran Akta Kematian</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
            <div class="icon"><i class="bx bxs-user-x"></i></div>
              <h4><a href="">Layanan Pengurusan Surat Pernyataan Kematian</a></h4>
              <p>Layanan Ini Mencakup Pengurusan Surat Pernyataan Kematian</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
            <div class="icon"><i class="bx bx-envelope-open"></i></div>
              <h4><a href="">Layanan Pengurusan Keramaian</a></h4>
              <p>Layanan Ini Mencakup Pengurusan Ijin Keramaaian</p>
            </div>
          </div>

        </div>

      </div>
  

    <section id="services" class="services">
    <div class="container" data-aos="fade-up">

    <div class="section-title">
          <h2>Berita</h2>
          <p>Portal Berita Desa Mojorejo</p>
          <a href="{{route('berita')}}" style="visibility: <?php echo(count($berita) > 6) ? 'visible' : 'hidden'?>">lihat selengkapnya</a>
        </div>

        
        <div class="row flex-items-xs-middle flex-items-xs-center">
            
            @for ($i = 0; $i < min(6, count($berita)); $i++)
                
            
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




    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
          <h3>Kritik dan Saran</h3>
          <p> Media aspirasi untuk warga Desa Mojorejo Kota Batu dalam menyampaikan kritik dan saran mengenai keluhan tentang semua permasalahan yang ada di Desa Mojorejo.</p>
          <a class="cta-btn" href="/kritikdansaran">Kritik dan Saran</a>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Galeri</h2>
          <p>Galeri kegiatan Desa Mojorejo.</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Semua</li>
              <li data-filter=".filter-Sosial">Sosial</li>
              <li data-filter=".filter-Ekonomi">Ekonomi</li>
              <li data-filter=".filter-Pariwisata">Pariwisata</li>
              <li data-filter=".filter-Teknologi">Teknologi</li>
              <li data-filter=".filter-Sumber_Daya">Sumber Daya</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
          @foreach ($galeri as $g)
          <div class="col-lg-4 col-md-6 portfolio-item filter-{{$g->kategori}}">
            <div class="portfolio-wrap">
              <img src="{{url('userfiles/images/galeri/'.$g->path)}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>{{$g->judul_gambar}}</h4>
                <p>{{$g->kategori}}</p>
              </div>
            </div>
          </div>
          @endforeach
        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row no-gutters">
          <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start" data-aos="fade-right" data-aos-delay="100"></div>
          <div class="col-xl-7 pl-0 pl-lg-5 pr-lg-1 d-flex align-items-stretch" data-aos="fade-left" data-aos-delay="100">
            <div class="content d-flex flex-column justify-content-center">
              <h3>Statistik Desa Mojorejo</h3>
              <p>
              Statistik Data Kependukan Desa Mojorejo
              </p>
              <div class="row">
                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="icofont-users-alt-2"></i>
                    <span data-toggle="counter-up">56975</span>
                    <p><strong>Data Jumlah Penduduk</strong> </p>
                  </div>
                </div>

                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="icofont-user-alt-2"></i>
                    <span data-toggle="counter-up">1856</span>
                    <p><strong>Data Kepala Keluarga</strong> </p>
                  </div>
                </div>

                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="icofont-user-male"></i>
                    <span data-toggle="counter-up">2850</span>
                    <p><strong>Data Jumlah Laki-Laki</strong></p>
                  </div>
                </div>

                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="icofont-user-female"></i>
                    <span data-toggle="counter-up">2847</span>
                    <p><strong>Data Jumlah Perempuan</strong> </p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="zoom-in">

        <div class="owl-carousel testimonials-carousel">

          <div class="testimonial-item">
            <img src="https://krs.umm.ac.id/Poto/2018/201810370311332.JPG" class="testimonial-img" alt="">
            <h3>Arif Rahman Hidayatullah</h3>
            <h4>Ceo &amp; Founder</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item">
            <img src="https://krs.umm.ac.id/Poto/2018/201810370311339.JPG" class="testimonial-img" alt="">
            <h3>Muhammad Putera Anami</h3>
            <h4>Designer</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item">
            <img src="https://krs.umm.ac.id/Poto/2018/201810370311342.JPG" class="testimonial-img" alt="">
            <h3>Muhammad Alfian Ramadhani</h3>
            <h4>Store Owner</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item">
            <img src="https://krs.umm.ac.id/Poto/2018/201810370311365.JPG" class="testimonial-img" alt="">
            <h3>Ahmad Alif Asy???ari Syukur</h3>
            <h4>Freelancer</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item">
            <img src="https://krs.umm.ac.id/Poto/2018/201810370311370.JPG" class="testimonial-img" alt="">
            <h3>Moch. Daffa Shafwan Chairullah</h3>
            <h4>Entrepreneur</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Perangkat Desa</h2>
          <p>Galeri Perangkat Desa</p>
        </div>

        <div class="row">
        @foreach ($perangkat as $p)
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="{{url('userfiles/images/'.$p->foto)}}" class="img-fluid" alt="">
                {{-- <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div> --}}
              </div>
              <div class="member-info">
                <h4>{{$p->nama_perangkat}}</h4>
                <span>{{$p->jabatan}}
</span>
              </div>
            </div>
          </div>
          @endforeach
        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </div>

        <div>
          <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15807.740151584108!2d112.55725317711092!3d-7.901855908920063!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78810c81708127%3A0xf2f2980bb48fd1da!2sMojorejo%2C%20Kec.%20Junrejo%2C%20Kota%20Batu%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1617852349462!5m2!1sid!2sid" frameborder="0" allowfullscreen></iframe>
        </div>

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Alamat:</h4>
                <p>Desa Mojorejo, Kec. Junrejo, Kota Batu (65322)</p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>pemdesmojorejo@gmail.com</p>
              </div>

              

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">
 <!-- Success message -->
 @if(Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
        @endif
            <form action="{{ route('index.contact.store') }}" method="post" role="form" class="php-email-form">
            @csrf
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control {{ $errors->has('name') ? 'error' : '' }}" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <!-- Error -->
        @if ($errors->has('name'))
        <div class="error">
            {{ $errors->first('name') }}
        </div>
        @endif
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control {{ $errors->has('email') ? 'error' : '' }}" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  @if ($errors->has('email'))
        <div class="error">
            {{ $errors->first('email') }}
        </div>
        @endif
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control {{ $errors->has('subject') ? 'error' : '' }}" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                @if ($errors->has('subject'))
        <div class="error">
            {{ $errors->first('subject') }}
        </div>
        @endif
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control {{ $errors->has('message') ? 'error' : '' }}" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                @if ($errors->has('message'))
        <div class="error">
            {{ $errors->first('message') }}
        </div>
        @endif
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

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
