@extends('layout.user')

@section('content')
<div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
  <h1 class="display-6">Galery Jemaat</h1>
  <p class="text-primary fs-5 mb-5">Berikut adalah Galery Jemaat</p>
</div>

{{-- <section id="constructions" class="constructions">
  <div class="container" data-aos="fade-up">

    <div class="row">
      
      
          <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">
            
          <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
            <div class="portfolio-content h-100">
              <img src="{{ asset($row->photo) }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4></h4>
                <p>{{ $row->nama }}</p>
                <a href="assets/img/projects/remodeling-1.jpg" title="Remodeling 1"
                data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i
                class="bi bi-zoom-in"></i></a>
                <a href="project-details.html" title="More Details" class="details-link"><i
                  class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->
          </div>
             --}}
  
          
          
          <section id="projects" class="projects">
            <div class="container" data-aos="fade-up">
              
              
              
              
              
              <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">
                  @foreach ($data as $row)
                  
                  <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
                      <div class="portfolio-content h-100">
                        <img src="{{ asset($row->photo) }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                          <h4> {{ $row->nama }}</h4>
                          {{-- <p>{{ $row->nama }}</p>   --}}
                          <a href="assets/img/slider/bg_1.jpg" title="Remodeling 1"
                          data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i
                          class="bi bi-zoom-in"></i></a>
                          <a href="project-details.html" title="More Details" class="details-link"><i
                            class="bi bi-link-45deg"></i></a>
                          </div>
                        </div>
                        <br>
                      </div><!-- End Projects Item -->
                      
                      @endforeach
                  </div>
                </div>
              </section>
              
@endsection