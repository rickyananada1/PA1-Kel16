@extends('layout.user')



@section('content') 

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
<br>


<div class="container">


    <div style="overflow-x: auto">
      <table class="table">
        <tr>
          <th>No</th>
          <th>Nama Ibadah</th>
          <th>Ayat Alkitab</th>
          <th>Tanggal</th>
          <th>Pelayan Ibadah</th>
          <th>Lokasi Ibadah</th>
        </tr>
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
  
@endsection
@push('jadwalibadah')
<style>
  table {
    width: 100%;
  }
  th,
  td {
    text-align: left;
    padding: 8px;
  }
</style>
    
@endpush