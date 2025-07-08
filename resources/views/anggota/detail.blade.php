@extends ('layout')

@section('title', 'Detail Data Anggota Koperasi')

@section ('content')

<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Rincian data Anggota Koperasi</h4>
                    </div>
                    <div class="card-body">
                      @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }} </div>
                        @endif
                        <a href="{{ route('anggotas.index') }}" class='btn btn-info btn-sm'><i class="bi bi-arrow-left"></i> Kembali</a>
                        <hr>
                        <h5 class="mb-3">Informasi Lengkap</h5>
                            <ul class="list-group list-group-flush">
                              <li class="list-group-item">
                                <strong>Nik KTP</strong> {{ $anggota->nik_ktp }}
                              </li>
                              <li class="list-group-item">
                                <strong>Nama Lengkap:</strong> {{ $anggota->nama_lengkap }}
                              </li>
                              <li class="list-group-item">
                                <strong>Nomor HP:</strong> {{ $anggota->no_hp }}
                              </li>
                              <li class="list-group-item">
                                <strong>Alamat:</strong> {{ $anggota->alamat }}
                              </li>
                              <li class="list-group-item">
                                <strong>Tanggal Lahir:</strong> {{ $anggota->tanggal_lahir }}
                              </li>
                              <li class="list-group-item">
                                <strong>Tanggal Daftar:</strong> {{ \Carbon\Carbon::parse($anggota->created_at)->translatedFormat('d-m-Y') }}
                              </li>
                            </ul>
                            <div class="text-center mt-4">
                                <a href="{{ route('anggotas.edit', $anggota->id ) }}" class="btn btn-warning btn-sm"><i class="bi bi-pencil-square"></i> Edit</a>
                                <form action="{{ route('anggotas.destroy', $anggota->id) }}" method="post"
                                class="d-inline">
                                @csrf 
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')"><i class="bi bi-trash"></i> Hapus</button>   
                                </form>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>

@endsection