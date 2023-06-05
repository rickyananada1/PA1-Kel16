@push('js')
<script src="https://cdn.datatables.net/v/bs5/dt-1.13.4/datatables.min.js"></script>
<script>
  $(document).ready( function () {
    $('#y').DataTable();
} );
</script>
@endpush
@push('css')
<link href="https://cdn.datatables.net/v/bs5/dt-1.13.4/datatables.min.css" rel="stylesheet"/>
@endpush
@extends('layout.user')
@section('content')

<main id="main">

         <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assetsz/img/home/alkitab.jpg')">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
      <h2>Data Jemaat</h2>
      <ol>
        <li><a href="/">Home</a></li>
        <li>Data jemaat</li>

      </ol>
    </div>
  </div>
  </div><!-- End Breadcrumbs -->
  <br><br>  
  <div class="container">

        <table class="table" id="y">
            <thead class="bg-light">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">No Telepon</th>
                    <th scope="col">Data Jemaat</th>
                    
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
                    <td>0{{ $row->notelpon }}</td>
                    <td>sadkakdsa </td>
                </tr>
                
            </tbody>
            @endforeach
            <?php $nomor++ ?>   
          </table>
          {{ $data->links() }}
        </div>
      </div>
      
    </div>
  </main>
  @endsection