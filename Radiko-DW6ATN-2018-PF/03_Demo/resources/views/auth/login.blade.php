@extends ('layouts.auth')

@section ('title', 'Ingresa a Radiko')

@section ('content')

<div class="auth d-flex">
	<div class="container-fluid">
		<div class="d-flex flex flex-wrap info-left login">
			<div class="info bg-trama rdk-pepper d-flex align-items-center justify-content-center">
				<a href="{{ url('/') }}" class="link">
					<i class="fas fa-chevron-left"></i>
					<span>volver</span>
				</a>
				<h1 class="d-block d-lg-none">
				    <a href="javascript:void(0)" class="logo"> Rádiko </a>
				</h1>
			</div>

			<form action="{{ route('auth.doLogin')}}" method="post">
				<div class="form">
					@csrf

					<h2>Login</h2>

					@if(Session::has('status'))
						<div class=""></div>

						<div class="alert {{ Session::get('class') }}  msg-alert" role="alert">
						  {{ Session::get('status') }}
						</div>
					@endif

					<div class="row-form">
						<label>Email</label>
						<input type="text" id="email" name="email" value="{{ old('email')}}" placeholder="jose@mail.com">
						@if($errors->has('email'))
							<small class="text-danger">{{ $errors->first('email') }}</small>
						@endif
					</div>

					<div class="row-form">
						<label>Contraseña</label>
						<input type="password" name="password" id="password" placeholder="*****">
						@if($errors->has('password'))
							<small class="text-danger">{{ $errors->first('password') }}</small>
						@endif
					</div>

					<div class="row-form">
						<button class="btn btn-secondary btn-small">Ingresar</button>
						<a href="{{ url('/registro') }}">¿No tenés cuenta? <span class="bold uppercase">Regístrate</span></a>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

@endsection
