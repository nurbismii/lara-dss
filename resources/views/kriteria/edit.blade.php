@extends('layouts.template')

@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Form Kriteria</h1>
    <form action="{{ route('kriteria.update', $datas->id )}}" method="POST">
        @csrf
        {{ method_field('patch') }}
        <div class="form-group col-sm-6">
            <div class="col-lg">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" name="nama" value="{{ $datas->nama }}">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-8">
                        <label for="atribut">Atribut Baru</label>
                        <select class="form-control" name="atribut" id="">
                            <option value="benefit">Benefit</option>
                            <option value="cost">Cost</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="">Atribut Lama</label>
                        <input type="text" class="form-control" value="{{ $datas->atribut}}" readonly>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-8">
                        <label for="bobot">Bobot</label>
                        <select class="form-control" name="bobot" id="">
                            <option value="5">Sangat Tinggi</option>
                            <option value="4">Cukup Tinggi</option>
                            <option value="3">Cukup</option>
                            <option value="2">Rendah</option>
                            <option value="1">Sangat Rendah</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="">Bobot Lama</label>
                        <input type="text" class="form-control" value="{{ $datas->bobot}}" readonly>
                    </div>
                </div>
                <div class="form-group">

                </div>
                <button type="submit" class="btn btn-success mr-2">Simpan</button>
                <button type="reset" class="btn btn-light">Hapus</button>
                <a href="{{ route('kriteria.index') }}" class="btn btn-light float-right">Kembali</a>
            </div>
        </div>
    </form>
</div>
@endsection