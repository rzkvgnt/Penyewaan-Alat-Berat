@extends('layouts.app')


@section('content')
<h1>Alat</h1><a href="/alat/add">add Alat</a><hr>


@foreach($alat as $key)
	<h6>{{ $key->nama_alat }}</h6>
	<h6>{{ $key->jumlah_alat }}</h6>
	<h6>{{ $key->gambar_alat }}</h6>
	<a href="{{ url('alat/edit/'.$key->id)}}"><button type="button">Edit</button></a>
	<hr>
@endforeach

@endsection