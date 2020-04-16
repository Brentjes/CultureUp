@extends ('layouts.culture_up_layout')
@section ('content')
    <head>
        <link rel="stylesheet" type="text/css" href="/profile.css">
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
                                <p class="ribbonText text-center p-3 m-0">You</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <li class="list-group-item">
                            <div class="img-fluid pt-4 pb-5">
                                <img src="/default.jpg"
                                     style="width: 150px; height: 150px;">
                            </div>
                            <div class="row center-row text-left">
                                <div class="col">
                                    <p class="display-5 mb-0"><b>Name:</b> {{$user->name}}</p>
                                    <p class="display-5 mb-0"><b>Teacher:</b> Bugs Bunny</p>
                                    <p class="display-5 mb-0"><b>Country:</b> Bosnia Herzegovina</p>

                                </div>
                            </div>
                            <div class="row pt-4 center-row text-left">
                                <div class="col">
                                    <p class="display-5 mb-0"><b>Course:</b> English</p>
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
                        <div class="row d-flex justify-content-center">
                            <div class="col-auto text-left p-3">
                                <div class="img-fluid">
                                    <img src="/flags/PNG/70/the netherlands.png"
                                         style="width: 75px; height: auto;">
                                </div>
                            </div>
                            <div class="col-auto text-left p-3">
                                <div class="img-fluid">
                                    <img src="/flags/PNG/70/botswana.png"
                                         style="width: 75px; height: auto;">
                                </div>
                            </div>
                            <div class="col-auto text-left p-3">
                                <div class="img-fluid">
                                    <img src="/flags/PNG/70/ukraine.png"
                                         style="width: 75px; height: auto;">
                                </div>
                            </div>
                            <div class="col-auto text-left p-3">
                                <div class="img-fluid">
                                    <img src="/flags/PNG/70/russia.png"
                                         style="width: 75px; height: auto;">
                                </div>
                            </div>
                            <div class="col-auto text-left p-3">
                                <div class="img-fluid">
                                    <img src="/flags/PNG/70/spain.png"
                                         style="width: 75px; height: auto;">
                                </div>
                            </div>
                            <div class="col-auto text-left p-3">
                                <div class="img-fluid">
                                    <img src="/flags/PNG/70/luxembourg.png"
                                         style="width: 75px; height: auto;">
                                </div>
                            </div>
                            <div class="col-auto text-left p-3">
                                <div class="img-fluid">
                                    <img src="/flags/PNG/70/bhutan.png"
                                         style="width: 75px; height: auto;">
                                </div>
                            </div>
                            <div class="col-auto text-left p-3">
                                <div class="img-fluid">
                                    <img src="/flags/PNG/70/belgium.png"
                                         style="width: 75px; height: auto;">
                                </div>
                            </div>
                            <div class="col-auto text-left p-3">
                                <div class="img-fluid">
                                    <img src="/flags/PNG/70/rwanda.png"
                                         style="width: 75px; height: auto;">
                                </div>
                            </div>
                            <div class="col-auto text-left p-3">
                                <div class="img-fluid">
                                    <img src="/flags/PNG/70/austria.png"
                                         style="width: 75px; height: auto;">
                                </div>
                            </div>
                            <div class="col-auto text-left p-3">
                                <div class="img-fluid">
                                    <img src="/flags/PNG/70/croatia.png"
                                         style="width: 75px; height: auto;">
                                </div>
                            </div>
                            <div class="col-auto text-left p-3">
                                <div class="img-fluid">
                                    <img src="/flags/PNG/70/slovakia.png"
                                         style="width: 75px; height: auto;">
                                </div>
                            </div>
                            <div class="col-auto text-left p-3">
                                <div class="img-fluid">
                                    <img src="/flags/PNG/70/tanzania.png"
                                         style="width: 75px; height: auto;">
                                </div>
                            </div>
                            <div class="col-auto text-left p-3">
                                <div class="img-fluid">
                                    <img src="/flags/PNG/70/hungary.png"
                                         style="width: 75px; height: auto;">
                                </div>
                            </div>
                            <div class="col-auto text-left p-3">
                                <div class="img-fluid">
                                    <img src="/flags/PNG/70/belarus.png"
                                         style="width: 75px; height: auto;">
                                </div>
                            </div>
                            <div class="col-auto text-left p-3">
                                <div class="img-fluid">
                                    <img src="/flags/PNG/70/antigua and barbuda.png"
                                         style="width: 75px; height: auto;">
                                </div>
                            </div>
                            <div class="col-auto text-left p-3">
                                <div class="img-fluid">
                                    <img src="/flags/PNG/70/grenada.png"
                                         style="width: 75px; height: auto;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
