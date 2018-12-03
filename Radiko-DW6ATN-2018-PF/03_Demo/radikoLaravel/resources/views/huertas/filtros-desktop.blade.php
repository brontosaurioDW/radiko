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