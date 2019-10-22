@extends('baseform')
@section('contenidoform')

	<div class="d-flex justify-content-center form_container">
		<form action = "{{ url('validate/forgot') }}" method= post>
			@csrf
			
			<div class="input-group mb-3">
				<div class="input-group-append">
					<span class="input-group-text">@</span>
				</div>
				<input type="email" name="email" class="form-control input_user" placeholder="Introduzca su correo">
			</div>
			@error('email')
			        <div class="alert alert-danger">{{ $message }}</div>
		    @enderror
		    
			<input type="submit" class="btn login_btn" value="Validar">
			
		    <div class="mt-4">
				<div class="d-flex justify-content-center links">
					<a href="{{ url('login/form') }}">Retornar</a>
				</div>
			</div>
		</form>
		
	</div>	
	
@stop