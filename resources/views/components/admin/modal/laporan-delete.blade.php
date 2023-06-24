@foreach($getDataReport as $data)
<div class="modal fade modal-primary" id="laporan-delete{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header justify-content-center">
        <div class="modal-profile">
          <i class="nc-icon nc-bulb-63"></i>
        </div>
      </div>
      <form action="{{route('admin.laporan.delete', $data->id)}}" method="post">
        @csrf
        @method('delete')
        <div class="modal-body">
          <label for="status" class="h5">Apakah Anda Yakin Ingin Menghapus?</label>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-fill btn-primary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-fill btn-success">Hapus</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endforeach