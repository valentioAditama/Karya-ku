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
                <form action="{{route('my-profile.reset-password', Auth::id())}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="" class="mb-2">Old Password</label>
                        <input type="password" name="old_password" id="password" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="" class="mb-2">New Password</label>
                        <input type="password" name="password" id="new_password" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="" class="mb-2">Confirm Password</label>
                        <input type="password" name="confirm_password" id="confirm_password" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <!-- Checkbox -->
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="show-password" onclick="showPassword()">
                            <label class="form-check-label" for="show-password">Show password</label>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end mt-3">
                        <button type="submit" class="btn btn-success">Ubah Password</button> &nbsp; &nbsp;
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</section>

<!-- Show Password -->
<script>
    function showPassword() {
        var oldPassword = document.getElementById("password");
        var newPassword = document.getElementById("new_password");
        var confirmPassword = document.getElementById("confirm_password");

        if (oldPassword.type === "password") {
            oldPassword.type = "text";
            newPassword.type = "text";
            confirmPassword.type = "text";
        } else {
            oldPassword.type = "password";
            newPassword.type = "password";
            confirmPassword.type = "password";
        }
    }
</script>
<!-- footer -->
@include('components.user.footer')
<!-- Notification -->
@include('components.notifications')

@endsection