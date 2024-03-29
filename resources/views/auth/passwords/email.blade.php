@extends('layouts.app')

@section('content')
<div class="background-forgot-password text-light">
    <div class="container d-flex justify-content-end align-items-center h-100">
        <div class="row">
            <div class="col-md-12">
                <div class="title-auth">
                    <p class="fs-1">Forgot Password</p>
                    <p class="fs-5">Please fill email before you have</p>
                </div>
                @csrf
                <form action="{{route('password.email')}}" method="post">
                    @csrf
                    <div class="mt-3">
                        <input id="email" type="email" class="form-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    </div>
                    <div class="mt-3">
                        <button class="button-auth-login">Submit</button>
                    </div>
                </form>
                <div class="mt-2">
                    <a href="{{route('login')}}" class="text-decoration-none text-light">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Notification -->
@include('components.notifications')

@endsection