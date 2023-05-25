@extends('layout.admin2')
@section('content')       
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0"></h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Data Jemaat</li>
            <li class="breadcrumb-item active">Tambah Data</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>

<div class="container">
    <a href="/tambahdonasi" type="button" class="btn btn-success">Tambah +</a>
    <div class="row">
        @if ($message = Session::get('success'))
        <div class="alert alert-success" role="alert">
        {{  $message }}
        </div>  
      @endif
        <table class="table">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Nama Pemberi</th>
                <th scope="col">Jenis Donasi</th>
                <th scope="col">Jumlah</th>
                <th>Aksi</th>
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
                <td>
                    <a href="/tampilkandonasi/{{ $row->id }}" type="button" class="btn btn-warning">Edit</a>
                    <a href="#" class="btn btn-danger delete" nama="{{ $row->nama }}" id="{{ $row->id }}">Delete</a>
                </td>
                </tr>`
            </tbody>
            <?php $i++ ?>
        @endforeach
          </table>
    </div>
</div>
@endsection
   
   @push('d')
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   <script src="assets/js/jquery-3.4.1.slim.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   <script>
   $('.delete').click(function(){
       var id = $(this).attr('id');
       var nama = $(this).attr('nama');
       Swal.fire({
       title: 'Yakin?',
       text: "Kamu akan menghapus data "+nama+"",
       icon: 'warning',
       showCancelButton: true,
       confirmButtonColor: '#3085d6',
       cancelButtonColor: '#d33',
       confirmButtonText: 'Ya, hapus saja!'
       }).then((result) => {
       if (result.isConfirmed) {
           window.location="/deletedonasi/"+id+""
           Swal.fire(
           'Dihapus!',
           'Data sudah terhapus',
           'success'
           )
       }
       })
   })
   
   </script>
   @endpush    
  