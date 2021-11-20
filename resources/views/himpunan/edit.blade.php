@extends('layouts.template')

@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Form Himpunan</h1>
    <form action="{{ route('himpunan.update', $datas->id) }}" method="POST">
        @csrf
        {{ method_field('patch') }}
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-dark">Alternatif
                        <a href="{{ route('himpunan.index') }}" class="btn btn-light btn-sm float-right">Tutup</a>
                    </h6>
                </div>
                <div class="card-body">
                    <div class="form-group col-sm-12">
                        <div class="form-group">
                            <label for="bobot">Kriteria</label>
                            <select class="form-control @error('kriteria_id') is-invalid @enderror" name="kriteria_id" id="">
                                @foreach($kriteria as $value)
                                <option value="{{ $value->id }}">{{ $value->nama }}</option>
                                @endforeach
                            </select>
                            @error('kriteria_id')
                            <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ $datas->nama }}">
                            @error('nama')
                            <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="nilai">Nilai</label>
                            <input type="text" class="form-control @error('nilai') is-invalid @enderror" name="nilai" value="{{ $datas->nilai }}">
                            @error('nilai')
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