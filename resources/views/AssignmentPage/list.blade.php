@extends ('layouts.studentLayout')
@section('content')
    <head>
        <title>CultureUp - List</title>
    </head>
{{--    @foreach($country->assignments as $assignment)--}}
        {{dd($country->assignments->get())}}
{{--    @endforeach--}}
@endsection
