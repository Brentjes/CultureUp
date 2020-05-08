@extends ('layouts.teacherLayout')
@extends ('layouts.home')
@section ('home')

            <div class="row">
                <div class="col-5 w-100 pr-0 h-100">
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

                <div class="col-6">
                    <div class="card rounded text-center w-100 p-0 m-5 pr-0">
                        <div class="card-header d-block justify-content-center ribbon p-0">
                            <div class="row">
                                <div class="col">
                                    <p class="ribbonText text-left p-3 m-0">Your top 3 most viewed courses</p>
                                </div>
                                <div class="col text-right">
                                    <div class="p-3 pr-5 d-block justify-content-center">
                                        <a class="custom-tooltip icon" href="/assignments" title=>
                                            <i class="fas fa-th hoverText ribbonText"></i>
                                            <span class="tooltiptext">View all your courses</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <div class="row p-3 center-row">
                                        <div class="col">
                                            <p class="display-5 mb-0"><b>#1 Chinese culture on the workfloor</b></p>
                                            <p class="display-5 mb-0">105 views</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="row p-3 center-row">
                                        <div class="col">
                                            <p class="display-5 mb-0"><b>#2 Dutch culture on the workfloor</b></p>
                                            <p class="display-5 mb-0">54 views</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="row p-3 center-row">
                                        <div class="col">
                                            <p class="display-5 mb-0"><b>#3 English culture on the workfloor</b></p>
                                            <p class="display-5 mb-0">25 views</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="row p-3 center-row">
                                        <div class="col">
                                            <a href="/editor" class="display-5 mb-0">
                                                <button type="button" class="btn btn-success">Create new case</button>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

@endsection
