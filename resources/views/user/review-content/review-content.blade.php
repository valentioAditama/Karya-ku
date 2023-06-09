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
                            {!! nl2br($getDataContent->description) !!}
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
        @foreach($getDataRandomContent as $data)
        <div class="col-md-4 mb-5">
            <a href="{{route('reviewKarya', $data->id)}}" class="text-dark">
                <img src="{{ asset('storage/content/thumbnail/' . $data->path) }}" class="w-100 h-75 img-fluid " alt="">
                <div class="mt-2">
                    <b>{{$data->title}}</b>
                </div>

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