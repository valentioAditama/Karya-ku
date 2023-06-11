@foreach($getDataContent as $data)
<div class="modal fade modal-primary" id="status_content_karya{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header justify-content-center">
        <div class="modal-profile">
          <i class="nc-icon nc-bulb-63"></i>
        </div>
      </div>
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
        <button type="button" class="btn btn-fill btn-success">Save</button>
      </div>
    </div>
  </div>
</div>
@endforeach