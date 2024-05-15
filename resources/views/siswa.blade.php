@php
    $siswa = \App\Models\Siswa::all();
    $siswa3 = \App\Models\Siswa::find(2);
    $siswa4 = \App\Models\Siswa::where('kelas', 'XI RPL 2')->orderby('id', 'desc')->first();
@endphp

<h1>Pengulangan Data</h1>
@foreach ($siswa as $data)
<h1>ID : {{ $data->id }}</h1>
<h1>Nama : {{ $data->nama }}</h1>
<h1>Kelas : {{ $data->kelas }}</h1>
<h1>Jenis Kelamin : {{ $data->jenis_kelamin }}</h1>
<hr>
    
@endforeach

<h1>find</h1>
<h1>ID : {{ $siswa3->id ?? 'Kosong' }}</h1>
<h1>Nama : {{ $siswa3->nama ?? 'Kosong' }}</h1>
<h1>Kelas : {{ $siswa3->kelas ?? 'Kosong' }}</h1>
<h1>Jenis Kelamin : {{ $siswa3->jenis_kelamin ?? 'Kosong' }}</h1>
<hr>
 
<h2>fisrt</h2>
<h1>ID : {{ $siswa4->id ?? 'Kosong' }}</h1>
<h1>Nama : {{ $siswa4->nama ?? 'Kosong' }}</h1>
<h1>Kelas : {{ $siswa4->kelas ?? 'Kosong' }}</h1>
<h1>Jenis Kelamin : {{ $siswa4->jenis_kelamin ?? 'Kosong' }}</h1>
<hr>