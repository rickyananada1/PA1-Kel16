@extends('layout.admin2')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    {{-- <h1 class="m-0">Data Donasi</h1> --}}
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Keuangan</li>
            </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
</div><!-- /.container-fluid -->
</div>
<body>
    <h1 class="text-center mb-4">Halaman Keuangan</h1>
    <div class="container">
        <a href="/tambahkeuangan" type="button" class="btn btn-success">Tambah +</a>
        @if ($message = Session::get('success'))
        <div class="alert alert-success" role="alert">
            {{ $message }}
          </div>
            
        @endif
        <div class="row">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Jumlah Pemasukan</th>
                    <th scope="col">Jumlah Pengeluaran</th>
                    <th scope="col">Deksripsi</th>
                    <th>aksi</th>
    
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
                    <td>
                        <a href="/tampilkankeuangan/{{ $row->id }}" type="button" class="btn btn-warning">Edit</a>
                        <a href="#" class="btn btn-danger delete"  id="{{ $row->id }}">Delete</a>
                    </td>
                </tr>
                <?php $i++ ?>
         
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
@push('s')


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
                            window.location="/deletekeuangan/"+id+""
                            Swal.fire(
                                'Dihapus!',
                                'Data sudah terhapus',
                                'success'
                                )
                            }
                        })
                    })
                </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>   

@endpush    