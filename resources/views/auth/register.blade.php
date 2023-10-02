<!-- Extend from app -->
@extends('layouts.app')

<!-- Show Content -->
@section('content')
<div class="background-register text-light">
    <div class="container d-flex justify-content-end align-items-center h-100">
        <div class="row">
            <div class="col-md-12">
                <div class="title-auth">
                    <p class="fs-1">Register Account</p>
                    <p class="fs-5">Please Create a new account if u dont have account</p>
                </div>
                @csrf
                <!-- Form Page -->
                <form action="{{route('register')}}" method="POST">
                    @csrf
                    <div class="mt-3">
                        <input type="text" class="form-input @error('fullname') @enderror" name="fullname" value="{{ old('fullname') }}" id="fullname" placeholder="Fullname" required>
                    </div>
                    <div class="mt-3">
                        <input type="email" class="form-input @error('email') is-invalid @enderror" name="email" id="email" value="{{ old('email') }}" placeholder="Email" required>
                    </div>
                    <div class="mt-3">
                        <input type="password" class="form-input @error('password') is-invalid @enderror" name="password" id="password" value="{{ old('password') }}" placeholder="Password" required>
                    </div>
                    <div class="mt-3">
                        <input type="password" class="form-input" name="password_confirmation" id="password_confirm" placeholder="Password Confirm" required>
                    </div>
                    <div class="mt-3">
                        <div class="row d-flex">
                            <div class="col-6 col-md-6">
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="show-password" onclick="showPassword()">
                                    <label class="form-check-label" for="show-password">Show password</label>
                                </div>
                            </div>
                            <div class="col-6 col-md-6 d-flex justify-content-end">
                                <a href="{{route('login')}}" class="text-decoration-none text-light">Have Account?</a>
                            </div>
                        </div>
                    </div>
                    <button class="button-auth-login" type="submit" onclick="validation()">Register</button>
                </form>
                <div class="mt-2">
                    <a href="password/reset" class="text-decoration-none text-light">Forgot Password?</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Show function Password -->
@include('components.user.show-password')

<!-- Notification -->
@include('components.notifications')

@endsection