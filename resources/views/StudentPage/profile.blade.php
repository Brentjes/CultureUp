@extends ('layouts.culture_up_layout')
@section ('content')
    <head>
        <link rel="stylesheet" type="text/css" href="profile.css">
        <title>CultureUp - Profile</title>
    </head>

    {{--    <h1>/-=óÒÓwÒÓò=-\</h1>--}}

    <section id="studentpage">
        <div class="row">
            <div class="col-5">

                <div class="card rounded text-center w-100 p-0 m-5 pr-0">
                    <div class="card-header d-block justify-content-center ribbon p-0">
                        <div class="row">
                            <div class="col">
                                <p class="ribbonText text-left p-3 m-0">You</p>
                            </div>
                            <div class="col text-right">
                                <div class="p-3 pr-5 d-block justify-content-center">
                                    <div id="tooltip" role="tooltip">
                                        View all assignments
                                        <div id="arrow" data-popper-arrow></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <li class="list-group-item">
                            <div class="row p-3 center-row">
                                <div class="col">
                                    <p class="display-5 mb-0">Course:</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
{{--                                    <div class="progress">--}}
{{--                                        <div class="progress-bar progress-bar-striped bg-info"--}}
{{--                                             role="progressbar" style="width: 75%" aria-valuenow="75"--}}
{{--                                             aria-valuemin="0" aria-valuemax="100">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
                                    <h1>UwU</h1>
                                </div>
                            </div>
                        </li>
                    </div>
                </div>
            </div>
            <div class="col-6 w-100 pr-0 h-100">
                <div class="card rounded  text-center w-100 h-75 p-0 m-5  pr-0">
                    <div class="card-header d-block justify-content-center ribbon p-0 ">
                        <p class="ribbonText p-3 m-0">Badges</p>
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
                                </div>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
