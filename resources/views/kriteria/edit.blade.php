@extends('layouts.template')

@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Form Kriteria</h1>
    <form action="{{ route('kriteria.update', $datas->id )}}" method="POST">
        @csrf
        {{ method_field('patch') }}
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-dark">Kriteria
                        <a href="{{ route('kriteria.index') }}" class="btn btn-danger btn-sm float-right btn-sm">Tutup</a>
                    </h6>
                </div>
                <div class="card-body">
                    <div class="form-group col-sm-12">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ $datas->nama }}">
                            @error('nama')
                            <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="atribut">Atribut Baru</label>
                            <select class="form-control" name="atribut">
                                <option value="" hidden>{{ $datas->atribut }}</option>
                                <option value="benefit">Benefit</option>
                                <option value="cost">Cost</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="bobot">Bobot</label>
                            <select class="form-control" name="bobot">
                                <option value="" hidden>{{ $datas->bobot }}</option>
                                <option value="5">Sangat Tinggi(5)</option>
                                <option value="4">Cukup Tinggi(4)</option>
                                <option value="3">Cukup(3)</option>
                                <option value="2">Rendah(2)</option>
                                <option value="1">Sangat Rendah(1)</option>
                            </select>
                        </div>
                    </div>
                    <!-- Simpan nilai lama -->
                    <input type="hidden" name="atribut_lama" class="form-control" value="{{ $datas->atribut }}" readonly>
                    <input type="hidden" name="bobot_lama" class="form-control" value="{{ $datas->bobot}}" readonly>
                    <!-- Simpan nilai lama -->
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