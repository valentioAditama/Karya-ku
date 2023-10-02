@extends('layouts.app')

@section('content')
<!-- Banner-my-profile -->
<section class="banner-my-profile">
    <img class="profilepic__banner banner-my-profile" src="{{ Auth::user()->image_banner ? asset('storage/user/banner/'. Auth::user()->image_banner) : asset('images/bannerDefault.png') }}" width="300" height="300" alt="Profile Picture" />
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
                <div class="profilepic image-profile">
                    <label for="file" class="profilepic__label">
                        <img class="profilepic__image" src="{{ Auth::user()->image_profile ? asset('storage/user/profile/'. Auth::user()->image_profile) : asset('images/profileDefault.webp') }}" width="300" height="300" alt="Profile Picture" />
                        <div class="profilepic__content">
                            <span class="profilepic__icon"><i class="fas fa-camera"></i></span>
                            <span class="profilepic__text">Edit Profile</span>
                        </div>
                    </label>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mt-4">
                    <p class="h3"><b>{{Auth::user()->fullname}}</b></p>
                    <p class="h5">{{Auth::user()->role_job ? Auth::user()->role_job : 'Nothing have role postition' }}</p>
                    <div class="btn btn-primary text-center">
                        <i class="fa-sharp fa-solid fa-location-dot"></i> &nbsp;
                        <b>{{Auth::user()->location ? Auth::user()->location : 'Nothing have location'}}</b>
                    </div>
                </div>
            </div>
            <div class="col-md-5 d-flex justify-content-end align-items-center">
                <div class="mt-4">
                    <a href="{{route('my-profile.karya', Auth::id() )}}" class="btn btn-primary">
                        <div class="text-center">
                            <b>My List Karya-ku</b>
                        </div>
                    </a>
                    <label for="fileBanner" class="profilepic__label btn btn-warning">
                        Change Banner
                    </label>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Menu Profile edit -->
<section class="mb-5">
    <div class="container-fluid">
        <!-- Skiils -->
        <div class="row d-flex justify-content-between">
            <div class="col-md-4">
                <div class="row skills-profile p-3">
                    <div class="col-md-6 d-flex align-items-center">
                        <h5>Skills</h5>
                    </div>
                    <div class="col-md-6 d-flex justify-content-end">
                        <button type="button" class="btn btn-danger btn-sm" data-mdb-toggle="modal" data-mdb-target="#deleteSkill" data-mdb-placement="bottom" title="Delete">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                        &nbsp;
                        <button type="button" class="btn btn-warning btn-sm" data-mdb-toggle="modal" data-mdb-target="#updateSkill" data-mdb-placement="bottom" title="Edit">
                            <i class="fa-regular fa-pen-to-square"></i>
                        </button>
                        &nbsp;
                        <!-- Add Skills -->
                        <button type="button" class="btn btn-primary btn-sm" data-mdb-toggle="modal" data-mdb-target="#exampleModal" data-mdb-placement="bottom" title="Add">
                            <i class="fa-solid fa-plus"></i>
                        </button>
                    </div>
                    <hr class="mt-3">
                    <div class="row">
                        <div class="col-auto">
                            @foreach($getDataSkills as $data)
                            <div class="btn btn-secondary mb-2">{{$data->name_skills}}</div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <!-- Social Media -->
                <div class="row skills-profile p-3 mt-5">
                    <div class="col-md-6 d-flex align-items-center">
                        <h5>Social Media</h5>
                    </div>
                    <hr class="mt-3">
                    <form action="{{route('my-profile.add-social-media')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="social-media-profile mb-3">
                                <i class="fa-brands fa-facebook fa-2xl"></i>
                                <input type="text" class="social-media-input" name="facebook" placeholder="Facebook Username" value="{{$getSocialFacebook ? $getSocialFacebook->name : '' }}">
                            </div>
                            <div class="social-media-profile mb-3">
                                <i class="fa-brands fa-instagram fa-2xl"></i>
                                <input type="text" class="social-media-input" name="instagram" placeholder="Instagram Username" value="{{$getSocialInstagram ? $getSocialInstagram->name : '' }}">
                            </div>
                            <div class="social-media-profile mb-3">
                                <i class="fa-brands fa-twitter fa-2xl"></i>
                                <input type="text" class="social-media-input" name="twitter" placeholder="Twitter Username" value="{{$getSocialTwitter ? $getSocialTwitter->name : '' }}">
                            </div>
                            <div class="social-media-profile mb-3">
                                <i class="fa-brands fa-youtube fa-2xl"></i>
                                <input type="text" class="social-media-input" name="youtube" placeholder="Youtube Channel" value="{{$getSocialYoutube ? $getSocialYoutube->name : '' }}">
                            </div>
                            <div class="d-flex justify-content-end mt-3 mb-3">
                                <button type="submit" class="btn btn-success">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Profiles -->
            <div class="col-md-7">
                <div class="row skills-profile p-3">
                    <div class="col-md-6 d-flex align-items-center">
                        <h5>Profile</h5>
                    </div>
                    <hr class="mt-3">
                    <form action="{{route('my-profile.edit', Auth::id())}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input id="file" type="file" name="image_profile" onchange="updateProfilePic(event)" hidden />
                        <input id="fileBanner" type="file" name="image_banner" onchange="updateBannerPic(event)" hidden />
                        <div class="mb-3">
                            <label for="fullname" class="mb-2">Fullname</label>
                            <input type="text" name="fullname" class="form-control" value="{{Auth::user()->fullname}}" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="mb-2">Email</label>
                            <input type="email" name="email" class="form-control" value="{{Auth::user()->email}}" required>
                        </div>
                        <div class="mb-3">
                            <label for="role_job" class="mb-2">Role Job</label>
                            <input type="text" name="role_job" class="form-control" value="{{Auth::user()->role_job}}">
                        </div>
                        <div class="mb-3">
                            <label for="location" class="mb-2">Location</label>
                            <input type="text" name="location" class="form-control" value="{{Auth::user()->location}}">
                        </div>
                        <div class="d-flex justify-content-end mt-3">
                            <a href="{{route('my-profile.login-change-password')}}" class="btn btn-primary">Change Password</a> &nbsp; &nbsp;
                            <button type="submit" class="btn btn-success">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

<script>
    function updateProfilePic(event) {
        const file = event.target.files[0];
        const reader = new FileReader();
        const profilePic = document.querySelector('.profilepic__image');

        reader.onload = function(e) {
            profilePic.src = e.target.result;
        };

        reader.readAsDataURL(file);
    }

    function updateBannerPic(event) {
        const file = event.target.files[0];
        const reader = new FileReader();
        const bannerPic = document.querySelector('.profilepic__banner');

        reader.onload = function(e) {
            bannerPic.src = e.target.result;
        };

        reader.readAsDataURL(file);
    }
</script>

<!-- footer -->
@include('components.user.footer')
<!-- Notification -->
@include('components.notifications')
<!-- Modal For Skills-->
@include('components.modal.myprofile.skills')
@include('components.modal.myprofile.skills-update')
@include('components.modal.myprofile.skills-delete')
@endsection