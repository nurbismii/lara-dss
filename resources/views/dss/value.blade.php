<div class="col-lg-4 mb-4">
    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-dark">Input Data</h6>
        </div>
        <!-- Card Body -->
        <div class="card-body">
            <form action="{{ route('penilaian.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <div class="col-lg">
                        <div class="form-group">
                            <label for="Nama">Nama Lengkap</label>
                            <select class="form-control" name="alter_id" id="">
                                <option value="">Pilih Pengaju</option>
                                @foreach($alternatif as $value)
                                <option value="{{ $value->id }}">{{ $value->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Indeks Prestasi Mahasiwa</label>
                            <select class="form-control" name="ipk" id="">
                                <option value="">Nilai IPK</option>
                                @foreach($ipk as $value)
                                <option value="{{ $value->nilai }}">{{ $value->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Penghasilan Orang Tua</label>
                            <select class="form-control" name="pot" id="">
                                <option value="">Penghasilan Ortu</option>
                                @foreach($pot as $value)
                                <option value="{{ $value->nilai }}">{{ $value->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Semester</label>
                            <select class="form-control" name="smt" id="">
                                <option value="">Semester Pengaju</option>
                                @foreach($smt as $value)
                                <option value="{{ $value->nilai }}">{{ $value->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Tanggungan Orang Tua</label>
                            <select class="form-control" name="tot" id="">
                                <option value="">Tanggungan Ortu</option>
                                @foreach($tot as $value)
                                <option value="{{ $value->nilai }}">{{ $value->nama }}</op>
                                    @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Keikutsertaan Organisasi</label>
                            <select class="form-control" name="ko" id="">
                                <option value="">Organisasi Pengaju</option>
                                @foreach($ko as $value)
                                <option value="{{ $value->nilai }}">{{ $value->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-success mr-2">Simpan</button>
                        <button type="reset" class="btn btn-light float-right">Hapus</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>