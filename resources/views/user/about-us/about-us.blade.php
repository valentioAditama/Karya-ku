@extends('layouts.app')

@section('content')
<!-- Banner-about-us -->
<section class="banner-about-us">
    <div class="container-fluid">
        <!-- navbar -->
        @include('components.user.navbar')
        <section>
            <div class="container d-flex justify-content-end align-items-center">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12">
                        <div class="banner-about-us-title text-light">
                            <p class="h2">Tentang Kami</p>
                            <p class="banner-about-us-sub-title">
                                Karya-ku adalah sebuah platform website yang memungkinkan pengguna untuk mengunggah <br>
                                dan memamerkan karya-karya mereka secara online
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>

<!-- WHO ARE WE -->
<section>
    <!-- title -->
    <div class="text-center">
        <h2 class="mt-5">WHO ARE WE?</h2>
        <h5>Kami adalah sekelompok anak muda yang bergairah di bidang teknologi, <br>
            khususnya di bidang pengembangan software. Kami terdiri dari para software engineer <br>
            berbakat yang telah berpengalaman dalam mengembangkan berbagai aplikasi dan sistem software.
        </h5>
    </div>
</section>

<!-- our mission -->
<section class="container our-mission">
    <div class="row d-flex align-items-center">
        <div class="col-md-6">
            <h1 class="text-start"><b>Our Mission </b></h1>
            <p class="">Karya-ku adalah sebuah platform website yang memungkinkan pengguna untuk mengunggah dan memamerkan karya-karya mereka secara online. Dari seni visual hingga desain grafis, fotografi, musik, dan banyak lagi, pengguna dapat membagikan karya mereka dengan dunia dan berinteraksi dengan pengguna lain yang memiliki minat yang sama.</p>
            <figcaption class="blockquote-footer mt-2">
                "Innovating software solutions for a better tomorrow."
            </figcaption>

        </div>
        <div class="col-md-6">
            <img src="{{ asset('images/aboutus.jpg') }}" class="img-fluid" alt="">
        </div>
    </div>
</section>

<!-- Contact -->
<section class="contact">
    <!-- title -->
    <div class="text-center">
        <h2 class="mt-5">Kontak Kami?</h2>
        <h5>
            Jika Anda memerlukan bantuan dalam mengembangkan aplikasi web <br>
            atau seluler, sistem manajemen basis data, atau proyek pengembangan software lainnya, <br>
            jangan ragu untuk menghubungi kami melalui informasi kontak yang tersedia di halaman Contact Us kami.
        </h5>
    </div>

    <div class="container mt-5 mb-5">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-md-6">
                @guest
                <div class="text-center mt-5">
                    <h4>Silakan Anda Login Terlebih Dahulu ya Agar Bisa Kontak Kami Disini</h4>
                </div>
                @endguest

                @auth
                <form action="{{route('tentang-kami.add')}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="">Nama Lengkap</label>
                        <input type="text" class="form-control" value="{{Auth::user()->fullname}}" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="">Alamat Email</label>
                        <input type="email" class="form-control" value="{{Auth::user()->email}}" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="">Subject</label>
                        <input type="text" class="form-control" name="subject" required>
                    </div>
            </div>
            <div class="col-md-6">
                <label for="">Pesan</label>
                <textarea class="form-control" name="messages" id="" cols="30" rows="7" required></textarea>
            </div>
            <div class="d-flex justify-content-end mt-3">
                <button type="submit" class="button-laporan">Kirimkan</button>
            </div>
            </form>
            @endauth
        </div>
    </div>
</section>

<!-- footer -->
@include('components.user.footer')
<!-- Notification -->
@include('components.notifications')

@endsection