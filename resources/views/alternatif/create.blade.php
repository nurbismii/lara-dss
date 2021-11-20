@extends('layouts.template')

@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Form Alternatif</h1>
    <form action="{{ url('alternatif')}}" method="POST">
        @csrf
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-dark">Alternatif
                        <a href="{{ route('alternatif.index')}}" class="btn btn-danger btn-sm float-right">Tutup</a>
                    </h6>
                </div>
                <div class="card-body">
                    <div class="form-group col-sm-12">
                        <div class="form-group">
                            <label for="nim">Nomor Indok Mahasiswa</label>
                            <input type="text" class="form-control @error('nim') is-invalid @enderror" name="nim">
                            @error('nim')
                            <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="Nama">Nama Lengkap</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama"></input>
                            @error('nama')
                            <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <input type="text" class="form-control  @error('jurusan') is-invalid @enderror" name="jurusan">
                            @error('jurusan')
                            <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="card-footer text-right py-3">
                    <button type="reset" class="btn btn-light btn-sm">Hapus</button>
                    <button type="submit" class="btn btn-success mr-2 btn-sm">Simpan</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection