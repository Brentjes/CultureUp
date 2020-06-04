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
                <label class="label" for="Country">Country</label>
                <select id="assignmentCountry" name="country" class="form-control selectpicker" data-live-search="true"
                        data-size="10">
                    @foreach($countries as $country)
                        <option value="{{$country->id}}">{{$country->country}}</option>
                    @endforeach
                </select>
            </div>

            <div class="pt-3">
                <div class="form-check form-check-inline">
                    <input type="checkbox" class="form-check-input" id="isHidden" name="isHidden"
                           @if( (old('isLocked') ) == (true||1) ) checked @endif>
                    @error('isHidden')
                    <p>{{$errors->first('isHidden')}}</p>
                    @enderror
                    <label class="form-check-label p-1" for="isHidden">Hide case</label>
                </div>

                <div class="form-check form-check-inline">
                    <input type="checkbox" class="form-check-input" id="isLocked" name="isLocked"
                           @if( (old('isLocked') ) == (true||1) ) checked @endif>
                    @error('isLocked')
                    <p>{{$errors->first('isLocked')}}</p>
                    @enderror
                    <label class="form-check-label p-1" for="isLocked">Lock case </label>
                </div>
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
