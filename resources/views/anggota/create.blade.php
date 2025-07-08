@extends ('layout')

@section('title', 'Tambah Data Anggota Koperasi')

@section ('content')

<div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Tampil data Anggota Koperasi</h4>
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
                        <a href="{{ route('anggotas.index') }}" class='btn btn-info btn-sm'><i class="bi bi-arrow-left"></i> Kembali</a>
                        <hr>
                        <form action="{{ route('anggotas.store') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="nik_ktp">Nik KTP</label>
                                <input type="text" name="nik_ktp" id="nik_ktp" class="form-control" value="{{ old('nik_ktp') }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="nama_lengkap">Nama Lengkap</label>
                                <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" value="{{ old('nama_lengkap') }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="no_hp">Nomor HP</label>
                                <input type="text" name="no_hp" id="no_hp" class="form-control" value="{{ old('no_hp') }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="alamat">Alamat</label>
                                <input type="text" name="alamat" id="alamat" class="form-control" value="{{ old('alamat') }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="tanggal_lahir">Tanggal Lahir</label>
                                <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control" value="{{ old('tanggal_lahir') }}" required>
                            </div>
                            <button type="submit" class="btn btn-sm btn-primary"><i class="bi bi-save"></i> Simpan</button>                           
                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>

@endsection