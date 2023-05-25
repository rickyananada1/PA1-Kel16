@extends('layout.user')
@push('css')
<link href="https://cdn.datatables.net/v/bs5/dt-1.13.4/datatables.min.css" rel="stylesheet"/>
@endpush

@push('js')
<script src="https://cdn.datatables.net/v/bs5/dt-1.13.4/datatables.min.js"></script>
<script>
  $(document).ready( function () {
    $('#y').DataTable();
} );
</script>
@endpush
@section('content') 

<main id="main">
  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assetsz/img/home/alkitab.jpg')">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
      <h2>Jadwal Ibadah</h2>
      <ol>
        <li><a href="/2">Home</a></li>
        <li>Jadwal Ibadah</li>
      </ol>
    </div>
  </div>
  </div><!-- End Breadcrumbs -->

</main>
<br>l
<div class="container">
  <div class="row d-block">

    <table class="table" id="y">
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