@extends('layout.user')

@section('content')
<div class="container">
    <div class="row">
        @foreach ($data as $row)
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
        <div class="thumbnail">
          <div class="iya">
            <img class="parto" src="" height="" />
          </div>
          <div class="caption">
            <h3>{{ $row->name }}</h3>
            <p class="text-justify">   Mie Gomak adalah makanan yang terkenal sebagai masakan khas suku Batak Toba dari Sumatra Utara. Masakan ini adalah masakan khas daerah sekitar Danau Toba, mulai dari Porsea, Balige, Laguboti, Tarutung, hingga
              Tapanuli Selatan. Mie ini juga dapat ditemukan di berbagai daerah di Sumatra Utara, mulai dari Medan, Siantar, Parapat, Labuhan Batu, Sibolga, hingga Deli Serdang.</p>
         
            </div>
          </div>
        </div>
        @endforeach
    </div>

</div>

@endsection