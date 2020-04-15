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
                                    <p>UwU</p>
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
                        <div class="row">
                            <div class="col-auto text-left pr-3">
                                <div class="img-fluid">
                                    <img src="/flags/PNG/70/bhutan.png"
                                         style="width: 75px; height: auto;">
                                </div>
                            </div>
                            <div class="col-auto text-left pr-3">
                                <div class="img-fluid">
                                    <img src="/flags/PNG/70/botswana.png"
                                         style="width: 75px; height: auto;">
                                </div>
                            </div>
                            <div class="col-auto text-left pr-3">
                                <div class="img-fluid">
                                    <img src="/flags/PNG/70/ukraine.png"
                                         style="width: 75px; height: auto;">
                                </div>
                            </div>
                            <div class="col-auto text-left pr-3">
                                <div class="img-fluid">
                                    <img src="/flags/PNG/70/russia.png"
                                         style="width: 75px; height: auto;">
                                </div>
                            </div>
                            <div class="col-auto text-left pr-3">
                                <div class="img-fluid">
                                    <img src="/flags/PNG/70/somalia.png"
                                         style="width: 75px; height: auto;">
                                </div>
                            </div>
                            <div class="col-auto text-left pr-3">
                                <div class="img-fluid">
                                    <img src="/flags/PNG/70/rwanda.png"
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
