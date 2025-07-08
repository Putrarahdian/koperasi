@extends ('layout')

@section('title', 'Data Simpanan Anggota Koperasi')

@section ('content')

<div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Data Simpanan Anggota Koperasi</h4>
                    </div>
                    <div class="card-body">
                        @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }} </div>
                        @endif

                        <a href="{{ route('simpanans.create') }}" class='btn btn-info btn-sm'><i class="bi bi-plus-circle"></i> Tambah Data</a>
                        <hr>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal Simpanan</th>
                                    <th>Nama Anggota</th>
                                    <th>Jenis</th>
                                    <th>Nominal</th>
                                    <th>Keterangan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($simpanans as $s)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $s->tanggal }}</td>
                                    <td>{{ $s->anggota->nama_lengkap }}</td>
                                    <td>{{ $s->jenis }}</td>
                                    <td>{{ $s->nominal }}</td>
                                    <td>{{ $s->keterangan }}</td>
                                    <td>
                                        <a href="{{ route('simpanans.show', $s->id) }}" class="btn btn-secondary btn-sm"><i class="bi bi-search"></i> Detail</a>
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