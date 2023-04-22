<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <h1 class="text-center mt-4">Jadwal Ibadah</h1>
    <div class="container">
      <a href="/tambahjadwal" type="button" class="btn btn-success">Tambah +</a>
      <div class="row ">
        @if ($message = Session::get('success'))
          <div class="alert alert-success" role="alert">
          {{  $message }}
          </div>
        
            
        @endif

      <table class="table">
        <thead>
          <tr>
              <th scope="col">No</th>
              <th scope="col">Nama Ibadah</th>
              <th scope="col">Ayat Alkitab</th>
              <th scope="col">Tanggal</th>
              <th scope="col">Deskripsi Ibadah</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php $i=1 ?>
            @foreach($data as $row)
            <tr>
              <th scope="row"><?= $i ?></th>
              <td>{{ $row->namaibadah }}</td>
              <td>{{ $row->ayatalkitab }}</td>
              <td>{{ $row->haritanggal->format('D d M Y') }}</td>
              <td>{{ $row->deskripsi }}</td>
              
              <td>
                <a href="/tampilkanjadwal/{{ $row->id }}" type="button" class="btn btn-warning">Edit</a>
                <a href="/deletejadwal/{{ $row->id }}" type="button" class="btn btn-danger">Hapus</a>
              </td>
            </tr>
            <?php $i++?>
          @endforeach
        </div>
    </div>
        </tbody>
      </table>
      
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script>
    const form = document.querySelector('form');
    const namaibadah = document.querySelector('[name="namaibadah"]');
    const ayatalkitab = document.querySelector('[name="ayatalkitab"]');
    const haritanggal = document.querySelector('[name="haritanggal"]');

  
    form.addEventListener('submit', (event) => {
      if (namaibadah.value === '' || ayatalkitab.value === '' || haritanggal.value === '') {
        event.preventDefault();
        Swal.fire({
          icon: 'error',
          title: 'Oops...',
          text: 'Harap isi semua data yang diperlukan!'
        });
      }
    });
  </script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
  </html>