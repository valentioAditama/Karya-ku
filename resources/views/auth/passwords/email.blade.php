@extends('layouts.app')

@section('content')
<div class="background-forgot-password text-light">
    <div class="container d-flex justify-content-end align-items-center h-100">
        <div class="row">
            <div class="col-md-12">
                <div class="title-auth">
                    <p class="fs-1">Lupa Password</p>
                    <p class="fs-5">Silakan Masukan Email anda yang sudah terdaftar sebelumnya</p>
                </div>
                @csrf
                <form action="" method="">
                    <div class="mt-3">
                        <input type="text" class="form-input" name="" id="" placeholder="Email" required>
                    </div>
                    <div class="mt-3">
                        <button class="button-auth-login">Submit</button>
                    </div>
                </form>
                <div class="mt-2">
                    <a href="{{route('login')}}" class="text-decoration-none text-light">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection