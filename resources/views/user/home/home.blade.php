@extends('layouts.app')

@section('content')
<!-- Banner-home -->
<section class="banner-home">
    <div class="container-fluid">
        <!-- navbar -->
        @include('components.user.navbar')
        <section>
            <div class="container d-flex justify-content-end align-items-center">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12">
                        <div class="banner-home-title text-light">
                            <p class="h2">Cari Karya yang membuatmu <b>Termotivasi</b></p>
                            <p class="banner-home-sub-title">
                                Inspirasi Karya, Budaya dan lain sebagainya dari orang-orang di seluruh dunia. <br>
                                Temukan Inspirasi dan lakukan idemu sekarang.
                            </p>
                            <input type="text" class="w-75 banner-home-form" placeholder='Pikirkan "Ide" Anda'>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>

<!-- Load Data Karyaku -->
<section>
    <!-- title -->
    <div class="text-center">
        <h2 class="mt-5">Karya-ku</h2>
        <h5>Inspirasi Karya, Budaya dan lain sebagainya dari orang-orang di seluruh dunia. <br>
            Temukan Inspirasi dan lakukan idemu sekarang.
        </h5>
    </div>

    <!-- data Karyaku -->
    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col-md-4">
                <img src="https://d23.com/app/uploads/2020/01/1180w-463h_010920-riviera-art-gallery-780x440.jpg" class="w-100 h-75 img-fluid " alt="">
                <div class="d-flex justify-content-between mt-2">
                    <div>
                        <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp" class="rounded-circle mr-3" height="25" alt="Black and White Portrait of a Man" loading="lazy" />
                        Valentio Aditama
                    </div>
                    <div>Selasa, 10 Feburari 2023</div>
                </div>
            </div>
            <div class="col-md-4">
                <img src="https://ilovelife.co.id/blog/wp-content/uploads/2021/12/Berniat-Beli-NFT-Art-Pelajari-Dulu-Cara-Kerjanya.jpg" class="w-100 h-75 img-fluid " alt="">
                <div class="d-flex justify-content-between mt-2">
                    <div>
                        <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp" class="rounded-circle mr-3" height="25" alt="Black and White Portrait of a Man" loading="lazy" />
                        Valentio Aditama
                    </div>
                    <div>Selasa, 10 Feburari 2023</div>
                </div>
            </div>
            <div class="col-md-4">
                <img src="https://i.ytimg.com/vi/dBsd_Mb33dQ/maxresdefault.jpg" class="w-100 h-75 img-fluid " alt="">
                <div class="d-flex justify-content-between mt-2">
                    <div>
                        <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp" class="rounded-circle mr-3" height="25" alt="Black and White Portrait of a Man" loading="lazy" />
                        Valentio Aditama
                    </div>
                    <div>Selasa, 10 Feburari 2023</div>
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