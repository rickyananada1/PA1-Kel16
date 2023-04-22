@extends('layout.admin')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Jemaat</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Jemaat</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    
<div class="container">
    <a href="/tambahjemaat" type="button" class="btn btn-success">Tambah+</a>
    <div class="row g-3 align-items-center mt-2">
        <div class="col-auto">
            <form action="/datajemaat" method="get">
                <input type="search" id="inputPassword6" name="search" class="form-control" aria-describedby="passwordHelpInline">
            </form>
        </div>
      </div>
    <div class="row">
        <!-- Menampilkan pesan success jika data berhasil di inpunput -->
        @if ($message= Session::get('success'))
        <div class="alert alert-success" role="alert">
            {{ $message }}
          </div>
            
        @endif
        <table class="table">
            <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Alamat</th>
                <th scope="col">No Telepon</th>
                <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
                <?php $nomor=1 ?>
                @foreach ($data as $index=>$row)
                    
                    <tr>
                        <th scope="row">{{ $index + $data->firstItem() }}</th> <!-- firstitem agar nomor terutut walau dipagination berbeda-->
                        <td>{{ $row->nama }}</td>
                        <td>{{ $row->jeniskelamin }}</td>
                        <td>{{ $row->alamat }}</td>
                        <td>{{ $row->notelpon }}</td>
                        <td>
                            <a href="/tampilkandata/{{ $row->id }}" class="btn btn-warning">Edit</a>
                            <a href="#" class="btn btn-danger delete" nama="{{ $row->nama }}" id="{{ $row->id }}">Delete</a>
                        </td>
                    </tr>
                </tbody>
                <?php $nomor++ ?>   
            
            @endforeach
        </table>
        {{ $data->links() }}
        <!-- Optional JavaScript; choose one of the two! -->
    </div>
</div>
</div>    
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="assets/js/jquery-3.4.1.slim.min.js"></script>
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
        window.location="/deletedata/"+id+""
        Swal.fire(
          'Dihapus!',
          'Data sudah terhapus',
          'success'
        )
      }
    })
  })
  
  const form = document.querySelector('form');
  const nama = document.querySelector('[name="nama"]');
  const jeniskelamin = document.querySelector('[name="jeniskelamin"]');
  const alamat = document.querySelector('[name="alamat"]');
  const notelpon = document.querySelector('[name="notelpon"]');

  form.addEventListener('submit', (event) => {
    if (nama.value === '' || jeniskelamin.value === 'Pilih Jenis Kelamin' || alamat.value === '' || notelpon.value === '') {
      event.preventDefault();
      Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Harap isi semua data yang diperlukan!'
      });
    }
  });
</script>

@endsection