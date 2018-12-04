@extends ('layouts.master')

@section ('title', 'Radiko - Productos')

@section ('content')

<div class="huerta-content">

	<h1>Página productos</h1>

	@foreach ($productos as $producto)
		{{$producto->producto}}
		{{$producto->unidadDeMedida->unidad }}
	@endforeach

</div>

@endsection








