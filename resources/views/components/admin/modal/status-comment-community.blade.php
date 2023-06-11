@foreach($getCommentCommunity as $data)
<div class="modal fade modal-primary" id="status_comment_community{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
          <label for="status" class="h5">Status Comment Community</label>
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