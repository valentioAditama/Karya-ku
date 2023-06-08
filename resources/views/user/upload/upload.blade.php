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
    <form action="{{route('upload.add')}}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="row mt-5 mb-5">
        <div class="col-md-6">
          <div class="mb-3">
            <label for="">Judul</label>
            <input type="text" class="form-control" name="title" maxlength="40" value="{{ old('title') }}" required>
          </div>
          <div class="mb-3">
            <label for="">Sub Judul</label>
            <input type="text" class="form-control" name="sub_title" maxlength="150" value="{{ old('sub_title') }}" required>
          </div>
          <div class="mb-3">
            <label for="">Thumbnail Gambar Karya-mu</label>
            <input type="file" class="form-control" id="thumbnail" name="path_thumbnail" accept="image/png, image/jpg, image/jpeg" value="{{ old('path_thumbnail') }}" required>
          </div>
          <div class=" mb-3">
            <label for="">Gambar Karya-mu</label>
            <input type="file" class="form-control" id="image" name="path_image" accept="image/png, image/jpg, image/jpeg" value="{{ old('path_image') }}" required>
          </div>
          <div class=" mb-3">
            <label for="">Masukan Video (Opsional)</label>
            <input type="file" class="form-control" id="video" name="path_video" accept="video/mp4, video/flv, video/webm" value="{{ old('path_video') }}">
          </div>
          <div class="mb-3">
            <img id="thumbnailPreview" class="showingFile" width="150" height="100" />
            <img id="imagePreview" class="showingFile" width="150" height="100" />
          </div>
        </div>
        <div class=" col-md-6">
          <label for="">Deskripsi Karya-mu</label>
          <textarea class="form-control" name="description" id="" cols="30" rows="13" required></textarea>
          <div class="d-flex justify-content-end mt-3">
            <button type="submit" class="button-laporan">Upload</button>
          </div>
        </div>
      </div>
    </form>
  </div>
</section>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    // click input file
    var thumbnail = document.getElementById('thumbnail');
    var image = document.getElementById('image');
    var video = document.getElementById('video');

    // showing
    var thumbnailPreview = document.getElementById('thumbnailPreview');
    var imagePreview = document.getElementById('imagePreview');
    var videoPreview = document.getElementById('videoPreview');

    thumbnail.addEventListener('change', function() {
      var file = thumbnail.files[0];
      var reader = new FileReader();

      reader.onload = function(e) {
        thumbnailPreview.style.display = 'inline-block';
        thumbnailPreview.src = e.target.result;
      };

      reader.readAsDataURL(file);
    });

    image.addEventListener('change', function() {
      var file = image.files[0];
      var reader = new FileReader();

      reader.onload = function(e) {
        imagePreview.style.display = 'inline-block';
        imagePreview.src = e.target.result;
      };

      reader.readAsDataURL(file);
    });

    video.addEventListener('change', function() {
      var file = video.files[0];
      var reader = new FileReader();

      reader.onload = function(e) {
        videoPreview.src = e.target.result;
      };

      reader.readAsDataURL(file);
    });
  });
</script>

<!-- footer -->
@include('components.user.footer')
<!-- Notification -->
@include('components.notifications')

@endsection