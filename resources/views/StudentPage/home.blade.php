@extends ('layouts.layout')
@section ('content')
    <head>
        <link rel="stylesheet" type="text/css" href="/css/student/home.css">
        <title>CultureUp - Home</title>
    </head>

    <section id="studentpage">
        <div class="container-fluid text-center p-0">

            <div class="card w-100 h-auto">
                <div class="row my-auto">
                    <div class="col pl-5 mt-5 mb-5 my-auto">
                        <h1 class="display-3 lead text-left" style="font-size:4vw"> Welcome, J. Doe</h1>
                    </div>
                    <div class="col mr-20 text-center mt-5 mb-5">
                        <img id="logo" class="img-fluid switch" style="width:25vw; height: auto" src="/images/logoLight.png">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-7 mt-5 ml-5 mr-5 pl-0 pr-0">
                    <div class="card rounded w-100 p-0">
                        <div class="card-header ribbon p-0" style="padding-right: 4px;">
                            <div class="row justify-content-between w-100 p-3 m-0">
                                <div class="col-4 my-auto">
                                    <p class="ribbonText text-left mb-0">Progress</p>
                                </div>
                                <div class="col-1 my-auto">
                                    <a class="custom-tooltip icon" href="/articles">
                                        <i class="fas fa-ellipsis-h hoverText ribbonText"></i>
                                        <span class="tooltiptext">View all assignments</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                               @foreach($assignments as $assignment)
                                <li class="list-group-item">
                                    <div class="row p-3 center-row">
                                        <div class="col">
                                            <p class="display-5 mb-0"><a href="#" class="display-5 mb-0">#{{$assignment->id}} {{$assignment->name}}</a></p>
                                        </div>
                                        <div class="col">
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-striped bg-info"
                                                     role="progressbar" style="width: 50%" aria-valuenow="75"
                                                     aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                @endforeach

                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-4 w-100 h-100 mt-5 pl-0 pr-0">
                    <div class="card rounded  text-center w-100 h-75 p-0">
                        <div class="card-header my-auto ribbon p-0 ">
                            <p class="ribbonText p-3 m-0">News Feed</p>
                        </div>
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <a class="list-group-item article" href="/article">
                                    <div class="row">
                                        <div class="col text-left pr-0">
                                            <div class="img-fluid">
                                                <img class="rounded" src="https://picsum.photos/id/250/1080/1080"
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
                                                <img class="rounded" src="https://picsum.photos/id/255/1080/1080"
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
                                                <img class="rounded" src="https://picsum.photos/id/260/1080/1080"
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
