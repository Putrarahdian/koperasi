@extends ('layout')

@section('title', 'Edit Data Anggota Koperasi')

@section ('content')

<div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h1>Edit Data Anggota Koperasi</h1>
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
            <a href="{{ route('anggotas.index') }}" class="btn btn-primary mb-3"><i class="bi bi-arrow-left"></i> Kembali</a>
           <hr>
            <form action="{{ route('anggotas.update', $anggota->id) }}" method="POST">
              @csrf
              @method('PUT')
              <div class="mb-3">
                <label for="nik_ktp" class="form-label">NIK KTP</label>
                <input type="text" class="form-control" id="nik_ktp" name="nik_ktp" value="{{ old('nik_ktp', $anggota->nik_ktp) }}" required>
              </div>
              <div class="mb-3">
                <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" value="{{ old('nama_lengkap', $anggota->nama_lengkap) }}" required>
              </div>
              <div class="mb-3">
                <label for="no_hp" class="form-label">No HP</label>
                <input type="text" class="form-control" id="no_hp" name="no_hp" value="{{ old('no_hp', $anggota->no_hp) }}" required>
              </div>
              <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea class="form-control" id="alamat" name="alamat" rows="3">{{ old('alamat', $anggota->alamat) }}</textarea>
              </div>
              <div class="mb-3">
                <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="{{ old('tanggal_lahir', $anggota->tanggal_lahir) }}">
              </div>
              <button type="submit" class="btn btn-success"><i class="bi bi-save"></i> Update</button>
            </form>
          </div>
        </div>
      </div>
    </div>
</div>

@endsection