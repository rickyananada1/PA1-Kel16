@extends('layout.user')
@section('content')

<main id="main">

         <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assetsz/img/home/alkitab.jpg')">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
      <h2>Jadwal Ibadah</h2>
      <ol>
        <li><a href="/">Home</a></li>
        <li><a href="/jadwalibadahh">Jadwal Ibadah</a></li>

      </ol>
    </div>
  </div>
  </div><!-- End Breadcrumbs -->
        <table class="table align-middle mb-0 bg-white">
            <thead class="bg-light">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">No Telepon</th>
                    
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
                </tr>
                
            </tbody>
            @endforeach
            <?php $nomor++ ?>   
          </table>
          {{ $data->links() }}
        @endsection
    </div>
</div>
</main>