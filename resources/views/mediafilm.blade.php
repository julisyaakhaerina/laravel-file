@php
    $mediaFilm= \App\Models\MediaFilm::all;
@endphp

@foreach ( $media as $m )
    <h1>Media Film</h1>
    <h1>Id : {{$m->id}}</h1>
    <h1>Film Id : {{  $m->film_id}}</h1>
    <h1>Media type : {{  $m->media_type}}</h1>
    <h1>URL Media : {{  $m->url_imdb }}</h1>
@endforeach