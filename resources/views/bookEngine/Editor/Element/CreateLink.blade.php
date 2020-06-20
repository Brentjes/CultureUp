<div id="content">
    <div class="assignment-info mt-5 pt-5 container d-flex justify-content-center" id="imageForm">
        <div class="card rounded p-0">
            <div class="card-header ribbon p-0">
                <p class="ribbonText text-center p-3 m-0">Add link</p>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('element.store', ['assignment' => 23, 'page' => 11]) }}">
                    @csrf
                    <div class="form-group">
                        <label class="label" for="page_id">Link destination</label>
                        <br>
                        <select id="page_id" name="page_id">
                            @foreach($assignment->pages as $pageInfo)
                                @if($pageInfo->id !== $page->id)
                                    <option value="{{$pageInfo->id}}">{{$pageInfo->name}}</option>
                                @endif
                            @endforeach
                        </select>
                        @error('page_id')
                        <p>{{$errors->first('page_id')}}</p>
                        @enderror
                    </div>

                    <div class="row text-center pt-4">
                        <div class="col">
                            <button class="btn btn-danger">Cancel</button>
                        </div>
                        <div class="col">
                            <button class="btn btn-light" type="submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
