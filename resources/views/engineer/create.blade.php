@extends('template')

@section('main')
	<div class="result">
	<h2 align="center">Tambah User Engineer</h2>
	
		<form action="{{ url('result') }}" method="POST">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
			
			<div class="form-group">
			<label for="eid" class="control-label">Engineer ID</label>
			<input type="text" name="eid" id="eid" class="form-control">
			</div>

			<div class="form-group">
			<label for="nama_engineer" class="control-label">Nama</label>
			<input type="text" name="nama_engineer" id="nama_engineer" class="form-control">
			</div>
			
			<div class="form-group">
			<label for="tanggal_lahir" class="control-label">Tanggal Lahir</label>
			<input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control">
			</div>

			<div class="form-group">
			<label for="jenis_kelamin" class="control-label">Jenis Kelamin</label>
				<div class="radio_jk">
				<label><input type="radio" name="jenis_kelamin" value="L" id="jenis_kelamin">Laki-laki </label>
				</div>
				
				<div class="radio_jk">
				<label><input type="radio" name="jenis_kelamin" value="P" id="jenis_kelamin">Perempuan</label>
				</div>
			</div>
				
			<div class="form-group">
			<input class="btn btn-primary form-control" type="submit" value="Tambah Engineer">
			</div>
			
		</form>
		</div>
	</div>
	@stop

@section('footer')
	@include('footer')
@stop