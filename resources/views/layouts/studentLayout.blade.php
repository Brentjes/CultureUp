@extends ('layouts.layout')

@section ('studentIcons')
    <li class="nav-item">
        <a class="nav-link icon custom-tooltip" href="/globe">
            <i class="fas fa-globe"></i>
            <span class="tooltiptext">Shows a globe that grants access to a collection of courses</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link icon custom-tooltip" href="/home">
            <i class="fas fa-tasks"></i>
            <span class="tooltiptext">Shows an overview of your in-progress courses</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link icon custom-tooltip" href="/leaderboard">
            <i class="fas fa-crown"></i>
            <span class="tooltiptext">View your score and other statistics</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link icon custom-tooltip" href="/notifications">
            <i class="fas fa-bell"></i><span class="badge badge-dark rounded-circle">5</span>
            <span class="tooltiptext">View all your messages</span>
        </a>
    </li>
@endsection
