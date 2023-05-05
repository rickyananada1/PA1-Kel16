@extends('layout.user')

@section('content')

<table class="table">
    <thead>
      <tr>
          <th scope="col">No</th>
          <th scope="col">Nama Ibadah</th>
          <th scope="col">Ayat Alkitab</th>
          <th scope="col">Tanggal</th>
          <th scope="col">Deskripsi Ibadah</th>
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
      
        </tr>
        <?php $i++?>
      @endforeach
  
@endsection