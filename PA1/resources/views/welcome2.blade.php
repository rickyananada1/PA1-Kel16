<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> GPDI PORSEA</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/cross.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">  
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assetsz/fonts/mdi/css/materialdesignicons.min.css" />

  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

</head>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@100&display=swap');
  @import url('https://fonts.googleapis.com/css2?family=Rubik+Puddles&display=swap');
  @import url('https://fonts.googleapis.com/css2?family=Source+Serif+Pro:wght@200&display=swap');
  @import url('https://fonts.googleapis.com/css2?family=Dosis:wght@200&display=swap');


#pendeta .team-member  {
font-family:'Dosis', sans-serif;

  }
</style>
<body>

   <!-- ======= Header ======= -->
    <header id="header" class="header d-flex align-items-cente ">
      <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="index.html" class="logo d-flex align-items-center">
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <!-- <img src="assets/img/logo.png" alt=""> -->
          <h1>GPDI<span>PORSEA.</span></h1>
        </a>

        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
        <nav id="navbar" class="navbar">
          <ul>
            <li><a href="/" class="active">Home</a></li>
            <li class="dropdown"><a href="#"><span>Tentang Gereja</span> <i
              class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="#sejarah">Sejarah Gereja</a></li>
              <li><a href="#visimisi">Visi Misi Gereja</a></li>
              <li><a href="#pendeta">Pelayan Gereja</a></li>
              {{-- <li><a href="#datagereja">Data Gereja</a></li> --}}
              <li><a href="#contact">Contact & alamat</a></li>
            </ul>
            </li>
            <li class="dropdown"><a href="#"><span>Jadwal ibadah & Warta Jemaat</span> <i
                  class="bi bi-chevron-down dropdown-indicator"></i></a>
              <ul>
                <li><a href="/jadwalibadahh">Jadwal Ibadah</a></li>
                <li><a href="/wartajemaatt">Warta Jemaat</a></li>
              </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Jemaat & Keuangan</span> <i
            class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="/datajemaatt">Data Jemaat</a></li>
              <li><a href="/keuangann">Informasi Keuangan</a></li>
              <li><a href="/donasii">Donasi </a></li>
            </ul>
          </li>
            <li><a href="/photoo">Galeri </a></li>
            <li><a href="/login">Login</a></li>
            
          </ul>
        </nav><!-- .navbar -->

      </div>
    </header><!-- End Header -->
   <!-- ======= Hero Section ======= -->
   <section id="hero" class="hero">

    <div class="info d-flex align-items-center">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <h2 data-aos="fade-down">SELAMAT DATANG DI <span>GPDI PORSEA</span></h2>
            {{-- <a data-aos="fade-up" data-aos-delay="200" href="#get-started" class="btn-get-started">Get Started</a> --}}
          </div>
        </div>
      </div>
    </div>

    <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

      <div class="carousel-item active" style="background-image: url(assets/img/hero-carousel/alkitab.jpg)">
      </div>
      <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/gereja.jpg)"></div>

      <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>

  </section><!-- End Hero Section -->

  <main id="main"> 
    <div id="sejarah">
      <br><br><br>
        <div class="container">
        <div class="home_heading text-center">
          <span class="subheading">Sejarah dan Visi Misi Gereja</span>
        </div>
        <div class="section-heading">
          <h2>Sejarah <em>Gereja</em></h2>
          {{-- <p>Berikut adalah sejarah gereja GPDI Porsea</p> --}}
        </div>
        <section id="about" class="about">
          <div class="container" data-aos="fade-up">
            <div class="row position-relative">
              <div class="col-lg-7 about-img" style="background-image: url(assets/img/hero-carousel/gereja.jpg)"></div>
              <div class="col-lg-7">
              
                <div class="our-story">
                  <h4>Sejak 1977</h4>
                  {{-- <h3>Our Story</h3> --}}
                  <p>Pendiri gereja ini adalah Pdt. P.K Sitorus B.Th, yang sudah meninggal 22 Desember 2020, dan digantikan oleh anaknya Pdp. Nehemia Ebenezer Sitorus yang dilantik pada 26 Juni 2022. Awal mula gereja ini didirikan, di mulai dari perintisan GPdI di Pintu Pohan pada tahun 1972, kemudian mengembangkan pelayanan dengan merintis GPdI Porsea di Lumban datu di sebuah rumah kontrakan pada tahun 1977, selama mengontrak hanya terdiri dari 10 Keluarga dan tetap bergumul untuk memiliki tempat ibadah yang tetap,kaena jumlah jemaat semakin bertambah. 
                    dan Tuhan menjawab, sehinggga pada tahun 1989 dibeli pertapakan di Lumban Datu No 102, dan dibangun gereja atas nama GPdI Porsea.</p>
                  {{-- <ul>
                    <li><i class="bi bi-check-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea commo</span></li>
                    <li><i class="bi bi-check-circle"></i> <span>Duis aute irure dolor in reprehenderit in</span></li>
                    <li><i class="bi bi-check-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea</span></li>
                  </ul> --}}
                  <p> Setelah beberapa tahun menjalani ibadah, maka mengalami pertambahan jemaat dan tida cukup untuk menapung jemaat. Maka, pada tahun 2017 dimulai untuk proses janji iman kepada jemaat untuk memperbesar gedung GPdI Porsea. Sampa  tahun 2023,  Gereja sudah berdiri dengan bangunan baru yang masih berproses dalam kelengkapan pembangunannya, khususnya bagian pemagaran yang masih dalam tahap pengumpulan dana.</p>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
 

    <!-- ======= Features Section ======= -->
    <div id="visimisi">
    <section id="features" class="features section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-heading">
          <h2>Visi & Misi <em>Gereja</em></h2>
          {{-- <p>Berikut adalah sejarah gereja GPDI Porsea</p> --}}
        </div>
        <br>
        <ul class="nav nav-tabs row  g-2 d-flex">

          <li class="nav-item col-6 ">
            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
              <h4>VISI GEREJA</h4>
            </a>
          </li><!-- End tab nav item -->

          <li class="nav-item col-6">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
              <h4>MISI GEREJA</h4>
            </a><!-- End tab nav item -->

          

        </ul>

        <div class="tab-content">

          <div class="tab-pane active show" id="tab-1">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center"
                data-aos="fade-up" data-aos-delay="100">
                <h3>VISI GEREJA</h3>
                <p class="fst-italic">
                  Menjadi Gereja yang Bertumbuh berakar dan berbuah menuju kedewasaan Di Dalam Yesus Kristus
                </p>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                <img src="assets/img/gereja/visi.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End tab content item -->

          <div class="tab-pane" id="tab-2">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                <h3>MISI GEREJA</h3>
                <p class="fst-italic">
                  Membimbing tiap jemaat untuk terus membina hubungan yang bersifat pribadi dengan Tuhan, agar semakin dewasa dalam kerohanian.

                  Menciptakan dan memelihara suasana yang dapat mendukung terjadinya persekutuan yang erat dalam jemaat/mempererat tali kasih persaudaraan yang rukun
                  
                  Menggali karunia jemaat, serta mendorong jemaat untuk menggunakan karunia tersebut untuk melakukan pekerjaan Tuhan.
                  
                  Membimbing jemaat agar dapat menjawab tantangan dari kehidupan sehari-hari yang dihadapi jemaat itu sendiri, maupun oleh lingkungan sekitarnya secara Kristiani, agar jemaat semakin kuat dalam iman yang tidak tergoncangkan oleh segala pengaruh-pengaruh
                  
                  Melatih jemaat agar dapat melakukan Amanat Agung(Matius 28:19) yaitu menjadi saksi yang diberkati untuk memberkati jiwa-jiwa yang hendak dimenangkan bagi Kristus.
                </p>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="assets/img/gereja/misi.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End tab content item -->
        </div>

      </div>
    </section><!-- End Features Section -->
  </div>
<br><br>
<br><br>
 <!-- Team Start -->

<!-- Team End -->

 <!-- Team-->
<div id="pendeta">
 <section class="page-section bg-light" id="team">
  <div class="container">
    <div class="section-heading">
      <h2>Pendeta <em>Gereja</em></h2>
      <p>Berikut adalah pendeta gereja GPDI Porsea</p>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <div class="team-member">
          <img class="mx-auto rounded-circle" src="assets/img/team/team-2.jpg" alt="..." />
          <h4>Pdt.Eben Sitorus</h4>
          <p class="text-muted">Pendeta</p>
          {{-- <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand Twitter Profile"><i class="fab fa-twitter"></i></a>
          <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand Facebook Profile"><i class="fab fa-facebook-f"></i></a>
          <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand LinkedIn Profile"><i class="fab fa-instagram"></i></a> --}}
        </div>
      </div>
      <div class="col-lg-6">
        <div class="team-member">
          <img class="mx-auto rounded-circle" src="assets/img/team/team-1.jpg" alt="..." />
          <h4>Pdt.Kristien Oktavia</h4>
          <p class="text-muted">Pendeta</p>
          
        </div>
      </div>
    </div>
    {{-- <div class="row">
      <div class="col-lg-8 mx-auto text-center">
        <p class="large text-muted">Mereka adalah orang yang berperan dalam memajukan gereja tercinta kita ini</p>
      </div>
    </div> --}}

    <div class="row">
      <div class="col-lg-6">
        <div class="team-member">
          <img class="mx-auto rounded-circle" src="assets/img/team/team-3.jpg" alt="..." />
          <h4>Sahata Siburian</h4>
          <p class="text-muted">Sintua</p>
         
        </div>
      </div>
      <div class="col-lg-6">
        <div class="team-member">
          <img class="mx-auto rounded-circle" src="assets/img/team/team-4.jpg" alt="..." />
          <h4>Harapan Manurung </h4>
          <p class="text-muted">Sintua</p>
         
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <div class="team-member">
          <img class="mx-auto rounded-circle" src="assets/img/team/team-5.jpg" alt="..." />
          <h4>Panusunan simanjuntak</h4>
          <p class="text-muted">Sintua</p>
          
        </div>
      </div>
      <div class="col-lg-6">
        <div class="team-member">
          <img class="mx-auto rounded-circle" src="assets/img/team/team-6.jpg" alt="..." />
          <h4>Lisson Panjaitan </h4>
          <p class="text-muted">Sintua</p>
        </div>
          
        </div>
      </div>
    </div>
  </div>
  
</section>
</div>


  <div id="contact">
  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

          <!-- ======= Contact Section ======= -->
          <section id="contact" class="contact">
            <div class="container" data-aos="fade-up" data-aos-delay="100">
      
              <div class="section-heading">
                <h2>Contact & Alamat <em>Gereja</em></h2>
                {{-- <p>Berikut adalah yang dapat diihat oleh semua jemaat</p> --}}
              </div>
      
              <div class="row gy-4">
                <div class="col-lg-6">
                  <div class="info-item  d-flex flex-column justify-content-center align-items-center">
                    <i class="bi bi-map"></i>
                    <h3>Alamat </h3>
                    
                    <p>Jl. Gereja Ulu Bius No.102Parparean III, Kec. Porsea, Toba, br Sumatera Utara 22384</p>
                  </div>
                </div><!-- End Info Item -->
      
                <div class="col-lg-3 col-md-6">
                  <div class="info-item d-flex flex-column justify-content-center align-items-center">
                    <i class="bi bi-envelope"></i>
                    <h3>Email</h3>
                    <p>@gpdiporsea</p>
                  </div>
                </div><!-- End Info Item -->
      
                <div class="col-lg-3 col-md-6">
                  <div class="info-item  d-flex flex-column justify-content-center align-items-center">
                    <i class="bi bi-telephone"></i>
                    <h3>No-telpon</h3>
                    <a href="https://api.whatsapp.com/send?phone=6281396293306" class="nav-link">+62 813-9629-3306</a>

                  </div>
                </div><!-- End Info Item -->
      
              </div>
              <br><br>

                <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=1515&amp;height=462&amp;hl=en&amp;q=gpdiporsea&amp;t=p&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://capcuttemplate.org/">Capcut Template</a></div><style>.mapouter{position:relative;text-align:right;width:100%;height:462px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:462px;}.gmap_iframe {height:462px!important;}</style></div>
          
            </section><!-- End Contact Section -->
  </div>

  
  <footer class="ftco-footer ftco-bg-dark ftco-section mt-3" id="5">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2 logo">Gereja <span>GPDI PORSEA</span></h2>
            <p>"Kita bernyanyi di gereja, mengapa kita tidak bisa menari di sana?"<br> ~ George Bernard Shaw</p>
            <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
              <li class="ftco-animate">
                <a href="#"><span class="mdi mdi-twitter"></span></a>
              </li>
              <li class="ftco-animate">
                <a href="#"><span class="mdi mdi-facebook"></span></a>
              </li>
              <li class="ftco-animate">
                <a href="#"><span class="mdi mdi-instagram"></span></a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4 ml-md-5">
            <h2 class="ftco-heading-2">Quick Link</h2>
            <ul class="list-unstyled">
              <li>
                <a href="/" class="py-1 d-block"><span class="mdi mdi-view-dashboard mr-3"></span>Home</a>
              </li>
             
              <li>
                <a href="/wartajemaatt" class="py-1 d-block"><span class="mdi mdi-newspaper mr-3"></span>Warta Jemaat</a>
              </li>
              <li>
                <a href="/datajemaatt" class="py-1 d-block"><span class="mdi mdi-human-male-female mr-3"></span>Data Jemaat</a>
              </li>
              <li>
                <a href="/jadwalibadahh" class="py-1 d-block"><span class="mdi mdi-calendar mr-3"></span>Jadwal Ibadah</a>
              </li>
              <li>
                <a href="/photoo" class="py-1 d-block"><span class="fa fa-camera-retro mr-3"></span>Galeri</a>
              </li>
            </ul>
          </div>
      </div>


        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Agenda Kegiatan</h2>
            <div class="opening-hours">
              <p>Minggu Pagi<span class="mb-3">10:00 am to 11:30 am</span></p>
              <p>Minggu Siang <span class="mb-3">8:30 am to 11:30 am</span></p>
              <p>Sabtu Sore<span class="mb-3">8:30 am to 11:30 am</span></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>


  </main>

      
  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>