@extends('layout.layout')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <img src="{{$artikel->foto}}" class="card-img-top" width="60px" height="600px">
                <div class="card-body">
                    <p><b>Judul :</b> {{$artikel->judul}} </p>
                    <p><b>Kategori :</b> {{$artikel->kategori}} </p>
                    <p><b>Konten : </b>{{$artikel->konten}}</p>
                    <p><b>Penulis : </b>{{$artikel->penulis}}</p>

            </div>
        </div>
    </div>
</div>
@endsection