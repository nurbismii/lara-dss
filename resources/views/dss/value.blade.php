<div class="col-lg-4 mb-4">
    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-dark">Input Data</h6>
        </div>
        <!-- Card Body -->
        <form action="{{ route('penilaian.store') }}" method="POST">
            <div class="card-body">
                @csrf
                <div class="form-group">
                    <div class="col-lg">
                        <div class="form-group">
                            <label for="Nama">Nama Lengkap</label>
                            <select class="form-control @error('alter_id') is-invalid @enderror" name="alter_id">
                                <option value="" hidden>-Pilih Pengaju-</option>
                                @foreach($alternatif as $value)
                                <option value="{{ $value->id }}">{{ $value->nama }}</option>
                                @endforeach
                            </select>
                            @error('alter_id')
                            <span class="invalid-feedback">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Indeks Prestasi Mahasiwa</label>
                            <select class="form-control @error('ipk') is-invalid @enderror" name="ipk">
                                <option value="" hidden>Nilai IPK</option>
                                @foreach($ipk as $value)
                                <option value="{{ $value->nilai }}">{{ $value->nama }}</option>
                                @endforeach
                            </select>
                            @error('ipk')
                            <span class="invalid-feedback">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Penghasilan Orang Tua</label>
                            <select class="form-control @error('pot') is-invalid @enderror" name="pot">
                                <option value="" hidden>Penghasilan Ortu</option>
                                @foreach($pot as $value)
                                <option value="{{ $value->nilai }}">{{ $value->nama }}</option>
                                @endforeach
                            </select>
                            @error('pot')
                            <span class="invalid-feedback">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Semester</label>
                            <select class="form-control @error('smt') is-invalid @enderror" name="smt">
                                <option value="" hidden>Semester Pengaju</option>
                                @foreach($smt as $value)
                                <option value="{{ $value->nilai }}">{{ $value->nama }}</option>
                                @endforeach
                            </select>
                            @error('smt')
                            <span class="invalid-feedback">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Jumlah Tanggungan Orang Tua</label>
                            <select class="form-control @error('jtot') is-invalid @enderror" name="jtot">
                                <option value="" hidden>Tanggungan Ortu</option>
                                @foreach($tot as $value)
                                <option value="{{ $value->nilai }}">{{ $value->nama }}</op>
                                    @endforeach
                            </select>
                            @error('jtot')
                            <span class="invalid-feedback">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Keikutsertaan Organisasi</label>
                            <select class="form-control @error('organisasi') is-invalid @enderror" name="organisasi">
                                <option value="" hidden>Organisasi Pengaju</option>
                                @foreach($ko as $value)
                                <option value="{{ $value->nilai }}">{{ $value->nama }}</option>
                                @endforeach
                            </select>
                            @error('organisasi')
                            <span class="invalid-feedback">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-header py-3 text-right">
                <button type="reset" class="btn btn-danger btn-sm">Hapus</button>
                <button type="submit" class="btn btn-success mr-2 btn-sm">Simpan</button>
            </div>
        </form>
    </div>
</div>