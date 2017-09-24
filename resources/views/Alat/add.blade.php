@extends('layouts.app')


@section('content')
<h1>Tambah Alat</h1>


	<form method="post" action="/alat/save">
		<div class="input-field">
			<input type="text" name="nama_alat">
			<label for="">Nama</label>
		</div>
		<div class="input-field">
			<input type="text" name="jumlah_alat">
			<label for="">Jumlah</label>
		</div>
		<div class="input-field">
			<input type="text" name="gambar_alat">
			<label for="">Gambar</label>
		</div>
		<button <a class="waves-effect waves-light btn" color="#ffb300">Tambah</a>
	</button>
		<input type="hidden" name="_token" value="{{ csrf_token() }}">

	</form>


@endsection
