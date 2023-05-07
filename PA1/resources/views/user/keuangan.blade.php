@extends('layout.user')

@section('content')
<div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
  <h1 class="display-6">Keuangan Gereja</h1>
  <p class="text-primary fs-5 mb-5">Berikut adalah data Keuangan gereja</p>
</div>
<div class="container">
  <div class="row">

    <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Jumlah Pemasukan</th>
            <th scope="col">Jumlah Pengeluaran</th>
            <th scope="col">Deksripsi</th>
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
           
        </tr>
        <?php $i++ ?>
    
        @endforeach
    </tbody>
    </table>
  </div>
</div>
    
@endsection