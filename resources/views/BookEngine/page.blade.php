

<div style="z-index: -3; display: inline">
@foreach($page->elements as $element)
    @include('BookEngine.element', compact('element'))
@endforeach
</div>
