@extends('layouts.app')

@section('content')
<!-- Banner-my-profile -->
<section class="banner-my-profile">
    <div class="container-fluid">
        <!-- navbar -->
        @include('components.user.navbar')
    </div>
</section>

<!-- My Profile -->
<section class="profile-image">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp" class="rounded-circle mr-3 image-profile" height="300" alt="Black and White Portrait of a Man" loading="lazy" />
            </div>
            <div class="col-md-3">
                <div class="mt-4">
                    <p class="h3"><b>Valentio Aditama</b></p>
                    <p class="h4">Software Engineer</p>
                    <div class="btn btn-primary text-center">
                        <i class="fa-sharp fa-solid fa-location-dot"></i> &nbsp;
                        <b>Bandung,&nbsp; indonesian</b>
                    </div>
                </div>
            </div>
            <div class="col-md-6 d-flex justify-content-end align-items-center">
                <div class="mt-4">
                    <a href="{{route('upload')}}" class="btn btn-primary">
                        <div class="text-center">
                            <b>Tambah Karya</b>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- List All My Karya data -->
<section>
    <!-- title -->
    <div class="text-center">
        <h2 class="mt-5">Karya-ku</h2>
        <h5>
            Anda bisa menambahkan karya, memperbarui dan <br>
            menyimpan karya anda sendiri di draft
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
                <div class="d-flex justify-content-end mt-2">
                    <a href="" class="btn btn-info">Delete</a> &nbsp;
                    <a href="" class="btn btn-info">Edit</a>
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
                <div class="d-flex justify-content-end mt-2">
                    <a href="" class="btn btn-info">Delete</a> &nbsp;
                    <a href="" class="btn btn-info">Edit</a>
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
                <div class="d-flex justify-content-end mt-2">
                    <a href="" class="btn btn-info">Delete</a> &nbsp;
                    <a href="" class="btn btn-info">Edit</a>
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