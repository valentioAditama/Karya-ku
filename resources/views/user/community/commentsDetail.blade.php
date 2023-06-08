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

    <section class="mt-4">
        <div class="container">
            <div class="form-post">
                <div class="row">
                    <div class="col-md-1 d-flex justify-content-center">
                        <img src="{{ $getContentCommunity->image_profile ? asset('storage/user/profile/'. $getContentCommunity->image_profile) : asset('images/profileDefault.webp') }}" class="profile-rounded" height="75" alt="Black and White Portrait of a Man" loading="lazy" />
                    </div>
                    <div class="col-md-5 d-flex align-items-center">
                        <div class="user-info">
                            <h5><b>{{$getContentCommunity->fullname}}</b></h5>
                            <div>{{ \Carbon\Carbon::parse($getContentCommunity->created_at)->isoFormat('dddd, D MMMM Y') }}</div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex justify-content-end">
                        <i class="fa-solid fa-ellipsis"></i>
                    </div>
                </div>
                <!-- content komunitas -->
                <div class="row d-flex justify-content-end">
                    <div class="col-md-11">
                        <p class="h5">{{$getContentCommunity->description}}</p>
                    </div>
                </div>
                <!-- likes and comments -->
                <div class="row d-flex justify-content-end">
                    <div class="col-md-11">
                        <div class="row">
                            <div class="col-md-2">
                                <!-- likes -->
                                <div class="mt-2">
                                    <form action="{{ route('komunitas.storeArticelLikes', $getContentCommunity->id_content) }}" method="post">
                                        @csrf
                                        <button type="submit" class="btn image-file w-100 text-center">
                                            <i class="fa-solid fa-thumbs-up"></i> &nbsp;
                                            {{$getCountLikes}}
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="mt-2">
                                    <span class="btn w-100 image-file text-center text-dark">
                                        <i class="fa-solid fa-comment"></i>&nbsp;
                                        {{$getCountComment}} Comments
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="mt-4">
                            <h3>Comments</h3>
                        </div>
                        <!-- data comment -->
                        @foreach($getComment as $data)
                        <div class="mt-4">
                            <div class="comments">
                                <div class="row d-flex align-items-center">
                                    <div class="col-md-1">
                                        <img src="{{ $data->image_profile ? asset('storage/user/profile/'. $data->image_profile) : asset('images/profileDefault.webp') }}" class="profile-rounded" alt="Black and White Portrait of a Man" loading="lazy" />
                                    </div>
                                    <div class="col-md-11">
                                        <div class="user-info">
                                            <h5><b>{{$data->fullname}}</b></h5>
                                            <div>{{ \Carbon\Carbon::parse($data->created_at)->diffForHumans() }}</div>
                                        </div>
                                    </div>
                                    <div class="row d-flex justify-content-end">
                                        <div class="col-md-11">
                                            <p class="h6">{{$data->comment}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @auth
                        <!-- form comment -->
                        <div class="mt-5">
                            <form action="{{route('komunitas.comment-store')}}" method="post">
                                @csrf
                                <div class="row d-flex align-items-center justify-content-start">
                                    <div class="col-md-1">
                                        <img src="{{ Auth::user()->image_profile ? asset('storage/user/profile/'. Auth::user()->image_profile) : asset('images/profileDefault.webp') }}" class="profile-rounded" height="75" alt="Black and White Portrait of a Man" loading="lazy" />
                                    </div>
                                    <div class="col-md-9">
                                        <input type="hidden" name="id_content" value="{{$getContentCommunity->id_content}}">
                                        <input type="text" class="form-comment" name="comment" placeholder="Comment" required>
                                    </div>
                                    <div class="col-md-2">
                                        <button class="button-comment text-center">
                                            <i class="fa-solid fa-paper-plane"></i>&nbsp;
                                            Comment
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
<!-- Notification -->
@include('components.notifications')