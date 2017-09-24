@extends('layouts.app')
@section('content')
<div class="container">

<h1>Sewa</h1><a href="/sewa/add">add sewa</a><hr>


<table class="highlight">
<thead>
<tr>
 <th>ID</th>
 <th>Nama</th>
 <th>Tanggal</th>
 <th>Batas</th>
 <th>Alamat</th>
 <th>Nomor</th>
</tr>
</thead>
 <tbody>
   <?php $i = 1; ?>
 @foreach($sewa as $key)
 <tr>
  <td> {{ $i++ }} </td>
  <td>{{ $key->nama_sewa }}</td>
  <td>{{ $key->tanggal_sewa }}</td>
  <td>{{ $key->batas_sewa }}</td>
  <td>{{ $key->alamat_sewa }}</td>
  <td>{{ $key->no_sewa }}</td>
  <td>
		<a href="{{ url('sewa/edit/'.$key->id) }}">   <button class="btn btn-primary">Edit</button></a>
 <form action="{{ url('sewa/'.$key->id) }}" method="post">
	 <button class="btn btn-primary">Hapus</button>
          <input type="hidden" name="_method" value="DELETE">
                {{ csrf_field() }}
              </form>
  </td>
 </tr>
 @endforeach
 </tbody>

</table>
	<hr>

</div>
@endsection
