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
                <form method="POST" action="{{ route('element.store', ['assignment' => 23, 'page' => 11]) }}">
                    @csrf
                    <div class="form-group">
                        <label class="label" for="positionX">position X</label>
                        {{--only periods are registered as numbers, not comma's--}}
                        <input class="form-control" type="text" name="positionX" id="positionX" placeholder="Enter position X"
                               value="{{old("positionX")}}"
                               required>
                        @error('positionX')
                        <p>{{$errors->first('positionX')}}</p>
                        @enderror
                    </div>

                    <div class="field form-group">
                        <label class="label" for="positionY">position Y</label>
                        <input class="form-control" type="text" name="positionY" id="positionY" placeholder="Enter position Y"
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
                        <label class="label" for="country">case type</label>
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

{{--                    <div class="field">--}}
{{--                        <label class="label" for="country">case type</label>--}}
{{--                        <br>--}}
{{--                        <textarea name="text"></textarea>--}}
{{--                        @error('country')--}}
{{--                        <p>{{$errors->first('country')}}</p>--}}
{{--                        @enderror--}}
{{--                    </div>--}}

                    <div class="field form-group">
                        <label class="label" for="text">text</label>
                        <textarea id="textArea" name="text" rows="4" cols="50" placeholder="Insert text here"></textarea>
                        @error('text')
                        <p>{{$errors->first('text')}}</p>
                        @enderror
                    </div>

                    <div class="field">
                        <label class="label" for="page_id">page_id</label>
                        <br>
                        <select id="country" name="page_id">
                            @foreach($assignment->pages as $pageInfo)
                                @if($pageInfo->id !== $page->id)
                                <option value="{{$pageInfo->id}}">{{$pageInfo->name}}</option>
                                @endif
                            @endforeach
                        </select>
                        @error('country')
                        <p>{{$errors->first('country')}}</p>
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
