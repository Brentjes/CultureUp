

<div>
@foreach($page->elements as $element)
    @include('BookEngine.element', compact('element'))
@endforeach
</div>
