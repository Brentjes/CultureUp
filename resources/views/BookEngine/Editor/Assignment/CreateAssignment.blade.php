@foreach ($errors->all() as $error)
    <p>{{ $error }}</p>
@endforeach

<Form method="POST" action="/assignment/editor/current">

    @csrf
    @method('PUT')
    <div class="field">
        <label class="label" for="title">Title</label>

        <div class="control">
            <div class="control">
                <input class="input" type="text" name="title" id="title" required value="{{old("title")}}">
            </div>

            @error('title')
            <p>{{$errors->first('title')}}</p>
            @enderror

        </div>
    </div>

    <div class="field">
        <label class="label" for="subject">Subject</label>

        <div class="control">
            <div class="control">
                <input class="input" type="text" name="subject" id="subject" value="{{old("subject")}}" required>
            </div>

            @error('subject')
            <p>{{$errors->first('subject')}}</p>
            @enderror

        </div>
    </div>

    <div class="field">
        <label class="label" for="isHidden">isHidden</label>

        <input class="input" type="checkbox" name="isHidden"
               @if( (old('isHidden') ) == (true||1) ) checked @endif
             id="isHidden">

            @error('isHidden')
            <p>{{$errors->first('isHidden')}}</p>
            @enderror

        </div>

    <div class="field">
        <label class="label" for="isLocked">isLocked</label>

        <input class="input" type="checkbox" name="isLocked" id="isLocked"
               @if( (old('isLocked') ) == (true||1) ) checked @endif>

        @error('isLocked')
        <p>{{$errors->first('isLocked')}}</p>
        @enderror

    </div>




    <div class="field is-grouped">


        <div class="control">
            <button class="button is-link buttongreen center" type="submit">Submit</button>
        </div>
        <div class="control">
            <button class="button is-text center">cancel</button>
        </div>
    </div>

</Form>


