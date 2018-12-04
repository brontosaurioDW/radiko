@extends ('layouts.auth')

@section ('title', 'Radiko')

@section ('content')

		<div class="auth">
			<div class="container-fluid">
				<div class="d-flex flex info-right">
					<div class="form">
						<div class="mensaje-exito">
							<p class="bold">¡Haz sido registrado con éxito!</p>

							<a href="{{ url('/') }}" class="btn btn-primary">Comenzar</a>
						</div>
					</div>
					
					<div class="info">
						<a class="btn btn-link green back-button-registro float-right" href="{{ url('/') }}">
							<i class="fas fa-chevron-left"></i>
							Volver
						</a>
					</div>
				</div>
			</div>
		</div>
		
@endsection



