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
            @foreach($getDataContent as $data)
            <div class="col-md-4 mb-5">
                <a href="{{route('reviewKarya', $data->id)}}" class="text-dark">
                    <img src="{{ asset('storage/content/thumbnail/' . $data->path) }}" class="w-100 h-100 img-fluid " alt="">
                    <div class="d-flex justify-content-between mt-2">
                        <div>
                            <img src="{{ Auth::user()->image_profile ? asset('storage/user/profile/'. Auth::user()->image_profile) : asset('images/profileDefault.webp') }}" class="profile-rounded-community mr-3" height="25" alt="Black and White Portrait of a Man" loading="lazy" />
                            {{$data->fullname}}
                        </div>
                        <div>{{ \Carbon\Carbon::parse($data->created_at)->isoFormat('dddd, D MMMM Y') }}</div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- footer -->
@include('components.user.footer')
<!-- Notification -->
@include('components.notifications')

@endsection