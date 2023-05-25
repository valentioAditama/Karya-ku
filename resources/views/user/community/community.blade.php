@extends('layouts.app')

@section('content')
<!-- Banner-komunitas -->
<section class="banner-komunitas">
    <div class="container-fluid">
        <!-- navbar -->
        @include('components.user.navbar')
        <section>
            <div class="container d-flex justify-content-end align-items-center">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12">
                        <div class="banner-komunitas-title text-light">
                            <p class="h2">Cari dan buatkan <b>Komunitas</b></p>
                            <p class="banner-komunitas-sub-title">
                                Inspirasi Karya, Budaya dan lain sebagainya dari orang-orang di seluruh dunia. <br>
                                Temukan Inspirasi dan lakukan Hubunganmu dengan orang-orang.
                            </p>
                            <input type="text" class="w-75 banner-komunitas-form" placeholder='Cari Komunitas yang cocok dengan anda'>
                            <div class="mt-3">
                                <a href="{{route('komunitas.create')}}">
                                    <button class="button-komunitas">Buat Komunitas</button>
                                </a>
                            </div>
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
        <h2 class="mt-5">Komunitas</h2>
        <h5>Inspirasi Karya, Budaya dan lain sebagainya dari orang-orang di seluruh dunia. <br>
            Temukan Inspirasi dan lakukan Hubunganmu dengan orang-orang.
        </h5>
    </div>

    <!-- data Karyaku -->
    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col-md-4">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTpg5ux29bil5cTtd2froKm1vDhdYg356bZKQ&usqp=CAU" class="w-100 h-75 img-fluid " alt="">
                <div class="mt-2">
                    <b>Komunitas Kesenian Bandung</b>
                </div>
                <div class="d-flex justify-content-between mt-2">
                    <div>
                        <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp" class="rounded-circle mr-3" height="25" alt="Black and White Portrait of a Man" loading="lazy" />
                        Valentio Aditama
                    </div>
                    <div>Selasa, 10 Feburari 2023</div>
                </div>
            </div>

            <div class="col-md-4">
                <img src="https://www.sampoernauniversity.ac.id/wp-content/uploads/2022/02/pexels-photo-3184428.jpeg" class="w-100 h-75 img-fluid " alt="">
                <div class="mt-2">
                    <b>Komunitas Kesenian Bandung</b>
                </div>
                <div class="d-flex justify-content-between mt-2">
                    <div>
                        <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp" class="rounded-circle mr-3" height="25" alt="Black and White Portrait of a Man" loading="lazy" />
                        Valentio Aditama
                    </div>
                    <div>Selasa, 10 Feburari 2023</div>
                </div>
            </div>

            <div class="col-md-4">
                <img src="https://cdn1-production-images-kly.akamaized.net/d5_K_6cAWyOSCSeHN0av3m0MGR8=/469x260/smart/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/2562187/original/099971300_1546384277-kolaborasi-asyiiik-dari-karya-kerajinan-dan-kesenian-lokal-komunitas.jpg" class="w-100 h-75 img-fluid " alt="">
                <div class="mt-2">
                    <b>Komunitas Kesenian Bandung</b>
                </div>
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

@endsection