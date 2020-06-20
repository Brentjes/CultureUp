{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('Teacher', 'Dashboard')

@section('content_header')
    @include('flash-message')
@stop

@section('content')
    <div class="card w-100 h-auto">
        <div class="card-header">
            <h3 class="card-title">Course management</h3>
        </div>
        <div class="card-body">
            <div class="row">
                @foreach($courses as $course)
                    @if($course->teacher_id === Auth::user()->teacher?Auth::user()->teacher->id:false)
                        <div class="col-3">
                            <form class="mb-0" method="post" action="{{route('teacher.courses.destroy', $course->id)}}">
                                @csrf
                                {{ method_field('DELETE') }}
                                <a onclick="this.closest('form').submit();return false;" class="course-box-link" type="submit">
                                    <div class="info-box course-box">
                                <span
                                    class="info-box-icon bg-success"><i
                                        class="fas fa-eye"></i></span>
                                        <div class="info-box-content">
                                            <span class="info-box-text">{{$course->name}}</span>
                                        </div>
                                    </div>
                                </a>
                            </form>
                        </div>

                    @else
                        <div class="col-3">
                            <form method="post" action="{{ route('teacher.courses.store') }}">
                                @csrf
                                <a onclick="this.closest('form').submit();return false;" class="course-box-link" type="submit">
                                    <div class="info-box course-box">
                                <span
                                    class="info-box-icon bg-danger"><i
                                        class="fas fa-eye"></i></span>
                                        <div class="info-box-content">
                                            <span class="info-box-text">{{$course->name}}</span>
                                        </div>
                                    </div>
                                    <input type="hidden" name="course_id" value="{{$course->id}}">
                                </a>
                            </form>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
@stop

@section('css')
    <style>
        .course-box-link {
            -webkit-appearance: inherit;
            color: black;
        }

        .info-box-text {
            white-space: normal !important;
        }

        .course-box:hover {
            background: #e1e1e1;
            border: 2px solid #d0d0d0;
        }
    </style>
@stop

@section('js')
    <script>
        function tableSearch() {
            // Declare variables
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("CourseTableSearch");
            filter = input.value.toUpperCase();
            table = document.getElementById("ActiveCourseTable");
            tr = table.getElementsByTagName("tr");

            // Loop through all table rows, and hide those who don't match the search query
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[1];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
    </script>
@stop

