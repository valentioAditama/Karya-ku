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
                            <p class="h2">About Us</p>
                            <p class="banner-about-us-sub-title">
                            Karya-ku is a website platform that allows users to upload <br>
                                and exhibit their works online                        
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
        <h5>
            We are a group of young people who are passionate about technology, <br>
            especially in the field of software development. We consist of software engineers <br>
            talented who has experience in developing various applications and software systems.
        </h5>
    </div>
</section>

<!-- our mission -->
<section class="container our-mission">
    <div class="row d-flex align-items-center">
        <div class="col-md-6">
            <h1 class="text-start"><b>Our Mission </b></h1>
            <p class="">Karya-ku is a website platform that allows users to upload and exhibit their works online. From visual arts to graphic design, photography, music and more, users can share their work with the world and interact with other users who share their interests.</p>            
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
        <h2 class="mt-5">Contact Us?</h2>
        <h5>
            If you need help developing web applications <br>
            or mobile, database management systems, or other software development projects, <br>
            feel free to contact us using the contact information provided on our Contact Us page.
        </h5>
    </div>

    <div class="container mt-5 mb-5">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-md-6">
                @guest
                <div class="text-center mt-5">
                    <h4>Please you must login first</h4>
                </div>
                @endguest

                @auth
                <form action="{{route('tentang-kami.add')}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="">Fullname</label>
                        <input type="text" class="form-control" value="{{Auth::user()->fullname}}" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="">Email</label>
                        <input type="email" class="form-control" value="{{Auth::user()->email}}" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="">Subject</label>
                        <input type="text" class="form-control" name="subject" required>
                    </div>
            </div>
            <div class="col-md-6">
                <label for="">Messages</label>
                <textarea class="form-control" name="messages" id="" cols="30" rows="7" required></textarea>
            </div>
            <div class="d-flex justify-content-end mt-3">
                <button type="submit" class="button-laporan">Send</button>
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