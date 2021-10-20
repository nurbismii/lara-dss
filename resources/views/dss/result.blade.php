<div class="row">
    <div class="col-lg">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-dark">Normalisasi</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table text-center" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Alternatif</th>
                                <th>C1</th>
                                <th>C2</th>
                                <th>C3</th>
                                <th>C4</th>
                                <th>C5</th>
                                <th>Hasil</th>
                                <th>Ranking</th>
                            </tr>
                        </thead>
                        @foreach($normalisasi as $value)

                        <tbody>
                            <tr>
                                <td>{{ $value->nama }}</td>
                                <td>{{ number_format($value->C1/$max1, 2)}}</td>
                                <td>{{ number_format($min2/$value->C2, 2) }}</td>
                                <td>{{ number_format($value->C3/$max3, 2) }}</td>
                                <td>{{ number_format($value->C4/$max4, 2) }}</td>
                                <td>{{ number_format($value->C5/$max5, 2) }}</td>
                                <td>{{
                                    number_format
                                    (
                                        (($value->C1/$max1) * $bobot_ipk) +
                                        (($min2/$value->C2) * $bobot_penghasilanOrtu) +
                                        (($value->C3/$max3) * $bobot_tanggunganOrtu) +
                                        (($value->C4/$max4) * $bobot_smt) +
                                        (($value->C5/$max5) * $bobot_organisasi), 
                                    2)
                                    }}
                                </td>
                                <td></td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>