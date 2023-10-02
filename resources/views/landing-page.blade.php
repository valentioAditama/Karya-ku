@extends('layouts.app')

@section('content')
<div class="background-landing-page text-light">
    <div class="container d-flex justify-content-end align-items-center h-100">
        <div class="row">
            <div class="col-12">
                <div class="title-auth">
                    <p class="title">Welcome Back To <b>Karya-ku</b></p>
                    <p class="sub-title">Imagination Growth Up On Each Letter</p>
                </div>
                <div class="mt-4">
                    <a href="{{route('home')}}">
                        <button class="button-auth ">Start Now</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endSection