@if($element->type == "link")
    <a href="{{$element->linkPage}}">
        @endif
        <div style="
            position: absolute;
            left: {{$element->left}}vw;
            top: {{$element->top}}vh;
            height: {{$element->height}}px;
            width: {{$element->width}}px;
        @if($element->type == "link")
            background: transparent;
            border: 3px dotted goldenrod;
            z-index: 2;
        @else
        @if($element->type =="text")
            z-index: 1;
        @else
            z-index: 0;
        @endif
            background: white;
            border: 3px solid goldenrod;
        @endif">

            @if($element->type == "text")
                <p>{{$element->text}}</p>
            @elseif($element->type == "img")
                <img src="{{$element->imgSrc}}" alt="img" width="{{$element->width}}px" height="{{$element->height}}">
            @endif

        </div>
        @if($element->type == "link")
    </a>
@endif
