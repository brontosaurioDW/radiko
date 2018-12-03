<?php

use Illuminate\Database\Seeder;
use App\Models\Review;

class ReviewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Review::create([
    		'huerta_id' => 1,
            'usuario_id' => 1,
    		'comentario' => 'Todo genial! Los productos llegaron en tiempo y forma.',
    		'stars' => 5
    	]);
    	Review::create([
    		'huerta_id' => 2,
            'usuario_id' => 2,
    		'comentario' => 'Lamentablemente no tenian dos productos que pedí. Igualmente me los descontaron del pedido. Todo bien.',
    		'stars' => 4
    	]);
        Review::create([
            'huerta_id' => 3,
            'usuario_id' => 3,
            'comentario' => 'No me gustaron mucho los productos. Se notaba que a las frutas le faltaba mucho para madurar',
            'stars' => 3
        ]);
        Review::create([
            'huerta_id' => 4,
            'usuario_id' => 4,
            'comentario' => 'Pido siempre! me encantan!',
            'stars' => 5
        ]);
        Review::create([
            'huerta_id' => 5,
            'usuario_id' => 5,
            'comentario' => 'Pedi ayer y hoy ya recibi los productos, genioss',
            'stars' => 5
        ]);
        Review::create([
            'huerta_id' => 6,
            'usuario_id' => 6,
            'comentario' => 'La primera vez que pido a esta granja. Todo bien aunque se demoraron en contactarme',
            'stars' => 3
        ]);
        Review::create([
            'huerta_id' => 7,
            'usuario_id' => 7,
            'comentario' => 'Que bueno que ofrezcan tantos productos de manera orgánica. Muy recomendables.',
            'stars' => 4
        ]);
        Review::create([
            'huerta_id' => 8,
            'usuario_id' => 8,
            'comentario' => 'Me parecio que tenia buenos precios, pude hacer muchas comidas con los productos que compre. Buena relacion precio calidad.',
            'stars' => 3
        ]);
        Review::create([
            'huerta_id' => 1,
            'usuario_id' => 9,
            'comentario' => 'No me gustó mucho. Medios desprolijos en el proceso de entrega.',
            'stars' => 2
        ]);
        Review::create([
            'huerta_id' => 2,
            'usuario_id' => 10,
            'comentario' => 'Muy buena onda los chicos. Resolvieron mis dudas y entregaron el pedido como lo habiamos pactado.',
            'stars' => 4
        ]);        
        Review::create([
            'huerta_id' => 3,
            'usuario_id' => 11,
            'comentario' => 'Un 10!',
            'stars' => 5
        ]);
        Review::create([
            'huerta_id' => 4,
            'usuario_id' => 12,
            'comentario' => 'Se olvidaron de un producto pero lo trajeron al otro dia sin problema.',
            'stars' => 3
        ]);
        Review::create([
            'huerta_id' => 5,
            'usuario_id' => 13,
            'comentario' => 'Hace mucho queria pedir en esta huerta y la verdad que no me defraudó',
            'stars' => 4
        ]);
        Review::create([
            'huerta_id' => 6,
            'usuario_id' => 14,
            'comentario' => 'Los recomiendo en cuanto a calidad, los precios me parecieron super caro por la cantidad que ofrecen.',
            'stars' => 3
        ]);

        Review::create([
            'huerta_id' => 7,
            'usuario_id' => 1,
            'comentario' => 'No los recomiendo, Lamentablemente llegaron en un horario que no habiamos acordado y no pude recibir el pedido.',
            'stars' => 1
        ]);
    	Review::create([
    		'huerta_id' => 8,
            'usuario_id' => 15,
    		'comentario' => 'Súper!',
    		'stars' => 4
    	]);
    }
}
