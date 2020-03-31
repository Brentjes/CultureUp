

<div>
@foreach($Page->Elements as $element)
    @include('BookEngine.element', compact('element'))
@endforeach
</div>
