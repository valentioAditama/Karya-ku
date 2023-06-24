<!-- status -->
@foreach($getDataArticelCommunity as $data)
<div class="modal fade modal-primary" id="status-articel-community{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header justify-content-center">
        <div class="modal-profile">
          <h5>Update Status</h5>
        </div>
      </div>
      <form action="{{route('admin.articel.change-status', $data->id)}}" method="post">
        @csrf
        <div class="modal-body">
          <label for="status" class="h5">Status Articel Community</label>
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
<div class="modal fade modal-primary" id="modal-add-articel-community" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header justify-content-center">
        <div class="modal-profile">
          <h5>Add Articel Community</h5>
        </div>
      </div>
      <form action="{{route('admin.articel-community.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="modal-body">
          <div class="mb-3">
            <label for="users" class="h5">Users</label>
            <input type="text" class="form-control form-control-sm" id="users" name="users" value="{{Auth::user()->fullname}}" readonly>
          </div>
          <div class="mb-3">
            <label for="community" class="h5">Community</label>
            <select class="form-control form-control-sm" name="community" id="community" required>
              @foreach($dataCommunity as $data)
              <option value="{{$data->id}}">{{$data->name_community}}</option>
              @endforeach
            </select>
          </div>
          <div class="mb-3">
            <label for="description" class="h5">Articel</label>
            <textarea class="form-control" name="description" id="description" cols="30" rows="10" required></textarea>
          </div>
          <div class="mb-3">
            <label for="image" class="h5">Image</label>
            <input type="file" class="form-control" name="image" id="formFile" accept="image/png, image/jpg, image/jpeg">
          </div>
          <div class="mb-3">
            <label for="video" class="h5">Video</label>
            <input type="file" class="form-control" id="video" name="video" accept="video/mp4, video/flv, video/webm" value="{{ old('path_video') }}">
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


<!-- update -->
@foreach($getDataArticelCommunity as $data)
<div class="modal fade modal-primary" id="modal-edit-articel-community{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header justify-content-center">
        <div class="modal-profile">
          <h5>Update Articel Community</h5>
        </div>
      </div>
      <form action="{{route('admin.articel-community.update', $data->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="modal-body">
          <div class="mb-3">
            <label for="users" class="h5">Users</label>
            <input type="text" class="form-control form-control-sm" id="user" name="user" value="{{$data->fullname}}" readonly>
            <input type="hidden" class="form-control form-control-sm" id="users" name="users" value="{{$data->id_user}}" readonly>            
          </div>
          <div class="mb-3">
            <label for="community" class="h5">Community</label>
            <select class="form-control form-control-sm" name="community" id="community" required>
              @foreach($dataCommunity as $datasCommunity)
              <option value="{{$datasCommunity->id}}" selected>{{$datasCommunity->name_community}}</option>
              @endforeach
            </select>
          </div>
          <div class="mb-3">
            <label for="description" class="h5">Articel</label>
            <textarea class="form-control" name="description" id="description" cols="30" rows="10" required>{{ $data->articel_description }}</textarea>
          </div>
          <div class="mb-3">
            <label for="image" class="h5">Image</label>
            <input type="file" class="form-control" name="image" id="formFile" accept="image/png, image/jpg, image/jpeg">
          </div>
          <div class="mb-3">
            <label for="video" class="h5">Video</label>
            <input type="file" class="form-control" id="video" name="video" accept="video/mp4, video/flv, video/webm" value="{{ old('path_video') }}">
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

<!-- delete -->
@foreach($getDataArticelCommunity as $data)
<div class="modal fade modal-primary" id="modal-delete-articel-community{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header justify-content-center">
        <div class="modal-profile">
          <h5>Delete Data Articel Content</h5>
        </div>
      </div>
      <form action="{{route('admin.articel-community.delete', $data->id)}}" method="post">
        @csrf
        @method('delete')
        <div class="modal-body">
          <label for="status" class="h5">Apakah anda yakin ingin menghapus data ini?</label>
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