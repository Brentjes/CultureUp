

<div style="z-index: -3;">
@foreach($page->elements as $element)
    @include('BookEngine.element', compact('element'))
@endforeach
</div>
