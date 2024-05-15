@extends('layout.layout')
@section('content')
<center>
    <div class="center" class="container">
        <div align="row justify-content-center">
            
            @foreach ($artikels as $item)
            <div class="col-md-8">
            <div class="card" style="width: 18rem">

                    <img src="{{$item->foto}}" class="card-img-top" alt="..." >
                    <div class="card-body">
                        <p><b>Judul :</b> {{$item->judul}} </p>
                        <p><b>Kategori :</b> {{$item->kategori}} </p>
                        <p><b>Konten : </b>{{$item->konten}}</p>
                        <p><b>Penulis : </b>{{$item->penulis}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</center>
@endsection