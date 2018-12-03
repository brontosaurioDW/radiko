@extends ('layouts.auth')

@section ('title', 'Acceso denegado')

@section ('content')

<div class="auth error d-flex">
	<div class="container-fluid">
		<div class="d-flex flex flex-wrap info-left login">
			<div class="info bg-trama rdk-tomato d-flex align-items-center justify-content-start">
				{{-- <a href="{{ url('/') }}" class="link">
					<i class="fas fa-chevron-left"></i>
					<span>volver</span>
				</a> --}}
				<h1 class="sr-only">
				    <a href="{{ url('/') }}" class="logo"> Rádiko </a>
				</h1>

				<h2>
					<span>Oh no! :(</span>	
					Algo salió mal
				</h2>
			</div>

			<div class="error-msg">
				<h3> No tenés acceso a esta página... </h3>
				<p>No te preocupes! podés volver al inicio y encontrar lo que estás buscando</p>
				<a href="{{ url('/') }}" class="btn btn-primary btn-small">Volver al inicio</a>
			</div>
		</div>
	</div>
</div>

@endsection








