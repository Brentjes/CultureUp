@extends('adminlte::page')

@section('title', 'Teacher - Progress')

@section('content_header')

@stop

@section('content')
    <div class="card">
        <div class="card-header ribbon">
            <h3 class="card-title ribbonText">Student progress</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
            <table class="table" style="border-collapse:collapse;">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Course</th>
                    <th>Assignments</th>
                </tr>
                </thead>
                <tbody>
                @foreach($students as $student)
                    <tr data-toggle="collapse" data-target="#row{{$student->id}}" class="accordion-toggle">
                        <td>{{$student->user->name}}</td>
                        <td>{{$student->course->name}}</td>
                        <td>TODO: 3/10 Completed</td>
                    </tr>
                    <tr>
                        <td colspan="6" class="hiddenRow">
                            <div class="accordian-body collapse" id="row{{$student->id}}">
                                <div class="m-3">
                                    <table class="table table-secondary table-sm">
                                        <thead>
                                        <tr>
                                            <th scope="col">Assignment</th>
                                            <th scope="col">Progress</th>
                                            <th scope="col">Score</th>
                                            <th scope="col">Buttons</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        @foreach($student->assignments as $assignment)
                                        <tr>
                                            <td>{{$assignment->name}}</td>
                                            <td>
                                                <div class="progress-group">
                                                    <div class="progress sm">
                                                        <div class="progress-bar progress-bar-aqua" style="width: {{$assignment->pivot->progress}}0%"></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>{{$assignment->pivot->progress}}/10</td>
                                            <td></td>
                                        </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
@stop

@section('css')
    <link rel="stylesheet" type="text/css" href="\css\teacher\progress.css">
@stop

@section('js')

@stop

