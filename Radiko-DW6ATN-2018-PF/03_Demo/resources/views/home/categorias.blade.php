<section class="categories">
    <div class="container">
        <div class="title text-center d-none d-sm-block">
            <h2 class="bold">Ver todas las huertas que ofrecen:</h2>
        </div>
        <ul class="d-flex justify-content-between">
            @foreach ($categorias as $categoria)
            <li class="frutas">
                <a href="{{ route( 'huertas.categoria', ['id' => $categoria->id] ) }}">
                    <span style="background-image: url(storage/images/categories/{{ $categoria->icono }})" class="cat-img"> {{ $categoria->categoria }} </span>
                    <span>{{ $categoria->categoria }}</span>
                </a>
            </li>
            @endforeach
        </ul>
    </div>
</section>