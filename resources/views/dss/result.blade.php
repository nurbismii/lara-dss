<div class="row">
    <div class="col-lg">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-dark">Normalisasi</h6>
            </div>
            <!-- Card Body -->
            <form action="{{ route('hasil.store')}}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover text-center" id="dataTable" width="100%" cellspacing="0">
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

                                    @if($value->C1 != 0 && $value->C2 != 0 && $value->C3 != 0 && $value->C4 != 0 && $value->C5 != 0)

                                    @if($atr1 == "benefit")
                                    <td>{{ $c1 = number_format($value->C1/$max1, 1)}}</td>
                                    @else
                                    <td>{{ $c1 = number_format($min1/$value->C1, 1)}}</td>
                                    @endif

                                    @if($atr2 == "benefit")
                                    <td>{{ $c2 = number_format($value->C2/$max2, 1) }}</td>
                                    @else
                                    <td>{{ $c2 = number_format($min2/$value->C2, 1) }}</td>
                                    @endif

                                    @if($atr3 == 'benefit')
                                    <td>{{ $c3 = number_format($value->C3/$max3, 1) }}</td>
                                    @else
                                    <td>{{ $c3 = number_format($min3/$value->C3, 1) }}</td>
                                    @endif

                                    @if($atr4 == 'benefit')
                                    <td>{{ $c4 = number_format($value->C4/$max4, 1) }}</td>
                                    @else
                                    <td>{{ $c4 = number_format($min4/$value->C4, 1) }}</td>
                                    @endif

                                    @if($atr5 == "benefit")
                                    <td>{{ $c5 = number_format($value->C5/$max5, 1) }}</td>
                                    @else
                                    <td>{{ $c5 = number_format($min5/$value->C5, 1) }}</td>
                                    @endif

                                    @else

                                    @if($atr1 == "benefit")
                                    <td>{{ $c1 = number_format($value->C1/$max1, 1)}}</td>
                                    @else
                                    <td>{{ $c1 = number_format($min1/$value->C1, 1)}}</td>
                                    @endif
                                    <td>{{ $c2 = number_format($value->C2/$max2, 1) }}</td>
                                    <td>{{ $c3 = number_format($value->C3, 1) }}</td>
                                    <td>{{ $c4 = number_format($value->C4, 1) }}</td>
                                    <td>{{ $c5 = number_format($value->C5, 1)}}</td>
                                    @endif

                                    <td>{{
                                    $hasil = number_format(
                                        ($c1 * $bobot_ipk) + ($c2 * $bobot_penghasilanOrtu) + 
                                        ($c3 * $bobot_smt) + ($c4 * $bobot_tanggunganOrtu) +
                                        ($c5 * $bobot_organisasi),
                                        1)
                                    }}
                                    </td>
                                </tr>
                            </tbody>
                            <!-- Simpan hasil akhir -->
                            <input type="hidden" name="normalisasi_id[]" value="{{ $value->id }}">
                            <input type="hidden" name="hasil[]" value="{{ $hasil }}">
                            <!-- Simpan hasil akhir end -->
                            @endforeach
                        </table>
                    </div>
                </div>
                <div class="card-footer py-3 text-right">
                    <button type="submit" class="btn btn-success btn-sm">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>