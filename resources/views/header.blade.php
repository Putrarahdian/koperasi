<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Koperasi Biche</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('anggotas.index') }}">Anggota</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('simpanans.index') }}">Simpanan anggota</a>
        </li>
        @if(Auth::user()->role === 'admin')
        <li class="nav-item">
          <a class="nav-link" href="{{ route('penggunas.index') }}">Pengguna</a>
        </li>
        @endif
        <li class="nav-item">
          <form action="{{ route('logout') }}" method="POST" class="logout-form">
            @csrf
            <button type="submit">Logout</button>
          </form>
        </li>
      </ul>
    </div>
  </div>
</nav>