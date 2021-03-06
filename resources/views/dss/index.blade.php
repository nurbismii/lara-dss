@extends('layouts.template')

@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- Area Chart -->
        <div class="col-lg-8">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-dark">Bobot Pengaju Beasiswa</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <form action="" method="">
                        <div class="table-responsive">
                            <table class="table table-hover text-center" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Alternatif</th>
                                        <th>C1.{{ ucfirst($atr1) }}</th>
                                        <th>C2.{{ ucfirst($atr2) }}</th>
                                        <th>C3.{{ ucfirst($atr3) }}</th>
                                        <th>C4.{{ ucfirst($atr4)}}</th>
                                        <th>C5.{{ ucfirst($atr5) }}</th>
                                        <th>Hapus</th>
                                    </tr>
                                </thead>
                                @foreach($normalisasi as $value)
                                <tbody>
                                    <tr>
                                        <td>{{ $value->nama }}</td>
                                        <td>{{ $value->C1 }}</td>
                                        <td>{{ $value->C2 }}</td>
                                        <td>{{ $value->C3 }}</td>
                                        <td>{{ $value->C4 }}</td>
                                        <td>{{ $value->C5 }}</td>
                                        <td>
                                            <form action="{{ route('penilaian.destroy', $value->id) }}" method="POST">
                                                {{ method_field('delete')}}
                                                @csrf
                                                <button type="submit" class="btn btn-danger btn-sm float-right">
                                                    <i class="fas fa fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                </tbody>
                                @endforeach
                            </table>
                        </div>
                    </form>
                </div>
            </div>
            @include('dss.result')
        </div>
        @include('dss.value')
    </div>
</div>
@endsection