@extends ('layouts.layout')
@section ('content')

    <head>
        <link rel="stylesheet" type="text/css" href="/css/main/error.css">
        <title>CultureUp - 404</title>
    </head>

    <div id="studentpage">
        <div class="container">
            <div class="row">
                <div class="card rounded text-center w-100 h-75 p-0 mt-5">
                    <div class="card-header d-block justify-content-center ribbon p-0">
                        <p class="ribbonText p-3 m-0">We could not find your destination, sorry!</p>
                    </div>
                    <div class="card-body">
                        <div class="row d-flex justify-content-left">
                            <h3 class="pt-3 pl-5 p-1 m-0" style="color: rgba(69,86,95,0.35)">Error:</h3>
                            <h3 class="pt-3 p-1 m-0" style="color: rgba(35,156,205,0.69)">404</h3>
                        </div>
                        <div class="row d-flex justify-content-left">
                            <h2 class="pl-5 m-0">Try these destinations instead:</h2>
                        </div>
                        <div class="row center-row text-left p-5">
                            <div class="col">
                                <a href="/home">
                                    <p class="">-home</p>
                                </a>
                                <a href="/home">
                                    <p>-assignment</p>
                                </a>
                                <a href="/home">
                                    <p>-home</p>
                                </a>
                                <a href="/home">
                                    <p>-home</p>
                                </a>
                                <a href="/home">
                                    <p>-home</p>
                                </a>
                            </div>
{{--                            <div class="col mr-20 text-right mt-5 mb-5">--}}
{{--                                <img id="logo" class="img-fluid switch" style="width:25vw; height: auto" src="/images/logoLight.png">--}}
{{--                            </div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </section>
@endsection
