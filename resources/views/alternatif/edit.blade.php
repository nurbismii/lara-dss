@extends('layouts.template')

@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Form Alternatif</h1>
    <form action="{{ route('alternatif.update', $datas->id) }}" method="POST">
        @csrf
        {{ method_field('patch')}}
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
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection