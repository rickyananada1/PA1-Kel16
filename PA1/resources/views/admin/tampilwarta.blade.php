@extends('layout.admin2')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Warta Jemaat</li>
                <li class="breadcrumb-item active">Edit Warta Jemaat</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <h1 class="text-center mt-4">Edit Warta Jemaat</h1>
    <div class="container">
        <form method="POST" action="/updatewarta/{{ $data->id }}" enctype="multipart/form-data">
            @csrf

            <input type="hidden" name="photolama" value="{{ $data->photo }}">
            <div class="form-group">
                <label for="nama">Judul</label>
                <input type="text" class="form-control" id="judul" name="judul"  value="{{ $data->judul }}" >
            </div>
                {{-- @error('judul')
                  <span class="text-danger" > {{ $message }}</span>                    
                @enderror --}}

            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Keterangan</label>
                <textarea class="form-control" name="keterangan" id="exampleFormControlTextarea1" style="height: 170px" rows="5">{{ $data->keterangan }} </textarea>
            </div>
            <div class="form-group">
              <label for="photo">Photo</label>
              
              <input type="file" class="form-control" id="photo" name="photo" >
            </div>
            <div class="form-group">
            <img src="{{ asset($data->photo) }}" alt="" style="width:350px" height="250px">
            </div>
            {{-- @error('photo')
            <span class="text-danger" > {{ $message }}</span>                    
            @enderror --}}
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
</div>    




@endsection