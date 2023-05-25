@extends('layouts.app')

@section('content')
<!-- Banner-komunitas-create -->
<section class="banner-komunitas-create">
    <div class="container-fluid">
        <!-- navbar -->
        @include('components.user.navbar')
        <section>
            <div class="container d-flex justify-content-end align-items-center">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12">
                        <div class="banner-komunitas-create-title text-light">
                            <p class="h2">Buat <b>Komunitas</b></p>
                            <p class="banner-komunitas-create-sub-title">
                                Inspirasi Karya, Budaya dan lain sebagainya dari orang-orang di seluruh dunia. <br>
                                Temukan Inspirasi dan lakukan Hubunganmu dengan orang-orang. </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>

<!-- Form Create -->
<section>
    <!-- title -->
    <div class="text-center">
        <h2 class="mt-5">Buat Komunitas</h2>
        <h5>Inspirasi Karya, Budaya dan lain sebagainya dari orang-orang di seluruh dunia. <br>
            Temukan Inspirasi dan lakukan Hubunganmu dengan orang-orang.
        </h5>
    </div>

    <div class="container mt-5 mb-5">
        <div class="d-flex justify-content-center">
            <div class="row">
                <div class="mb-3">
                    <label for="">Nama Komunitas</label>
                    <input type="text" class="form-control" placeholder="Masukan Nama Komunitas Anda">
                </div>
                <div class="mb-3">
                    <label for="">file Thumbnail Komunitas</label>
                    <input type="file" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">Nama Komunitas</label>
                    <textarea class="form-control" name="" id="" cols="30" rows="7" placeholder="Masukan Deskripsi Komunitas Anda"></textarea>
                </div>
                <div class="d-flex justify-content-end mt-1">
                    <button type="submit" class="button-laporan">Buat Komunitas</button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- footer -->
@include('components.user.footer')

@endsection