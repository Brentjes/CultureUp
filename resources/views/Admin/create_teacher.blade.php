{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('Manage Teachers', 'Dashboard')

@section('content_header')

@stop

@section('content')
    <div class="card w-100 h-auto">

        <div class="card-header">
            <h3 class="card-title">Unsorted users</h3>

            <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 350px;">
                    <input id="TeacherTableSearch" type="text" onkeyup="tableSearch()" name="table_search" class="form-control float-right" placeholder="Search for a user">

                    <div class="input-group-append">
                        <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0" style="height: 700px;">
            <table id="ActiveTeacherTable" class="table table-head-fixed text-nowrap">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>E-Mail</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td><form class="mb-0"
                                  action="{{route('admin.teachers.store')}}"
                                  method="POST">
                                @csrf
                                {{ method_field('POST') }}
                                <button type="submit" class="btn btn-success btn-sm float-right">
                                    <i class="fas fa-plus-circle"></i> Make Teacher
                                </button>
                                <input type="hidden" name="user_id" value="{{$user->id}}">
                            </form>
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
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" type="text/css" href="student.css">
@stop

@section('js')
    <script>
        function tableSearch() {
            // Declare variables
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("TeacherTableSearch");
            filter = input.value.toUpperCase();
            table = document.getElementById("ActiveTeacherTable");
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

