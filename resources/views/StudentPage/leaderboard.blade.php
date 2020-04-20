@extends ('layouts.culture_up_layout')
@section ('content')

    <head>
        <link rel="stylesheet" type="text/css" href="/profile.css">
        <title>CultureUp - Leaderboard</title>
    </head>

    <section id="studentpage">
        <div class="container d-flex justify-content-center text-center">
            <div class="row pt-5">
                <div class="col">
                    <div class="card text-center rounded p-0">
                        <div class="card-header d-block justify-content-center ribbon p-0">
                            <div class="row">
                                <div class="col">
                                    <p class="ribbonText text-center p-3 m-0">On top of the woooorld~</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <img class="rounded w-100" src="/scuffedGlobe.png"
                                 style="width: 25vw; height: auto;">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
