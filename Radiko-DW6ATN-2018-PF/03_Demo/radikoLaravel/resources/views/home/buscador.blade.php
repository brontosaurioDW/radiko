<section class="hero search d-flex align-items-center bg-trama">
    <div class="container">
        <h2 class="logo">
            <span class="sr-only">Bienvenidos a Rádiko</span>
        </h2>
        
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
</section>