<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <link rel="icon shortcut" type="image/jpg" href="assets/img/cross.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assetsz/css/bootstrap.min.css" />
    {{-- <link rel="stylesheet" href="assetsz/css/dipam.css" /> --}}
    <link rel="stylesheet" href="assetsz/fonts/mdi/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="assetsz/fonts/font-awesome/css/font-awesome.css" />
    <link rel="stylesheet" href="assetsz/fonts/linericon/stQAWSEDWSQAasyle.css" />
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

    <link rel="stylesheet" href="assetsz/fonts/flaticon.css" />
    <link rel="stylesheet" href="assetsz/css/animate.css" />
    <link rel="stylesheet" type="text/css" href="assetsz/css/baguetteBox.min.css" />
    {{-- <link rel="stylesheet" href="assetsz/css/mdb.min.css" /> --}}
    <link rel="stylesheet" href="assetsz/css/glightbox.min.css">
  <link href="assets/css/main.css" rel="stylesheet">

    <link rel="stylesheet" href="assetsz/css/baguetteBox.min.css">
    @stack('css')
    @stack('csss')
    @stack('jadwalibadah')
    @stack('cssss')


    <title>GPdI PORSEA</title>
  </head>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@200&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Source+Code+Pro:wght@200&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Covered+By+Your+Grace&family=Foldit&family=Kanit&family=Playfair+Display&family=Rubik+80s+Fade&family=Tilt+Prism&display=swap');
    
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
          <li><a href="/" >Home</a></li>
          <li class="dropdown"><a href="#"><span>Tentang Gereja</span> <i
            class="bi bi-chevron-down dropdown-indicator"></i></a>
          <ul>
            <li><a href="/">Sejarah Gereja</a></li>
            <li><a href="/">Visi Misi Gereja</a></li>
            <li><a href="/">Pelayan Gereja</a></li>
            <li><a href="/">Data Gereja</a></li>
            <li><a href="/">Contact & alamat</a></li>
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
    @yield('content')
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
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assetsz/js/mdb.min.js"></script>
    <script src="assetsz/js/jquery-3.4.1.slim.min.js"></script>
    <script src="assetsz/js/popper.min.js"></script>
    <script src="assetsz/js/bootstrap.min.js"></script>
    <script src="assetsz/js/baguetteBox.min.js"></script>
    <script src="assetsz/js/glightbox.min.js"></script>


      <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="assets/vendor/aos/aos.js"></script>
      <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
      <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
      <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
      <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    
      <!-- Template Main JS File -->
      <script src="assets/js/main.js"></script>
      <script>
        baguetteBox.run(".tz-gallery");
      </script>
    @stack('js')
    @stack('jss')
    @stack('jsss')


    @stack('warta')
    {{-- <script>
      // When the user scrolls down 20px from the top of the document, slide down the navbar
      window.onscroll = function () {
        scrollFunction();
      };

      function scrollFunction() {
        if (document.body.scrollTop > 10 || document.documentElement.scrollTop > 5) {
          $("body").addClass("fixed-nav");
        } else {
          $("body").removeClass("fixed-nav");
        }
      }
    </script> --}}
  </body>
</html>
