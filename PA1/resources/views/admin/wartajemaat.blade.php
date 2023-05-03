@extends('layout.admin')
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
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
      <h1 text-center mt-4></h1>
      <div class="container">
        <a href="/tambahphoto" type="button" class="btn btn-success">Tambah+</a>
          <div class="row">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Photo</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                    <?php $i=1 ?>
                    @foreach ($data as $row)
                        
                    <tr>
                        <th scope="row"><?= $i ?></th>
                        <td><img src="{{ asset('storage/photo/'.$row->photo) }}" alt="photo"style="max-width: 50px;"></td>
                        <td>{{ $row->nama }}</td>
                        <td>
                                <a href="#" class="btn btn-danger delete" id="{{ $row->id }}">Delete</a>
                        </td>

                    </tr>
                    <?php $i++?>
                </tbody>
                @endforeach
              </table>
        </div>
    </div>
</div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="assets/js/jquery-3.4.1.slim.min.js"></script>
    <script>
        $('.delete').click(function(){
        var id = $(this).attr('id');
        Swal.fire({
            title: 'Yakin?',
            text: "Kamu akan menghapus data tersebut",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, hapus saja!'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location="/deletephoto/"+id+""
                            Swal.fire(
                                'Dihapus!',
                                'Data sudah terhapus',
                                'success'
                                )
                            }
                        })
                    })
                </script>
    
@endsection