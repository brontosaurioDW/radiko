@extends ('layouts.master')

@section ('title', 'Contacto')

@section ('content')
	
	<div class="main-wrapper relative">
		<section class="container">
			<div class="contact">

				<h2>Contacto</h2>

				<div class="row">
					<div class="col-md-5">
						<p>
							Por consultas o inconvenientes completá el siguiente formulario o envianos un email y te responderemos a la brevedad. ¡Gracias!
						</p>

						<ul class="simple-list">
							<li>
								<a href="mailto:hola@radiko.com.ar" class="link">
									<i class="far fa-envelope-open"></i>
									<span>hola@radiko.com.ar</span>
								</a>
							</li>
							<li>
								<a href="mailto:hola@radiko.com.ar" class="link">
									<i class="far fa-envelope-open"></i>
									<span>ventas@radiko.com.ar</span>
								</a>
							</li>
							<li>
								<a href="https://instagram.com/radiko.ok" class="link" target="_blank">
									<i class="fab fa-instagram"></i>
									<span>/radiko.ok</span>
								</a>
							</li>
							<li>
								<a href="https://pinterest.com/radiko_ok" class="link" target="_blank">
									<i class="fab fa-pinterest"></i>
									<span>/radiko_ok</span>
								</a>
							</li>
						</ul>
					</div>
					<div class="col-md-7">
						<form action="#" method="post">
							<div class="form form-bg">
								<div class="row-form">
									<label for="nombre-apellido">Nombre y apellido *</label>
									<input type="text" id="nombre-apellido" name="nombre-apellido" placeholder="">
								</div>
								<div class="row-form">
									<label for="email">email *</label>
									<input type="text" id="email" name="email" placeholder="">
								</div>
								<div class="row-form">
									<label for="telefono">Teléfono</label>
									<input type="text" id="telefono" name="telefono" placeholder="">
								</div>
								<div class="row-form">
									<label for="comentario">Comentario *</label>
									<textarea cols="15" rows="15" id="comentario" name="comentario"></textarea>
								</div>
								<div class="row-form">
									<button class="btn btn-secondary btn-small">Ingresar</button>
								</div>
							</div>
						</form>
					</div>
				</div>				
			</div>
		</section>
	</div>

@endsection