@extends ('layouts.layout')
@section('title', $user->name)
@section ('content')
    <head>
        <link rel="stylesheet" type="text/css" href="/css/Teacher/profile.css">

    </head>


    <section id="studentpage">
        <div class="container">
            <div class="row">
                <div class="col-5">
                    <div class="card rounded text-center w-100 p-0 m-5">
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
                                    <img class="rounded" src="/images/default.jpg"
                                         style="width: 15vw; height: auto;">
                                </div>
                                <div class="row center-row text-left">
                                    <div class="col">
                                        <p class="display-5 display-sm-3 display-m-4 display-md-5 mb-0">
                                            <b>Name:</b> {{$user->name}}</p>
                                        <p class="display-5 mb-0"><b>Teacher:</b>
                                            @foreach($user->student?($user->student->course?$user->student->course->teachers:[]):[] as $teacher)
                                                {{$teacher->user->name}}
                                            @endforeach</p>
                                        <p class="display-5 mb-0"><b>Country:</b> the Netherlands</p>

                                    </div>
                                </div>
                                <div class="row pt-4 center-row text-left">
                                    <div class="col">
                                        <p class="display-5 mb-0"><b>Course:</b> {{$user->student?$user->student->course?$user->student->course->name:'No Course':'No Course'}}</p>
                                    </div>
                                </div>
                            </li>
                        </div>
                    </div>
                </div>

                <div class="col-7 h-100 pl-5">
                    <div class="card rounded text-center w-100 h-75 p-0 m-5">
                        <div class="card-header d-block justify-content-center ribbon p-0 ">
                            <p class="ribbonText p-3 m-0">Badges</p>
                        </div>
                        <div class="card-body">
                            <div class="row d-flex justify-content-center">
                                <div class="col-auto text-left p-3">
                                    <div class="img-fluid">
                                        <img class="flag softshadow" src="/flags/PNG/70/the netherlands.png">
                                    </div>
                                </div>
                                <div class="col-auto text-left p-3">
                                    <div class="img-fluid">
                                        <img class="flag softshadow" src="/flags/PNG/70/belgium.png">
                                    </div>
                                </div>
                                <div class="col-auto text-left p-3">
                                    <div class="img-fluid">
                                        <img class="flag softshadow" src="/flags/PNG/70/germany.png">
                                    </div>
                                </div>
                                <div class="col-auto text-left p-3">
                                    <div class="img-fluid">
                                        <img class="flag softshadow" src="/flags/PNG/70/austria.png">
                                    </div>
                                </div>
                                <div class="col-auto text-left p-3">
                                    <div class="img-fluid">
                                        <img class="flag softshadow" src="/flags/PNG/70/japan.png">
                                    </div>
                                </div>
                                <div class="col-auto text-left p-3">
                                    <div class="img-fluid">
                                        <img class="flag softshadow" src="/flags/PNG/70/china.png">
                                    </div>
                                </div>
                                <div class="col-auto text-left p-3">
                                    <div class="img-fluid">
                                        <img class="flag softshadow" src="/flags/PNG/70/croatia.png">
                                    </div>
                                </div>
                                <div class="col-auto text-left p-3">
                                    <div class="img-fluid">
                                        <img class="flag softshadow" src="/flags/PNG/70/rwanda.png">
                                    </div>
                                </div>
                                <div class="col-auto text-left p-3">
                                    <div class="img-fluid">
                                        <img class="flag softshadow" src="/flags/PNG/70/greece.png">
                                    </div>
                                </div>
                                <div class="col-auto text-left p-3">
                                    <div class="img-fluid">
                                        <img class="flag softshadow" src="/flags/PNG/70/russia.png">
                                    </div>
                                </div>
                                <div class="col-auto text-left p-3">
                                    <div class="img-fluid">
                                        <img class="flag softshadow" src="/flags/PNG/70/belarus.png">
                                    </div>
                                </div>
                                <div class="col-auto text-left p-3">
                                    <div class="img-fluid">
                                        <img class="flag softshadow" src="/flags/PNG/70/sweden.png">
                                    </div>
                                </div>
                                <div class="col-auto text-left p-3">
                                    <div class="img-fluid">
                                        <img class="flag softshadow" src="/flags/PNG/70/finland.png">
                                    </div>
                                </div>
                                <div class="col-auto text-left p-3">
                                    <div class="img-fluid">
                                        <img class="flag softshadow" src="/flags/PNG/70/ukraine.png">
                                    </div>
                                </div>
                                <div class="col-auto text-left p-3">
                                    <div class="img-fluid">
                                        <img class="flag softshadow" src="/flags/PNG/70/bosnia and herzegovina.png">
                                    </div>
                                </div>
                                <div class="col-auto text-left p-3">
                                    <div class="img-fluid">
                                        <img class="flag softshadow" src="/flags/PNG/70/taiwan.png">
                                    </div>
                                </div>
                                <div class="col-auto text-left p-3">
                                    <div class="img-fluid">
                                        <img class="flag softshadow" src="/flags/PNG/70/mongolia.png">
                                    </div>
                                </div>
                                <div class="col-auto text-left p-3">
                                    <div class="img-fluid">
                                        <img class="flag softshadow" src="/flags/PNG/70/tanzania.png">
                                    </div>
                                </div>
                                <div class="col-auto text-left p-3">
                                    <div class="img-fluid">
                                        <img class="flag softshadow" src="/flags/PNG/70/egypt.png">
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
