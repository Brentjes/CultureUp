@extends ('layouts.culture_up_layout')
@section ('content')
    <head>
        <link rel="stylesheet" type="text/css" href="student.css">
        <title>CultureUp - Home</title>
    </head>

    <section id="studentpage">
        <div class="container-fluid text-center p-0">
            <div class="card w-100 h-auto">
                <div class="row d-flex justify-content-center">
                    <div class="col">
                        <h1 class="display-3 p-4 lead text-left ml-7">Welcome, J. Doe</h1>
                    </div>
                    <div class="col text-right mr-10">
                        <img class="img-fluid" style="width:25vw; height: auto" src="/cultureuplogo.png">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-7">

                    <div class="card rounded text-center w-100 p-0 m-5 pr-0">
                        <div class="card-header d-block justify-content-center ribbon p-0">
                            <div class="row">
                                <div class="col">
                                    <p class="ribbonText text-left p-3 m-0">Progress</p>
                                </div>
                                <div class="col text-right">
                                    <div class="p-3 pr-5 d-block justify-content-center">
                                        <a href="/assignments" id="button" aria-describedby="tooltip">
                                            <i class="fas fa-th icon hoverText ribbonText"></i>
                                        </a>
                                        <div id="tooltip" role="tooltip">
                                            View all assignments
                                            <div id="arrow" data-popper-arrow></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <div class="row p-3 center-row">
                                        <div class="col">
                                            <p class="display-5 mb-0">#1 German culture on the workfloor</p>
                                        </div>
                                        <div class="col">
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-striped bg-info"
                                                     role="progressbar" style="width: 50%" aria-valuenow="50"
                                                     aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="row p-3 center-row">
                                        <div class="col">
                                            <p class="display-5 mb-0">#2 Chinese culture on the workfloor</p>
                                        </div>
                                        <div class="col">
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-striped bg-info"
                                                     role="progressbar" style="width: 25%" aria-valuenow="25"
                                                     aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>

                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="row p-3 center-row">
                                        <div class="col">
                                            <p class="display-5 mb-0">#3 English culture on the workfloor</p>
                                        </div>
                                        <div class="col">
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-striped bg-info"
                                                     role="progressbar" style="width: 75%" aria-valuenow="75"
                                                     aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-4 w-100 pr-0 h-100">
                    <div class="card rounded  text-center w-100 h-75 p-0 m-5  pr-0">
                        <div class="card-header d-block justify-content-center ribbon p-0 ">
                            <p class="ribbonText p-3 m-0">News Feed</p>
                        </div>
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <a class="list-group-item article" href="/article">
                                    <div class="row">
                                        <div class="col text-left pr-0">
                                            <div class="img-fluid">
                                                <img class="rounded" src="/https://picsum.photos/id/250/1080/1080"
                                                     style="width: 150px; height: 150px;">
                                            </div>
                                        </div>
                                        <div class="col text-left pl-0">
                                            <h4 class="h4">Header</h4>
                                            <blockquote class="blockquote">
                                                <p class="h6 lead">Excerpt text goes here...</p>
                                                <footer class="blockquote-footer">Author?</footer>
                                            </blockquote>
                                        </div>
                                    </div>
                                </a>

                                <a class="list-group-item article" href="/article">
                                    <div class="row">
                                        <div class="col text-left pr-0">
                                            <div class="img-fluid">
                                                <img class="rounded" src="/https://picsum.photos/id/255/1080/1080"
                                                     style="width: 150px; height: 150px;">
                                            </div>
                                        </div>
                                        <div class="col text-left pl-0">
                                            <h4 class="h4">Header</h4>
                                            <blockquote class="blockquote">
                                                <p class="h6 lead">Excerpt text goes here...</p>
                                                <footer class="blockquote-footer">Author?</footer>
                                            </blockquote>
                                        </div>
                                    </div>
                                </a>

                                <a class="list-group-item article" href="/article">
                                    <div class="row">
                                        <div class="col text-left pr-0">
                                            <div class="img-fluid">
                                                <img class="rounded" src="/https://picsum.photos/id/260/1080/1080"
                                                     style="width: 150px; height: 150px;">
                                            </div>
                                        </div>
                                        <div class="col text-left pl-0">
                                            <h4 class="h4">Header</h4>
                                            <blockquote class="blockquote">
                                                <p class="h6 lead">Excerpt text goes here...</p>
                                                <footer class="blockquote-footer">Author?</footer>
                                            </blockquote>
                                        </div>
                                    </div>
                                </a>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
