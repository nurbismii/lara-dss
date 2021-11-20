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
                    <table class="table table-striped text-center" id="dataTable" width="100%" cellspacing="0">
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

                            </tr>
                        </thead>

                        <tbody>
                            @foreach($datas as $value)
                            <tr>

                                <td>{{ ++$no }}</td>
                                <td>{{ $value->nama }}</td>
                                <td>{{ $value->C1 }}</td>
                                <td>{{ $value->C2 }}</td>
                                <td>{{ $value->C3 }}</td>
                                <td>{{ $value->C4 }}</td>
                                <td>{{ $value->C5 }}</td>
                                <td>{{ $value->hasil }}</td>

                            </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>