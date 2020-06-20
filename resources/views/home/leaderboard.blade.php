@extends ('layouts.layout')
@section('title', 'Leaderboard')
@section ('content')
<head>
    <link rel="stylesheet" type="text/css" href="/css/Main/leaderboard.css">
</head>
        <section id="content">
            <div class="container-fluid">
                <div class="row text-center justify-content-center">
                    <div class="col-2 pt-10 h-15">
                        <div class="animated fadeInUp">
                            <i class="fas fa-crown silver mt-5"></i>
                            <p class="podiumfont lineheight-min">{{$students[2]?$students[2]->user->name:''}}</p>
                        </div>
                    </div>
                    <div class="col-2 h-15">
                        <div class="animated fadeInUp">
                            <i class="fas fa-crown gold mt-5"></i>
                            <p class="podiumfont lineheight-min">{{$students[0]?$students[0]->user->name:''}}</p>
                        </div>
                    </div>
                    <div class="col-2 pt-20 h-15">
                        <div class="animated fadeInUp">
                            <i class="fas fa-crown bronze mt-5"></i>
                            <p class="podiumfont lineheight-min">{{$students[1]?$students[1]->user->name:''}}</p>
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
            </div>
            <div class="row">
                <div class="card rounded text-center w-100 p-0 pr-0 softshadow">
                    <div class="card-header d-block justify-content-center ribbon p-0">
                        <div class="row">
                            <div class="col">
                                <p class="ribbonText text-center p-3 m-0">Leaderboard</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <table class="table text-center table-bordered">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Course</th>
                                <th scope="col">Score</th>
                            </tr>
                            </thead>
                            <tbody>
                            </tbody>
                            <?php $i = 1; ?>
                            @foreach($students as $student)
                            <tr>
                                <th scope="row"><?php echo $i ?></th>
                                <td>{{$student->user->name}}</td>
                                <td>{{$student->course?$student->course->name:''}}</td>

                                <td>{{$student->score}}</td>
                            </tr>
                                <?php $i++ ?>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
@endsection
