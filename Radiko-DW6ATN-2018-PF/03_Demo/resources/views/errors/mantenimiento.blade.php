@extends ('layouts.auth')

@section ('title', 'Sitio en mantenimiento')

@section ('content')

<div class="auth error d-flex">
	<div class="container-fluid">
		<div class="d-flex flex flex-wrap info-right registro">		

			<div class="info bg-trama rdk-corn d-flex align-items-center justify-content-end">			
				<h1 class="sr-only">
				    <a href="{{ url('/') }}" class="logo"> Rádiko </a>
				</h1>

				<h2> Estamos trabajando para usted :) </h2>
			</div>

			<div class="error-msg">
				<h3> El sitio se encuentra en mantenimiento </h3>
				<p>Estamos haciendo algunos ajustes en el sitio, pero pronto vas a poder seguir acercandote a tus huertas preferidas.</p>
				<a href="{{ url('/') }}" class="btn btn-primary btn-small">Volver al inicio</a>
			</div>
		</div>
	</div>
</div>

@endsection