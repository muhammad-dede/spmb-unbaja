<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
        <div class="logo">
            <a href="{{ route('index') }}">
                <img src="{{ asset('') }}public/logo.png" alt="" class="img-fluid">
            </a>
        </div>
        <nav id="navbar" class="navbar">
            <ul>
                <li>
                    <a class="nav-link {{ Request::is('fakultas') ? 'active' : '' }}"
                        href="{{ route('fakultas') }}">Fakultas</a>
                </li>
                <li>
                    <a class="nav-link {{ Request::is('kontak-kami') ? 'active' : '' }}"
                        href="{{ route('kontak-kami') }}">Kontak Kami</a>
                </li>
                <li>
                    <a class="nav-link {{ Request::is('tanya-jawab') ? 'active' : '' }}"
                        href="{{ route('tanya-jawab') }}" style="margin-right: 30px;">Tanya
                        Jawab</a>
                </li>
                <li><a class="nav-btn masuk" href="{{ route('masuk') }}">Masuk</a></li>
                <li><a class="nav-btn daftar" href="{{ route('daftar') }}">Daftar Sekarang</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
    </div>
</header>
