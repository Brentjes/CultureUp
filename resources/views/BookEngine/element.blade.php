@if($element->type == "link")
    <a href="{{$element->linkPage}}">
        @endif
        <div style="
            position: absolute;
            left: {{$element->left}}vw;
            top: {{$element->top}}vh;
            height: {{$element->height}}vh;
            width: {{$element->width}}vw;
        @if($element->type == "link")
            background: red;
            z-index: 2;
        @else
        @if($element->type =="text")
            z-index: 1;
        @else
            z-index: 0;
        @endif
            background: white;
            border-color: goldenrod;
            border-width: 3px;
            border-style: solid;
        @endif">

            @if($element->type == "text")
                <p>{{$element->text}}</p>
            @elseif($element->type == "img")
                <img src="{{$element->imgSrc}}" alt="img" width="{{$element->width}}vw" height="{{$element->height}}vh">
            @endif

        </div>
        @if($element->type == "link")
    </a>
@endif
