@foreach($getCommunityData as $data)
<div class="modal fade modal-primary" id="status_community{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header justify-content-center">
        <div class="modal-profile">
          <i class="nc-icon nc-bulb-63"></i>
        </div>
      </div>
      <form action="{{ route('admin.community.change-status', $data->id) }}" method="post">
        @csrf
        <div class="modal-body">
          <label for="status" class="h5">Status community</label>
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

<!-- modal add -->
<div class="modal fade modal-primary" id="modal-add" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header justify-content-center">
        <div class="modal-profile">
          <h4>Add Data</h4>
        </div>
      </div>
      <form action="{{ route('admin.community.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="modal-body">
          <div class="mb-3">
            <label for="name_community" class="h5">Nama Community</label>
            <input type="text" class="form-control form-control-sm" name="name_community" id="name_community" required>
          </div>
          <div class="mb-3">
            <label for="thumbnail_community" class="h5">File</label>
            <input type="file" class="form-control form-control-sm" name="thumbnail_community" id="thumbnail_community" required>
          </div>
          <div class="mb-3">
            <label for="description" class="h5">Description</label>
            <textarea class="form-control" name="description" id="description" cols="30" rows="10"></textarea>
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

<!-- modal edit -->
@foreach($getCommunityData as $data)
<div class="modal fade modal-primary" id="modal-edit{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header justify-content-center">
        <div class="modal-profile">
          <i class="nc-icon nc-bulb-63"></i>
        </div>
      </div>
      <form action="{{ route('admin.community.update', $data->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="modal-body">
          <div class="mb-3">
            <label for="name_community" class="h5">Nama Community</label>
            <input type="text" class="form-control form-control-sm" name="name_community" id="name_community" required value="{{$data->name_community}}">
          </div>
          <div class="mb-3">
            <label for="thumbnail_community" class="h5">File</label>
            <input type="file" class="form-control form-control-sm" name="thumbnail_community" id="thumbnail_community">
          </div>
          <div class="mb-3">
            <label for="description" class="h5">Description</label>
            <textarea class="form-control" name="description" id="description" cols="30" rows="10">{{$data->description}}</textarea>
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

<!-- modal delete -->
@foreach($getCommunityData as $data)
<div class="modal fade modal-primary" id="modal-delete{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header justify-content-center">
        <div class="modal-profile">
          <i class="nc-icon nc-bulb-63"></i>
        </div>
      </div>
      <form action="{{ route('admin.community.delete', $data->id) }}" method="post">
        @csrf
        @method('delete')
        <div class="modal-body">
          <label for="" class="h5">Apakah Anda Yakin Ingin Menghapus Data Ini?</label>
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