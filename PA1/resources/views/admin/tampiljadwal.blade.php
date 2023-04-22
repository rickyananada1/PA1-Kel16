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
    <h1 class="text-center mt-4">Edit  Jadwal Ibadah</h1>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-8">
        <div class="card">
          <div class="card-body">
            <form action="/updatejadwal/{{ $data->id }}" method="POST" enctype="multipart/form-data">
              @csrf
                  
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama Ibadah</label>
                <input type="text" class="form-control" name="namaibadah" value="{{ $data->namaibadah }}" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Ayat Alkitab</label>
                <input type="text" class="form-control" name="ayatalkitab"value="{{ $data->ayatalkitab }}" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>              
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Hari & Tanggal</label>
                <input type="date" class="form-control" name="haritanggal" id="exampleInputPassword1">
              </div> 
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
                <textarea class="form-control" name="deskripsi" id="exampleFormControlTextarea1" rows="5"></textarea>
              </div>
              
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>
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