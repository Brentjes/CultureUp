<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
    <title class="float-left">CultureUp - Editor</title>

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
        <button type="button" id="sidebarCollapse" class="blue-icon btn align-content-center">
            <i class="m-0 fas fa-pencil-ruler"></i>
        </button>
        <div class="sidebar-header">
            <h3>CultureUP Editor</h3>
        </div>

        <ul class="list-unstyled components">
            <li class="softshadow stick" id="addText">
                <a><i class="bar-icon fas fa-quote-right"></i><span class="bar-text"> Add Text</span></a>
            </li>
            <li class="softshadow stick" id="addImg">
                <a><i class="bar-icon fas fa-image"></i><span class="bar-text"> Add Image</span></a>
            </li>
            <li class="softshadow stick" id="addLink">
                <a><i class="bar-icon fas fa-link"></i><span class="bar-text"> Add Link</span></a>
            </li>
            <li class="softshadow stick">
                <a id="editPageToggleButton"><i class="bar-icon fas fa-cog"></i> <span class="bar-text"> Page settings</span></a>
            </li>
        </ul>
    </nav>

    <div id="content">
    @include ('BookEngine.page', compact('page'))
    </div>

    <!-- Bottombar -->
    <nav id="bottombar" style="z-index: 100">
        <div class="text-center pt-2 sidebar-header">
            <h3 class="d-inline" style="color: #212529;">Timeline</h3>
        </div>
        <div class="row w-100 text-center ml-2 pl-5" style="height: 200px; margin-top: -3px">
            <div class="col-auto p-3 my-auto">
                <div class="card text-white custom-rounded h-auto" style="width: 15vw;">
                    <img class="card-img custom-rounded" src="http://placehold.it/160x90">
                </div>
            </div>
            <div class="col-auto p-3 my-auto">
                <div class="card text-white custom-rounded h-auto" style="width: 15vw;">
                    <img class="card-img custom-rounded" src="http://placehold.it/160x90">
                </div>
            </div>
            <div class="col-auto p-3 my-auto">
                <div class="card text-white custom-rounded softshadow h-auto" style="width: 15vw;">
                    <img class="card-img custom-rounded" src="http://placehold.it/160x90">
                </div>
            </div>
            <div class="col-auto my-auto">
                <button type="button" id="newPageToggleButton" class="btn blue-icon align-content-center">
                    <i class="fas fa-plus"></i>
                </button>
            </div>
        </div>

        <button type="button" id="bottombarCollapse" class="btn blue-icon align-content-center"
                style="padding: 12px 6px;">
            <i class="fas fa-film"></i>
        </button>
    </nav>

    @include('BookEngine.Editor.Page.PageForm', ['type' => "edit"])
    @include('BookEngine.Editor.Page.PageForm', ['type' => "new"])
</div>

<div id="ElementList">
<div>{{$page->title}}</div>
</div>
<meta>
<script>







{{--    @include("BookEngine.Editor.js.assignmentEdit")--}}

{{--    @include("BookEngine.Editor.js.newPage")--}}
    @include("BookEngine.Editor.js.editPage")


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

{{--interactjs--}}
<script src="https://unpkg.com/interactjs/dist/interact.min.js"></script>

<script src="/js/renderEngine.js"></script>

</body>
</html>





