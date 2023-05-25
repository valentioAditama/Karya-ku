@extends('layouts.app')

@section('content')
<!-- Banner-my-profile -->
<section class="banner-my-profile">
    <div class="container-fluid">
        <!-- navbar -->
        @include('components.user.navbar')
    </div>
</section>

<!-- My Profile -->
<section class="profile-image">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp" class="rounded-circle mr-3 image-profile" height="300" alt="Black and White Portrait of a Man" loading="lazy" />
            </div>
            <div class="col-md-3">
                <div class="mt-4">
                    <p class="h3"><b>Valentio Aditama</b></p>
                    <p class="h4">Software Engineer</p>
                    <div class="btn btn-primary text-center">
                        <i class="fa-sharp fa-solid fa-location-dot"></i> &nbsp;
                        <b>Bandung,&nbsp; indonesian</b>
                    </div>
                </div>
            </div>
            <div class="col-md-6 d-flex justify-content-end align-items-center">
                <div class="mt-4">
                    <a href="{{route('my-profile.karya')}}" class="btn btn-primary">
                        <div class="text-center">
                            <b>List Karya-ku</b>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Menu Profile edit -->
<section class="mb-5">
    <div class="container-fluid">
        <!-- Skiils -->
        <div class="row d-flex justify-content-between">
            <div class="col-md-4">
                <div class="row skills-profile p-3">
                    <div class="col-md-6 d-flex align-items-center">
                        <h5>Skills</h5>
                    </div>
                    <div class="col-md-6 d-flex justify-content-end">
                        <a href="" class="btn btn-primary">Add Skills</a>
                    </div>
                    <hr class="mt-3">
                    <div class="row">
                        <div class="col-auto">
                            <div class="btn btn-secondary mb-2">Software Engineer</div>
                            <div class="btn btn-secondary mb-2">Software</div>
                            <div class="btn btn-secondary mb-2">Software Engineer</div>
                            <div class="btn btn-secondary mb-2">Software Engineer</div>
                        </div>
                    </div>
                </div>

                <!-- Social Media -->
                <div class="row skills-profile p-3 mt-5">
                    <div class="col-md-6 d-flex align-items-center">
                        <h5>Social Media</h5>
                    </div>
                    <hr class="mt-3">
                    <div class="row">
                        <div class="social-media-profile mb-3">
                            <i class="fa-brands fa-facebook fa-2xl"></i>
                            <input type="text" class="social-media-input" placeholder="Facebook Username">
                        </div>
                        <div class="social-media-profile mb-3">
                            <i class="fa-brands fa-instagram fa-2xl"></i>
                            <input type="text" class="social-media-input" placeholder="Instagram Username">
                        </div>
                        <div class="social-media-profile mb-3">
                            <i class="fa-brands fa-twitter fa-2xl"></i>
                            <input type="text" class="social-media-input" placeholder="Twitter Username">
                        </div>
                        <div class="social-media-profile mb-3">
                            <i class="fa-brands fa-youtube fa-2xl"></i>
                            <input type="text" class="social-media-input" placeholder="Youtube Channel">
                        </div>
                        <div class="d-flex justify-content-end mt-3 mb-3">
                            <button type="submit" class="btn btn-success">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Profiles -->
            <div class="col-md-7">
                <div class="row skills-profile p-3">
                    <div class="col-md-6 d-flex align-items-center">
                        <h5>Profile</h5>
                    </div>
                    <hr class="mt-3">
                    <div class="mb-3">
                        <label for="" class="mb-2">Nama Lengkap</label>
                        <input type="text" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="" class="mb-2">Email</label>
                        <input type="email" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="" class="mb-2">Role Job</label>
                        <input type="text" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="" class="mb-2">Location</label>
                        <input type="text" class="form-control" required>
                    </div>
                    <div class="d-flex justify-content-end mt-3">
                        <button type="submit" class="btn btn-primary">Ubah Password</button> &nbsp; &nbsp;
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- footer -->
@include('components.user.footer')

@endsection