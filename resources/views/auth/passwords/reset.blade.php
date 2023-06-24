@extends('layouts.app')

@section('content')
<div class="background-forgot-password text-light">
    <div class="container d-flex justify-content-end align-items-center h-100">
        <div class="row">
            <div class="col-md-12">
                <div class="title-auth">
                    <p class="fs-1">Reset Password</p>
                    <p class="fs-5">Silakan Ganti Password Anda</p>
                </div>
                @csrf
                <form method="POST" action="{{ route('password.update') }}">
                    @csrf

                    <input type="hidden" name="token" value="{{ $token }}">

                    <div class="mb-3">
                        <div class="col-md-6">
                            <input id="email" type="email" class="form-input @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" placeholder="Email" autofocus>
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="col-md-6">
                            <input id="password" type="password" class="form-input @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-input" name="password_confirmation" required autocomplete="new-password" placeholder="Password Confirm">
                        </div>
                    </div>

                    <div class="mt-4">
                        <button type="submit" class="button-auth-login w-50">
                            {{ __('Reset Password') }}
                        </button>
                    </div>
                </form>
                <div class="mt-2">
                    <a href="{{route('login')}}" class="text-decoration-none text-light">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Notification -->
@include('components.notifications')

@endsection