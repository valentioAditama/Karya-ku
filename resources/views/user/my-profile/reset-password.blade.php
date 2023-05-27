@extends('layouts.app')

@section('content')
<!-- Banner-my-profile -->
<section class="banner-my-profile">
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
                <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp" class="rounded-circle mr-3 image-profile" height="300" alt="Black and White Portrait of a Man" loading="lazy" />
            </div>
            <div class="col-md-3">
                <div class="mt-4">
                    <p class="h3"><b>Valentio Aditama</b></p>
                    <p class="h4">Software Engineer</p>
                    <div class="btn btn-primary text-center">
                        <i class="fa-sharp fa-solid fa-location-dot"></i> &nbsp;
                        <b>Bandung,&nbsp; indonesian</b>
                    </div>
                </div>
            </div>
            <div class="col-md-6 d-flex justify-content-end align-items-center">
                <div class="mt-4">
                    <a href="{{route('my-profile.karya')}}" class="btn btn-primary">
                        <div class="text-center">
                            <b>List Karya-ku</b>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Reset Password -->
<section class="mb-5">
    <div class="container">
        <!-- Profiles -->
        <div class="col-md-12">
            <div class="row skills-profile p-3">
                <div class="col-md-6 d-flex align-items-center">
                    <h5>Reset Password</h5>
                </div>
                <hr class="mt-3">
                <div class="mb-3">
                    <label for="" class="mb-2">Old Password</label>
                    <input type="password" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="" class="mb-2">New Password</label>
                    <input type="password" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="" class="mb-2">Confirm Password</label>
                    <input type="password" class="form-control" required>
                </div>
                <div class="mb-3">
                    <!-- Checkbox -->
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="form1Example3" />
                        <label class="form-check-label" for="form1Example3"> Show Password </label>
                    </div>
                </div>
                <div class="d-flex justify-content-end mt-3">
                    <button type="submit" class="btn btn-success">Ubah Password</button> &nbsp; &nbsp;
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

<!-- footer -->
@include('components.user.footer')

@endsection