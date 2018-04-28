
@extends('template')

@section('main')
<div id="enginner">
	<h2>Engineer</h2>

	@if (!empty($engineer_list))
		<table class="table">
			<thead>
				<tr>
					<th>Eid</th>
					<th>Nama</th>
					<th>Tgl Lahir</th>
					<th>Jenis Kelamin</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($engineer_list as $engineer): ?>
				<tr>
					<td>{{ $engineer->eid }}</td>
					<td>{{ $engineer->nama_engineer }}</td>
					<td>{{ $engineer->tanggal_lahir }}</td>
					<td>{{ $engineer->jenis_kelamin }}</td>
					<!-- Syntag untuk menampilkan data dari tabel database dengan memanggil atribut tabel -->
					<td>
						{{ link_to('engineer/' . $engineer->id, 'Detail', ['class' => 'btn btn-success btn-sm']) }}
						{{ link_to('engineer/' . $engineer->id. '/edit', 'Edit', ['class' => 'btn btn-warning btn-sm']) }}
					</td>
				</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	@else
		<p>Data <strong>Engineer</strong> tidak di temukan.</p>
	@endif

	<div class="table-bottom">
		<div class="pull-left">
			<strong>Jumlah Engineer : {{ $jumlah_engineer }}</strong>
		</div>
		<div class="pull-right">Pagination</div>
	</div>
	<div class="bottom-nav">
		<div>
			<a href="engineer/create" class="btn btn-primary">Tambah Engineer</a>
		</div>
	</div>

	
</div>
@stop

@section('footer')
	@include('footer')
@stop
