@extends('adminlte::page')

@section('Teacher', 'Dashboard')

@section('content_header')

@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Student progress</h3>
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
                        <td>{{$student->name}}</td>
                        <td>{{$student->course_name}}</td>
                        <td>TODO: 3/10 Completed</td>
                    </tr>
                    <tr>
                        <td colspan="6" class="hiddenRow">
                            <div class="accordian-body collapse" id="row{{$student->id}}"> {{$student->id}}</div>
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

