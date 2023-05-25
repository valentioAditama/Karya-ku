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
            <div class="col-md-4">
                <div class="card">
                    <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/184.webp" class="card-img-top" alt="Fissure in Sandstone" />
                    <div class="card-body">
                        <h5 class="card-title">Seni</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#!" class="btn btn-primary">Button</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/184.webp" class="card-img-top" alt="Fissure in Sandstone" />
                    <div class="card-body">
                        <h5 class="card-title">Musik</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#!" class="btn btn-primary">Button</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/184.webp" class="card-img-top" alt="Fissure in Sandstone" />
                    <div class="card-body">
                        <h5 class="card-title">Hiburan</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#!" class="btn btn-primary">Button</a>
                    </div>
                </div>
            </div>
        </div>
</section>

<!-- footer -->
@include('components.user.footer')

@endsection