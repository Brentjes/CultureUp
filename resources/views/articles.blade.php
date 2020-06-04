@extends ('layouts.studentLayout')
@section ('content')
    <head>
        <link rel="stylesheet" type="text/css" href="public/css/Articles/article.css">
        <title>CultureUp - Articles</title>
    </head>
    <section id="home">

        <div class="container-fluid mt-2">
            <div class="wow fadeInUp card-columns mt-2">
                @foreach ($articles as $article)
                    <a href="{{ route('article.show', $article -> id) }}" class="custom-card">
                        <div class="card rounded text-center h-auto rounded softshadow">
                            <img class="img-fluid rounded" src="https://picsum.photos/id/{{$article->id}}/700">
                            <div class="card-body pb-0">
                                <div class="col text-left p-0">
                                    <h4 class="h4">{{$article->title}}</h4>
                                    <blockquote class="blockquote">
                                        <p class="h6 lead">{{$article->excerpt}}</p>
                                        <footer class="blockquote-footer pt-4">{{$article->user->name}}</footer>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
    </section>


    <section id="overlay">
        <div class="container-fluid text-center expand">
            <button id="viewMore" type="button text-center" class="btn btn-outline-secondary"
                    style="margin-top: 2px;"><span
                    class="material-icons btn">expand_more</span>
                View more
            </button>
            <hr>
            <h2 class="display-3">Your Articles<br>


                <button type="button text-center" class="btn btn-outline-info">
                    <a href="article/create">
                        Create Article
                    </a>
                </button>
            </h2>

            <div class="cards">
                <div class="wow fadeInUp card-columns d-inline-block">
                    @foreach ($articles->where('user_id' , Auth::user()->id) as $article)
                        <i href="{{ route('article.show', $article -> id) }}" class="custom-card">
                            <div class="card rounded text-center h-auto rounded softshadow">
                                <a href="article/{{$article->id}}/edit"><i class="fas fa-pencil-alt float-right m-2"></i></a>
                                <img class="img-fluid rounded" src="https://picsum.photos/id/{{$article->id}}/700">
                                <div class="card-body pb-0">
                                    <div class="col text-left p-0">
                                        <h4 class="h4">{{$article->title}}</h4>
                                        <blockquote class="blockquote">
                                            <p class="h6 lead">{{$article->excerpt}}</p>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
