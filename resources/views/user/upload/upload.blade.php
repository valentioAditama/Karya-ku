@extends('layouts.app')

@section('content')
<!-- Banner-upload-karya -->
<section class="banner-upload-karya">
    <div class="container-fluid">
        <!-- navbar -->
        @include('components.user.navbar')
        <section>
            <div class="container d-flex justify-content-end align-items-center">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12">
                        <div class="banner-upload-karya-title text-light">
                            <p class="h2">Upload Karya-mu Sekarang</p>
                            <p class="banner-upload-karya-sub-title">
                                Meningkatkan Karir dalam Industri Kreatif dengan Mengunggah Karya-karya Terbaikmu </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>

<!-- Form Upload -->
<section>
    <!-- title -->
    <div class="text-center">
        <h2 class="mt-5">Upload Karya-mu</h2>
        <h5>
            Nikmati karya-mu oleh semua orang yang melihat
        </h5>
    </div>

    <div class="container">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="row mt-5 mb-5">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="">Judul</label>
                        <input type="text" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="">Sub Judul</label>
                        <input type="text" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="">Thumbnail Gambar Karya-mu</label>
                        <input type="file" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="">Gambar Karya-mu</label>
                        <input type="file" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="">Masukan Video (Opsional)</label>
                        <input type="file" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="">Deskripsi Karya-mu</label>
                    <textarea class="form-control" name="" id="" cols="30" rows="13"></textarea>
                </div>
                <div class="d-flex justify-content-end mt-3">
                    <button type="submit" class="button-laporan">Upload</button>
                </div>
            </div>
        </form>
    </div>
</section>

<!-- footer -->
@include('components.user.footer')
<!-- Notification -->
@include('components.notifications')

@endsection