<div class="grid-masonry">
    <div class="container">
        <div class="title text-center">
            <h2 class="bold">Huertas destacadas</h2>
        </div>
        
        <div class="grid flex-wrap d-flex justify-content-between">
            @foreach ($huertasDestacadas as $huerta)

            @switch($loop->index)
            @case(0)
            <?php 
            $class = "single-item half title-top-left plus-bottom-right rdk-tomato"; 
            $img = "red-1";
            ?>
            @break
            @case(1)
            <?php 
            $class = "single-item half title-top-right plus-bottom-left rdk-corn"; 
            $img = "orange";
            ?>
            @break
            @case(2)
            <?php 
            $class = "single-item third title-top-left plus-bottom-right rdk-grape"; 
            $img = "violet";
            ?>
            @break
            @case(3)
            <?php 
            $class = "single-item third title-bottom-left plus-top-right rdk-pepper"; 
            $img = "green";
            ?>
            @break
            @case(4)
            <?php 
            $class = "single-item third title-top-right plus-bottom-left rdk-tomato"; 
            $img = "red-2";
            ?>
            @break
            @endswitch

            <div class="<?php echo $class ?>">
                <a href="{{ route( 'huertas.show', ['id' => $huerta->id] ) }}" class="cta-link">
                    <div class="img-wrapper">
                        <img src="{{ url("storage/images/destacados/$img.png") }}" alt="{{ $huerta->huerta }}" class="img-fluid">
                    </div>
                    <div class="item-info">
                        <h3>{{ $huerta->huerta }}</h3>

                        <div class="stars">

                            @foreach ( $reviews as $review )

                            @if ( $review->huerta_id == $huerta->id )
                            {{-- {{ $review->stars }} --}}

                            @for ($i = 0; $i < 5; ++$i)
                            <i class="{{ $review->stars <= $i ? 'far' : 'fas' }} fa-star" aria-hidden="true"></i>
                            @endfor

                            @endif

                            @endforeach
                        </div>

                    </div>

                    <i class="fas fa-plus"></i>
                </a>
            </div>
            
            @endforeach

        </div>

        <div class="text-center btn-load">
            <a href="{{ url('/huertas') }}" class="btn btn-medium btn-primary">Ver más</a>
        </div>
    </div>
</div> 