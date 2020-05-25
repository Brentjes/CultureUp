

@foreach($countries as $country)

    <p>{{$country->country}}</p>
    <p>{{$country->country_code}}</p>
    <p>{{$country->lat}}</p>
    <p>{{$country->long}}</p>

@endforeach

