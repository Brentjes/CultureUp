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
</head>
<body>
<div class="wrapper">
    <!-- Sidebar -->
    <nav id="sidebar" style="z-index: 100">
        <div class="sidebar-header">
            <h3>CultureUP Editor</h3>
        </div>

        <ul class="list-unstyled components">
            <li class="softshadow">
                <a href="#"><i class="fas fa-quote-right"></i> Add Text</a>
            </li>
            <li class="softshadow">
                <a href="#"><i class="fas fa-image"></i> Add Image</a>
            </li>
            <li class="softshadow">
                <a href="#"><i class="fas fa-link"></i> Add Link</a>
            </li>
            <li class="softshadow">
                <a href="#"><i class="fas fa-image"></i> Change Title</a>
            </li>
            <li class="softshadow">
                <a href="#"><i class="fas fa-link"></i> Change Description</a>
            </li>
{{--            <li>--}}
{{--                <input type="text" id="title">--}}
{{--            </li>--}}
{{--            <li>--}}
{{--                <input type="text" id="subject">--}}
{{--            </li>--}}
{{--            <li>--}}
{{--                <input type="button" id="UpdateAssingmentButton">--}}
{{--            </li>--}}
        </ul>

    </nav>
    <nav id="bottombar" style="z-index: 100">
        <div class="sidebar-header text-center pt-2">
            <h3>Timeline</h3>
        </div>

        <button type="button" id="bottombarCollapse" class="btn">
            <i class="white-icon fas fa-photo-video"></i>
        </button>
    </nav>
    <!-- Page Content -->
    <div id="content">
        <button type="button" id="sidebarCollapse" class="btn">
            <i class="white-icon fas fa-pencil-ruler"></i>
        </button>
    </div>
</div>

@include ('BookEngine.page', compact('page'))

<div id="ElementList">

</div>

<script>
    document.getElementById('UpdateAssingmentButton').addEventListener("click", sendAssignmentUpdate);

    function sendAssignmentUpdate() {
        let assignmentUpdateUrl = "/assignment/editor/current/{{$page->assignment ? $page->assignment->id : 1}}";
        let body =  {
            title: document.getElementById('title').value,
            subject: document.getElementById('subject').value,
        };
        if (!(body.title.length > 0 && body.title.length <= 50 && body.subject.length > 0 && body.subject.length <= 200)) {
            console.log("one of these inputs are to long, please shorten them, title max length = 50, subject max length = 200");
            if (!(body.title.length > 0 && body.title.length <= 50)) {
                console.log('title');
                console.log(body.title.length);
            }
            if (!(body.subject.length > 0 && body.subject.length <= 200)) {
                console.log('subject');
                console.log(body.subject.length);
            }
            return
        }
        sendFetchTo(assignmentUpdateUrl, body);
    }

    unction sendFetchTo(url, body){
    fetch(url, {
        method: 'PUT',
        credentials: "same-origin",
        body: JSON.stringify(body),
        mode: 'cors',
        headers: {
            "Content-Type": "application/json",
            "X-CSRF-Token": document.head.querySelector("[name~=csrf-token][content]").content
        }
    })
        // .then( (response) => return response.text());
        .then( (text) => console.log(text))
        .catch( (error) => console.log(error) );
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
{{--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"--}}
{{--        integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm"--}}
{{--        crossorigin="anonymous"></script>--}}
<script src="/editor.js"></script>


</body>

</html>





