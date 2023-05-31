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

    <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Jumlah Pemasukan</th>
            <th scope="col">Jumlah Pengeluaran</th>
            <th scope="col">Deksripsi</th>
          </tr>
        </thead>
        
        <tbody>
           <?php $i=1; ?>
            @foreach ($data as $row)
                
            <tr>
            <th scope="row"> <?php echo$i ?></th>
            <td>{{ $row->tanggal }}</td>
            <td>Rp.{{ number_format($row->pemasukan,0,',','.') }}</td>
            <td>Rp.{{ number_format($row->pengeluaran,0,',','.') }}</td>
            <td>{{ $row->deskripsi }}</td>
           
        </tr>
        <?php $i++ ?>
    
        @endforeach
    </tbody>
    </table>
  </div>
</div>
</main>
    
@endsection