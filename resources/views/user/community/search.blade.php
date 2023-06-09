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
                            <form action="{{route('komunitas.search')}}" method="get">
                                @csrf
                                <input type="text" name="search" class="w-75 banner-komunitas-form" placeholder='Cari Komunitas yang cocok dengan anda' value="{{$search}}">
                            </form>
                            <div class="mt-3">
                                <!-- for guest -->
                                @guest
                                <button class="button-komunitas" onclick="communityNoAuth()">Buat Komunitas</button>
                                @endguest

                                <!-- for user has login -->
                                @auth
                                <a href="{{route('komunitas.create')}}">
                                    <button class="button-komunitas">Buat Komunitas</button>
                                </a>
                                @endguest
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
    <div class="container-fluid mb-5">
        <div class="row mt-5">
            @foreach($GetSearchCommunity as $data)
            <div class="col-md-4">
                <a href="{{route('komunitas.review', $data->id)}}" class="text-dark">
                    <img src="{{asset('storage/community/thumbnail/' . $data->path)}}" class="img-community" alt="">
                    <div class="mt-2">
                        <b>{{$data->name_community}}</b>
                    </div>
                    <div class="d-flex justify-content-between mt-2">
                        <div>
                            @if (Auth::check() && Auth::user()->image_profile)
                            <img src="{{ asset('storage/user/profile/' . Auth::user()->image_profile) }}" class="profile-rounded-community mr-3" alt="Black and White Portrait of a Man" loading="lazy">
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