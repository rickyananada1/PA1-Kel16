@push('jss')
<script src="https://cdn.datatables.net/v/bs5/dt-1.13.4/datatables.min.js"></script>
<script>
  $(document).ready( function () {
    $('#y').DataTable();
} );
</script>
@endpush
@push('csss')
<link href="https://cdn.datatables.net/v/bs5/dt-1.13.4/datatables.min.css" rel="stylesheet"/>
@endpush
@extends('layout.user')

@section('content')
<main id="main">

  <!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs d-flex align-items-center" style="background-image: url('assetsz/img/home/alkitab.jpg')">
<div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
<h2>Donasi</h2>
<ol>
 <li><a href="/">Home</a></li>
 <li><a href="/jadwalibadahh">Donasi</a></li>

</ol>
</div>
</div>
</div><!-- End Breadcrumbs -->
<br><br>
<div class="container">
        <table class="table" id="y" >
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Nama Pemberi</th>
                <th scope="col">Jenis Donasi</th>
                <th scope="col">Jumlah</th>
               
              </tr>
            </thead>
            <tbody>
                <?php $i=1?>
                @foreach ($data as $row)
                    
                <tr>
                <th scope="row"><?= $i ?></th>
                <td>{{ $row->tanggal->format('D d M Y')  }}</td>
                <td>{{ $row->nama }}</td>
                <td>{{ $row->jenis }}</td>
                <td>{{ $row->jumlah }}</td>
               
                </tr>
            </tbody>
            <?php $i++ ?>
        @endforeach
          </table>
    </div>
  </div>
</div>
</div>
</main>

@endsection