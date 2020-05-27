@extends ('layouts.studentLayout')
@section ('content')
    <head>
        <link rel="stylesheet" type="text/css" href="public/css/Articles/article.css">
        <title>CultureUp - Assignments</title>
    </head>
    <section id="home">

        <div class="container-fluid cards">
            <div class="wow fadeInUp card-columns d-inline-block">
                @foreach ($articles as $article)
                    <a href="{{ route('article.show', $article -> id) }}" class="custom-card">
                        <div class="card rounded text-center h-auto rounded softshadow">
                            <img class="img-fluid rounded" src="https://picsum.photos/id/{{$article->id}}/700">
                            <div class="card-body pb-0">
                                <div class="col text-left p-0">
                                    <h4 class="h4">{{$article->title}}</h4>
                                    <blockquote class="blockquote">
                                        <p class="h6 lead">{{$article->excerpt}}</p>
                                        <footer class="blockquote-footer pt-4">{{Auth::user()->name}}</footer>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
    </section>
    <section id="overlay">
        <div class="container text-center expand">
            <button id="viewMore" type="button text-center" class="btn btn-outline-secondary"><span
                    class="material-icons btn">expand_more</span>
                View more
            </button>
            <hr>
            <h2 class="display-3">Lorem Ipsum <br>
{{--                <button class="btn btn-outline-info text-center">--}}
{{--                    <a href="article/create">--}}
{{--                        Create--}}
{{--                    </a>--}}
{{--                </button>--}}

                <button type="button text-center" class="btn btn-outline-info">
                    <a href="article/create">
                        Create Article
                    </a>
                </button>
            </h2>
            <p class="text-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc rhoncus nisl eu pharetra
                convallis.
               <br><br>

                Vestibulum commodo in lorem at gravida. Suspendisse feugiat in risus et mollis. In magna arcu, facilisis
                in nunc sed, pulvinar ullamcorper lorem. Nulla facilisi. Suspendisse accumsan enim quis mi pretium
                tristique nec in eros. Donec quis nulla nec felis pellentesque fermentum. Phasellus faucibus laoreet
                ante vel scelerisque. Sed ut tincidunt purus. Phasellus euismod ipsum velit, eget fermentum justo
                molestie sed. Aenean non condimentum justo, auctor pulvinar tortor.</p>
        </div>
    </section>
@endsection
