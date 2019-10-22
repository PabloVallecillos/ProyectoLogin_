@extends('baseform')
@section('contenidoform')

{{--
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
--}}	
	
	<div class="d-flex justify-content-center">
		<div class="brand_logo_container">
			<img src="{{ asset('assets/img/curves.png') }}" class="brand_logo" alt="Logo">
		</div>
	</div>
	
	<div class="d-flex justify-content-center form_container">
		<form action = "{{ url('validate/doform') }}" method= post>
			@csrf
			@isset($mensaje)
				<h4> {{ $mensaje }} </h4>
			@endisset 
			<div class="input-group mb-3">
				<div class="input-group-append">
					<span class="input-group-text"><i class="fas fa-user"></i></span>
				</div>
				<input type="text" name="login" class="form-control input_user" value="{{ old('login') }}" placeholder="Introduzca su nombre de usuario">
			</div>
			@error('login')
			        <div class="alert alert-danger">{{ $message }}</div>
		    @enderror
			<div class="input-group mb-2">
				<div class="input-group-append">
					<span class="input-group-text"><i class="fas fa-key"></i></span>
				</div>
				<input type="password" name="password" class="form-control input_pass" value="" placeholder="Introduzca su contraseña">
			</div>
			@error('password')
			        <div class="alert alert-danger">{{ $message }}</div>
		    @enderror
			
			<input type="submit" class="btn login_btn" value="enviar">
			
		</form>
	</div>

	<div class="mt-4">
		
		<div class="d-flex justify-content-center links">
			<a href="{{ url('forgot/form') }}">Forgot your password?</a>
		</div>
	</div>
	
@stop

