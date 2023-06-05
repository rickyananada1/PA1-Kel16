@push('jsss')
<script src="https://cdn.datatables.net/v/bs5/dt-1.13.4/datatables.min.js"></script>
<script>
  $(document).ready( function () {
    $('#y').DataTable();
} );
</script>
@endpush
@push('cssss')
<link href="https://cdn.datatables.net/v/bs5/dt-1.13.4/datatables.min.css" rel="stylesheet"/>
@endpush
@extends('layout.user')

@section('content')

<main id="main">

  <!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs d-flex align-items-center" style="background-image: url('assetsz/img/home/alkitab.jpg')">
<div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
<h2>Keuangan</h2>
<ol>
 <li><a href="/">Home</a></li>
 <li><a href="/jadwalibadahh">Keuangan</a></li>

</ol>
</div>
</div>
</div><!-- End Breadcrumbs -->
<div class="container">
<br><br>
    <table class="table"id="y">
        <thead>
          <tr>
            {{-- <th scope="col">No</th> --}}
            <th scope="col">Tanggal</th>
            <th scope="col">Keterangan</th>
            <th scope="col">Jumlah </th>
            {{-- <th scope="col">Jumlah Pengeluaran</th> --}}
          </tr>
        </thead>
        
        <tbody>
           <?php $i=1; ?>
            @foreach ($data as $row)
                
            <tr>
            {{-- <th scope="row"> </th> --}}
            <td>{{ $row->tanggal }}</td>
            <td>{{ $row->deskripsi }}</td>
            <td>Rp.{{ number_format($row->pemasukan,0,',','.') }}</td>
            {{-- <td>Rp.{{ number_format($row->pengeluaran,0,',','.') }}</td> --}}
           
        </tr>
    
        @endforeach
    </tbody>
    </table>
  </div>
</div>

</main>
    
@endsection