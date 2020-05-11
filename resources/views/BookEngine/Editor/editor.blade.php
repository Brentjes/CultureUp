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
        </div>

        <ul class="list-unstyled components">
            <li class="softshadow stick">
                <a><i class="fas fa-quote-right"></i> Add Text</a>
            </li>
            <li class="softshadow stick">
                <a><i class="fas fa-image"></i> Add Image</a>
            </li>
            <li class="softshadow stick">
                <a><i class="fas fa-link"></i> Add Link</a>
            </li>
            <li class="softshadow stick">
                <a onclick="showInfo();"><i class="fas fa-cogs"></i> Edit assignment info</a>
            </li>
            {{--            <li>--}}
            {{--                <label for="testButton">NewPage</label>--}}
            {{--                <input name="testButton" type="button" id="testButton">--}}
            {{--            </li>--}}
            {{--            <li id="testAppend">--}}
            {{--            </li>--}}
        </ul>
    </nav>

    <div id="content">
        <button type="button" id="sidebarCollapse" class="blue-icon btn">
            <i class="m-0 fas fa-pencil-ruler"></i>
        </button>
    </div>

    <nav id="bottombar" style="z-index: 100">
        <div class="text-center pt-2">
            <h3>Timeline</h3>
        </div>
        <div class="row w-100 text-center ml-2 pl-5">
            <div class="col-auto p-3">
                <div class="card text-white custom-rounded" style="width: 12vw;">
                    <img class="card-img custom-rounded" src="http://placehold.it/160x90">
                </div>
            </div>
            <div class="col-auto p-3">
                <div class="card text-white custom-rounded" style="width: 12vw;">
                    <img class="card-img custom-rounded" src="http://placehold.it/160x90">
                </div>
            </div>
            <div class="col-auto p-3">
                <div class="card text-white custom-rounded softshadow" style="width: 12vw;">
                    <img class="card-img custom-rounded" src="http://placehold.it/160x90">
                </div>
            </div>
        </div>

        <button type="button" id="bottombarCollapse" class="btn blue-icon" style="padding: 12px 6px;">
            <i class="fas fa-photo-video"></i>
        </button>
    </nav>

    <div id="formToggle" class="position-absolute assignment-info"
         style="top: 40%; left: 50%; transform: translate(-50%, -50%); width: 20vw; z-index: 200;">
        <div class="card rounded p-0 w-100">
            <div class="card-header ribbon p-0">
                <p class="ribbonText text-center p-3 m-0">Edit assignment info</p>
            </div>
            <div class="card-body">
                <form method="POST" action="/assignment/editor/current">
                    @csrf
                    <div class="form-group">
                        <label class="label" for="title">Title</label>
                        <input class="form-control" type="text" id="assignmentName" placeholder="Enter title"
                               required
                               value="{{old("title")}}">
                        @error('title')
                        <p>{{$errors->first('title')}}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="label" for="subject">Description</label>
                        <input class="form-control" type="text" id="assignmentSubject" placeholder="Enter subject"
                               required
                               value="{{old("subject")}}">
                        @error('subject')
                        <p>{{$errors->first('subject')}}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="label" for="inputState">Country</label>
                        <select id="inputState" class="form-control selectpicker" data-live-search="true"
                                data-size="10">
                            <option>Afghanistan</option>
                            <option>African central republic</option>
                            <option>Albania</option>
                            <option>Algeria</option>
                            <option>Andorra</option>
                            <option>Antigua and barbud</option>
                            <option>Argentina</option>
                            <option>Armenia</option>
                            <option>Australia</option>
                            <option>...</option>
                            <option>...</option>
                            <option>...</option>
                            <option>...</option>
                            <option>...</option>
                        </select>
                    </div>

                    <div class="row text-center pt-4">
                        <div class="col">
                            <button class="btn btn-light" type="submit" id="updateAssignmentButton">Submit</button>
                        </div>
                        <div class="col">
                            <button class="btn btn-danger" onclick="showInfo()">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@include ('BookEngine.page', compact('page'))

<div id="ElementList">

</div>
<meta>
<script>

    const pageInfo = {
        name: '{{$page->name}}',
        description: '{{$page->description}}',
        id: '{{$page->id}}'
    };

    document.getElementById('updateAssignmentButton').addEventListener("click", sendAssignmentUpdate);
    document.getElementById('testButton').addEventListener('click', function () {
        createInputField('page', pageInfo)
    });

    const currentAssignment = 1;

    function sendAssignmentUpdate() {
        let assignmentUpdateUrl = "{{ route('editor.current.update', 1) }}";
        let body = {
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

    function createInputField(type, old) {
        let inputBox = document.createElement("div");
        inputBox.id = "InputDeleteMeAfterDoneYes";
        let oldInput = (old) ? old : false;

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

        if (type === "page") {
            createInputPage(old)
        } else if (type === "element") {
            createInputElement(old)
        }
    }

    function createInputPage(old) {
        let target = document.getElementById('innerBox');

        let inputName = document.createElement('input');
        inputName.id = 'pageName';
        target.appendChild(inputName);

        let inputDescription = document.createElement('input');
        inputDescription.id = 'pageDescription';
        target.appendChild(inputDescription);

        if (old) {
            let pageId = document.createElement('input');
            pageId.id = 'pageId';
            pageId.type = 'hidden';
            pageId.value = old.id;
            target.appendChild(pageId);
        }
        document.getElementById('inputSendButton').addEventListener('click', pageFunction.bind(this))
    }

    function createInputElement(old) {
    }


    function getPageInfo() {
        console.log(document.getElementById('pageName').value + ' test');
        return {
            name: document.getElementById('pageName').value,
            description: document.getElementById('pageDescription').value,
            assignment_Id: currentAssignment
        }
    }

    function pageFunction() {
        let body = getPageInfo();
        let lastPart = '/';
        let method = 'POST';
        let urlStore = '{{ route('editor.page.store', 1) }}';
        if (document.getElementById('pageId')) {
            urlStore = urlStore + '/' + document.getElementById('pageId').value;
            method = 'PUT';
        }
        sendFetchTo(urlStore, body, method);
        document.getElementById('InputDeleteMeAfterDoneYes').remove();
    }

    function newElement() {

    }

    function editElement() {

    }

    function sendFetchTo(url, body, method) {
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
            .then((text) => console.log(text))
            .catch((error) => console.log(error));
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





