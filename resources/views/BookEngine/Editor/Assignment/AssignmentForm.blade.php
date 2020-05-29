<div id="formToggle" class="position-absolute assignment-info"
     style="top: 40%; left: 50%; transform: translate(-50%, -50%); width: 20vw; z-index: 200;">
    <div class="card rounded p-0 w-100">
        <div class="card-header ribbon p-0">
            <p class="ribbonText text-center p-3 m-0">Edit assignment info</p>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label class="label" for="title">Title</label>
                <input class="form-control" type="text" id="assignmentName" placeholder="Enter title"
                       required
                       value="{{old("name")}}">
                @error('title')
                <p>{{$errors->first('name')}}</p>
                @enderror
            </div>

            <div class="form-group">
                <label class="label" for="subject">Description</label>
                <input class="form-control" type="text" id="assignmentSubject" placeholder="Enter description"
                       required
                       value="{{old("subject")}}">
                @error('subject')
                <p>{{$errors->first('subject')}}</p>
                @enderror
            </div>

            <div class="form-group">
                <label class="label" for="inputState">Country</label>
                <select id="inputState" class="form-control selectpicker" data-live-search="true"
                        data-size="10">
                    <option>Afghanistan</option>
                    <option>African central republic</option>
                    <option>Albania</option>
                    <option>Algeria</option>
                    <option>Andorra</option>
                    <option>Antigua and barbud</option>
                    <option>Argentina</option>
                    <option>Armenia</option>
                    <option>Australia</option>
                    <option>...</option>
                    <option>...</option>
                    <option>...</option>
                    <option>...</option>
                    <option>...</option>
                </select>
            </div>

            <div class="row text-center pt-4">
                <div class="col">
                    <button class="btn btn-danger" onclick="untoggleOtherForm()">Cancel</button>
                </div>
                <div class="col">
                    <button class="btn btn-light" type="submit" id="updateAssignmentButton">Submit</button>
                </div>
            </div>

        </div>
    </div>
</div>
