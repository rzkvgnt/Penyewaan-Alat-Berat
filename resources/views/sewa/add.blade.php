@extends('layouts.app')


@section('content')
<h1>Add Sewa</h1><hr>


	<form method="post" action="/sewa/save">
		<div class="input-field">
			<input type="text" name="nama_sewa">
			<label for="">Nama</label>
		</div>
			<input type="date" name="tanggal_sewa">
			<input type="date" name="batas_sewa">
		<div class="input-field">
			<input type="text" name="alamat_sewa">
			<label for="">Alamat</label>
		</div>
		<div class="input-field">
			<input type="text" name="no_sewa">
			<label for="">Nomor</label>
		</div>
		<button <a class="waves-effect waves-light btn" color="#ffb300">Tambah</a>
	</button>
		<input type="hidden" name="_token" value="{{ csrf_token() }}">

	</form>


@endsection
