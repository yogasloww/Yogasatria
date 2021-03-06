<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('home') }}"><B>Home</B></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="profil-dropdown" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            <B>Profil</B>
          </a>
          <ul class="dropdown-menu" aria-labelledby="profil-dropdown">
            <li><a class="dropdown-item" href="{{ route('page', ['slug' => 'tentang']) }}">Tentang</a></li>
            <li><a class="dropdown-item" href="{{ route('page', ['slug' => 'sejarah']) }}">Sejarah</a></li>
            <li><a class="dropdown-item" href="{{ route('page', ['slug' => 'visi-misi']) }}">Visi & Misi</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('guru.index') }}"><B>Guru</B></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('berita.index') }}"><B>Berita</B></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('galeri.index') }}"><B>Galeri</B></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('kontak.index') }}"><B>Kontak</B></a>
        </li>
      </ul>
    </div>
  </div>
</nav>
