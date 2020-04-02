@extends ('layouts.culture_up_layout')
@section ('content')
    <head>
        <link rel="stylesheet" type="text/css" href="student.css">
    </head>
    <section id="home">

        <div class="container-fluid text-center">
            <div class="card rounded text-center m-auto h-auto w-60">
                <div class="card-body p-0">
                    <h1 class="display-4 p-0 m-0"><b>Welcome</b></h1>
                </div>
            </div>
        </div>

        <div class="container-fluid text-center">
            <div class="row">
                <div class="col-8">

                    <div class="card text-center w-100 p-0 m-5 pr-0">
                        <div class="card-header d-block justify-content-center ribbon p-0">
                            <p class="ribbonText p-3 m-0">Progress</p>
                        </div>
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item ">
                                    <div class="row">
                                        <div class="col">
                                            <p class="display-5 mb-0 p-2">#1 German culture on the workfloor</p>
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
                                <li class="list-group-item ">
                                    <div class="row">
                                        <div class="col">
                                            <p class="display-5 mb-0 p-2">#2 Chinese culture on the workfloor</p>
                                        </div>
                                        <div class="col">
                                            <div  class="progress">
                                                <div class="progress-bar progress-bar-striped bg-info"
                                                     role="progressbar" style="width: 25%" aria-valuenow="25"
                                                     aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>

                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item ">
                                    <div class="row">
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

                <div class="col-3 w-100  pr-0">
                    <div class="card text-center w-100 p-0 m-5  pr-0">
                        <div class="card-header d-block justify-content-center ribbon p-0">
                            <p class="ribbonText p-3 m-0">News Feed</p>
                        </div>
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Cras justo odio</li>
                                <li class="list-group-item">Dapibus ac facilisis in</li>
                                <li class="list-group-item">Vestibulum at eros</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
