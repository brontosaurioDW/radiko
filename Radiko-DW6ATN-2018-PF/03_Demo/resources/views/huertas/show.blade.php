@extends ('layouts.master')

@section ('title', 'Radiko')

@section ('content')

<div class="main-wrapper relative">
	<section class="huerta-detalle">
		<div class="container-fluid">
			<div class="header-huerta rdk-charcoal d-flex justify-content-end" style="background-image: url('../images/header-huerta.jpg');">
				<div class="diagonal bg-trama">
					<h2 class="huerta-title	">{{$huerta->huerta}}</h2>
				</div>
			</div>
		</div>		

		<div class="d-none" id="js-dummy-alert">
			<div class="row">
				<div class="col-12">
					<div class="alert dummy-alert alert-dismissible fade show" role="alert">
						<div class="row">
							<div class="col-6">
								<p class="bold">¡Agregaste un producto al carrito!</p>
							</div>
							<div class="col-6 text-right">
								<a href="confirmacion-paso-1.html">Ver carrito</a>
							</div>
						</div>

						<button type="button" class="closes" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<a href="{{ url()->previous() }}" class="link">
				<i class="fas fa-chevron-left"></i>
				<span>volver</span>
			</a>
		</div>

		<div class="tabs-outline">
			<div class="container">
				<ul class="nav nav-tabs nav-fill" id="myTab" role="tablist">
					<li class="nav-item">
						<a class="nav-link @if(!Session::has('status') and $errors->isEmpty()) active @endif" id="home-tab" data-toggle="tab" href="#huerta-productos-listado" role="tab" aria-controls="huerta-productos-listado" aria-selected="true">
							<span class="d-none d-sm-block">Productos</span>
							<i class="far fa-shopping-cart d-md-none"></i>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="profile-tab" data-toggle="tab" href="#huerta-informacion" role="tab" aria-controls="huerta-informacion" aria-selected="false">
							<span class="d-none d-sm-block">Información</span>
							<i class="far fa-info-circle d-md-none"></i>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link @if(Session::has('status') or !$errors->isEmpty()) active @endif" id="contact-tab" data-toggle="tab" href="#huerta-rating" role="tab" aria-controls="huerta-rating" aria-selected="false">
							<span class="d-none d-sm-block">Rating</span>
							<i class="far fa-star d-md-none"></i>
						</a>
					</li>
				</ul>
			</div>
		</div>

		<div class="container">
			<div class="tab-content">
				<div class="tab-pane fade @if(!Session::has('status') and $errors->isEmpty()) show active @endif" id="huerta-productos-listado" role="tabpanel" aria-labelledby="huerta-productos-listado">

					<div class="row">
						<div class="col-xs-12 d-none d-lg-block col-lg-3">
							{{-- FILTROS LATERALES  --}}
							<div class="sidebar-filtros">
								<h3>Categoría</h3>
								<ul>
									@foreach ($categorias as $categoria)
									<li>
										<label class="checkbox clearfix">			
											<input type="checkbox" name="cat-1" data-product-cateogry @if ( isset($categoriaSeleccionada->id) and $categoriaSeleccionada->id == $categoria->id) checked	@endif >
											<span class="checkmark"></span>
											<span class="float-left">{{ $categoria->categoria }}</span>
											<span class="light float-right">({{ $categoria->productos->count() }})</span>
										</label>
									</li>
									@endforeach
								</ul>
							</div>
						</div>

						<div class="col-xs-12 col-lg-9">
							{{-- BUSCADOR  --}}
							<form action="" method="" class="form">
								<div class="row">
									<div class="col-md-4 offset-md-8">
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
							</form>

							<div class="huerta-productos">
								<div class="d-flex flex-wrap justify-content-between">

									@foreach ($productos as $producto)

									<div class="card no-border">
										<a href="javascript:void(0)" class="d-flex" data-target="#producto-detalle" data-id="{{$producto->id}}">
											<div class="img-wrapper">
												<img class="card-img-top" src="{{ url('storage/images/productos/'.$producto->foto) }}" alt="Card image cap">
											</div>
											<div class="card-info dark-border">
												<h3>{{ $producto->producto }}</h3>
												<div class="more-info">
													{{-- <span class="categoria d-block">{{ $producto->producto }}</span> --}}
													<span class="precio d-block">
														<span class="bold">$ {{ $producto->precio }}</span> x {{ $producto->unidadDeMedida->unidad }}.
													</span>
													<i class="far fa-chevron-right"></i>
												</div>
											</div>								
										</a>
										{{-- <span class="envio">
											<i class="fal fa-truck"></i>
											<span>Costo de envío: $150 / $195</span>
										</span> --}}
									</div>

									@endforeach



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

				<div class="tab-pane fade" id="huerta-informacion" role="tabpanel" aria-labelledby="huerta-informacion">
					<div class="huerta-informacion">
						<div class="row">
							<div class="col-xs-12 col-md-4 d-none d-md-block">

								<!-- Horarios de envio desktop -->
								<div class="horarios-envios">
									@if ($huerta->disponibilidad->isEmpty()) 
			   							<p class="text-danger">No hay horarios disponibles para esta huerta</p>
									@else
										<h2>Horarios de de envío Capital Federal</h2>

										<ul class="simple-list">
											@foreach ($huerta->disponibilidad as $disponibilidad)
												<li class="d-flex justify-content-between flex-wrap">
													<span class="datecol semi-bold">{{ $disponibilidad->dias }}</span>
													<span class="hourscol">
														{{  $disponibilidad->inicio }} - {{  $disponibilidad->final }}
													</span>
												</li>
											@endforeach										
										</ul>
									@endif
								</div>
							</div>

							<div class="col-xs-12 col-md-8">
								<h2>Datos de {{$huerta->huerta}}</h2>										

								<ul class="list-boxed datos-info-huerta">
									<li class="d-flex flex-wrap">
										<span class="semi-bold">Cuit:</span> 
										<span>{{$huerta->cuit}}</span>
									</li>
									<li class="d-flex flex-wrap">
										<span class="semi-bold">Razón social:</span>
										<span> {{$huerta->razon_social}}</span>
									</li>
									<li class="d-flex flex-wrap">
										<span class="semi-bold">Dirección:</span>
										<span data-direccion="{{$huerta->direccion}}" class="address"> {{$huerta->direccion}}</span>
									</li>
								</ul>

								<!-- Horarios de envio mobile -->
								<div class="d-block d-md-none">
									<div class="horarios-envios">
										<h2>Horarios de de envío Capital Federal</h2>

										<ul class="simple-list">
											<li class="d-flex justify-content-between flex-wrap">
												<span class="datecol semi-bold">Martes</span>
												<span class="hourscol">
													<span class="open">11:00</span> - <span class="closes">04:00</span>
												</span>
											</li>
											<li clas class="d-flex justify-content-between flex-wrap"s="selected">
												<span class="datecol semi-bold">Miércoles</span>
												<span class="hourscol">
													<span class="open">09:00</span> - <span class="closes">12:00</span>
													| <span class="open">16:00</span> - <span class="closes">20:00</span>
												</span>
											</li>
											<li class="d-flex justify-content-between flex-wrap">
												<span class="datecol semi-bold">Jueves</span>
												<span class="hourscol">
													<span class="open">09:00</span> - <span class="closes">12:00</span>
													| <span class="open">16:00</span> - <span class="closes">20:00</span>
												</span>
											</li>
											<li class="d-flex justify-content-between flex-wrap">
												<span class="datecol semi-bold">Viernes</span>
												<span class="hourscol">
													<span class="open">09:00</span> - <span class="closes">12:00</span>
													| <span class="open">16:00</span> - <span class="closes">20:00</span>
												</span>
											</li>
											<li class="d-flex justify-content-between flex-wrap">
												<span class="datecol semi-bold">Sábado</span>
												<span class="hourscol">
													<span class="open">19:00</span> - <span class="closes">16:00</span>
												</span>
											</li>
										</ul>
									</div>
								</div>

								<!-- Mapa desktop -->
								<div id="map"></div>
							</div>
						</div>
					</div>
				</div>

				<div class="tab-pane fade @if(Session::has('status') or !$errors->isEmpty()) show active @endif" id="huerta-rating" role="tabpanel" aria-labelledby="huerta-rating">				

					<div class="row">
						<div class="col-xs-12 col-md-4">
							<ul class="ratings-cat">
								<li>
									<div class="name">Excelente</div>
									<div class="middle">
										<span style="width: 58.0336%;"></span>
									</div>
									<div class="amount d-none d-md-block">242</div>
								</li>
								<li>
									<div class="name">Muy bueno</div>
									<div class="middle">
										<span style="width: 27.3381%;"></span>
									</div>
									<div class="amount d-none d-md-block">114</div>
								</li>
								<li>
									<div class="name">Normal</div>
									<div class="middle">
										<span style="width: 5.7554%;"></span>
									</div>
									<div class="amount d-none d-md-block">24</div>
								</li>
								<li>
									<div class="name">Regular</div>
									<div class="middle">
										<span style="width: 4.31655%;"></span>
									</div>
									<div class="amount d-none d-md-block">18</div>
								</li>
								<li>
									<div class="name">Malo</div>
									<div class="middle">
										<span style="width: 4.55635%;"></span>
									</div>
									<div class="amount d-none d-md-block">19</div>
								</li>
							</ul>
						</div>

						<div class="col-xs-12 col-md-8">
							<ul class="list-boxed">
								@foreach ($huerta->reviews as $review)
								<li class="opinion-wrapper media">
									<div class="media-img">
										@if ( !empty($review->usuario->foto) ) 
										<img class="img-fluid" src="{{ url('storage/images/usuarios/'.$review->usuario->foto) }}" alt="{{ $review->usuario->name }}">
										@else
										<img class="img-fluid" src="{{ url('storage/images/user-default.png') }}" alt="{{ $review->usuario->name }}">
										@endif
									</div>
									<div class="media-body">
										<span class="stars">
											<span>
												{{$review->stars}}.0
											</span>
											<i class="fas fa-star" aria-hidden="true"></i>
										</span>

										<h3>{{ $review->usuario->name }}</h3>

										<p>{{ $review->comentario }}</p>												
									</div>
								</li>
								@endforeach
							</ul>

							@if(Auth::check())

							<form action="{{ route('huertas.comments' , ['id' => $huerta->id]) }}" method="post" class="form form-bg">

								@csrf
								@method('PUT')

								<h2>Dejanos tu opinón</h2>

								<div class="row-form">
									<label for="comentario" class="sr-only">Comentario</label>
									<textarea name="comentario" id="comentario" cols="30" rows="10" placeholder="Contanos tu experiencia con la huerta.">{{ old('comentario') }}</textarea>
									@if($errors->has('comentario'))
									<small class="text-danger">{{ $errors->first('comentario') }}</small>
									@endif
								</div>
								
								<div class="row-form">
									<label class="sr-only">Calficación</label>

									<div class="star-rating">
										<div class="star-rating-wrap">
											<input class="star-input" type="radio" name="stars" id="stars1" value="5" @if(old('stars') == 5) checked @endif >
											<label class="star-font far fa-star" for="stars1"></label>

											<input class="star-input" type="radio" name="stars" id="stars2" value="4" @if(old('stars') == 4) checked @endif >
											<label class="star-font far fa-star" for="stars2"></label>

											<input class="star-input" type="radio" name="stars" id="stars3" value="3" @if(old('stars') == 3) checked @endif >
											<label class="star-font far fa-star" for="stars3"></label>

											<input class="star-input" type="radio" name="stars" id="stars4" value="2" @if(old('stars') == 2) checked @endif >
											<label class="star-font far fa-star" for="stars4"></label>

											<input class="star-input" type="radio" name="stars" id="stars5" value="1" @if(old('stars') == 1) checked @endif >
											<label class="star-font far fa-star" for="stars5"></label>														
										</div>
									</div>

									@if($errors->has('stars'))
									<small class="text-danger">{{ $errors->first('stars') }}</small>
									@endif									
								</div>

								<div class="row-form">
									<button type="submit" class="btn btn-primary btn-medium">Comentar</button>
								</div>
							</form>

							@else
							<p>
								Para dejar un comentario debes 
								<a href="{{ route( 'login' ) }}" class="link">iniciar sesión</a>
							</p>
							@endif	
						</div>
					</div>									
				</div>
			</div>
		</div>
	</section>

	{{-- DESCARGA LA APP  --}}
	@include ('elementos.descarga-app-violeta')
</div>

<!-- Modal -->
<div class="modal fade" id="producto-detalle" tabindex="-1" role="dialog" aria-labelledby="producto-detalle" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content block">
			<div class="modal-body modal-producto">

				<button type="button" class="closes" data-dismiss="modal" aria-label="Close">
					<i class="far fa-times"></i>
				</button>

				<div class="row">
					<div class="col-md-4 col-lg-6">
						<div class="product-img">
							<img class="img-fluid" src="{{ url('storage/images/p-1.jpg') }}" alt="tomates" data-product-image>
						</div>
					</div>
					<div class="col-md-8 col-lg-6 relative product-info">
						<div class="card no-border">
							<h2 data-product-name>Tomate</h2>

							<span class="precio d-block">
								<span class="bold" data-product-price>$ 36.00</span> x kg.
							</span>

							<p data-product-description>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut error officia placeat illo alias cum minima dignissimos accusantium earum incidunt.</p>

							<form method="" action="" class="form">
								<div class="form">
									<div class="row-form d-flex align-items-center flex-wrap justify-content-between">
										<label for="cantidad">Cantidad</label>
										<select class="select" id="cantidad">
											<option selected>Elegir...</option>
											<option value="1">1 kg</option>
											<option value="2">2 kg</option>
											<option value="3">3 kg</option>
										</select>
									</div>
									<div class="row-form">
										<button disabeld  class="btn btn-primary btn-medium" data-dismiss="modal" data-toggle="tooltip" data-placement="top" title="Próximamente" >Agregar al carrito</button>
									</div>										
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection