<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <link rel="icon shortcut" type="image/jpg" href="img/logo/logo.png" style="width: 50px" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/eka.css" />
    <link rel="stylesheet" href="assets/fonts/mdi/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="assets/fonts/font-awesome/css/font-awesome.css" />
    <link rel="stylesheet" href="assets/fonts/linericon/style.css" />
    <link rel="stylesheet" href="assets/css/bootstrap-icons.css" />
    <link rel="stylesheet" href="assets/fonts/flaticon.css" />
    <link rel="stylesheet" href="assets/css/animate.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/baguetteBox.min.css" />
    <link rel="stylesheet" href="assets/mdb.min.css" />

    <title>GPdI PORSEA</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <a class="navbar-brand" href="index.html"><i class="flaticon-bible font-weight-bold"></i> GPdI<span> PORSEA</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
  
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" aria-current="page" href="/">Home</a>
            </li>
            <!-- dropdown tentang gereja -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false"> Tentang Gereja </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li>
                  <a class="dropdown-item" href="#1">Sejarah Gereja</a>
                </li>
                <li>
                  <a class="dropdown-item" href="#2">Pelayan </a>
                </li>
                <li>
                  <a class="dropdown-item" href="#3">Lokasi Gereja</a>
                </li>
                <li>
                  <a class="dropdown-item" href="#4">Tentang kami </a>
                </li>
              </ul>
            </li>
            <!-- TUTUP -->
            <!-- dropdown jadwal ibadah & event -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false"> Jadwal Ibadah & event </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li>
                  <a class="dropdown-item" href="/jadwalibadahh">Jadwal Ibadah</a>
                </li>
                <li>
                  <a class="dropdown-item" href="penjadwalan/pm_home.php">Event</a>
                </li>
              </ul>
            </li>
            <!-- TUTUP -->
            <!-- dropdown jadwal ibadah & event -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false"> Jemaat & Keuangan </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li>
                  <a class="dropdown-item" href="/datajemaatt">Data Jemaat</a>
                </li>
                <li>
                  <a class="dropdown-item" href="/keuangann">Informasi Keuangan</a>
                </li>
                <li>
                  <a class="dropdown-item" href="/donasii">Donasi</a>
                </li>
              </ul>
              <!-- TUTUP -->
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/photoo">Galeri</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/login">Login</a>
            </li>
            {{-- <li class="nav-item">
              <a class="nav-link" href="/register">register</a>
            </li> --}}
          </ul>
        </div>
      </div>
    </nav>

    <div id="sliderHome" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#sliderHome" data-slide-to="0" class="active"></li>
        <li data-target="#sliderHome" data-slide-to="1"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active" style="background-image: url(assets/img/slider/bg_1.jpg)">
          <div class="slider_item text-center">
            <div class="text">
              <div class="subheading">
                <span>GEREJA GPdI Porsea</span>
              </div>
              <h1 class="mb-4">Mengikuti<span>TUHAN</span> dimanapun kamu berada</h1>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <p> </p>
            </div>
          </div>
        </div>
        <div class="carousel-item" style="background-image: url(assets/img/slider/bg_2.jpg)">
          <div class="slider_item text-center">
            <div class="text">
              <div class="subheading">
                <span>GEREJA GPdI PORSEA</span>
              </div>
              <h1 class="mb-4">Following <span>Jesus</span> wherever we are</h1>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <p></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
    <div id="1">
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
              <div class="col-lg-7 about-img" style="background-image: url(assets/img/slider/bg_1.jpg"></div>
              <div class="col-lg-7">
                <h2>GPDI PORSEA</h2>
                <div class="our-story">
                  <h4>Sejak 1977</h4>
                  {{-- <h3>Our Story</h3> --}}
                  <p>Pendiri gereja ini adalah Pdt. P.K Sitorus B.Th, yang sudah meninggal 22 Desember 2020, dan digantikan oleh anaknya Pdp. Nehemia Ebenezer Sitorus yang dilantik pada 26 Juni 2022. Awal mula gereja ini didirikan, di mulai dari perintisan GPdI di Pintu Pohan pada tahun 1972, kemudian mengembangkan pelayanan dengan merintis GPdI Porsea di Lumban datu di sebuah rumah kontrakan pada tahun 1977, selama mengontrak hanya terdiri dari 10 Keluarga dan tetap bergumul untuk memiliki tempat ibadah yang tetap,kaena jumlah jemaat semakin bertambah. 
                    dan Tuhan menjawab, sehinggga pada tahun 1989 dibeli pertapakan di Lumban Datu No 102, dan dibangun gereja atas nama GPdI Porsea. Setelah beberapa tahun menjalani ibadah, maka mengalami pertambahan jemaat dan tida cukup untuk menapung jemaat. Maka, pada tahun 2017 dimulai untuk proses janji iman kepada jemaat untuk memperbesar gedung GPdI Porsea. Sampa  tahun 2023,  Gereja sudah berdiri dengan bangunan baru yang masih berproses dalam kelengkapan pembangunannya, khususnya bagian pemagaran yang masih dalam tahap pengumpulan dana.</p>
                  {{-- <ul>
                    <li><i class="bi bi-check-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea commo</span></li>
                    <li><i class="bi bi-check-circle"></i> <span>Duis aute irure dolor in reprehenderit in</span></li>
                    <li><i class="bi bi-check-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea</span></li>
                  </ul> --}}
                  <p>Vitae autem velit excepturi fugit. Animi ad non. Eligendi et non nesciunt suscipit repellendus porro in
                    quo eveniet. Molestias in maxime doloremque.</p>
                </div>
              </div>
            </div>
          </div>
        </section>
        <div class="section-heading ">
          <h2>Visi dan Misi <em>Gereja</em></h2>
          {{-- <p>Berikut adalah Visi & Misi GPDI Porsea</p> --}}
        </div>
         <br><br>
         
        <div class="container">
          <div class="row">
             <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
              <div class="message-box">
                <h2><small><b>Visi Gereja</b></small></h2>
                <p class="lead">GKpdiadalah Gereja yang berasal dari 2 gereja dewasa yang di “regrouping” pada tahun 1978.GKJ Tempurung-Gubug memiliki 5 Pepanthan yaitu pepanthan Gubug, Tempurung, Ringinkidul, Solowire, dan Dempet</p>
                <p class="lead">Mayoritas warga adalah petani penggarap, buruh tani, tukang bangunan,sehingga banyak yang boro ke Semarang dan Jakarta. Seharihari, yang berdomisili di Gubug dan sekitarnya adalah orangorang tua dan anakanak (sampai SMA).</p>
             </div>
                  <!-- end messagebox -->
              </div>
              <!-- end col -->
              <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="message-box">
                   <h2><small><b>Misi Gereja</b></small></h2>
                   <p class="lead">GKpdiadalah Gereja yang berasal dari 2 gereja dewasa yang di “regrouping” pada tahun 1978.GKJ Tempurung-Gubug memiliki 5 Pepanthan yaitu pepanthan Gubug, Tempurung, Ringinkidul, Solowire, dan Dempet</p>
                   <p class="lead">Mayoritas warga adalah petani penggarap, buruh tani, tukang bangunan,sehingga banyak yang boro ke Semarang dan Jakarta. Seharihari, yang berdomisili di Gubug dan sekitarnya adalah orangorang tua dan anakanak (sampai SMA).</p>
                </div>
                <!-- end messagebox -->
              </div>
              <!-- end col -->
            </div>
            <!-- end row -->
      </div>
    </div>
  </div>




  <div class="pendeta_home"id="2">
    <div class="container">
      <div class="home_heading text-center">
        <span class="subheading">Pelayan Gereja</span>
      </div>
      <div class="section-heading">
        <h2>Pelayan  <em>Gereja</em></h2>
        <p>Training Studio is free CSS template for gyms and fitness centers. You are allowed to use this layout for your business website.</p>
      </div>

        <div class="row">
          <div class="col-md-2 col-lg-3 ftco-animate">
            <div class="staff">
              <div class="img-wrap d-flex align-items-stretch">
                <div class="img align-self-stretch" style="background-image: url(assets/img/staf/pak.jpg)"></div>
              </div>
              <div class="text d-flex align-items-center pt-3 text-center">
                <div>
                  <h3 class="mb-2">Lloyd Wilson</h3>
                  <span class="position mb-4">Lead Pastor</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-2 col-lg-3 ftco-animate">
            <div class="staff">
              <div class="img-wrap d-flex align-items-stretch">
                <div class="img align-self-stretch" style="background-image: url(assets/img/staf/ibu.jpg)"></div>
              </div>
              <div class="text d-flex align-items-center pt-3 text-center">
                <div>
                  <h3 class="mb-2">Rachel Parker</h3>
                  <span class="position mb-4">Lead Pastor</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-2 col-lg-3 ftco-animate">
            <div class="staff">
              <div class="img-wrap d-flex align-items-stretch">
                <div class="img align-self-stretch" style="background-image: url(assets/img/staf/ibu.jpg)"></div>
              </div>
              <div class="text d-flex align-items-center pt-3 text-center">
                <div>
                  <h3 class="mb-2">Rachel Parker</h3>
                  <span class="position mb-4">Lead Pastor</span>
                </div>
              </div>
            </div>
          </div>     <div class="col-md-2 col-lg-3 ftco-animate">
            <div class="staff">
              <div class="img-wrap d-flex align-items-stretch">
                <div class="img align-self-stretch" style="background-image: url(assets/img/staf/ibu.jpg)"></div>
              </div>
              <div class="text d-flex align-items-center pt-3 text-center">
                <div>
                  <h3 class="mb-2">Rachel Parker</h3>
                  <span class="position mb-4">Lead Pastor</span>
                </div>
              </div>
            </div>
          </div>     <div class="col-md-2 col-lg-3 ftco-animate">
            <div class="staff">
              <div class="img-wrap d-flex align-items-stretch">
                <div class="img align-self-stretch" style="background-image: url(assets/img/staf/ibu.jpg)"></div>
              </div>
              <div class="text d-flex align-items-center pt-3 text-center">
                <div>
                  <h3 class="mb-2">Rachel Parker</h3>
                  <span class="position mb-4">Lead Pastor</span>
                </div>
              </div>
            </div>
          </div>     <div class="col-md-2 col-lg-3 ftco-animate">
            <div class="staff">
              <div class="img-wrap d-flex align-items-stretch">
                <div class="img align-self-stretch" style="background-image: url(assets/img/staf/ibu.jpg)"></div>
              </div>
              <div class="text d-flex align-items-center pt-3 text-center">
                <div>
                  <h3 class="mb-2">Rachel Parker</h3>
                  <span class="position mb-4">Lead Pastor</span>
                </div>
              </div>
            </div>
          </div>     <div class="col-md-2 col-lg-3 ftco-animate">
            <div class="staff">
              <div class="img-wrap d-flex align-items-stretch">
                <div class="img align-self-stretch" style="background-image: url(assets/img/staf/ibu.jpg)"></div>
              </div>
              <div class="text d-flex align-items-center pt-3 text-center">
                <div>
                  <h3 class="mb-2">Rachel Parker</h3>
                  <span class="position mb-4">Lead Pastor</span>
                </div>
              </div>
            </div>
          </div>     <div class="col-md-2 col-lg-3 ftco-animate">
            <div class="staff">
              <div class="img-wrap d-flex align-items-stretch">
                <div class="img align-self-stretch" style="background-image: url(assets/img/staf/ibu.jpg)"></div>
              </div>
              <div class="text d-flex align-items-center pt-3 text-center">
                <div>
                  <h3 class="mb-2">Rachel Parker</h3>
                  <span class="position mb-4">Lead Pastor</span>
                </div>
              </div>
            </div>
          </div>     <div class="col-md-2 col-lg-3 ftco-animate">
            <div class="staff">
              <div class="img-wrap d-flex align-items-stretch">
                <div class="img align-self-stretch" style="background-image: url(assets/img/staf/ibu.jpg)"></div>
              </div>
              <div class="text d-flex align-items-center pt-3 text-center">
                <div>
                  <h3 class="mb-2">Rachel Parker</h3>
                  <span class="position mb-4">Lead Pastor</span>
                </div>
              </div>
            </div>
          </div>     <div class="col-md-2 col-lg-3 ftco-animate">
            <div class="staff">
              <div class="img-wrap d-flex align-items-stretch">
                <div class="img align-self-stretch" style="background-image: url(assets/img/staf/ibu.jpg)"></div>
              </div>
              <div class="text d-flex align-items-center pt-3 text-center">
                <div>
                  <h3 class="mb-2">Rachel Parker</h3>
                  <span class="position mb-4">Lead Pastor</span>
                </div>
              </div>
            </div>
          </div>     <div class="col-md-2 col-lg-3 ftco-animate">
            <div class="staff">
              <div class="img-wrap d-flex align-items-stretch">
                <div class="img align-self-stretch" style="background-image: url(assets/img/staf/ibu.jpg)"></div>
              </div>
              <div class="text d-flex align-items-center pt-3 text-center">
                <div>
                  <h3 class="mb-2">Rachel Parker</h3>
                  <span class="position mb-4">Lead Pastor</span>
                </div>
              </div>
            </div>
          </div>     <div class="col-md-2 col-lg-3 ftco-animate">
            <div class="staff">
              <div class="img-wrap d-flex align-items-stretch">
                <div class="img align-self-stretch" style="background-image: url(assets/img/staf/ibu.jpg)"></div>
              </div>
              <div class="text d-flex align-items-center pt-3 text-center">
                <div>
                  <h3 class="mb-2">Rachel Parker</h3>
                  <span class="position mb-4">Lead Pastor</span>
                </div>
              </div>
            </div>
          </div>
          
          
                     <!-- end service -->
          </div>
       </div>
    </div>
      
  
    <footer class="ftco-footer ftco-bg-dark ftco-section mt-3" id="4">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2 logo"><span>Gereja</span> Pniel</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
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
                  <a href="#" class="py-1 d-block"><span class="mdi mdi-view-dashboard mr-3"></span>Home</a>
                </li>
                <li>
                  <a href="#" class="py-1 d-block"><span class="mdi mdi-church mr-3"></span>About</a>
                </li>
                <li>
                  <a href="#" class="py-1 d-block"><span class="mdi mdi-newspaper mr-3"></span>Artikel</a>
                </li>
                <li>
                  <a href="#" class="py-1 d-block"><span class="lnr lnr-calendar-full mr-3"></span>Agenda</a>
                </li>
                <li>
                  <a href="#" class="py-1 d-block"><span class="fa fa-camera-retro mr-3"></span>Galeri</a>
                </li>
                <li>
                  <a href="/datajemaatt" class="py-1 d-block"><span class="mdi mdi-human-male-female mr-3"></span>Jemaat</a>
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
    <script src="assets/js/mdb.min.js"></script>
    <script src="assets/js/jquery-3.4.1.slim.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/baguetteBox.min.js"></script>
    <script>
      baguetteBox.run(".tz-gallery");
    </script>

      <script>
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
      </script>
  </body>
</html>

