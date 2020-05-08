@extends ('layouts.layout')
@section ('teacher')
<b class="teachercolor">: Teacher</b></a>
@endsection

            @section ('teacherIcons')
            <li class="nav-item">
                <a class="nav-link icon custom-tooltip" href="/teacherhome">
                    <i class="fas fa-globe"></i>
                    <span class="tooltiptext">Shows an overview of your made courses</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link icon custom-tooltip" href="/teacherleaderboard">
                    <i class="fas fa-crown"></i>
                    <span class="tooltiptext">View your students scores and other statistics</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link icon custom-tooltip" href="/assignment/editor/currentPage/1/page/2">
                    <i class="fas fa-pencil-alt"></i>
                    <span class="tooltiptext">Make a new course</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link icon custom-tooltip" href="/teachernotifications">
                    <i class="fas fa-bell"></i><span class="badge badge-dark rounded-circle">1</span>
                    <span class="tooltiptext">View all your messages</span>
                </a>
            </li>
            @endsection

@yield ('content')
