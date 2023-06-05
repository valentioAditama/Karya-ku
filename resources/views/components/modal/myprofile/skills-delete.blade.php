<!-- Modal -->
<div class="modal fade" id="deleteSkill" tabindex="-1" aria-labelledby="deleteSkill" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteSkill">Delete Skiils</h5>
                <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('my-profile.delete-skills')}}" method="post">
                @csrf
                @method('DELETE')
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Skills</label>
                        <select class="form-control" name="name_skills" id="" required>
                            @foreach($getDataSkills as $data)
                            <option value="{{$data->name_skills}}">{{$data->name_skills}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">delete</button>
                </div>
            </form>
        </div>
    </div>
</div>