@if($element->type == "link")
    <a href="{{$element->linkPage}}">
@endif
<div style="
    position: fixed;
    left: {{$element->left}};
    top: {{$element->top}};
    height: {{$element->height}};
    width: {{$element->width}};
    @if($element->type == "link")
        /*background: rgba(255,0,0,0);*/
        background: red;
        z-index: 500;
    @else
        background: white;
        border-color: goldenrod;
        border-width: 3px;
        border-style: solid;
    @endif">

    @if($element->type == "text")
        <p>{{$element->text}}</p>
    @elseif($element->type == "img")
        <img src="{{$element->imgSrc}}" alt="img" width="{{$element->width}}" height="{{$element->height}}">
    @endif

    </div>
@if($element->type == "link")
</a>
@endif
