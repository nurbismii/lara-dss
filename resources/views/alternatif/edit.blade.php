@extends('layouts.template')

@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Form Alternatif</h1>
    <form action="{{ route('alternatif.update', $datas->id) }}" method="POST">
        @csrf
        {{ method_field('patch')}}
        <div class="form-group col-sm-6">
            <div class="col-lg">
                <div class="form-group">
                    <label for="nim">Nomor Indok Mahasiswa</label>
                    <input type="text" class="form-control" name="nim" value="{{ $datas->nim }}">
                </div>
                <div class="form-group">
                    <label for="Nama">Nama Lengkap</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="{{ $datas->nama }}"></input>
                </div>
                <div class="form-group">
                    <label for="jurusan">Jurusan</label>
                    <input type="text" class="form-control" name="jurusan" value="{{ $datas->jurusan }}">
                </div>
                <button type="submit" class="btn btn-success mr-2">Simpan</button>
                <a href="{{ route('alternatif.index')}}" class="btn btn-light float-right">Kembali</a>
            </div>
        </div>
    </form>
</div>
@endsection