@foreach (\App\Models\Sekolah::all() as $data )
<h1>Nama : {{ $data->nama }}</h1>
<h1>Alamat: {{ $data->alamat }}</h1>
<h1>Email: {{ $data->email }}</h1>
<h1>Telepon: {{ $data->telepon }}</h1>
<h1>Status: {{ $data->status }}</h1>
<hr>
@endforeach