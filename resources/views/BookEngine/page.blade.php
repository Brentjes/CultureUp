@foreach($page->elements as $element)
    <div class="resize-drag element-Game
            @if($element->type == "img") element-Game-Image
            @elseif ($element->type == "text") element-Game-Text
            @elseif ($element->type == "link") element-Game-Link
            @elseif($element->type == 'question') element-Game-Question
            @endif" style="user-select: none;">
{{--        @include('BookEngine.element', compact('element'))--}}
        @if ($element->type == "text") <p>{{$element->text->text}}</p>
    @endif
        <p>{{$element->type}}</p>
    </div>
@endforeach

