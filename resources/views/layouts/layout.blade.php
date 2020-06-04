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
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
          rel="stylesheet">

    {{-- Font Awesome JS --}}
    <script src="https://kit.fontawesome.com/5b65a26ca8.js" crossorigin="anonymous"></script>

    {{--css--}}
    <link rel="stylesheet" type="text/css" href="/MDB/css/mdb.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/css/Main/main.css">

    <link id="dynamic-style" rel="stylesheet" type="text/css" href="">

    {{--JQuery--}}
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>

    {{--Bootstrap--}}
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
            integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
            crossorigin="anonymous"></script>

</head>

<body>
<nav class="navbar fixed-top navbar-expand softshadow">
    <a class="navbar-brand" href="/">CultureUp</a>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link icon custom-tooltip" href="/home">
                <i class="fas fa-home"></i>
                <span class="tooltiptext">Sends you to the homepage</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link icon custom-tooltip" href="/globe">
                <i class="fas fa-globe-americas"></i>
                <span class="tooltiptext">Shows a globe that grants access to a collection of courses</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link icon custom-tooltip" href="/leaderboard">
                <i class="fas fa-crown"></i>
                <span class="tooltiptext">View your score and other statistics</span>
            </a>
        </li>
        <li class="nav-item">
            <div class="dropdown show">
                <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                   aria-expanded="false">
                    <img class="rounded-circle user-icon" src="/images/default.jpg">
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                    <p class="dropdown-item dropdown-item-text disabled">{{\Auth::user()->name}}</p>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/profile"><i class="fas fa-user"></i> Profile</a>
                    <a class="dropdown-item" href="#" id="toggle-button"><i id="toggleLightIcon"
                                                                            class="fas fa-moon"></i><span
                            id="toggle-button-text"> Dark mode</span></a>
                    <a class="dropdown-item" href="/logout"><i class="fas fa-sign-out-alt text-danger"></i> Log out</a>
                </div>
            </div>
        </li>
    </ul>
</nav>

@yield ('content')

{{--Animations setup and initialisation--}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/web-animations/2.2.2/web-animations.min.js"></script>
<script type="text/javascript" src="/MDB/js/mdb.min.js"></script>
<script> new WOW().init();</script>
<script src="/app.js"></script>
</body>
</html>
