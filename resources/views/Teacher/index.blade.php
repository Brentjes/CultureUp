{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('Teacher', 'Dashboard')

@section('content_header')
    <div class="card w-100 h-auto">
        <div class="row d-flex justify-content-center">
            <div class="col pl-5 mt-5">
                <h1 class="display-3 lead text-left" style="font-size:4vw"> Welcome, {{ Auth::user()->name }}</h1>
            </div>
            <div class="col mr-20 text-center m-4">
                <img class="img-fluid" style="width:15vw; height: auto" src="/cultureuplogo.png">
            </div>
        </div>
    </div>
@stop

@section('content')

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" type="text/css" href="student.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

