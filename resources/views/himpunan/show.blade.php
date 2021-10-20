@extends('layouts.template')

@section('content')
<div class="container-fluid">

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark">Data Himpunan
                <a href="{{ route('himpunan.index') }}" class="btn btn-danger btn-sm float-right">Tutup</a>
            </h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Nilai</th>
                            <th>AKSI</th>
                        </tr>
                    </thead>
                    @foreach($datas as $value)
                    <tbody>
                        <tr>
                            <td>{{ ++$no }}</td>
                            <td>{{ $value->nama }}</td>
                            <td>{{ $value->nilai }}</td>
                            <td>
                                <form action="{{ route('himpunan.destroy', $value->id) }}" method="POST">
                                    @csrf
                                    <a class="btn btn-info btn-sm" href="{{ route('himpunan.edit', $value->id) }}">Edit</a>
                                    {{ method_field('delete')}}
                                    <button class="btn btn-danger btn-sm" type="submit">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection