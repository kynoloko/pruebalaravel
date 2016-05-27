@extends('layouts.admin')

@section('content')
	<form action="">
		<div class="form-grup">
			<label for="">nombre</label>
				<input type="text" class="form-control" />
		</div>
		
		<div class="form-grup">
			<label for="">correo</label>
				<input type="text" class="form-control" />
		</div>
		<div class="form-grup">
			<label for="">contrasena</label>
				<input type="password" class="form-control" />
		</div>
		<button class="btn btn-prumary">registrarse</button>
		
		
		
	</form>
@stop