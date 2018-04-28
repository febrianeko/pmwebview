
@extends('template')

@section('main')
<div id="engineer">
	<h2>Detail Engineer</h2>
	<table class="table table-striped">
		<tr>
			<th>Eid</th>
			<td>{{ $engineer->eid }}</td>	
		</tr>
		<tr>
			<th>Nama</th>
			<td>{{ $engineer->nama_engineer }}</td>	
		</tr>
		<tr>
			<th>Tanggal Lahir</th>
			<td>{{ $engineer->tanggal_lahir }}</td>	
		</tr>
		<tr>
			<th>Jenis Kelamin</th>
			<td>{{ $engineer->jenis_kelamin }}</td>	
		</tr>
	</table>
</div>
@stop

@section('footer')
	@include('footer')
@stop
