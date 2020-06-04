{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('Teacher', 'Dashboard')

@section('content_header')
    @include('flash-message')
@stop

@section('content')
    <div class="card w-100 h-auto">
        <div class="card-header">
            <h3 class="card-title">What courses do I follow?</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0" style="height: 700px;">

        </div>
        <!-- /.card-body -->
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" type="text/css" href="student.css">
@stop

@section('js')

@stop

