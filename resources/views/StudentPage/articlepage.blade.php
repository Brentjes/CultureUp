@extends ('layouts.layout')
@section ('content')

    <div class="card">
        <form method="POST" action="/cases">
            @csrf
            <div class="form-group row w-auto">
                <label for="name" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input name="name" class="form-control" id="inputEmail" required placeholder="Name">
                </div>
            </div>
            <div class="form-group row w-auto">
                <label class="col-sm-2 col-form-label">Subject</label>
                <div class="col-sm-10">
                    <input name="subject" class="form-control" id="inputPassword" required placeholder="Subject">
                </div>
            </div>
            <div class="form-group row w-auto">
                <div class="col-sm-10 offset-sm-2">
                    <label name="isHidden" class="form-check-label"><input type="checkbox">Hidden</label>
                </div>
            </div>
            <div class="form-group row w-auto">
                <div class="col-sm-10 offset-sm-2">
                    <label name="isLocked" class="form-check-label"><input type="checkbox">Locked</label>
                </div>
            </div>
            <div class="form-group row w-30">
                <div class="col-sm-10 offset-sm-2">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
@endsection
