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
            <li>
                <input type="text" id="assignmentName">
            </li>
            <li>
                <input type="text" id="assignmentSubject">
            </li>
            <li>
                <input type="button" id="updateAssignmentButton">
            </li>



            <li>
                <input type="button" id="testButton">
            </li>
            <li id="testAppend">

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

    document.getElementById('updateAssignmentButton').addEventListener("click", sendAssignmentUpdate);
    document.getElementById('testButton').addEventListener('click', function(){
        console.log('pressed button');
        createInputField('page')
    });
    const currentAssignment = 1;

    function sendAssignmentUpdate() {
        let assignmentUpdateUrl = "{{ route('editor.current.update', 1) }}";
        let body =  {
            name: document.getElementById('assignmentName').value,
            subject: document.getElementById('assignmentSubject').value,
        };

        if (!(body.name.length > 0 && body.name.length <= 50 && body.subject.length > 0 && body.subject.length <= 200)) {
            console.log("one of these inputs are to long, please shorten them, title max length = 50, subject max length = 200");
            if (!(body.name.length > 0 && body.name.length <= 50)) {
                console.log('name');
                console.log(body.name.length);
            }
            if (!(body.subject.length > 0 && body.subject.length <= 200)) {
                console.log('subject');
                console.log(body.subject.length);
            }

            return
        }

        sendFetchTo(assignmentUpdateUrl, body, 'put');

    }

    function createInputField(type, old){
        old = false;
        console.log(type);
        let inputBox = document.createElement("div");
        inputBox.id = "InputDeleteMeAfterDoneYes";
        console.log(old);
        let oldInput = (old) ? old : false;
        console.log(old);

        let inputBoxTitle = document.createElement('h1');
        inputBoxTitle.innerText = ((oldInput === false) ? 'create' : 'edit') + ' ' + type;
        inputBox.appendChild(inputBoxTitle);
        document.getElementById('testAppend').appendChild(inputBox);
        let boxForInput = document.createElement('div');
        boxForInput.id = "innerBox";
        inputBox.appendChild(boxForInput);
        let sendButton = document.createElement('input');
        sendButton.type = 'button';
        sendButton.id = 'inputSendButton';
        inputBox.appendChild(sendButton);
        if(type === "page"){
            createInputPage(old)
        } else if(type === "element") {
            createInputElement(old)
        }


    }

    function createInputPage(old){
        console.log('hit this');
        let target = document.getElementById('innerBox');
        let inputName = document.createElement('input');
        inputName.id = 'pageName';
        target.appendChild(inputName);
        let inputDescription = document.createElement('input');
        inputDescription.id = 'pageDescription';
        target.appendChild(inputDescription);
        if(old){
            let pageId = document.createElement('input');
            pageId.id = 'pageId';
            target.appendChild(pageId);
        }
        document.getElementById('inputSendButton').addEventListener('click', pageFunction.bind(this))
    }

    function createInputElement(old){

    }


    function getPageInfo(){
        console.log(document.getElementById('pageName').value + ' test');
        return {
            name: document.getElementById('pageName').value,
            description: document.getElementById('pageDescription').value,
            assignment_Id: currentAssignment
        }
    }

    function pageFunction(){
        let body = getPageInfo();
        let lastPart = '/';
        let method = 'POST';
        let urlStore = '{{ route('editor.page.store', 1) }}';
        if(document.getElementById('pageId')){
            urlStore = '{{ route('editor.page.update', ['assignmentID' => 1, 'page' => 1]) }}';
            method = 'PUT'
        }


        console.log(method);
        console.log(body);



            sendFetchTo(urlStore, body, method);


        document.getElementById('InputDeleteMeAfterDoneYes').remove();
    }

    function newElement(){

    }

    function editElement(){

    }


    function sendFetchTo(url, body, method){
        console.log(method);
        console.log(body);
        console.log(url);
    fetch(url, {
        method: method,
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





