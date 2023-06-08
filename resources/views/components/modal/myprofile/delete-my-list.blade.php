@foreach($getDataContent as $data)
<!-- Modal -->
<div class="modal fade" id="deleteContent{{$data->id}}" tabindex="-1" aria-labelledby="deleteContent" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteContent">Delete Content</h5>
                <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('my-karya.destroy', $data->id )}}" method="post">
                @csrf
                @method('DELETE')
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Apakaah Anda Yakin Ingin Menghapus Data Ini?</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger">delete</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach