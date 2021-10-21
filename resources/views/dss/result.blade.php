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
                            </tr>
                        </thead>
                        @foreach($normalisasi as $value)
                        <tbody>
                            <tr>
                                <td>{{ $value->nama }}</td>

                                @if($atr1 == 'benefit')
                                <td>{{ $c1 = number_format($value->C1/$max1, 2)}}</td>
                                @else
                                <td>{{ $c1 = number_format($min1/$value->C1, 2)}}</td>
                                @endif

                                @if($atr2 == 'benefit')
                                <td>{{ $c2 = number_format($value->C2/$max2, 2) }}</td>
                                @else
                                <td>{{ $c2 = number_format($min2/$value->C2, 2) }}</td>
                                @endif

                                @if($atr3 == 'benefit')
                                <td>{{ $c3 = number_format($value->C3/$max3, 2) }}</td>
                                @else
                                <td>{{ $c3 = number_format($min3/$value->C3, 2) }}</td>
                                @endif

                                @if($atr4 == 'benefit')
                                <td>{{ $c4 = number_format($value->C4/$max4, 2) }}</td>
                                @else
                                <td>{{ $c4 = number_format($min4/$value->C4, 2) }}</td>
                                @endif


                                @if($atr5 == 'benefit')
                                <td>{{ $c5 = number_format($value->C5/$max5, 2) }}</td>
                                @else
                                <td>{{ $c5 = number_format($min5/$value->C5, 2) }}</td>
                                @endif
                                <td>{{
                                    number_format
                                    (
                                        
                                        (($c1) * $bobot_ipk) +
                                        (($c2) * $bobot_penghasilanOrtu) +
                                        (($c3) * $bobot_tanggunganOrtu) +
                                        (($c4) * $bobot_smt) +
                                        (($c5) * $bobot_organisasi), 
                                    2)
                                    }}
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