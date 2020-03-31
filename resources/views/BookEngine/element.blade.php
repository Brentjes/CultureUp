@if($element->type == "link")
    <a href="{{$element->linkPage}}">
@endif
<div style="
    position: fixed !important;
    left: {{$element->left}} !important;
    top: {{$element->top}} !important;
    height: {{$element->height}};
    width: {{$element->width}};
    @if($element->type == "link")
        background: red !important;
        z-index: 2 !important;
    @else
    @if($element->type =="text")
        z-index: 1 !important;
    @endif
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
