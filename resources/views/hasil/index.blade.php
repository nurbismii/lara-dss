@extends('layouts.template')

@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- Area Chart -->
        <div class="col-lg">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-dark">Hasil Perhitungan</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-borderless text-center" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Ranking</th>
                                    <th>Alternatif</th>
                                    <th>C1.{{ ucfirst($atr1) }}</th>
                                    <th>C2.{{ ucfirst($atr2) }}</th>
                                    <th>C3.{{ ucfirst($atr3) }}</th>
                                    <th>C4.{{ ucfirst($atr4) }}</th>
                                    <th>C5.{{ ucfirst($atr5) }}</th>
                                    <th>Total</th>
                                    <th>Hapus</th>

                                </tr>
                            </thead>
                            @foreach($datas as $value)
                            <tbody>
                                <tr>
                                    <td>{{ ++$no }}</td>
                                    <td>{{ $value->nama }}</td>
                                    <td>{{ $value->C1 }}</td>
                                    <td>{{ $value->C2 }}</td>
                                    <td>{{ $value->C3 }}</td>
                                    <td>{{ $value->C4 }}</td>
                                    <td>{{ $value->C5 }}</td>
                                    <td>{{ $value->hasil }}</td>
                                    <td>
                                        <form action="{{ route('hasil.destroy', $value->id) }}" method="POST">
                                            {{ method_field('delete') }}
                                            @csrf
                                            <button class="btn btn-light btn-sm">
                                                <span class="fas fa fa-trash"></span>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
                <div class="card-header py-3 text-right">
                    <form action="{{ route('hasil.truncate') }}" method="POST">
                        {{ method_field('delete') }}
                        @csrf
                        <button type="submit" class="btn btn-outline-danger btn-sm">
                            <span>Kosongkan</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection