<head>
    <link rel="stylesheet" type="text/css" href="/css/teacher/profile.css">
    <title>CultureUp - Profile</title>
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
                        @yield ('profile')
                    </div>
                </div>
</section>
