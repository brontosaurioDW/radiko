	@extends ('layouts.master')

@section ('title', 'Radiko - Información usuario')

@section ('content')

	<div class="main-wrapper relative small-height">
		<section class="container profile">

				<div class="row">
					<div class="col-xs-12 col-md-5 col-lg-3">
						<h2>Mi perfil</h2>
						
						<div class="user-info">
							@if ( !empty($usuario->foto) )
								<img class="img-fluid" src="{{ url('storage/images/usuarios/'.$usuario->foto) }}" alt="{{ $usuario->name }}">
							@else
								<img class="img-fluid" src="{{ url('storage/images/user-default.png') }}" alt="{{ $usuario->name }}">
							@endif

							<ul class="simple-list">
								<li>
									<span class="semi-bold">Nombre:</span> 
									<span>{{ $usuario->name }}</span>
								</li>
								<li>
									<span class="semi-bold">Apellido:</span> 
									<span>{{ $usuario->last_name }}</span>
								</li>
								<li>
									<span class="semi-bold">Email:</span> 
									<span>{{ $usuario->email }}</span>
								</li>
								<li>
									<span class="semi-bold">Teléfono:</span> 
									<span>{{ $usuario->telephone }}</span>
								</li>
							</ul>

							<a class="btn btn-primary btn-medium" href="{{ route('perfil.edit' , Auth::user()->id ) }}">
								Editar perfil
							</a>	
						</div>
					</div>

					<div class="col-xs-12 col-md-7 col-lg-9">
						<h3>Pedidos realizados</h3>

						<ul class="list-boxed orders">
							<li class="list-wrapper media">
								<div class="media-img">
									<img class="img-fluid" src="{{ url('storage/images/user-default.png') }}" alt="">
								</div>
								<div class="media-body">
									<h4>El jardín orgánico</h4>

									<ul class="simple-list">
										<li>
											<span class="bold">Día y hora</span>
											<span>22/05/2018 | 20.00hs</span>
										</li>
										<li class="total">
											<span class="bold">Precio</span>
											<span>$ 785.00</span>
										</li>
									</ul>		

									<a href="javascript:void(0)" class="link">Ver detalle <i class="fas fa-chevron-right"></i></a>							
								</div>
							</li>

							<li class="list-wrapper media">
								<div class="media-img">
									<img class="img-fluid" src="{{ url('storage/images/user-default.png') }}" alt="">
								</div>
								<div class="media-body">
									<h4>El jardín orgánico</h4>

									<ul class="simple-list">
										<li>
											<span class="bold">Día y hora</span>
											<span>22/05/2018 | 20.00hs</span>
										</li>
										<li class="total">
											<span class="bold">Precio</span>
											<span>$ 785.00</span>
										</li>
									</ul>		

									<a href="javascript:void(0)" class="link">Ver detalle <i class="fas fa-chevron-right"></i></a>							
								</div>
							</li>

							<li class="list-wrapper media">
								<div class="media-img">
									<img class="img-fluid" src="{{ url('storage/images/user-default.png') }}" alt="">
								</div>
								<div class="media-body">
									<h4>El jardín orgánico</h4>

									<ul class="simple-list">
										<li>
											<span class="bold">Día y hora</span>
											<span>22/05/2018 | 20.00hs</span>
										</li>
										<li class="total">
											<span class="bold">Precio</span>
											<span>$ 785.00</span>
										</li>
									</ul>		

									<a href="javascript:void(0)" class="link">Ver detalle <i class="fas fa-chevron-right"></i></a>							
								</div>
							</li>
						</ul>
					</div>				
				</div>		
		</section>
	</div>

@endsection