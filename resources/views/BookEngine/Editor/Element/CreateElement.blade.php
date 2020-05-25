@extends ('layouts.layout')
@section ('content')

    @foreach ($errors->all() as $error)
        <p>{{ $error }}</p>
    @endforeach

    <head>
        <link href="/css/main/main.css">
    </head>
    <div class="mt-5 pt-5 container d-flex justify-content-center">
        <div class="card rounded p-0">
            <div class="card-header ribbon p-0">
                <p class="ribbonText text-center p-3 m-0">Create</p>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('element.store', ['assignmentID' => 1, 'pageID' => 1]) }}">
                    @csrf
                    <div class="form-group">
                        <label class="label" for="positionX">positionX</label>
                        <input class="form-control" type="text" name="positionX" id="positionX" placeholder="Enter positionX" required
                               value="{{old("positionX")}}">
                        @error('title')
                        <p>{{$errors->first('positionX')}}</p>
                        @enderror
                    </div>

                    <div class="field form-group">
                        <label class="label" for="positionY">positionY</label>
                        <input class="form-control" type="text" name="positionY" id="positionY" placeholder="Enter positionY"
                               value="{{old("positionY")}}"
                               required>
                        @error('positionY')
                        <p>{{$errors->first('positionY')}}</p>
                        @enderror
                    </div>


                    <div class="field form-group">
                        <label class="label" for="width">width</label>
                        <input class="form-control" type="text" name="width" id="width" placeholder="Enter width"
                               value="{{old("width")}}"
                               required>
                        @error('width')
                        <p>{{$errors->first('width')}}</p>
                        @enderror
                    </div>

                    <div class="field form-group">
                        <label class="label" for="height">height</label>
                        <input class="form-control" type="text" name="height" id="height" placeholder="Enter height"
                               value="{{old("height")}}"
                               required>
                        @error('height')
                        <p>{{$errors->first('height')}}</p>
                        @enderror
                    </div>

                    <div class="field">
                        <label class="label" for="country">Case location</label>
                        <br>
                        <select id="country" name="type">
                            <option value="text">text</option>
                            <option value="image">image</option>
                            <option value="link">link</option>
                            <option value="question">question</option>
                        </select>
                        @error('country')
                        <p>{{$errors->first('country')}}</p>
                        @enderror
                    </div>

                    <div class="field form-group">
                        <label class="label" for="height">text</label>
                        <textarea id="textArea" name="textArea" rows="4" cols="50">Insert mom here</textarea>
                        @error('height')
                        <p>{{$errors->first('height')}}</p>
                        @enderror
                    </div>


                    <div class="row text-center pt-4">
                        <div class="col">
                            <button class="btn btn-light" type="submit">Submit</button>
                        </div>
                        <div class="col">
                            <button class="btn btn-light">Cancel</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
