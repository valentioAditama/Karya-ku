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
                <input type="password" class="form-control" required>
                <div class="row mb-4">
                    <div class="col d-flex justify-content-start mt-3">
                        <!-- Checkbox -->
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="form1Example3" />
                            <label class="form-check-label" for="form1Example3"> Show Password </label>
                        </div>
                    </div>
                    <div class="mt-3 d-flex justify-content-center">
                        <a href="{{route('komunitas.create')}}">
                            <button class="btn btn-info">Submit</button>
                        </a>
                    </div>
                    <a href="{{route('home')}}" class="mt-3 text-center">Back To Home</a>
                </div>
            </div>
        </div>
</section>

<!-- footer -->
@include('components.user.footer')
<!-- Notification -->
@include('components.notifications')

@endsection