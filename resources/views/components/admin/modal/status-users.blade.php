@foreach($getDataUser as $data)
<div class="modal fade modal-primary" id="status_user{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header justify-content-center">
                <div class="modal-profile">
                    <i class="nc-icon nc-bulb-63"></i>
                </div>
            </div>
            <form action="{{route('admin.users.change-status', $data->id)}}" method="post">
                @csrf
                <div class="modal-body">
                    <label for="status" class="h5">Status Users</label>
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
@foreach($getDataUser as $data)
<div class="modal fade modal-primary" id="modal-add" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header justify-content-center">
                <div class="modal-profile">
                    <h4>Edit Data</h4>
                </div>
            </div>
            <form action="{{route('admin.users.store')}}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="fullname" class="h5">Fullname</label>
                        <input type="text" class="form-control form-control-sm" name="fullname" id="fullname" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="h5">Email</label>
                        <input type="email" class="form-control form-control-sm" name="email" id="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="role" class="h5">Role</label>
                        <select class="form-control form-control-sm" name="role" id="role" required>
                            <option value="user">users</option>
                            <option value="admin">admin</option>
                            <option value="superuser">Super User</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="h5">Password</label>
                        <input type="password" class="form-control form-control-sm" name="password" id="password" required>
                    </div>
                    <div class="mb-3">
                        <label for="status" class="h5">Status</label>
                        <select class="form-control form-control-sm" name="status" id="status" required>
                            <option value="active">Active</option>
                            <option value="non-active">Non Active</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="role_job" class="h5">Role Job</label>
                        <input type="text" class="form-control form-control-sm" name="role_job" id="role_job">
                    </div>
                    <div class="mb-3">
                        <label for="location" class="h5">Location</label>
                        <input type="text" class="form-control form-control-sm" name="location" id="location">
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


<!-- modal edit -->
@foreach($getDataUser as $data)
<div class="modal fade modal-primary" id="modal-edit{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header justify-content-center">
                <div class="modal-profile">
                    <h4>Edit Data</h4>
                </div>
            </div>
            <form action="{{route('admin.users.update', $data->id)}}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="fullname" class="h5">Fullname</label>
                        <input type="text" class="form-control form-control-sm" name="fullname" id="fullname" value="{{$data->fullname}}">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="h5">Email</label>
                        <input type="text" class="form-control form-control-sm" name="email" id="email" value="{{$data->email}}">
                    </div>
                    <div class="mb-3">
                        <label for="role" class="h5">Role</label>
                        <select class="form-control form-control-sm" name="role" id="role">
                            <option value="user">users</option>
                            <option value="admin">admin</option>
                            <option value="superuser">Super User</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="h5">Password</label>
                        <input type="password" class="form-control form-control-sm" name="password" id="password">
                    </div>
                    <div class="mb-3">
                        <label for="status" class="h5">Status</label>
                        <select class="form-control form-control-sm" name="status" id="status">
                            <option value="active">Active</option>
                            <option value="non-active">Non Active</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="role_job" class="h5">Role Job</label>
                        <input type="text" class="form-control form-control-sm" name="role_job" id="role_job" value="{{$data->role_job}}">
                    </div>
                    <div class="mb-3">
                        <label for="location" class="h5">Location</label>
                        <input type="text" class="form-control form-control-sm" name="location" id="location" value="{{$data->location}}">
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
@foreach($getDataUser as $data)
<div class="modal fade modal-primary" id="modal-delete{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header justify-content-center">
                <div class="modal-profile">
                    <h4>Delete Data</h4>
                </div>
            </div>
            <form action="{{route('admin.users.delete', $data->id)}}" method="post">
                @csrf
                @method('delete')
                <div class="modal-body">
                    <label for="status" class="h5">Apakah Anda Yakin Ingin Menghapus Data Ini?</label>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-fill btn-primary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-fill btn-danger">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach