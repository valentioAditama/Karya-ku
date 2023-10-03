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
                            <p class="h2">Search Art for you get a <b>Inspiration</b></p>
                            <p class="banner-home-sub-title">
                                Inspiration for work, culture and so on from people all over the world. <br>
                                Find Inspiration and put your ideas into action now.
                            </p>
                            <form action="{{route('home.search')}}" method="get">
                                @csrf
                                <input type="text" name="search" class="w-75 banner-home-form" value="{{ old('search')  }}" placeholder='Thinking about your ideas'>
                            </form>
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
        <h5>Inspiration for work, culture and so on from people all over the world. <br>
            Find Inspiration and put your ideas into action now.
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