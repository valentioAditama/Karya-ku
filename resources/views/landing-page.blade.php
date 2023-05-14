@extends('layouts.app')

@section('content')
<div class="background-landing-page text-light">
    <div class="container d-flex justify-content-end align-items-center h-100">
        <div class="row">
            <div class="col-md-12">
                <div class="title-auth">
                    <p class="fs-1">Selamat Datang Di <b>Karya-ku</b></p>
                    <p class="fs-5">Imajinasi berkembang di setiap lembar karya-mu</p>
                </div>
                <div class="mt-3">
                    <a href="{{route('login')}}">
                        <button class="button-auth ">Mulai Sekarang</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endSection