<div id="{{$type}}PageToggle" class="position-absolute assignment-info"
     style="top: 40%; left: 50%; transform: translate(-50%, -50%); width: 20vw; z-index: 200;">
    <div class="card rounded p-0 w-100">
        <div class="card-header ribbon p-0">
            <p class="ribbonText text-center p-3 m-0">{{$type}} page</p>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label class="label" for="title">Title</label>
                <input class="form-control" type="text" id="{{$type}}PageName" placeholder="Enter title"
                       required
                       value="{{old("name")}}">
                @error('title')
                <p>{{$errors->first('name')}}</p>
                @enderror
            </div>

            <div class="form-group">
                <label class="label" for="subject">Description (optional)</label>
                <input class="form-control" type="text" id="{{$type}}PageDescription" placeholder="Enter description"

                       value="{{old("subject")}}">
                @error('subject')
                <p>{{$errors->first('subject')}}</p>
                @enderror
            </div>

            <div class="row text-center pt-4">
                <div class="col">
                    <button class="btn btn-danger" onclick="untoggleOtherForm()">Cancel</button>
                </div>
                <div class="col">
                    <button class="btn btn-light" type="submit" id="{{$type}}PageButton">Submit</button>
                </div>
            </div>

        </div>
    </div>
</div>
