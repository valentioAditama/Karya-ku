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
                            <p class="h2">Berikan <b>Komentar</b> anda terhadap <b>Karya-ku</b></p>
                            <p class="banner-laporan-sub-title">
                                Berikan komentar kepada kami, agar kami bisa memberikan kualitas yang terbaik <br>
                                kepada calon orang-orang yang ingin berkarya </p>
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
        <h2 class="mt-5">Komentar</h2>
        <h5>Berikan komentar kepada kami, agar kami bisa memberikan kualitas yang terbaik <br>
            kepada calon orang-orang yang ingin berkarya .
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
                    <h4>Silakan Anda Login Terlebih Dahulu ya Agar Bisa Berkometar Disini</h4>
                </div>
                @endguest
                @auth
                <form action="{{route('laporan.add')}}" method="POST">
                    @csrf
                    <div class="mt-3">
                        <label for="">Komentar Anda</label> <br>
                        <textarea name="comment" class="form-control" id="" cols="30" rows="10" required></textarea>
                    </div>
                    <div class="d-flex justify-content-end mt-3">
                        <button type="submit" class="button-laporan">Kirimkan Komentar</button>
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