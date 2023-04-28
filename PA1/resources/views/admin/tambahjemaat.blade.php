@extends('layout.admin')

@section('content')
<body>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        
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
  <h1 class="text-center mb-4">Tambah Data Jemaat</h1>
  <div class="container">
      <div class="row justify-content-center">
        <div class="col-8">
        <div class="card">
          <div class="card-body">
            <form action="/insertdata" method="POST" enctype="multipart/form-data">
              @csrf <!-- pengiriman data berupa photo -->
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
                <select class="form-select form-select-lg mb-3" name="jeniskelamin" aria-label=".form-select-lg example">
                  <option selected>Pilih Jenis Kelamin </option>
                  <option value="1">Laki-laki</option>
                  <option value="2">Perempuan</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Alamat</label>
                <input type="text" class="form-control" name="alamat" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">No Telepon</label>
                <input type="number" class="form-control" name="notelpon" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>

              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>
      </div>
  </div>

  </div>
</body>
    
@endsection
@push('scriptssss')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
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