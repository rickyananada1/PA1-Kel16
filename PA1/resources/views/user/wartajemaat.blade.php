@extends('layout.user')

@section('content')
<div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
    <h1 class="display-6">Warta Jemaat</h1>
    <p class="text-primary fs-5 mb-5">Berikut adalah data Warta Jemaat</p>
  </div>

  <section id="constructions" class="constructions">
    <div class="container" data-aos="fade-up">
      
      <div class="row gy-4">
        @foreach ($data as $row) 
        

        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
          <div class="card-item">
            <div class="row">
              <div class="col-xl-5">
                <div class="card-bg" style="background-image: url({{ asset($row->photo)}}"></div>
              </div>
              <div class="col-xl-7 d-flex align-items-center">
                <div class="card-body">
                  <h4 class="card-title">{{ $row->judul }}</h4>
                  <p>{{ $row->keterangan }}</p>
                </div>
              </div>
            </div>
          </div>
          <br>
        </div><!-- End Card Item -->

      @endforeach
      </div>

    </div>

    {{ $data->links() }}
    <br><br>
  </section><!-- End Constructions Section -->

  <!-- ======= Services Section ======= -->
 


@endsection