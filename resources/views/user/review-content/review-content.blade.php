@extends('layouts.app')

@section('content')
<!-- Banner-review-content -->
<section class="banner-review-content" style="background-image: url({{ asset('storage/content/thumbnail/' . $getDataContent->path_thumbnail) }});">
    <div class="container-fluid">
        <!-- navbar -->
        @include('components.user.navbar')
        <section>
            <div class="container d-flex justify-content-center align-items-center text-center">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12">
                        <div class="banner-review-content-title text-light">
                            <p class="h2">“{{$getDataContent->title}}”</p>
                            <p class="banner-review-content-sub-title">
                                {{$getDataContent->sub_title}}
                            </p>
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
        <h2 class="mt-5 mb-2">Publish, {{ \Carbon\Carbon::parse($getDataContent->created_at)->isoFormat('dddd, D MMMM Y') }}</h2>
        <h1><b>"{{$getDataContent->title}}"</b></h1>
        <h6>
            {{$getDataContent->sub_title}}
        </h6>
    </div>

    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="mt-4">
                <div class="d-flex justify-content-start">
                    Author: {{$getDataContent->fullname}}
                </div>
            </div>
            <img src="{{ asset('storage/content/image/' . $getDataContent->path_image) }}" class="w-100 h-75 img-fluid" alt="">

            <!-- Load Text Data -->
            <div class="mt-4 mb-5">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-8">
                        <p class="lead">
                            {{$getDataContent->description}}
                        </p>
                    </div>
                    <video src="{{ asset('storage/content/video/' . $getDataContent->path_video ) }}" class="w-100 h-75 img-fluid" alt="" controls {{$getDataContent->path_video ? '' : 'hidden'}}>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Load More Data -->
<!-- title -->
<div class="text-center">
    <h2 class="mb-2">Load More Karya-ku</h2>
    <h5>
        Inspirasi Karya, Budaya dan lain sebagainya dari orang-orang di seluruh dunia. <br>
        Temukan Inspirasi dan lakukan idemu sekarang.
    </h5>
</div>

<!-- Load Data -->
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