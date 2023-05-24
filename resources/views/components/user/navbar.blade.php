<!-- Navbar -->
<nav class="navbar navbar-expand-md shadow-0">
    <!-- Container wrapper -->
    <div class="container">
        <!-- Toggle button -->
        <button class="navbar-toggler text-light" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>

        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Navbar brand -->
            <a class="navbar-brand mt-2 mt-lg-0 text-light" href="{{route('home')}}">
                <img src="{{asset('icon/image 55.png')}}" class="mr-5" alt=""> KK
            </a>
            <!-- Left links -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link text-light" href="{{route('home')}}">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="{{route('komunitas')}}">Komunitas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="{{route('laporan')}}">Laporan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="{{route('tentang-kami')}}">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="{{route('kategori')}}">Kategori</a>
                </li>
            </ul>
            <!-- Left links -->
        </div>
        <!-- Collapsible wrapper -->

        <!-- Right elements -->
        <div class="d-flex align-items-center">
            <a class="text-light me-3" href="{{route('login')}}">Masuk</a>
            <a class="text-light text-center button-home-register" href="{{route('register')}}">Buat Akun</a>
        </div>
        <!-- Right elements -->
    </div>
    <!-- Container wrapper -->
</nav>
<!-- Navbar -->