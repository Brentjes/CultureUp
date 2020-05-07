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
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
            integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ"
            crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"
            integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY"
            crossorigin="anonymous"></script>
</head>
<body>

<div class="wrapper">
    <!-- Sidebar -->
    <nav id="sidebar" style="z-index: 100">
        <div class="sidebar-header">
            <h3>CultureUp Editor</h3>
        </div>

        <ul class="list-unstyled components">
            <li>
                <a href="#"><i class="fas fa-quote-right"></i> Add Text</a>
            </li>
            <li>
                <a href="#"><i class="fas fa-image"></i> Add Image</a>
            </li>
            <li>
                <a href="#"><i class="fas fa-link"></i> Add Link</a>
            </li>
        </ul>

    </nav>
    <!-- Page Content -->
    <div id="content">
        <button type="button" id="sidebarCollapse" class="btn btn-light rounded">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>
</div>

@include ('BookEngine.page', compact('page'))

<div id="ElementList">

</div>

<meta>

<script>

    var assignmentUpdateUrl = "/assignment/editor/current/1";
    var getNewCSRFTokenURL = "/DokSTestingStuffDontTouch/";

    function sendAssignmentUpdate() {
        //let assignment = new XMLHttpRequest();

        let formdata = new FormData();
        formdata.append('title', 'Chris');
        formdata.append('subject', 'Testing AJAX!');
        // let testData = {
        //     title: "chris",
        //     subject: "testing Ajax"
        // };

        for (var pair of formdata.entries()) {
                        console.log(pair[0] + ', ' + pair[1]);
                    }


        const csrfToken = document.head.querySelector("[name~=csrf-token][content]").content;

        fetch(assignmentUpdateUrl, {
            method: 'PUT',
            credentials: "same-origin",
            body: JSON.stringify({
                title: '1',
                subject: 'number'
            }),
            mode: 'cors',
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-Token": csrfToken
            }

        })
            // .then( (response) => return response.text());
            .then( (text) => console.log(text))
            .catch( (error) => console.log(error) );
    }






    function requestNewCSRFToken() {
        let csrfRequest = new XMLHttpRequest();

        csrfRequest.open("GET", getNewCSRFTokenURL, true);
        csrfRequest.send();
        return csrfRequest
    }

    function setCSRFToken(csrfRequest, form) {
        if (csrfRequest.readyState === 4) {
            if (csrfRequest.status >= 200 && csrfRequest.status < 400) {
                form.append('_token', JSON.parse(csrfRequest.responseText).token);
                return true
            }
        }
        return false
    }


    sendAssignmentUpdate()
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





