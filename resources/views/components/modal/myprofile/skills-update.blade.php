<!-- Modal -->
<div class="modal fade" id="updateSkill" tabindex="-1" aria-labelledby="updateSkill" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateSkill">Update Skiils</h5>
                <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('my-profile.update-skills')}}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Old Skills</label>
                        <select class="form-control" name="old_skills" id="" required>
                            @foreach($getDataSkills as $data)
                            <option value="{{$data->name_skills}}">{{$data->name_skills}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-outline">
                        <input type="text" id="skills" class="form-control" name="name_skills" required />
                        <label class="form-label" for="skills">Update Skills</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>