@extends ('layouts.layout')
@section ('content')

    <head>
        <link href="/css/main/main.css">
    </head>
    <div class="mt-5 pt-5 container d-flex justify-content-center">
        <div class="card rounded p-0">
            <div class="card-header ribbon p-0">
                <p class="ribbonText text-center p-3 m-0">Create an Element</p>
            </div>
            <div class="card-body">
                <form method = "POST" action= "/articles">
                    @csrf


                    <div class="field form-group">
                        <label class="label" for="title">Title</label>
                        <input class="form-control" type="text" name="title" id="title"
                               placeholder="Your title goes here"
                               value="{{old("title")}}"
                               required>
                        @error('title')
                        <p>{{$errors->first('title')}}</p>
                        @enderror
                    </div>


                    <div class="field form-group">
                        <label class="label" for="excerpt">excerpt</label>
                        <input class="form-control" type="text" name="excerpt" id="excerpt"
                               placeholder="Your excerpt goes here"
                               value="{{old("excerpt")}}"
                               required>
                        @error('excerpt')
                        <p>{{$errors->first('excerpt')}}</p>
                        @enderror
                    </div>


                    <div class="field form-group">
                        <label class="label" for="text">text</label>
                        <textarea id="textArea" name="textArea" rows="4" cols="50"
                                  placeholder="Your text goes here"></textarea>
                        @error('text')
                        <p>{{$errors->first('text')}}</p>
                        @enderror
                    </div>


                    <div class="row text-center pt-4">
                        <div class="col">
                            <button class="btn btn-light" type="submit">Submit</button>
                        </div>
                        <div class="col">
                            {{--                            <button class="btn btn-light">Cancel</button>--}}
                            <button class="btn btn-danger">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
