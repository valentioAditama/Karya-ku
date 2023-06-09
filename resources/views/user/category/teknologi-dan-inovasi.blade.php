@extends('layouts.app')

@section('content')
<!-- Banner-category -->
<section class="banner-category-teknologi-dan-invoasi">
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

    <!-- data Karyaku -->
    <div class="container-fluid">
        <div class="row mt-5">
            @foreach($getDataContent as $data)
            <div class="col-md-4 mb-5">
                <a href="{{route('reviewKarya', $data->id)}}" class="text-dark">
                    <img src="{{ asset('storage/content/thumbnail/' . $data->path) }}" class="w-100 h-75 img-fluid " alt="">
                    <div class="mt-2">
                        <b>{{$data->title}}</b>
                    </div>
                    <div class="d-flex justify-content-between mt-2">
                        <div>
                            @if (Auth::check() && $data->image_profile)
                            <img src="{{ asset('storage/user/profile/' . $data->image_profile) }}" class="profile-rounded-community mr-3" alt="Black and White Portrait of a Man" loading="lazy">
                            @else
                            <img src="{{ asset('images/profileDefault.webp') }}" class="profile-rounded-community mr-3" alt="Black and White Portrait of a Man" loading="lazy">
                            @endif
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