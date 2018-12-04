@extends ('layouts.master')

@section ('title', 'Radiko')

@section ('content')

<div class="main-wrapper relative">
	<section class="overflow-hidden">

		<div class="top">
			<div class="container">
				<div class="row align-items-center">			
					<div class="col-xs-12 col-md-3">
						<a href="{{ url()->previous() }}" class="link">
							<i class="fas fa-chevron-left"></i>
							<span>volver</span>
						</a>
					</div>
					<div class="col-xs-12 col-md-9">
						<h2 class="bold">Resultados de busqueda para "{{ $inputData }}" </h2>
					</div>
				</div>
			</div>
		</div>

		<div class="container">

			<div class="row">			
				<div class="col-xs-12 d-none d-lg-block col-lg-3">
					{{-- FILTROS LATERALES  --}}
					@include ('huertas.filtros-desktop')
				</div>

				<div class="col-xs-12 col-lg-9">
					<div class="huerta-productos">
						@if (!$productos->isEmpty())
							<div class="form">
								<div class="row">
									<div class="col-xs-12 col-md-4 d-none d-md-block">
										<label for="filtros" class="sr-only">Filtros</label>
										<select class="select" id="filtros">
											<option>Mejores puntuados</option>
											<option>Más valorados</option>
											<option>De mayor a menor</option>
											<option>De menor a mayor</option>
											<option>Los más nuevos</option>
										</select>
									</div>
									<div class="col-md-4 offset-md-4">
										<form method="" action="">
											<div class="relative search-sm">
												<input type="text" name="search" placeholder="¿Qué estás buscando?">
												<button class="btn-search">
													<span class="sr-only">Search</span>
													<i class="fas fa-search"></i>
												</button>
											</div>
										</form>
									</div>
								</div>
							</div>
						@endif

						<div class="d-flex flex-wrap justify-content-between">			

							@if ($productos->isEmpty())
							<div class="no-results">
								<p>
									Lo sentimos, no hay resultados para 
									<span class="bold">{{ $inputData }}</span>
								</p>

								<div class="search-form">
									<h2>¿Querés buscar otro producto?</h2>
									<div class="form">            
										<form action="{{ route('huertas.search') }}" method="get">
											<div class="row-search form-row justify-content-center relative">
												<input type="text" name="search" id="search" placeholder="¿Qué estás buscando?">
												<button class="btn-search">
													<span class="sr-only">Search</span>
													<i class="far fa-search"></i>
												</button>
											</div>
										</form>
									</div>	
								</div>
							</div>
							@else
							@foreach ( $huertas as $huerta )
							@foreach ( $productos as $producto )
							@if ( $producto->huerta_id == $huerta->id)

							<div class="card no-border">
								<a href="{{ route( 'huertas.show', ['id' => $huerta->id] ) }}" class="d-flex">
									<div class="img-wrapper">
										<img src="{{ url('storage/images/huertas/'.$huerta->foto) }}" alt="<?php echo $huerta->huerta ?>" />
									</div>
									<div class="card-info">
										<h3>{{ $huerta->huerta }}</h3>

										<div class="stars">
											@foreach ( $reviews as $review )

											@if ( $review->huerta_id == $huerta->id )

											@for ($i = 0; $i < 5; ++$i)
											<i class="{{ $review->stars <= $i ? 'far' : 'fas' }} fa-star" aria-hidden="true"></i>
											@endfor

											@endif

											@endforeach

										</div>

										<div class="more-info">
											<span class="categoria d-block">{{ $producto->producto }}</span>
											<span class="precio d-block">
												<span class="bold">{{ $producto->precio }}</span> x {{ $producto->unidadDeMedida->unidad }}.
											</span>
											<i class="far fa-chevron-right"></i>
										</div>

									</div>								
								</a>
							</div>	

							@endif

							@endforeach

							@endforeach

							@endif

						</div>	
					</div>

					<nav aria-label="navigation">
						<ul class="pagination">
							<?php echo $productos->links(); ?>
						</ul>
					</nav>

				</div>
			</div>
		</div>

		{{-- DESCARGA LA APP  --}}
		@include ('elementos.descarga-app-violeta')
	</section>
</div>

@endsection