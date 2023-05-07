@extends('layout.user')

@section('content') 
<div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
  <h1 class="display-6">Jadwal Ibadah</h1>
  <p class="text-primary fs-5 mb-5">Berikut Jadwal ibadah gereja GPDI PORSEA</p>
</div>
<div class="container">
  <div class="row">

    <table class="table">
        <thead>
          <tr>
              <th scope="col">No</th>
              <th scope="col">Nama Ibadah</th>
              <th scope="col">Ayat Alkitab</th>
              <th scope="col">Tanggal</th>
              <th scope="col">Deskripsi Ibadah</th>
            </tr>
          </thead>
          <tbody>
            <?php $i=1 ?>
            @foreach($data as $row)
            <tr>
              <th scope="row"><?= $i ?></th>
              <td>{{ $row->namaibadah }}</td>
              <td>{{ $row->ayatalkitab }}</td>
              <td>{{ $row->haritanggal->format('D d M Y') }}</td>
              <td>{{ $row->deskripsi }}</td>
          
            </tr>
            <?php $i++?>
  </div>
</div>
      @endforeach
  
@endsection