@extends('layout.user')



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

<br><br>
<div class="container">
  <div class="row d-block">

    <table class="table align-middle mb-0 bg-white" >
        <thead>
          <tr>
              <th scope="col">No</th>
              <th scope="col">Nama Ibadah</th>
              <th scope="col">Ayat Alkitab</th>
              <th scope="col">Tanggal</th>
              <th scope="col">Pelayan Ibadah</th>
              <th scope="col">Lokasi Ibadah</th>
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
              <td>{{ $row->pelayan }}</td>
              <td>{{ $row->lokasiibadah }}</td>
          
            </tr>
            <?php $i++?>
            @endforeach
      </table>
    </div>
  </div>
</main>


  
@endsection