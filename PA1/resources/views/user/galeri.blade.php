@extends('layout.user')

@section('content')
<main id="main">

  <!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs d-flex align-items-center" style="background-image: url('assetsz/img/home/alkitab.jpg')">
<div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
<h2>Galeri Jemaat</h2>
<ol>
 <li><a href="/">Home</a></li>
 <li>Galeri</li>

</ol>
</div>
</div>

    <section id="projects" class="projects">
      <div class="container" data-aos="fade-up">

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
        data-portfolio-sort="original-order">
        <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">
            @foreach ($data as $row)

            <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
              <div class="portfolio-content h-100">
                <img src="{{ asset($row->photo)}}" style="width: 100% ; height:15em "  class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>{{ $row->nama }}</h4>
                  {{-- <p>Lorem ipsum, dolor sit amet consectetur</p> --}}
                  <a href="{{ asset($row->photo)}}" title="{{  $row->nama  }}"
                    data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i
                      class="bi bi-zoom-in"></i></a>
                 
                    </div>
                    <br><br>
              </div>
            </div><!-- End Projects Item -->
            @endforeach
          </div><!-- End Projects Container -->
        </div>
        
      </div>
    </section><!-- End Our Projects Section -->

</main>


@endsection
