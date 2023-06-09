@extends('layouts.app')

@section('content')
<!-- Banner-need-login -->
<section class="banner-need-login">
    <div class="container-fluid">
        <!-- navbar -->
        @include('components.user.navbar')
        <section>
            <div class="container d-flex justify-content-center align-items-center text-center">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12">
                        <div class="banner-need-login-title text-light">
                            <p class="h2">Need Verification Password</p>
                            <p class="banner-need-login-sub-title">
                                Kami peduli dengan keamanan akun Anda. Untuk memastikan bahwa akun Anda tetap aman, <br>
                                kami sangat menyarankan untuk memperbarui kata sandi Anda secara teratur
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>

<!-- Need Login! -->
<section>
    <div class="mt-5 mb-5">
        <div class="d-flex justify-content-center">
            <div class="mb-3">
                <h2><b>Masukan Password Anda</b></h2>
                <form action="{{route('my-profile.login-change-password.check', Auth::id())}}" method="post">
                    @csrf
                    <input type="password" class="form-control" id="password" name="password" required>
                    <div class="row mb-4">
                        <div class="col d-flex justify-content-start mt-3">
                            <!-- Checkbox -->
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="show-password" onclick="showPassword()">
                                <label class="form-check-label" for="show-password">Show password</label>
                            </div>
                        </div>
                        <div class="mt-3 d-flex justify-content-center">
                            <button class="btn btn-info">Submit</button>
                        </div>
                </form>
                <a href="{{route('home')}}" class="mt-3 text-center">Back To Home</a>
            </div>
        </div>
    </div>
</section>

<!-- Show Password -->
@include('components.user.show-password')
<!-- footer -->
@include('components.user.footer')
<!-- Notification -->
@include('components.notifications')

@endsection