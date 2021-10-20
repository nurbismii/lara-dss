@extends('layouts.template')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Himpunan
        <a class="float-right btn btn-dark btn-sm" href="{{ url('himpunan/create') }}">Tambah Himpunan</a>
    </h1>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark">Data Himpunan</h6>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Himpunan</th>
                            </tr>
                        </thead>
                        @foreach($datas as $value)
                        <tbody>
                            <tr>
                                <td>{{ ++$no }}</td>
                                <td>{{ $value->nama }}</td>
                                <td>
                                    <a class="btn btn-info btn-sm" href="{{ route('himpunan.show', $value->id) }}">Tampilkan</a>
                                </td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection