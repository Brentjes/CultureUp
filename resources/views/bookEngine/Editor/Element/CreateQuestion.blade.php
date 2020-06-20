<div id="content">
    <div class="assignment-info mt-5 pt-5 container d-flex justify-content-center" id="imageForm">
        <div class="card rounded p-0">
            <div class="card-header ribbon p-0">
                <p class="ribbonText text-center p-3 m-0">Add question</p>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('element.store', ['assignment' => 23, 'page' => 11]) }}">
                    @csrf
                    <div class="form-group">
                        <label for="alt-text">Question</label>
                        <input class="form-control" name="text" placeholder="Insert question here">
                        @error('alt-text')
                        <p>{{$errors->first('alt-text')}}</p>
                        @enderror
                    </div>

                    <div id="answers">
                        <div class="form-group">
                            <label for="alt-text">Answers</label>
                            <div class="row">
                                <div class="col">
                            <input class="form-control" name="text" placeholder="Insert answer here">
                            @error('alt-text')
                            <p>{{$errors->first('alt-text')}}</p>
                            @enderror
                                </div>
                                <div class="col">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input class="form-control" name="text" placeholder="Insert answer here">
                            @error('alt-text')
                            <p>{{$errors->first('alt-text')}}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button class="btn btn-light">Add question</button>
                        </div>
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
