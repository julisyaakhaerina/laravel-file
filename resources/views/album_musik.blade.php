@foreach (\App\Models\Album_musik::all() as $data )
<h1>ID : {{ $data->id }}</h1>
<h1>Judul : {{ $data->judul }}</h1>
<h1>Tahun: {{ $data->tahun }}</h1>
<h1>Cover album: {{ $data->cover_album }}</h1>
<hr>
@endforeach