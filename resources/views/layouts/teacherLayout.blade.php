<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    {{--fonts--}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
          rel="stylesheet">
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
            integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ"
            crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"
            integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY"
            crossorigin="anonymous"></script>

    {{--css--}}
    <link rel="stylesheet" type="text/css" href="/MDB/css/mdb.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/proto.css">

    {{--JQuery--}}
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
</head>

<body>
<nav class="navbar fixed-top navbar-expand-md softshadow">
    <a class="navbar-brand" href="/teacherhome">CultureUp<b class="teachercolor">: Teacher</b></a>
    <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="main-navigation">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link icon custom-tooltip" href="/teacherhome">
                    <i class="fas fa-globe"></i>
                    <span class="tooltiptext">Shows an overview of your in-progress courses</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link icon custom-tooltip" href="/teacherleaderboard">
                    <i class="fas fa-chart-bar"></i>
                    <span class="tooltiptext">View your score and other statistics</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link icon custom-tooltip" href="/teachernotifications">
                    <i class="fas fa-bell"></i>
                    <span class="tooltiptext">View all your messages</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link icon custom-tooltip" href="/editor">
                    <i class="fas fa-pencil-alt"></i>
                    <span class="tooltiptext">Make a new course</span>
                </a>
            </li>

            <li class="nav-item">
                <div class="dropdown show">
                    <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false">
                        <img class="rounded-circle user-icon" src="/default.jpg">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                        <p class="dropdown-item dropdown-item-text disabled">J. Doe</p>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/teacherprofile"><i class="fas fa-user"></i> Profile</a>
                        <a class="dropdown-item" href="/logout"><i class="fas fa-sign-out-alt text-danger"></i> Log out</a>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</nav>

@yield ('content')

{{--Bootstrap--}}
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>

{{--Animations setup and initialisation--}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/web-animations/2.2.2/web-animations.min.js"></script>
<script type="text/javascript" src="/MDB/js/mdb.min.js"></script>
<script> new WOW().init();</script>
<script src="/app.js"></script>
</body>
</html>
