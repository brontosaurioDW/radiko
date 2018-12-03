@extends ('layouts.master')

@section ('title', 'Radiko - Información usuario')

@section ('content')

<div class="main-wrapper relative small-height">
	<section class="container profile">

		<h2>Editar tu perfil</h2>
		
		<form action="{{ route('perfil.update', ['id' => $usuario->id]) }}" method="post" class="form" enctype="multipart/form-data">
			@csrf
			@method('PUT')

			<div class="row">

				<div class="col-xs-12 col-md-5 col-lg-3">
					<div class="user-info">
						@if ( !empty($usuario->foto) )
						<img class="img-fluid" src="{{ url('storage/images/usuarios/'.$usuario->foto) }}" alt="{{ $usuario->name }}">
						@else
						<img class="img-fluid" src="{{ url('storage/images/user-default.png') }}" alt="{{ $usuario->name }}">
						@endif
					</div>

					<input type="file" accept="image/*" id="foto" name="foto" value="{{ old('$usuario->foto') }}">
					@if($errors->has('foto'))
					<small class="text-danger">{{ $errors->first('foto') }}</small>
					@endif
				</div>

				<div class="col-xs-12 col-md-7 col-lg-9">
					<div class="row-form">
						<label for="name">Nombre</label>
						<input type="text" name="name" id="name"  value="{{ old('name', $usuario->name) }}">
						@if($errors->has('name'))
						<small class="text-danger">{{ $errors->first('name') }}</small>
						@endif
					</div>

					<div class="row-form">
						<label for="last_name">Apellido</label>
						<input type="text" name="last_name" id="last_name"  value="{{ old('last_name', $usuario->last_name) }}">
						@if($errors->has('last_name'))
						<small class="text-danger">{{ $errors->first('last_name') }}</small>
						@endif
					</div>

					<div class="row-form">
						<label for="last_name">Teléfono</label>
						<input type="text" name="telephone" id="telephone"  value="{{ old('telephone', $usuario->telephone) }}">
						@if($errors->has('telephone'))
						<small class="text-danger">{{ $errors->first('telephone') }}</small>
						@endif
					</div>

					<button class="btn btn-primary btn-medium">Guardar cambios</button>
				</div>
			</div>
		</form>
	</section>
</div>

@endsection