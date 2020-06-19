<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>CultureUp - Editor</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
          integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="/css/BookEngine/editor.css">

    <!-- Font Awesome JS -->
    <script src="https://kit.fontawesome.com/5b65a26ca8.js" crossorigin="anonymous"></script>

    <!-- Bootstrap select -->
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
</head>
<body>

<div class="wrapper">
    <!-- Sidebar -->
    <nav id="sidebar" style="z-index: 100">
        <div class="sidebar-header">
            <h3>CultureUP Editor</h3>
            <h4 style="word-wrap: break-word">{{$assignment->name}}</h4>
        </div>
        <ul class="list-unstyled components">
            <li class="softshadow stick">
                <a id="newPageToggleButton"><i class="fas fa-plus"></i> New page</a>
            </li>
            <li class="softshadow stick">
                <a id="editAssignmentToggleButton"><i class="fas fa-cogs"></i> Edit assignment info</a>
            </li>
            <li class="softshadow stick">
                <a id="DeleteButton"><i class="fas fa-trash-alt"></i> Delete assignment</a>
            </li>
        </ul>
    </nav>

    @include('BookEngine.Editor.Assignment.AssignmentForm')
    @include('BookEngine.Editor.Page.PageForm', ['type' => "new"])

    <div class="row position-absolute" style="margin-left: 15%; width: 85vw;">
        @foreach($assignment->pages as $page)
            <div class="col-auto p-3">
                <button style="all:unset; z-index: 100; right: 0;  width: 30px; height: 30px; color: #f0f0f0" class="btn-danger DeleteButtonPage float-right justify-content-center position-absolute rounded-circle text-center"><i class="fas fa-trash-alt"></i></button>
                <a href="{{ route('editor.page.show', ['assignmentID' => $assignment->id, 'page' => $page->id]) }}">
                    <div class="card text-white custom-rounded softshadow" style="width: 12vw;">
                        <img class="card-img custom-rounded" src="http://placehold.it/160x90">
                        <div class="card-img-overlay">

                            <h2 class="card-title" style="font-size: 1vw;">{{$page->name}}</h2>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>

    <div id="ElementList">
    </div>
    <meta>

    <script>
        @include("BookEngine.Editor.js.assignmentEdit")
        @include("BookEngine.Editor.js.newPage")
        @include("BookEngine.Editor.js.DeletePage")

        document.getElementById('DeleteButton').addEventListener('click', deleteAssignment);

        function deleteAssignment(){
            const url = "{{route('editor.current.show', $assignment->id)}}";
            sendFetchTo(url, 'empty', 'DELETE').then(function(text){console.log(text)})
        }
    </script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
            integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"
            crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
            integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm"
            crossorigin="anonymous"></script>
    {{--Bootstrap select--}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
    <script src="/editor.js"></script>
</body>
</html>





