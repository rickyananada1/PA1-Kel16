@extends('layout.user')

@section('content')
<div class="container">

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
               
                </tr>
            </tbody>
            <?php $i++ ?>
        @endforeach
          </table>
    </div>
</div>
</div>

@endsection