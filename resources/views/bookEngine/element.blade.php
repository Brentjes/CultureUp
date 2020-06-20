@if($element->type == "link")
    <a href="{{$element->linkPage}}">
        @endif
        <div class="element-Game
            @if($element->type == "image") element-Game-Image
            @elseif ($element->type == "text") element-Game-Text
            @elseif ($element->type == "link") element-Game-Link
            @elseif($element->type == 'question') element-Game-Question
            @endif"

             style="
                  position: absolute;
                  left: {{$element->left}}px;
                  top: {{$element->top}}px;
                  height: {{$element->height}};
                  width: {{$element->width}};
            @if($element->type =="img")
                  background-image: url({{$element->imgSrc}});
                  background-size: {{$element->width}} {{$element->height}};
            @endif
            ">

            @if($element->type == "text")
                <p></p>
            @endif
                <p>{{$element->type}}</p>

        </div>
        @if($element->type == "link")
    </a>
@endif
