@extends('layouts.app')

@section('content')
<div class="background-komunitas-review">
    <!-- Banner-komunitas-review -->
    <section class="banner-komunitas-review" style="background-image: url({{ asset('storage/community/thumbnail/' . $getCommunity->path) }});">
        <div class="container-fluid">
            <!-- navbar -->
            @include('components.user.navbar')
            <section>
                <div class="container d-flex justify-content-end align-items-center">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12">
                            <div class="banner-komunitas-review-title text-light">
                                <p class="h2"><b>{{$getCommunity->name_community}}</b></p>
                                <p class="banner-komunitas-review-sub-title">
                                    {{$getCommunity->description}} <br>
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
            @auth
            <div class="form-post">
                <div class="row">
                    <div class="col-md-1 d-flex justify-content-center">
                        <img src="{{ Auth::user()->image_profile ? asset('storage/user/profile/'. Auth::user()->image_profile) : asset('images/profileDefault.webp') }}" class="profile-rounded" height="75" alt="Black and White Portrait of a Man" loading="lazy" />
                    </div>
                    <div class="col-md-11">
                        <form action="{{route('komunitas.storeArticel', $getCommunity->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <textarea class="input-post" name="description" id="description" cols="30" rows="3" placeholder="Apa yang anda sedang pikirkan?" required></textarea>
                            <!-- files opsional -->
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="mt-2">
                                        <span class="image-file text-center" onclick="document.getElementById('image').click()">
                                            <i class="fa-solid fa-image"></i>
                                            &nbsp;
                                            Gambar
                                        </span>
                                        <input type="file" style="display: none;" id="image" name="path_image" accept="image/png, image/jpg, image/jpeg" value="{{ old('path_image') }}">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="mt-2">
                                        <span class="image-file text-center" onclick="document.getElementById('video').click()">
                                            <i class="fa-solid fa-video"></i>
                                            &nbsp;
                                            Video
                                        </span>
                                        <input type="file" style="display: none;" id="video" name="path_video" accept="video/mp4, video/flv, video/webm" value="{{ old('path_video') }}">
                                    </div>
                                </div>
                                <div class="col-md-8 d-flex justify-content-end">
                                    <div class="mt-2">
                                        <button class="button-posting text-center" type="submit">
                                            Posting &nbsp;
                                            <i class="fa-solid fa-upload"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3">
                                <img id="imagePreview" class="showingFile" width="150" height="100" />
                            </div>
                            <div class="mt-3">
                                <video id="videoPreview" style="display: none;" width="250" height="150" controls></video>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            @endauth
        </div>
    </section>

    <section class="mt-5">
        <div class="container">
            @foreach($getContentCommunity as $data)
            <div class="form-post mb-3">
                <div class="row">
                    <div class="col-md-1 d-flex justify-content-center">
                        <img src="{{ $data->image_profile ? asset('storage/user/profile/'. $data->image_profile) : asset('images/profileDefault.webp') }}" class="profile-rounded" alt="Black and White Portrait of a Man" loading="lazy" />
                    </div>
                    <div class="col-md-5 d-flex align-items-center">
                        <div class="user-info">
                            <h5><b>{{$data->fullname}}</b></h5>
                            <div>{{ \Carbon\Carbon::parse($data->created_at)->diffForHumans() }}</div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex justify-content-end">
                        <i class="fa-solid fa-ellipsis"></i>
                    </div>
                </div>
                <!-- content komunitas -->
                <div class="row d-flex justify-content-end">
                    <div class="col-md-11">
                        <p class="h6">{{$data->description}}</p>
                        <div class="mt-3 mb-3">
                            <img src="{{ asset('storage/community/content/image/'. $data->image_content) }}" class="img-fluid" loading="lazy" {{$data->image_content ? '' : 'hidden'}} />
                        </div>
                        <div class="mt-3 mb-3">
                            <video src="{{ asset('storage/community/content/video/'. $data->video_content) }}" height="300" controls {{$data->video_content ? '' : 'hidden'}} />
                        </div>
                    </div>
                </div>
                <!-- likes and comments -->
                <div class="row d-flex justify-content-end">
                    <div class="col-md-11">
                        <div class="row">
                            <div class="col-md-2">
                                <!-- likes -->
                                <div class="mt-2">
                                    <span class="image-file text-center" onclick="document.getElementById('image-input').click()">
                                        <i class="fa-solid fa-thumbs-up"></i> &nbsp;
                                        112
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="mt-2">
                                    <a href="{{route('komunitas.comment', $data->id)}}" class="image-file text-center text-dark">
                                        <i class="fa-solid fa-comment"></i>&nbsp;
                                        {{$data->comment_count}} comments
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
</div>

<script>
    // click input file
    var image = document.getElementById('image');
    var video = document.getElementById('video');

    // showing
    var imagePreview = document.getElementById('imagePreview');
    var videoPreview = document.getElementById('videoPreview');

    image.addEventListener('change', function() {
        var file = image.files[0];
        var reader = new FileReader();

        reader.onload = function(e) {
            imagePreview.style.display = 'inline-block';
            imagePreview.src = e.target.result;
        };

        reader.readAsDataURL(file);
    });

    video.addEventListener('change', function() {
        var file = video.files[0];
        var reader = new FileReader();

        reader.onload = function(e) {
            videoPreview.style.display = 'inline-block';
            videoPreview.src = e.target.result;
        };

        reader.readAsDataURL(file);
    });
</script>


<!-- footer -->
@include('components.user.footer')
<!-- Notification -->
@include('components.notifications')

@endsection