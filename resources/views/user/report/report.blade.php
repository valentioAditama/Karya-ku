@extends('layouts.app')

@section('content')

<!-- Banner-laporan -->
<section class="banner-laporan">
    <div class="container-fluid">
        <!-- navbar -->
        @include('components.user.navbar')
        <section>
            <div class="container d-flex justify-content-end align-items-center">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12">
                        <div class="banner-laporan-title text-light">
                            <p class="h2">Give <b>Comments</b> From You For <b>Karya-ku</b></p>
                            <p class="banner-laporan-sub-title">
                                Give a comments for us, because we will be can give you the best of quality <br>
                                to candidate people want to become as ART.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>

<!-- Form Karyaku -->
<section>
    <!-- title -->
    <div class="text-center">
        <h2 class="mt-5">Comments</h2>
        <h5>
        Give a comments for us, because we will be can give you the best of quality <br>
        to candidate people want to become as ART.
        </h5>
    </div>

    <!-- Form Laporan -->
    <div class="container">
        <div class="row mt-5 align-items-center">
            <div class="col-md-6">
                <img src="{{asset('icon/image 70.png')}}" class="img-fluid " alt="">
            </div>
            <div class="col-md-6">
                @guest
                <div class="text-center">
                    <h4>Please you must login first</h4>
                </div>
                @endguest
                @auth
                <form action="{{route('laporan.add')}}" method="POST">
                    @csrf
                    <div class="mt-3">
                        <label for="">Your Comments </label> <br>
                        <textarea name="comment" class="form-control" id="" cols="30" rows="10" required></textarea>
                    </div>
                    <div class="d-flex justify-content-end mt-3">
                        <button type="submit" class="button-laporan">Send a Comment</button>
                    </div>
                </form>
                @endauth
            </div>
        </div>
    </div>
</section>

<!-- footer -->
@include('components.user.footer')
<!-- Notification -->
@include('components.notifications')

@endsection