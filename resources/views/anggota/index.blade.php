@extends ('layout')

@section('title', 'Data Anggota Koperasi')

@section ('content')

<div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Tampil data Anggota Koperasi</h4>
                    </div>
                    <div class="card-body">
                        @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }} </div>
                        @endif

                        <a href="{{ route('anggotas.create') }}" class='btn btn-info btn-sm'><i class="bi bi-plus-circle"></i> Tambah Data</a>
                        <hr>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NIK KTP</th>
                                    <th>Nama Lengkap</th>
                                    <th>No HP</th>
                                    <th>Alamat</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($anggotas as $anggota)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $anggota->nik_ktp }}</td>
                                    <td>{{ $anggota->nama_lengkap }}</td>
                                    <td>{{ $anggota->no_hp }}</td>
                                    <td>{{ $anggota->alamat }}</td>
                                    <td>{{ $anggota->tanggal_lahir }}</td>
                                    <td>
                                        <a href="{{ route('anggotas.show', $anggota->id) }}" class="btn btn-secondary btn-sm"><i class="bi bi-search"></i> Detail</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
</div>

@endsection