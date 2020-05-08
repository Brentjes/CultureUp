@extends ('layouts.layout')
@section ('content')
    <head>
        <title>CultureUp - Assignments</title>
    </head>
    <section id="home">

        <div class="container-fluid cards">
            <div class="wow fadeInUp card-columns">
                @foreach ($articles as $article)
                    <a href="/case" class="custom-card">
                        <div class="card rounded text-center h-auto rounded softshadow">
                            <img class="img-fluid rounded" src="https://picsum.photos/id/{{$article->id}}/700">
                            <div class="card-body pb-0">
                                <div class="col text-left p-0">
                                    <h4 class="h4">{{$article->title}}</h4>
                                    <blockquote class="blockquote">
                                        <p class="h6 lead">{{$article->excerpt}}</p>
                                        <footer class="blockquote-footer pt-4">Author</footer>
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
            <h2 class="display-3">Lorem Ipsum</h2>
            <p class="text-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc rhoncus nisl eu pharetra
                convallis.
                Suspendisse ac accumsan leo, tristique molestie risus. Praesent accumsan magna vel ipsum condimentum, ut
                feugiat enim volutpat. Donec ut euismod nisl, in ullamcorper quam. Cras interdum cursus velit nec
                volutpat. Vivamus facilisis risus tellus, eget blandit orci lacinia id. Nulla fringilla sapien eget nisi
                venenatis, non ullamcorper sapien porta. Aenean imperdiet, mi ac congue pellentesque, eros elit
                facilisis ligula, vitae ullamcorper mi ligula vel odio. Vivamus elementum egestas ante et convallis. Nam
                accumsan gravida sagittis. Fusce elit odio, vestibulum efficitur auctor et, vulputate sed mi.<br><br>

                Phasellus ornare rutrum orci facilisis sagittis. Sed et condimentum tortor, at imperdiet mi. Praesent
                commodo condimentum augue ac aliquet. Donec magna ligula, sodales eu est ac, venenatis elementum ex.
                Donec ut sem ipsum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos
                himenaeos. Interdum et malesuada fames ac ante ipsum primis in faucibus. Phasellus rutrum dignissim
                tincidunt. Suspendisse potenti. Praesent ultricies pellentesque suscipit. Nam sodales risus sem, sed
                rhoncus ante porta sed. Vestibulum risus tortor, tempor quis condimentum ut, dignissim vitae libero.
                Curabitur fermentum nunc vitae tincidunt suscipit. Mauris venenatis elit eget ex gravida
                scelerisque.<br><br>

                Vestibulum commodo in lorem at gravida. Suspendisse feugiat in risus et mollis. In magna arcu, facilisis
                in nunc sed, pulvinar ullamcorper lorem. Nulla facilisi. Suspendisse accumsan enim quis mi pretium
                tristique nec in eros. Donec quis nulla nec felis pellentesque fermentum. Phasellus faucibus laoreet
                ante vel scelerisque. Sed ut tincidunt purus. Phasellus euismod ipsum velit, eget fermentum justo
                molestie sed. Aenean non condimentum justo, auctor pulvinar tortor.</p>
        </div>
    </section>
@endsection
