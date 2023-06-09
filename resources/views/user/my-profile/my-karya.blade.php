@extends('layouts.app')

@section('content')
<!-- Banner-my-profile -->
<section class="banner-my-profile">
    <img class="profilepic__banner banner-my-profile" src="{{ Auth::user()->image_banner ? asset('storage/user/banner/'. Auth::user()->image_banner) : asset('images/bannerDefault.png') }}" width="300" height="300" alt="Profile Picture" />
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
                <div class="profilepic image-profile">
                    <label for="file" class="profilepic__label">
                        <img class="profilepic__image" src="{{ Auth::user()->image_profile ? asset('storage/user/profile/'. Auth::user()->image_profile) : asset('images/profileDefault.webp') }}" width="300" height="300" alt="Profile Picture" />
                    </label>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mt-4">
                    <p class="h3"><b>{{Auth::user()->fullname}}</b></p>
                    <p class="h5">{{Auth::user()->role_job ? Auth::user()->role_job : 'Nothing have role postition' }}</p>
                    <div class="btn btn-primary text-center">
                        <i class="fa-sharp fa-solid fa-location-dot"></i> &nbsp;
                        <b>{{Auth::user()->location ? Auth::user()->location : 'Nothing have location'}}</b>
                    </div>
                </div>
            </div>
            <div class="col-md-5 d-flex justify-content-end align-items-center">
                <div class="mt-4">
                    <a href="{{route('upload')}}" class="btn btn-primary">
                        <div class="text-center">
                            <b>Tambah Karya</b>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <!-- title -->
    <div class="text-center mb-5">
        <h2 class="mt-5">Karya-ku</h2>
        <h5>Anda bisa menambahkan karya, memperbarui dan <br>
            menyimpan karya anda sendiri
        </h5>
    </div>

    <!-- data Karyaku -->
    <div class="container-fluid">
        <div class="row mt-5 mb-5">
            @foreach($getDataContent as $data)
            <div class="col-md-4 mb-5">
                <a href="{{route('reviewKarya', $data->id)}}" class="text-dark">
                    <img src="{{ asset('storage/content/thumbnail/' . $data->path) }}" class="w-100 h-75 img-fluid " alt="">
                    <div class="mt-2">
                        <b>{{$data->title}}</b>
                    </div>
                    <div class="d-flex justify-content-between mt-1">
                        <div>
                            <img src="{{ Auth::user()->image_profile ? asset('storage/user/profile/'. Auth::user()->image_profile) : asset('images/profileDefault.webp') }}" class="profile-rounded-community mr-3" height="25" alt="Black and White Portrait of a Man" loading="lazy" />
                            {{$data->fullname}}
                        </div>
                        <div>{{ \Carbon\Carbon::parse($data->created_at)->isoFormat('dddd, D MMMM Y') }}</div>
                    </div>
                </a>
                <div class="d-flex justify-content-end mt-2">
                    <a href="{{route('upload.edit', $data->id)}}">
                        <button class="btn btn-sm btn-info">Edit</button> &nbsp;
                    </a>
                    <button class="btn btn-sm btn-danger" data-mdb-toggle="modal" data-mdb-target="#deleteContent{{$data->id}}" data-mdb-placement="bottom" title="Delete">Delete</button>
                </div>
            </div>
            @endforeach
        </div>
    </div>

</section>


<script>
    function updateProfilePic(event) {
        const file = event.target.files[0];
        const reader = new FileReader();
        const profilePic = document.querySelector('.profilepic__image');

        reader.onload = function(e) {
            profilePic.src = e.target.result;
        };

        reader.readAsDataURL(file);
    }

    function updateBannerPic(event) {
        const file = event.target.files[0];
        const reader = new FileReader();
        const bannerPic = document.querySelector('.profilepic__banner');

        reader.onload = function(e) {
            bannerPic.src = e.target.result;
        };

        reader.readAsDataURL(file);
    }
</script>

<!-- footer -->
@include('components.user.footer')
<!-- Notification -->
@include('components.notifications')
<!-- Modal For Skills-->
@include('components.modal.myprofile.skills')
@include('components.modal.myprofile.skills-update')
@include('components.modal.myprofile.skills-delete')

<!-- modal delete -->
@include('components.modal.myprofile.delete-my-list')

@endsection