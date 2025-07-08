@extends ('layout')

@section('title', 'Data Pengguna')

@section ('content')

<div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Data Pengguna</h4>
                    </div>
                    <div class="card-body">
                        @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }} </div>
                        @endif

                        <a href="{{ route('penggunas.create') }}" class='btn btn-info btn-sm'><i class="bi bi-plus-circle"></i> Tambah Data</a>
                        <hr>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th>Role</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($penggunas as $p)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $p->name }}</td>
                                    <td>{{ $p->email }}</td>
                                    <td>{{ $p->password }}</td>
                                    <td>{{ ucfirst($p->role) }}</td>
                                    <td>
                                        <a href="{{ route('simpanans.show', $p->id) }}" class="btn btn-secondary btn-sm"><i class="bi bi-search"></i> Detail</a>
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