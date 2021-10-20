@extends('layouts.template')

@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Form Himpunan</h1>
    <form action="{{ route('himpunan.update', $datas->id) }}" method="POST">
        @csrf
        {{ method_field('patch') }}
        <div class="form-group col-sm-6">
            <div class="col-lg">
                <div class="form-group">
                    <label for="bobot">Kriteria</label>
                    <select class="form-control" name="kriteria_id" id="">
                        @foreach($kriteria as $value)
                        <option value="{{ $value->id }}">{{ $value->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" name="nama" value="{{ $datas->nama }}">
                </div>
                <div class="form-group">
                    <label for="nilai">Nilai</label>
                    <input type="text" class="form-control" name="nilai" value="{{ $datas->nilai }}">
                </div>
                <button type="submit" class="btn btn-success mr-2">Simpan</button>
                <button type="reset" class="btn btn-light">Hapus</button>
                <a href="{{ route('himpunan.index') }}" class="btn btn-light float-right">Kembali</a>
            </div>
        </div>
    </form>
</div>
@endsection