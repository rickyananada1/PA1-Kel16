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
    <a href="/tambahjemaat" type="button" class="btn btn-success">Tambah+</a>
    <div class="row g-3 align-items-center mt-1">
        <div class="col-auto">
            <form action="/datajemaat" method="get">
              <div class="form-inline">
                <div class="input-group" data-widget="sidebar-search">
                <input type="search" id="inputPassword6" name="search" class="form-control" aria-describedby="passwordHelpInline">
                <button class="cari">
                  <i class="fas fa-search fa-fw"></i>
                </button>
                </div>
              </div>
              </form>
        </div>
      </div>
    <div class="row">
        <!-- Menampilkan pesan success jika data berhasil di inpunput -->
        @if ($message= Session::get('success'))
  
          <div class="alert alert-success alert-dismissible">
            <button
              type="button"
              class="close"
              data-dismiss="alert"
              aria-hidden="true"
            >
              &times;
            </button>
            {{ $message }}
          </div>
        @endif
                {{-- <table id="example2" class="table table-bordered table-hover"> --}}
                  <table class="table">
            <thead>
            <tr>
                <th >No</th>
                <th >Nama</th>
                <th >Jenis Kelamin</th>
                <th >Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Status Bapits</th>
                <th >Alamat</th>
                <th >No Telepon</th>
                {{-- <th >Bapti</th>
                <th scope="col">Dibuat pada </th> --}}
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
                        <td>{{ $row->tempat }}</td>
                        <td>{{ $row->tanggal }}</td>
                        <td>{{ $row->baptis }}</td>
                        <td>{{ $row->alamat }}</td>
                        <td>0{{ $row->notelpon }}</td>
                        {{-- <td> {{ $row->created_at }} </td> --}}
                        <td>
                            <a href="/tampilkandata/{{ $row->id }}" class="btn btn-outline-warning waves-effect">Edit</a>
                            <a href="#" class="btn btn-outline-danger waves-effect delete" nama="{{ $row->nama }}" id="{{ $row->id }}">Delete</a>
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

@endsection
@push('script')
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
    
@endpush