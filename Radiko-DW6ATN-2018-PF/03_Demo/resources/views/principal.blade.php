@extends ('layouts.master')
@section ('title', 'Radiko')
@section ('header-class', 'is-home')
@section ('content')

<div class="main-wrapper relative">
	{{-- HERO - SEARCH --}}
	@include ('home.buscador')

	{{-- CATEGORIAS --}}
	@include ('home.categorias')

	{{-- DESTACADOS --}}
	@include ('home.destacados')

	{{-- BANNER 'SUSCRIBITE' --}}
	@include ('home.suscribite-banner')

	{{-- BLOQUES FONDO VIOLETAS --}}
	@include ('home.bloques-violetas')

	{{-- DESCARGA LA APP  --}}
	@include ('home.descarga-app')
</div>

@endsection