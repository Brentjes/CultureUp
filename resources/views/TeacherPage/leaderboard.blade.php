@extends ('layouts.teacherLayout')
@extends ('layouts.leaderboard')
@section ('leaderboard')

    <div class="container-fluid">
        <div class="row text-center justify-content-center">
            <div class="col-2 pt-10 h-15">
                <div class="animated fadeInUp">
                    <i class="fas fa-crown silver mt-4"></i>
                    <p class="podiumfont lineheight-min">Rimmert</p>
                </div>
            </div>
            <div class="col-2 h-15">
                <div class="animated fadeInUp">
                    <i class="fas fa-crown gold mt-4"></i>
                    <p class="podiumfont lineheight-min">Bugslayer</p>
                </div>
            </div>
            <div class="col-2 pt-20 h-15">
                <div class="animated fadeInUp">
                    <i class="fas fa-crown bronze mt-4"></i>
                    <p class="podiumfont lineheight-min">Loek</p>
                </div>
            </div>
        </div>
        <div class="row text-center justify-content-center" style="height: 25vh;">
            <div class="col-2 pt-10 bar">
                <div class="softshadow w-100 h-100 rounded"></div>
            </div>
            <div class="col-2 bar">
                <div class="softshadow w-100 h-100 rounded"></div>
            </div>
            <div class="col-2 pt-20 bar h-100">
                <div class="softshadow w-100 h-100 rounded"></div>
            </div>
        </div>
@endsection
