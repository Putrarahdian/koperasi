@extends ('layout')

@section('title', 'Tambah Data Simpanan Anggota Koperasi')

@section ('content')

<div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Tampil data simpanan Anggota Koperasi</h4>
                    </div>
                    <div class="card-body">
                        @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <a href="{{ route('simpanans.index') }}" class='btn btn-info btn-sm'><i class="bi bi-arrow-left"></i> Kembali</a>
                        <hr>
                        <form action="{{ route('simpanans.store') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="anggota_id">Nama Anggota</label>
                                <select name="anggota_id" id="anggota_id" class="form-control" required>
                                    <option value="">Pilih Anggota</option>
                                    @foreach($anggotas as $a)
                                    <option value="{{ $a->id }}">{{ $a->nama_lengkap }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="tanggal">Tanggal</label>
                                <input type="date" name="tanggal" id="tanggal" class="form-control" value="{{ old('tanggal') }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="jenis">Jenis</label>
                                <select name="jenis" id="jenis" class="form-control" required>
                                    <option value="">Pilih Jenis</option>
                                    <option value="wajib">Wajib</option>
                                    <option value="pokok">Pokok</option>
                                    <option value="sukarela">Sukarela</option>

                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="nominal">Nominal</label>
                                <input type="number" min="0" name="nominal" id="nominal" class="form-control" value="{{ old('nominal') }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="keterangan">Keterangan</label>
                                <input type="text" name="keterangan" id="keterangan" class="form-control" value="{{ old('keterangan') }}" required>
                            </div>
                            <button type="submit" class="btn btn-sm btn-primary"><i class="bi bi-save"></i> Simpan</button>                           
                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>

@endsection