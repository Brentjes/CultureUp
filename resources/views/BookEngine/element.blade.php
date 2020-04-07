@if($element->type == "link")
    <a href="{{$element->linkPage}}">
        @endif
        <div class="element-Game
            @if($element->type == "img") element-Game-Image
            @elseif ($element->type == "text") element-Game-Text
            @elseif ($element->type == "link") element-Game-Link
            @endif"

             style="
                  position: absolute;
                  left: {{$element->left}}vw;
                  top: {{$element->top}}vh;
                  height: {{$element->height}};
                  width: {{$element->width}};
            @if($element->type =="img")
                  background-image: url({{$element->imgSrc}});
                  background-size: {{$element->width}} {{$element->height}};
            @endif
            ">

            @if($element->type == "text")
                <p>{{$element->text}}</p>
            @endif

        </div>
        @if($element->type == "link")
    </a>
@endif
