@foreach($getDataContent as $data)
<div class="modal fade modal-primary" id="status_content_karya{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header justify-content-center">
        <div class="modal-profile">
          <i class="nc-icon nc-bulb-63"></i>
        </div>
      </div>
      <form action="{{ route('admin.content-karya.change-status', $data->id) }}" method="post">
        @csrf
        <div class="modal-body">
          <label for="status" class="h5">Status Content Karya</label>
          <select class="form-control" name="status" id="status" required>
            <option selected>Pilih Status</option>
            <option value="Active">Active</option>
            <option value="non-active">Non Active</option>
          </select>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-fill btn-primary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-fill btn-success">Save</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endforeach

<!-- add data -->
<div class="modal fade modal-primary" id="modal-add" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header justify-content-center">
        <div class="modal-profile">
          <h4>Add Data</h4>
        </div>
      </div>
      <form action="{{ route('admin.content-karya.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="modal-body">
          <div class="mb-3">
            <label for="title" class="h5">Title</label>
            <input type="text" class="form-control form-control-sm" name="title" id="title" required value="{{ old('title') }}">
          </div>
          <div class="mb-3">
            <label for="sub_title" class="h5">Sub Title</label>
            <input type="text" class="form-control form-control-sm" name="sub_title" id="sub_title" required value="{{ old('sub_title') }}">
          </div>
          <div class="mb-3">
            <label for="category" class="h5">category</label>
            <select name="category" id="category" class="form-control" required value="{{ old('category') }}">
              <option selected>Pilih Category</option>
              <option value="Fotografi">Fotografi</option>
              <option value="Desain Grafis">Desain Grafis</option>
              <option value="Seni Lukis">Seni Lukis</option>
              <option value="Tulisan Kreatif">Tulisan Kreatif</option>
              <option value="Musik dan Audio">Musik dan Audio</option>
              <option value="Video dan Film Pendek">Video dan Film Pendek</option>
              <option value="Kerajinan Tangan">Kerajinan Tangan</option>
              <option value="Kuliner">Kuliner</option>
              <option value="Mode dan Busana">Mode dan Busana</option>
              <option value="Teknologi dan Inovasi">Teknologi dan Inovasi</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="description" class="h5">Description</label>
            <textarea name="description" id="description" class="form-control" cols="30" rows="10" value="{{ old('description') }}"></textarea>
          </div>
          <div class="mb-3">
            <label for="" class="h5">Thumbnail Gambar Karya-mu</label>
            <input type="file" class="form-control" id="thumbnail" name="path_thumbnail" accept="image/png, image/jpg, image/jpeg" value="{{ old('path_thumbnail') }}" required>
          </div>
          <div class=" mb-3">
            <label for="" class="h5">Gambar Karya-mu</label>
            <input type="file" class="form-control" id="image" name="path_image" accept="image/png, image/jpg, image/jpeg" value="{{ old('path_image') }}" required>
          </div>
          <div class=" mb-3">
            <label for="" class="h5">Masukan Video (Opsional)</label>
            <input type="file" class="form-control" id="video" name="path_video" accept="video/mp4, video/flv, video/webm" value="{{ old('path_video') }}">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-fill btn-primary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-fill btn-success">Save</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- edit data -->
@foreach($getDataContent as $data)
<div class="modal fade modal-primary" id="modal-edit{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header justify-content-center">
        <div class="modal-profile">
          <i class="nc-icon nc-bulb-63"></i>
        </div>
      </div>
      <form action="{{ route('admin.content-karya.update', $data->id) }}" method="post">
        @csrf
        <div class="modal-body">
          <div class="mb-3">
            <label for="title" class="h5">Title</label>
            <input type="text" class="form-control form-control-sm" name="title" id="title" value="{{$data->title}}">
          </div>
          <div class="mb-3">
            <label for="sub_title" class="h5">Sub Title</label>
            <input type="text" class="form-control form-control-sm" name="sub_title" id="sub_title" value="{{$data->sub_title}}">
          </div>
          <div class="mb-3">
            <label for="category" class="h5">category</label>
            <select name="category" id="category" class="form-control">
              <option selected>Pilih Category</option>
              <option value="Fotografi">Fotografi</option>
              <option value="Desain Grafis">Desain Grafis</option>
              <option value="Seni Lukis">Seni Lukis</option>
              <option value="Tulisan Kreatif">Tulisan Kreatif</option>
              <option value="Musik dan Audio">Musik dan Audio</option>
              <option value="Video dan Film Pendek">Video dan Film Pendek</option>
              <option value="Kerajinan Tangan">Kerajinan Tangan</option>
              <option value="Kuliner">Kuliner</option>
              <option value="Mode dan Busana">Mode dan Busana</option>
              <option value="Teknologi dan Inovasi">Teknologi dan Inovasi</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="description" class="h5">Description</label>
            <textarea name="description" id="description" class="form-control" cols="30" rows="10">{{$data->description}}</textarea>
          </div>
          <div class="mb-3">
            <label for="title" class="h5">Thumbnail Content</label>
            <input type="file" class="form-control form-control-sm" name="thumbnail_content">
          </div>
          <div class="mb-3">
            <label for="title" class="h5">Image Content</label>
            <input type="file" class="form-control form-control-sm" name="image_content">
          </div>
          <div class="mb-3">
            <label for="title" class="h5">Video Content</label>
            <input type="file" class="form-control form-control-sm" name="video_content">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-fill btn-primary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-fill btn-success">Save</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endforeach

<!-- delete data -->
@foreach($getDataContent as $data)
<div class="modal fade modal-primary" id="modal-delete{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header justify-content-center">
        <div class="modal-profile">
          <h4>Delete Data</h4>
        </div>
      </div>
      <form action="{{ route('admin.content-karya.delete', $data->id) }}" method="post">
        @csrf
        @method('delete')
        <div class="modal-body">
          <label for="status" class="h5">Apakah Anda Yakin Ingin Menghapus Data Ini?</label>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-fill btn-primary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-fill btn-danger">Delete</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endforeach