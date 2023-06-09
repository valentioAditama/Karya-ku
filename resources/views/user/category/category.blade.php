@extends('layouts.app')

@section('content')
<!-- Banner-category -->
<section class="banner-category">
    <div class="container-fluid">
        <!-- navbar -->
        @include('components.user.navbar')
        <section>
            <div class="container d-flex justify-content-end align-items-center">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12">
                        <div class="banner-category-title text-light">
                            <p class="h2">Kategori</p>
                            <p class="banner-category-sub-title">
                                Carilah kategori karya yang anda mau dan anda ingin lihat, banyak orang-orang berkarya <br>
                                sesuai dengan jenis kategorinya masing-masing </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>

<!-- Form Karyaku -->
<section>
    <!-- title -->
    <div class="text-center">
        <h2 class="mt-5">Kategori</h2>
        <h5 class="mb-5">
            Cari dan ketahui kategori kesukaan anda apa saja, banyak orang berkarya sesuai <br>
            dengan jenis kategorinya masing-masing.
        </h5>
    </div>

    <div class="container mb-5">
        <!-- category -->
        <div class="row">
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="https://cdn.eraspace.com/pub/media/mageplaza/blog/post/f/o/fotografiteknik.jpg" class="card-img-top" alt="Fissure in Sandstone" />
                    <div class="card-body">
                        <h5 class="card-title">Fotografi</h5>
                        <p class="card-text">Fotografi ini akan mencakup berbagai jenis fotografi, seperti potret, lanskap, arsitektur, mode, makanan, dan sebagainya</p>
                        <a href="#!" class="btn btn-primary">Explore</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="https://mmc.tirto.id/image/otf/500x0/2020/09/30/istock-1191609321_ratio-16x9.jpg" class="card-img-top" alt="Fissure in Sandstone" />
                    <div class="card-body">
                        <h5 class="card-title">Desain Grafis</h5>
                        <p class="card-text">Desain Grafis ini akan fokus pada desain grafis, termasuk ilustrasi, poster, logo, brosur, dan desain visual lainnya</p>
                        <a href="#!" class="btn btn-primary">Explore</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="https://berkeluarga.id/media/2020/11/05-wayhomestudio-female-painter-her-art-studio-1200x675.jpg" class="card-img-top" alt="Fissure in Sandstone" />
                    <div class="card-body">
                        <h5 class="card-title">Seni Lukis dan Gambar</h5>
                        <p class="card-text">Seni Lukis dan Gambar ini akan mencakup seni lukis, menggambar tangan, seni digital, dan berbagai teknik seni rupa</p>
                        <a href="#!" class="btn btn-primary">Explore</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="https://www.indonesiana.id/images/all/2021/12/13/f202112130850304.jpg" class="card-img-top" alt="Fissure in Sandstone" />
                    <div class="card-body">
                        <h5 class="card-title">Tulisan Kreatif</h5>
                        <p class="card-text">Tulisan Kreatif ini akan memungkinkan pengguna untuk berbagi cerpen, puisi, esai, artikel, dan tulisan kreatif lainnya.</p>
                        <a href="#!" class="btn btn-primary">Explore</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="https://images.unsplash.com/photo-1510915361894-db8b60106cb1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxleHBsb3JlLWZlZWR8MTB8fHxlbnwwfHx8fHw%3D&w=1000&q=80" class="card-img-top" alt="Fissure in Sandstone" />
                    <div class="card-body">
                        <h5 class="card-title">Musik dan Audio</h5>
                        <p class="card-text">Musik dan Audio ini akan melibatkan musik, rekaman vokal, podcast, efek suara, atau karya audio lainnya.</p>
                        <a href="#!" class="btn btn-primary">Explore</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="https://images.unsplash.com/photo-1612311370838-96f8e048cd29?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTh8fGRvY3VtZW50YXJ5fGVufDB8fDB8fHww&w=1000&q=80" class="card-img-top" alt="Fissure in Sandstone" />
                    <div class="card-body">
                        <h5 class="card-title">Video dan Film Pendek</h5>
                        <p class="card-text">akan fokus pada pembuatan video dan film pendek. Pengguna dapat berbagi karya mereka dalam bentuk film pendek</p>
                        <a href="#!" class="btn btn-primary">Explore</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="https://assets.ayobandung.com/crop/0x0:0x0/750x500/webp/photo/2022/10/31/3205469962.jpg" class="card-img-top" alt="Fissure in Sandstone" />
                    <div class="card-body">
                        <h5 class="card-title">Kerajinan Tangan</h5>
                        <p class="card-text">Kategori ini akan mencakup kerajinan tangan seperti rajutan, anyaman, pembuatan perhiasan, dekorasi rumah, dan sejenisnya</p>
                        <a href="#!" class="btn btn-primary">Explore</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="https://www.blibli.com/friends-backend/wp-content/uploads/2023/03/B200446-Cover-wisata-kuliner-di-bangkok-scaled.jpg" class="card-img-top" alt="Fissure in Sandstone" />
                    <div class="card-body">
                        <h5 class="card-title">Kuliner</h5>
                        <p class="card-text">Kuliner ini akan memungkinkan pengguna untuk berbagi resep, foto makanan, video tutorial memasak, dan pengalaman kuliner mereka</p>
                        <a href="#!" class="btn btn-primary">Explore</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="https://images.unsplash.com/photo-1470309864661-68328b2cd0a5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8ZmFzaGlvbiUyMGNsb3RoaW5nfGVufDB8fDB8fHww&w=1000&q=80" class="card-img-top" alt="Fissure in Sandstone" />
                    <div class="card-body">
                        <h5 class="card-title">Mode dan Busana</h5>
                        <p class="card-text">Moed dan Busana ini akan mencakup fashion, desain pakaian, outfit of the day (OOTD), dan aksesori</p>
                        <a href="#!" class="btn btn-primary">Explore</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card">
                <img src="https://media.istockphoto.com/id/1147195672/photo/focused-developer-coding-on-computer-monitors-working-late-in-office.jpg?s=612x612&w=0&k=20&c=R6oPQ_vkXAxCzpi4UFsN28pdU0C0LJL8JLAX-HwO90Q=" class="card-img-top" alt="Fissure in Sandstone" />
                <div class="card-body">
                    <h5 class="card-title">Teknologi dan Inovasi</h5>
                    <p class="card-text">Kategori ini akan melibatkan proyek-proyek inovatif, teknologi terbaru, aplikasi, perangkat keras, atau ide-ide kreatif di bidang teknologi</p>
                    <a href="#!" class="btn btn-primary">Explore</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- footer -->
@include('components.user.footer')
<!-- Notification -->
@include('components.notifications')

@endsection