@extends('layouts.app')

@section('content')
<div class="background-komunitas-review">
    <!-- Banner-komunitas-review -->
    <section class="banner-komunitas-review">
        <div class="container-fluid">
            <!-- navbar -->
            @include('components.user.navbar')
            <section>
                <div class="container d-flex justify-content-end align-items-center">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12">
                            <div class="banner-komunitas-review-title text-light">
                                <p class="h2"><b>Komunitas BasketBall Bandung</b></p>
                                <p class="banner-komunitas-review-sub-title">
                                    Inspirasi Karya, Budaya dan lain sebagainya dari orang-orang di seluruh dunia. <br>
                                    Temukan Inspirasi dan lakukan Hubunganmu dengan orang-orang.
                                </p>
                                <div class="mt-3">
                                    <button class="button-komunitas">800 Members</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>

    <!-- Load Postingan -->
    <section class="mb-5 mt-4">
        <div class="container">
            <div class="form-post">
                <div class="row">
                    <div class="col-md-1 d-flex justify-content-center">
                        <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp" class="rounded-circle" height="75" alt="Black and White Portrait of a Man" loading="lazy" />
                    </div>
                    <div class="col-md-11">
                        <textarea class="input-post" name="" id="" cols="30" rows="3" placeholder="Apa yang anda sedang pikirkan?"></textarea>
                        <!-- files opsional -->
                        <div class="row">
                            <div class="col-md-2">
                                <div class="mt-2">
                                    <button class="image-file text-center">
                                        <i class="fa-solid fa-image"></i>
                                        &nbsp;
                                        Gambar
                                    </button>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="mt-2">
                                    <button class="image-file text-center">
                                        <i class="fa-solid fa-video"></i>
                                        &nbsp;
                                        Video
                                    </button>
                                </div>
                            </div>
                            <div class="col-md-8 d-flex justify-content-end">
                                <div class="mt-2">
                                    <button class="image-file text-center">
                                        Posting &nbsp;
                                        <i class="fa-solid fa-upload"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-5">
        <div class="container">
            <div class="form-post">
                <div class="row">
                    <div class="col-md-1 d-flex justify-content-center">
                        <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp" class="rounded-circle" height="75" alt="Black and White Portrait of a Man" loading="lazy" />
                    </div>
                    <div class="col-md-5 d-flex align-items-center">
                        <div class="user-info">
                            <h5><b>Valentio Aditama</b></h5>
                            <small>Few Minutes Ago</small>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex justify-content-end">
                        <i class="fa-solid fa-ellipsis"></i>
                    </div>
                </div>
                <!-- content komunitas -->
                <div class="row d-flex justify-content-end">
                    <div class="col-md-11">
                        <p class="h5"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt expedita, voluptatum temporibus dolorem asperiores labore hic nam corrupti inventore id ipsa voluptatem. Ratione eum repudiandae id maxime, sint architecto officia.
                        </p>
                    </div>
                </div>
                <!-- likes and comments -->
                <div class="row d-flex justify-content-end">
                    <div class="col-md-11">
                        <div class="row">
                            <!-- likes -->
                            <div class="col-md-2">
                                <div class="mt-2">
                                    <button class="image-file text-center">
                                        <i class="fa-solid fa-thumbs-up"></i> &nbsp;
                                        112
                                    </button>
                                </div>
                            </div>
                            <!-- comment -->
                            <div class="col-md-2">
                                <div class="mt-2">
                                    <button class="image-file text-center">
                                        <i class="fa-solid fa-comment"></i>&nbsp;
                                        200
                                    </button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection