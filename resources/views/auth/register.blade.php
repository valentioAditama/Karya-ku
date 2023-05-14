@extends('layouts.app')

@section('content')
<div class="background-register text-light">
    <div class="container d-flex justify-content-end align-items-center h-100">
        <div class="row">
            <div class="col-md-12">
                <div class="title-auth">
                    <p class="fs-1">Daftar Akun</p>
                    <p class="fs-5">Silakan daftar akun-mu jika belum mempunyai akun</p>
                </div>
                @csrf
                <form action="" method="">
                    <div class="mt-3">
                        <input type="text" class="form-input" name="nama_lengkap" id="nama_lengkap" placeholder="Nama Lengkap" required>
                    </div>
                    <div class="mt-3">
                        <input type="text" class="form-input" name="email" id="email" placeholder="Email" required>
                    </div>
                    <div class="mt-3">
                        <input type="password" class="form-input" name="password" id="password" placeholder="Password" required>
                    </div>
                    <div class="mt-3">
                        <input type="password" class="form-input" name="confirm_password" id="confirm_password" placeholder="Confirm Password" required>
                    </div>
                    <div class="mt-3">
                        <div class="row d-flex">
                            <div class="col-md-6">
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="show-password">
                                    <label class="form-check-label" for="show-password">Show password</label>
                                </div>
                            </div>
                            <div class="col-md-6 d-flex justify-content-end">
                                <a href="{{route('login')}}" class="text-decoration-none text-light">Sudah Punya Akun?</a>
                            </div>
                        </div>
                    </div>
                    <button class="button-auth-login">Register</button>
                </form>
                <div class="mt-2">
                    <a href="password/reset" class="text-decoration-none text-light">Lupa Password?</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection