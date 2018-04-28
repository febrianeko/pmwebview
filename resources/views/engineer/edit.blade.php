@extends('template')

@section('main')
<div id="engineer">
	<h2>Edit Data Engineer</h2>

	<!-- {!! Form::open(['url' => 'engineer/' . $engineer->id . '/update', 'method' => 'PATCH']) !!} -->
	{!! Form::model($engineer, ['method' => 'PATCH', 'action' => ['FormController@update', $engineer->id]]) !!}

	<div class="form-group">
	{!! Form::label('eid', 'Id Engineer:', ['class' => 'control-label']) !!}
	{!! Form::text('eid', null, ['class' => 'form-control']) !!}
	</div>

	<div class="form-group">
	{!! Form::label('nama_engineer', 'Nama:', ['class' => 'control-label']) !!}
	{!! Form::text('nama_engineer', null, ['class' => 'form-control']) !!}
	</div>

	<div class="form-group">
	{!! Form::label('tanggal_lahir', 'Tanggal Lahir:', ['class' => 'control-label']) !!}
	{!! Form::date('tanggal_lahir', null, ['class' => 'form-control', 'id' => 'tanggal_lahir']) !!}
	</div>

	<div class="form-group">
	{!! Form::label('jenis_kelamin', 'Jenis Kelamin:', ['class' => 'control-label']) !!}
		<div class="radio">
		<label>{!! Form::radio('jenis_kelamin', 'L') !!} Laki-laki</label>
		<label>{!! Form::radio('perempuan', 'P') !!} Perempuan</label>
		</div>
	</div>
	
	<!-- 		<div class="form-group">
			<label for="jenis_kelamin" class="control-label">Jenis Kelamin</label>
				<div class="radio_jk">
				<label><input type="radio" name="jenis_kelamin" value="L" >Laki-laki </label>
				</div>
				
				<div class="radio_jk">
				<label><input type="radio" name="jenis_kelamin" value="P" >Perempuan</label>
				</div>
			</div> -->

	<div class="form-group">	
	{!! Form::submit('Update Engineer', ['class' => 'btn btn-primary form-control']) !!}
	</div>
	{!! Form::close() !!}
</div>	
@stop

@section('footer')
	@include('footer')
@stop