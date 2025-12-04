<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top shadow-sm">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('dashboard') }}">
            <i class="bi bi-house-door"></i> SIMASET
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('tanah.index') }}"><i class="bi bi-map"></i> Tanah</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('bangunan.index') }}"><i class="bi bi-building"></i> Bangunan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('ruangan.index') }}"><i class="bi bi-house-door"></i> Ruangan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('kategori.index') }}"><i class="bi bi-tags"></i> Kategori</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('barang.index') }}"><i class="bi bi-box"></i> Barang</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
