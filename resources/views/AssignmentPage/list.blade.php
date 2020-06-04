@extends ('layouts.layout')
@section('title', 'List')
@section('content')


    <section id="home">
        <div class="container-fluid cards">
            <div class="wow fadeInUp card-columns d-inline-block">
                @foreach($assignments as $assignment)
                    <a href="#" class="custom-card">
                        <div class="card rounded text-center h-auto rounded softshadow">
                            <img class="img-fluid rounded" src="https://picsum.photos/id/{{$assignment->id}}/700">
                            <div class="card-body pb-0">
                                <div class="col text-left p-0">
                                    <h4 class="h4">{{$assignment->name}}</h4>
                                    <blockquote class="blockquote">
                                        <p class="h6 lead">{{$assignment->subject}}</p>
                                        <footer class="blockquote-footer pt-4">Author</footer>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
    </section>
@endsection
