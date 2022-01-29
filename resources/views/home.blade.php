@extends('template.layout')

@section('content')

<h1 class="bg-green-100">HOME</h1>

<div>
    <form action="/store" method="post" enctype="multipart/form-data">

        @csrf
        @error('kategori')
            <p>{{$message}}</p>
        @enderror

        <input type="file" name="image">

        <input class="border @error('kategori') border-red-500 @enderror " type="text" name="kategori">
        <input type="submit" name="simpan" value="simpan">
    </form>
</div>

@foreach ($kategoris as $isi)
    <li>{{$isi -> kategori}} -- <a href="/store/{{$isi -> idkategori}}">HAPUS</a> </li>
@endforeach
    
@endsection