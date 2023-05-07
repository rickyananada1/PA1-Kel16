@extends('layout.user')
@section('content')
{{-- <table class="table">
    <thead>
    <tr>
        <th scope="col">No</th>
        <th scope="col">Nama</th>
        <th scope="col">Jenis Kelamin</th>
        <th scope="col">Alamat</th>
        <th scope="col">No Telepon</th>
       
    </tr>
    </thead>
    <tbody>
        
        <tr>
            <th scope="row">{{ $index + $data->firstItem() }}</th> <!-- firstitem agar nomor terutut walau dipagination berbeda-->
            <td>{{ $row->nama }}</td>
            <td>{{ $row->jeniskelamin }}</td>
            <td>{{ $row->alamat }}</td>
            <td>0{{ $row->notelpon }}</td>
            
        </tr>
    </tbody>

    
    @endforeach
</table>
{{ $data->links() }} --}}
<div class="container">
    <div class="row">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <h1 class="display-6">Data Jemaat</h1>
            <p class="text-primary fs-5 mb-5">Berikut Data Jemaat Gereja GPDI Porsea</p>
          </div>
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
