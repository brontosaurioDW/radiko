@extends ('layouts.auth')

@section ('title', 'Registrate en Radiko')

@section ('content')

<div class="auth d-flex">
	<div class="container-fluid">
		<div class="d-flex flex flex-wrap info-right registro">
			<div class="info bg-trama rdk-corn d-flex align-items-center justify-content-center">
				<a href="{{ url('/') }}" class="link">
					<i class="fas fa-chevron-left"></i>
					<span>volver</span>
				</a>
				<h1 class="d-block d-lg-none">
				    <a href="javascript:void(0)" class="logo"> Rádiko </a>
				</h1>
			</div>

			<form action="{{ route('auth.doRegistro') }}" method="post">
				<div class="form">
					@csrf

					<h2>Registro</h2>

					<div class="row-form">
						<label for="name">Nombre</label>
						<input type="text" name="name" id="name" value="{{ old('name') }}" placeholder="Nombre">
						@if($errors->has('name'))
							<small class="text-danger">{{ $errors->first('name') }}</small>
						@endif
					</div>
					<div class="row-form">
						<label for="email">Email</label>
						<input type="text" name="email" id="email" value="{{ old('email') }}" placeholder="Email">
						@if($errors->has('email'))
							<small class="text-danger">{{ $errors->first('email') }}</small>
						@endif
					</div>
					<div class="row-form">
						<label for="password">Contraseña</label>
						<input type="password" name="password" id="password"  placeholder="Contraseña">
						@if($errors->has('password'))
							<small class="text-danger">{{ $errors->first('password') }}</small>
						@endif
					</div>
					<div class="row-form">
						<label for="password_confirmation" for="password_confirmation">Confirmar contraseña</label>
						<input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirmar contraseña">
					</div>
					<div class="row-form">
						<div class="d-flex justify-content-between align-items-center flex-wrap">
							<span class="accept">
								Al registrarme acepto los 
								<a href="{{ url('/legales/terminos-condiciones') }}" target="_blank" class="link">términos y condiciones</a> 
								de Radiko
							</span>
							<button class="btn btn-secondary btn-small">Registrarse</button>
						</div>
						<a href="{{ url('/login') }}">¿Ya tenés cuenta? <span class="bold uppercase">Ingresá</span></a>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

@endsection