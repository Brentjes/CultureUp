@foreach($allAssignments as $assignment)
    <a href="/assignment/{{$assignment->id}}"><div>{{$assignment->id}}</div></a>
    @endforeach
