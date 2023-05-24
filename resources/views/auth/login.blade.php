@extends('layouts.app')

@section('content')
<div class="background-login text-light">
    <div class="container d-flex justify-content-end align-items-center h-100">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12">
                <div class="title-auth">
                    <p class="fs-1">Selamat Datang</p>
                    <p class="fs-5">Silakan Login jika anda ingin <b>berkarya</b></p>
                </div>
                @csrf
                <form action="" method="">
                    <div class="mt-3">
                        <input type="text" class="form-input" name="" id="" placeholder="Email" required>
                    </div>
                    <div class="mt-3">
                        <input type="password" class="form-input " name="" id="" placeholder="Password" required>
                    </div>
                    <div class="mt-3">
                        <div class="row d-flex">
                            <div class="col-6 col-sm-8 col-md-8">
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="show-password">
                                    <label class="form-check-label" for="show-password">Show password</label>
                                </div>
                            </div>
                            <div class="col-6 col-sm-4 col-md-4">
                                <a href="{{route('register')}}" class="text-decoration-none text-light">Belum Punya Akun?</a>
                            </div>
                        </div>
                    </div>
                    <button class="button-auth-login">Login</button>
                </form>
                <div class="mt-2">
                    <a href="{{route('password.request')}}" class="text-decoration-none text-light">Lupa Password?</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection