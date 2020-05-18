@extends ('layouts.layout');
@section ('content');

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
            <form method="POST" action="/assignment/editor/current">
                @csrf
                <div class="form-group">
                    <label class="label" for="title">Title</label>
                    <input class="form-control" type="text" name="title" id="title" placeholder="Enter title" required
                           value="{{old("title")}}">
                    @error('title')
                    <p>{{$errors->first('title')}}</p>
                    @enderror
                </div>

                <div class="field form-group">
                    <label class="label" for="subject">Subject</label>
                    <input class="form-control" type="text" name="subject" id="subject" placeholder="Enter subject"
                           value="{{old("subject")}}"
                           required>
                    @error('subject')
                    <p>{{$errors->first('subject')}}</p>
                    @enderror
                </div>

                <div class="field">
                    <label class="label" for="country">Case location</label>
                    <br>
                    <select id="country" name="country">
                        @foreach($countries as $country)
                        <option value="{{$country->country_code}}">{{$country->country}}</option>
                        @endforeach
                    </select>
                    @error('country')
                    <p>{{$errors->first('country')}}</p>
                    @enderror
                </div>

                <div class="pt-3">
                    <div class="form-check form-check-inline">
                        <input type="checkbox" class="form-check-input" name="isHidden"
                               @if( (old('isLocked') ) == (true||1) ) checked @endif>
                        @error('isHidden')
                        <p>{{$errors->first('isHidden')}}</p>
                        @enderror
                        <label class="form-check-label p-1" for="isHidden">Hide case</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input type="checkbox" class="form-check-input" name="isLocked"
                               @if( (old('isLocked') ) == (true||1) ) checked @endif>
                        @error('isLocked')
                        <p>{{$errors->first('isLocked')}}</p>
                        @enderror
                        <label class="form-check-label p-1" for="isLocked">Lock case </label>
                    </div>
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
