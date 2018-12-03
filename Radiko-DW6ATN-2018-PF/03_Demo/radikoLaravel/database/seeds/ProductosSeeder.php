<?php

use Illuminate\Database\Seeder;
use App\Models\Producto;

class ProductosSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
	//Productos huerta #1
		//Frutas
	Producto::create([
		'producto' => 'Manzana roja',
		'descripcion' => 'Son ricas en pectina (buen aliada contra el colesterol y la diabetes), aminoácidos, ácidos, azúcares, fibras. Popularmente se le asignan propiedades antiinflamatoria del aparato digestivo, gracias a la pectina es a la vez laxante suave y astringente en caso de diarréas o colitis, diurético y depurativa, incluso anticatarral e hipotensora.',
		'marca' => 'Jardín Orgánico',
		'precio' => 78.00,
		'unidad_de_medida_id' => 1,
		'foto' => 'man01.jpg', //ok
		'estado' => 1,
		'categoria_id' => 1,
		'huerta_id' => 1
    ]);
	Producto::create([
		'producto' => 'Naranaja',
		'descripcion' => 'Las naranjas tienen un alto contenido de vitamina C, así como niveles de potasio, fibra, vitamina B, ácido fólico y antioxidantes.',
		'marca' => 'Jardín Orgánico',
		'precio' => 45.00,
		'unidad_de_medida_id' => 1,
		'foto' => 'nar01.jpg', //ok
		'estado' => 1,
		'categoria_id' => 1,
		'huerta_id' => 1
    ]);
	Producto::create([
		'producto' => 'Frutilla',
		'descripcion' => 'Aumenta las defensas del organismo por el aporte de vitamina C, un efecto que es mayor cuando las frutillas son maduras. Ideal para prevenir resfríos y enfermedades respiratorias.',
		'marca' => 'Jardín Orgánico',
		'precio' => 25.50,
		'unidad_de_medida_id' => 1,
		'foto' => 'fru01.jpg', //ok
		'estado' => 1,
		'categoria_id' => 1,
		'huerta_id' => 1
    ]);
	Producto::create([
		'producto' => 'Kiwi',
		'descripcion' => 'Es una de las pocas frutas que contiene ácido fólico, una sustancia necesaria para que las embarazadas desarrollen el feto en buenas condiciones. Además, el kiwi ayuda a luchar contra el cáncer de esófago y el de pulmón.',
		'marca' => 'Jardín Orgánico',
		'precio' => 70.90,
		'unidad_de_medida_id' => 1,
		'foto' => 'kiw01.jpg', //ok
		'estado' => 1,
		'categoria_id' => 1,
		'huerta_id' => 1
    ]);
	Producto::create([
		'producto' => 'Durazno',
		'descripcion' => 'Aportan vitaminas, entre las que destaca la vitamina C y de minerales, y proporciones moderadas de carotenoides con actividad provitamínica A como alfa-caroteno, beta-caroteno y criptoxantina, así como de otros carotenoides sin esta actividad como luteína y zeaxantina.',
		'marca' => 'Jardín Orgánico',
		'precio' => 125.90,
		'unidad_de_medida_id' => 1,
		'foto' => 'dur01.jpg', //ok
		'estado' => 1,
		'categoria_id' => 1,
		'huerta_id' => 1
    ]);
		//Verduras
    Producto::create([
		'producto' => 'Tomate redondo',
		'descripcion' => 'Tomates deliciosos de estación. Es un alimento con escasa cantidad de calorías. El tomate es una fuente importante de ciertos minerales (como el potasio y el magnesio).',
		'marca' => 'Mitden',
		'precio' => 36.00,
		'unidad_de_medida_id' => 1,
		'foto' => 'tom01.jpg', //ok
		'estado' => 1,
		'categoria_id' => 2,
		'huerta_id' => 1
    ]);
    Producto::create([
		'producto' => 'Lechuga mantecosa',
		'descripcion' => 'La lechuga, desde el punto de vista alimentario, es especialmente apreciada por su frescura, gran digestibilidad y contenido de agua.',
		'marca' => 'Mitden',
		'precio' => 75.50,
		'unidad_de_medida_id' => 1,
		'foto' => 'lec01.jpg', //ok
		'estado' => 1,
		'categoria_id' => 2,
		'huerta_id' => 1
    ]);
    Producto::create([
		'producto' => 'Morrón amarillo',
		'descripcion' => 'Los morrones amarillos son ricos en fibra, lo que ayuda a producir sensación de saciedad, al mismo tiempo que combate el estreñimiento. En este aspecto también resulta beneficioso la gran cantidad de agua que poseen.',
		'marca' => 'Jardín Orgánico',
		'precio' => 44.00,
		'unidad_de_medida_id' => 1,
		'foto' => 'mor01.jpg', //ok
		'estado' => 1,
		'categoria_id' => 2,
		'huerta_id' => 1
    ]);
    Producto::create([
		'producto' => 'Zanahoria',
		'descripcion' => 'Ideal para hacer jugos de zanahoria.',
		'marca' => 'Mitden',
		'precio' => 29.99,
		'unidad_de_medida_id' => 1,
		'foto' => 'zan01.jpg', //ok
		'estado' => 1,
		'categoria_id' => 2,
		'huerta_id' => 1
    ]);
    Producto::create([
		'producto' => 'Palta',
		'descripcion' => 'La palta es una de las frutas más comunes en Latinoamérica.  Contiene una grasa parecida a la de la aceituna que es muy recomendable para el corazón.',
		'marca' => 'Jardín Orgánico',
		'precio' => 39.00,
		'unidad_de_medida_id' => 1,
		'foto' => 'pal01.jpg', //ok
		'estado' => 1,
		'categoria_id' => 1,
		'huerta_id' => 1
    ]);
    Producto::create([
		'producto' => 'Pepino',
		'descripcion' => 'Cien gramos de pepino aportan aproximadamente un 10% de la ingesta diaria recomendada de Vitamina C.
		Además, el pepino no contiene grasa, es bajo en calorías y colesterol y es muy utilizado en la medicina, por sus cualidades emolientes, calmantes y refrescantes y sobretodo alcalinizantes.',
		'marca' => 'marca test',
		'precio' => 115.00,
		'unidad_de_medida_id' => 1,
		'foto' => 'pep01.jpg', //ok
		'estado' => 1,
		'categoria_id' => 2,
		'huerta_id' => 1
    ]);
		//Harinas
    Producto::create([
		'producto' => 'Baguettin saborizado',
		'descripcion' => 'Sin conservantes ni aditivos químicos.',
		'marca' => 'Ecoville',
		'precio' => 122.00,
		'unidad_de_medida_id' => 1,
		'foto' => 'pan01.jpg', //ok
		'estado' => 1,
		'categoria_id' => 3,
		'huerta_id' => 1
    ]);
	Producto::create([
		'producto' => 'Pan lactal mediano',
		'descripcion' => 'Sin conservantes ni aditivos químicos.',
		'marca' => 'Ecoville',
		'precio' => 99.90,
		'unidad_de_medida_id' => 1,
		'foto' => 'pan02.jpg', //ok
		'estado' => 1,
		'categoria_id' => 3,
		'huerta_id' => 1
    ]);
		//Granjas
    Producto::create([
		'producto' => 'Nuggets de pollo',
		'descripcion' => 'Pata muslo coeco + rebozador + sal + harina de trigo + proteina de soja + huevo coeco',
		'marca' => 'Coeco',
		'precio' => 299.99,
		'unidad_de_medida_id' => 1,
		'foto' => 'gra01.jpg',
		'estado' => 1,
		'categoria_id' => 4,
		'huerta_id' => 1
    ]);
	Producto::create([
		'producto' => 'Pollo pastoril',
		'descripcion' => 'Es alimentado exclusivamente con nutrientes de origen vegetal provistos por pasturas y granos y por minerales de origen marino que complementan su dieta animal.',
		'marca' => 'Coeco',
		'precio' => 453.80,
		'unidad_de_medida_id' => 1,
		'foto' => 'gra02.jpg', //ok
		'estado' => 1,
		'categoria_id' => 4,
		'huerta_id' => 1
    ]);
		//Lacteos
    Producto::create([
		'producto' => 'Queso de cabra sabor provenzal',
		'descripcion' => 'Ingredientes: Leche de cabra, sal, cuajos, fermentos lácticos.',
		'marca' => 'Cabras de Cafayate',
		'precio' => 170.50,
		'unidad_de_medida_id' => 1,
		'foto' => 'lac01.jpg', //ok
		'estado' => 1,
		'categoria_id' => 5,
		'huerta_id' => 1
    ]);
	Producto::create([
		'producto' => 'Tofu',
		'descripcion' => 'La incorporación del tofu en la dieta aporta varios beneficios para la salud. Por su versatilidad es fácil de ser incorporado en las preparaciones diarias, en forma práctica y accesible.',
		'marca' => 'Soyana',
		'precio' => 138.90,
		'unidad_de_medida_id' => 1,
		'foto' => 'lac05.jpg', //ok
		'estado' => 1,
		'categoria_id' => 5,
		'huerta_id' => 1
    ]);
		//Carnes
    Producto::create([
		'producto' => 'Colita de cuadril',
		'descripcion' => 'Linar Group es la primera empresa en argentina en desarrollar carne vacuna orgánica, desde el productor hasta la mesa del consumidor. Don Edgardo se constituye así en un nuevo producto en el mercado argentino: Carne Vacuna Certificada Orgánica.',
		'marca' => 'Don Edgardo',
		'precio' => 595.50,
		'unidad_de_medida_id' => 5,
		'foto' => 'car01.jpg', //ok
		'estado' => 1,
		'categoria_id' => 6,
		'huerta_id' => 1
    ]);
	Producto::create([
		'producto' => 'Peceto orgánico',
		'descripcion' => 'Linar Group es la primera empresa en argentina en desarrollar carne vacuna orgánica, desde el productor hasta la mesa del consumidor. Don Edgardo se constituye así en un nuevo producto en el mercado argentino: Carne Vacuna Certificada Orgánica.',
		'marca' => 'Don Edgardo',
		'precio' => 441.50,
		'unidad_de_medida_id' => 5,
		'foto' => 'car02.jpg', //ok
		'estado' => 1,
		'categoria_id' => 6,
		'huerta_id' => 1
    ]);
	Producto::create([
		'producto' => 'Hamburguesa orgánica',
		'descripcion' => 'Linar Group es la primera empresa en argentina en desarrollar carne vacuna orgánica, desde el productor hasta la mesa del consumidor. Don Edgardo se constituye así en un nuevo producto en el mercado argentino: Carne Vacuna Certificada Orgánica.',
		'marca' => 'Don Edgardo',
		'precio' => 22,
		'unidad_de_medida_id' => 5,
		'foto' => 'car03.jpg', //ok
		'estado' => 1,
		'categoria_id' => 6,
		'huerta_id' => 1
    ]);
		//Especias
	Producto::create([
		'producto' => 'Pimentón ahumado',
		'descripcion' => 'Producto sin conservantes ni aditivos. 100 % natural, ápto para celíacos y con certificación Kosher - parve.
		Este producto es rico en vitamina K, vitamina B5 y vitamina B6.
		Su alto contenido de hierro ayuda a prevenir la anemia. Favorece a la buena circulación y mejora la presión arterial.',
		'marca' => 'Arytza',
		'precio' => 98.90,
		'unidad_de_medida_id' => 5,
		'foto' => 'esp01.jpg', //ok
		'estado' => 1,
		'categoria_id' => 7,
		'huerta_id' => 1
    ]);	
	Producto::create([
		'producto' => 'Mix dulce - Sabor Toffee',
		'descripcion' => 'Para saborizar bebidas frías, calientes y pastelería. Contiene Cacao, sabor caramelo y crema.',
		'marca' => 'Saros',
		'precio' => 127.90,
		'unidad_de_medida_id' => 5,
		'foto' => 'esp02.jpg', //ok
		'estado' => 1,
		'categoria_id' => 7,
		'huerta_id' => 1
    ]);	
	Producto::create([
		'producto' => 'Mix dulce - Sabor marroqui',
		'descripcion' => 'Con canela, jengibre, nuez moscada, cardamomo y clavo de olor
		Un aroma irresistible, donde el dulzor de la canela y el distintivo sabor del jengibre se mezclan con notas de finas especias dulces como la nuez moscada y el cardamomo, mas una pizca de clavo de olor.',
		'marca' => 'Saros',
		'precio' => 127.90,
		'unidad_de_medida_id' => 5,
		'foto' => 'esp03.jpg', //ok
		'estado' => 1,
		'categoria_id' => 7,
		'huerta_id' => 1
    ]);	
		//Semillas
	Producto::create([
		'producto' => 'Arroz Blanco',
		'descripcion' => 'Producto sin conservantes ni aditivos. 100 % natural, ápto para celíacos.',
		'marca' => 'Terrasana - Sabores de la tierra',
		'precio' => 70.90,
		'unidad_de_medida_id' => 5,
		'foto' => 'sem01.jpg', //ok
		'estado' => 1,
		'categoria_id' => 8,
		'huerta_id' => 1
    ]);	
	Producto::create([
		'producto' => 'Arroz integral',
		'descripcion' => 'Producto sin conservantes ni aditivos. 100 % natural, ápto para celíacos.',
		'marca' => 'Terrasana - Sabores de la tierra',
		'precio' => 73.50,
		'unidad_de_medida_id' => 5,
		'foto' => 'sem02.jpg', //ok
		'estado' => 1,
		'categoria_id' => 8,
		'huerta_id' => 1
    ]);	
	Producto::create([
		'producto' => 'Arroz Yamaní',
		'descripcion' => 'Producto sin conservantes ni aditivos. 100 % natural, ápto para celíacos.',
		'marca' => 'Terrasana - Sabores de la tierra',
		'precio' => 85.70,
		'unidad_de_medida_id' => 5,
		'foto' => 'sem03.jpg', //ok
		'estado' => 1,
		'categoria_id' => 8,
		'huerta_id' => 1
    ]);		
		//Embasados
	Producto::create([
		'producto' => 'Aceto balsámico',
		'descripcion' => 'Elaborado en barricas de roble en forma artesanal. Ingredientes: vino orgánico, mosto de uva orgánico. Libre de gluten.',
		'marca' => 'Terrasana - Sabores de la tierra',
		'precio' => 175.90,
		'unidad_de_medida_id' => 5,
		'foto' => 'emb01.jpg', //ok
		'estado' => 1,
		'categoria_id' => 9,
		'huerta_id' => 1
    ]);	
	Producto::create([
		'producto' => 'Aceite de oliva extra virgen',
		'descripcion' => 'Aceite de Oliva, Extra Virgen, prensado en frío.',
		'marca' => 'Esencias de la Tierra',
		'precio' => 296.90,
		'unidad_de_medida_id' => 5,
		'foto' => 'emb02.jpg', //ok
		'estado' => 1,
		'categoria_id' => 9,
		'huerta_id' => 1
    ]);	
	Producto::create([
		'producto' => 'Vinagre de uva blanco',
		'descripcion' => 'Vino orgánico..',
		'marca' => 'Terrasana - Sabores de la tierra',
		'precio' => 121.90,
		'unidad_de_medida_id' => 5,
		'foto' => 'emb03.jpg', //ok
		'estado' => 1,
		'categoria_id' => 9,
		'huerta_id' => 1
    ]);	
	
	
	//Productos huerta #2
		//Frutas
	Producto::create([
		'producto' => 'Manzana roja',
		'descripcion' => 'Sabrosas y super frescas. Ideales para preparar tartas de manzana.',
		'marca' => 'Riol',
		'precio' => 65.00,
		'unidad_de_medida_id' => 1,
		'foto' => 'man02.jpg', //ok
		'estado' => 1,
		'categoria_id' => 1,
		'huerta_id' => 2
    ]);
	Producto::create([
		'producto' => 'Naranaja',
		'descripcion' => 'Realmente ricas en vitamina C y B. Imperdibles para realizar sabrosos jugos.',
		'marca' => 'Riol',
		'precio' => 47.00,
		'unidad_de_medida_id' => 1,
		'foto' => 'nar02.jpg', //ok
		'estado' => 1,
		'categoria_id' => 1,
		'huerta_id' => 2
    ]);
	Producto::create([
		'producto' => 'Frutilla',
		'descripcion' => 'Ideales para comer con crema y poder realizar tartas exquisitas.',
		'marca' => 'Riol',
		'precio' => 30.50,
		'unidad_de_medida_id' => 1,
		'foto' => 'fru02.jpg', //ok
		'estado' => 1,
		'categoria_id' => 1,
		'huerta_id' => 2
    ]);
		//Verduras
    Producto::create([
		'producto' => 'Ajo',
		'descripcion' => 'Mejora la circulación: El ajo tiene efectos positivos sobre la actividad cardiovascular. Su consumo reduce los niveles de colesterol y de triglicéridos. Además, desacelera la velocidad de la coagulación y tiene propiedades antioxidantes.',
		'marca' => 'Riol',
		'precio' => 38.00,
		'unidad_de_medida_id' => 1,
		'foto' => 'ajo01.jpg',
		'estado' => 1,
		'categoria_id' => 2,
		'huerta_id' => 2
    ]);
	Producto::create([
		'producto' => 'Tomate perita',
		'descripcion' => 'Este fruto, alberga vitaminas C, B5, B2 y B1 y varios minerales.',
		'marca' => 'Riol',
		'precio' => 37.30,
		'unidad_de_medida_id' => 1,
		'foto' => 'tom02.jpg', //ok
		'estado' => 1,
		'categoria_id' => 2,
		'huerta_id' => 2
    ]);
    Producto::create([
		'producto' => 'Lechuga criolla',
		'descripcion' => 'Con un verde que irradia esta lechuga es super fresca y con un sabor muy delicado, ideal para acompañar las ensaladas',
		'marca' => 'Riol',
		'precio' => 83.00,
		'unidad_de_medida_id' => 1,
		'foto' => 'lec02.jpg', //ok
		'estado' => 1,
		'categoria_id' => 2,
		'huerta_id' => 2
    ]);
	//Harinas
    Producto::create([
		'producto' => 'Pan lacteado',
		'descripcion' => 'Sin conservantes ni aditivos químicos.',
		'marca' => 'Locta',
		'precio' => 95.00,
		'unidad_de_medida_id' => 1,
		'foto' => 'pan03.jpg', //ok
		'estado' => 1,
		'categoria_id' => 3,
		'huerta_id' => 2
    ]);
	//Granjas
    Producto::create([
		'producto' => 'Pechugas de pollo',
		'descripcion' => 'Pechugas sin piel muy magras',
		'marca' => 'Tenus',
		'precio' => 260.30,
		'unidad_de_medida_id' => 1,
		'foto' => 'gra03.jpg',
		'estado' => 1,
		'categoria_id' => 4,
		'huerta_id' => 2
    ]);
	//Lacteos
    Producto::create([
		'producto' => 'Queso de cabra',
		'descripcion' => 'Queso fresco a base de leche de cabra.',
		'marca' => 'Tenus',
		'precio' => 136.00,
		'unidad_de_medida_id' => 1,
		'foto' => 'lac02.jpg', //ok
		'estado' => 1,
		'categoria_id' => 5,
		'huerta_id' => 2
    ]);
	//Carnes
    Producto::create([
		'producto' => 'Carne picada orgánica',
		'descripcion' => 'Producto: Refrigerado y envasado al vacío por unidad.',
		'marca' => 'Carlitos',
		'precio' => 595.50,
		'unidad_de_medida_id' => 5,
		'foto' => 'car04.jpg', //ok
		'estado' => 1,
		'categoria_id' => 6,
		'huerta_id' => 2
    ]);
	//Especias
	Producto::create([
		'producto' => 'Mix de vegetales deshidratados pesto',
		'descripcion' => 'Blend de hierbas y especias: Sabores regionales Condimentos 100% naturales, SIN SAL SIN GMS (las aromáticas que se utilizan son orgánicas).',
		'marca' => 'Saros',
		'precio' => 107.50,
		'unidad_de_medida_id' => 5,
		'foto' => 'esp04.jpg', //ok
		'estado' => 1,
		'categoria_id' => 7,
		'huerta_id' => 2
    ]);	
	
	
	//Productos huerta #3
		//Frutas
	Producto::create([
		'producto' => 'Manzana',
		'descripcion' => 'Las mejores manzanas orgánicas. Cosechadas sin ningún producto químico.',
		'marca' => 'Tallo Verde',
		'precio' => 75.00,
		'unidad_de_medida_id' => 1,
		'foto' => 'man03.jpg', //ok
		'estado' => 1,
		'categoria_id' => 1,
		'huerta_id' => 3
    ]);
		//Verduras
    Producto::create([
		'producto' => 'Tomate',
		'descripcion' => 'Tomates deliciosos de estación. Es un alimento con escasa cantidad de calorías. El tomate es una fuente importante de ciertos minerales (como el potasio y el magnesio).',
		'marca' => 'Tallo Verde',
		'precio' => 38.00,
		'unidad_de_medida_id' => 1,
		'foto' => 'tom03.jpg', //ok
		'estado' => 1,
		'categoria_id' => 2,
		'huerta_id' => 3
    ]);
    Producto::create([
		'producto' => 'Lechuga criolla',
		'descripcion' => 'La lechuga, desde el punto de vista alimentario, es especialmente apreciada por su frescura, gran digestibilidad y contenido de agua.',
		'marca' => 'Tallo Verde',
		'precio' => 46.50,
		'unidad_de_medida_id' => 1,
		'foto' => 'lec03.jpg', //ok
		'estado' => 1,
		'categoria_id' => 2,
		'huerta_id' => 3
    ]);
    Producto::create([
      'producto' => 'Pera',
      'descripcion' => 'Muy beneficiosa. Entre las vitaminas que contiene la palta podemos resaltar la A, C, folato o B9, E, niacina o B3, piridoxxina o B6, riboflavina o B2 y tiamina o B1.',
      'marca' => 'Tallo Verde',
      'precio' => 150.00,
      'unidad_de_medida_id' => 1,
      'foto' => 'pal02.jpg',
      'estado' => 1,
      'categoria_id' => 2,
      'huerta_id' => 3
    ]);
		//Harinas
    Producto::create([
		'producto' => 'Pan de campo',
		'descripcion' => 'Muy delicioso, sin conservantes ni aditivos químicos.',
		'marca' => 'Carolu',
		'precio' => 105.00,
		'unidad_de_medida_id' => 1,
		'foto' => 'pan04.jpg', //ok
		'estado' => 1,
		'categoria_id' => 3,
		'huerta_id' => 3
    ]);
		//Granjas
    Producto::create([
		'producto' => 'Salchichas de pollo',
		'descripcion' => 'Salchicha elaborada con patamuslo Pastoríl y tocino.',
		'marca' => 'Carolu',
		'precio' => 300.80,
		'unidad_de_medida_id' => 1,
		'foto' => 'gra04.jpg', //ok
		'estado' => 1,
		'categoria_id' => 4,
		'huerta_id' => 3
    ]);
	//Lacteos
    Producto::create([
		'producto' => 'Queso de cabra',
		'descripcion' => 'Queso estacionado fresco realizado con cabras de primera calidad.',
		'marca' => 'Carolu',
		'precio' => 154.00,
		'unidad_de_medida_id' => 1,
		'foto' => 'lac03.jpg', //ok
		'estado' => 1,
		'categoria_id' => 5,
		'huerta_id' => 3
    ]);
	//Carnes
    Producto::create([
		'producto' => 'Milanesas de peceto sin rebozar',
		'descripcion' => 'Carne de novillos criados y alimentados sobre pasturas de campos orgánicos certificados, únicos en el país.',
		'marca' => 'Carolu',
		'precio' => 595.50,
		'unidad_de_medida_id' => 5,
		'foto' => 'car05.jpg', //ok
		'estado' => 1,
		'categoria_id' => 6,
		'huerta_id' => 3
    ]);
	
	
	
	
	//Productos huerta #4
	//Frutas
	Producto::create([
		'producto' => 'Manzana',
		'descripcion' => 'Manzanas deliciosas que sirven para jugos y tartas.',
		'marca' => 'Gatofer',
		'precio' => 68.00,
		'unidad_de_medida_id' => 1,
		'foto' => 'man04.jpg', //ok
		'estado' => 1,
		'categoria_id' => 1,
		'huerta_id' => 4
    ]);
	Producto::create([
		'producto' => 'Durazno',
		'descripcion' => 'Aportan vitaminas, entre las que destaca la vitamina C y de minerales, y proporciones moderadas de carotenoides con actividad provitamínica A como alfa-caroteno, beta-caroteno y criptoxantina, así como de otros carotenoides sin esta actividad como luteína y zeaxantina.',
		'marca' => 'Gatofer',
		'precio' => 68.00,
		'unidad_de_medida_id' => 1,
		'foto' => 'dur02.jpg', //ok
		'estado' => 1,
		'categoria_id' => 1,
		'huerta_id' => 4
    ]);
	//Verduras
    Producto::create([
		'producto' => 'Tomate redondo',
		'descripcion' => 'Tomates deliciosos de estación. Es un alimento con escasa cantidad de calorías. El tomate es una fuente importante de ciertos minerales (como el potasio y el magnesio).',
		'marca' => 'Gatofer',
		'precio' => 39.30,
		'unidad_de_medida_id' => 1,
		'foto' => 'tom04.jpg', //ok
		'estado' => 1,
		'categoria_id' => 2,
		'huerta_id' => 4
    ]);
    Producto::create([
		'producto' => 'Lechuga criolla',
		'descripcion' => 'La lechuga, desde el punto de vista alimentario, es especialmente apreciada por su frescura, gran digestibilidad y contenido de agua.',
		'marca' => 'Gatofer',
		'precio' => 70.50,
		'unidad_de_medida_id' => 1,
		'foto' => 'lec04.jpg', //ok
		'estado' => 1,
		'categoria_id' => 2,
		'huerta_id' => 4
    ]);
	//Harinas
    Producto::create([
		'producto' => 'Pan Baguet',
		'descripcion' => 'Sin conservantes ni aditivos químicos.',
		'marca' => 'Gatofer',
		'precio' => 80.00,
		'unidad_de_medida_id' => 1,
		'foto' => 'pan05.jpg', //ok
		'estado' => 1,
		'categoria_id' => 3,
		'huerta_id' => 4
    ]);
	//Granjas
    Producto::create([
		'producto' => 'Suprema deshuesada',
		'descripcion' => 'Se entrega en bolsas térmicas para mantener la temperatura -2 y - 8 grados. La temperatura de frezado es de -18 grados. Una vez recibido puede frezarlo.',
		'marca' => 'Gatofer',
		'precio' => 125,
		'unidad_de_medida_id' => 1,
		'foto' => 'gra05.jpg', //ok
		'estado' => 1,
		'categoria_id' => 4,
		'huerta_id' => 4
    ]);
		//Lacteos
    Producto::create([
		'producto' => 'Queso pategrás',
		'descripcion' => 'Quesos 100% orgánicos de Tandil.
		Elaborados desde la aplicación de métodos no contaminantes en la producción, sin aditivos químicos ni sustancias de origen sintético, pero además, representan una producción en sintonía con el cuidado del medio ambiente y el desarrollo sustentable.',
		'marca' => 'Gatofer',
		'precio' => 189.50,
		'unidad_de_medida_id' => 5,
		'foto' => 'lac06.jpg', //ok
		'estado' => 1,
		'categoria_id' => 5,
		'huerta_id' => 4
    ]);
	//Especias
	Producto::create([
		'producto' => 'Mix especias Parisino',
		'descripcion' => 'Un aromático y delicado sabor para todas tus comidas.',
		'marca' => 'Gatofer',
		'precio' => 140.90,
		'unidad_de_medida_id' => 5,
		'foto' => 'esp05.jpg', //ok
		'estado' => 1,
		'categoria_id' => 7,
		'huerta_id' => 4
    ]);	
	//Semillas
	Producto::create([
		'producto' => 'Quinoa roja',
		'descripcion' => 'Contiene más contenido de fibra dietética que la Quinua Blanca.
		La quinua es el único grano que contiene todos los nueve aminoácidos esenciales para la nutrición humana.',
		'marca' => 'Gatofer',
		'precio' => 160.90,
		'unidad_de_medida_id' => 5,
		'foto' => 'sem04.jpg', //ok
		'estado' => 1,
		'categoria_id' => 8,
		'huerta_id' => 4
    ]);	
	Producto::create([
		'producto' => 'Quinoa Blanca',
		'descripcion' => 'Rica en fibra dietética; mejora el control del azúcar en la sangre.
		La quinua es el único grano que contiene todos los nueve aminoácidos esenciales para la nutrición humana.',
		'marca' => 'Gatofer',
		'precio' => 155.90,
		'unidad_de_medida_id' => 5,
		'foto' => 'sem05.jpg', //ok
		'estado' => 1,
		'categoria_id' => 8,
		'huerta_id' => 4
    ]);	
	
	//Productos huerta #5
	//Frutas
	Producto::create([
		'producto' => 'Manzana',
		'descripcion' => 'Manzanas deliciosas que sirven para jugos y tartas.',
		'marca' => 'El Jardín',
		'precio' => 68.00,
		'unidad_de_medida_id' => 1,
		'foto' => 'man05.jpg', //ok
		'estado' => 1,
		'categoria_id' => 1,
		'huerta_id' => 5
    ]);
	Producto::create([
		'producto' => 'Durazno',
		'descripcion' => 'Aportan vitaminas, entre las que destaca la vitamina C y de minerales, y proporciones moderadas de carotenoides con actividad provitamínica A como alfa-caroteno, beta-caroteno y criptoxantina, así como de otros carotenoides sin esta actividad como luteína y zeaxantina.',
		'marca' => 'El Jardín',
		'precio' => 115,
		'unidad_de_medida_id' => 1,
		'foto' => 'dur03.jpg', //ok
		'estado' => 1,
		'categoria_id' => 1,
		'huerta_id' => 5
    ]);
	//Verduras
    Producto::create([
		'producto' => 'Tomate',
		'descripcion' => 'Tomates deliciosos de estación. Es un alimento con escasa cantidad de calorías. El tomate es una fuente importante de ciertos minerales (como el potasio y el magnesio).',
		'marca' => 'El Jardín',
		'precio' => 30.00,
		'unidad_de_medida_id' => 1,
		'foto' => 'tom05.jpg', //ok
		'estado' => 1,
		'categoria_id' => 2,
		'huerta_id' => 5
    ]);
    Producto::create([
		'producto' => 'Morrón rojo',
		'descripcion' => 'Los morrones rojos son ricos en fibra, lo que ayuda a producir sensación de saciedad, al mismo tiempo que combate el estreñimiento. En este aspecto también resulta beneficioso la gran cantidad de agua que poseen.',
		'marca' => 'El Jardín',
		'precio' => 40.00,
		'unidad_de_medida_id' => 1,
		'foto' => 'mor02.jpg', //ok
		'estado' => 1,
		'categoria_id' => 2,
		'huerta_id' => 5
    ]);
		//Harinas
    Producto::create([
		'producto' => 'Pan saborizado',
		'descripcion' => 'Sin conservantes ni aditivos químicos.',
		'marca' => 'El Jardín',
		'precio' => 85.00,
		'unidad_de_medida_id' => 1,
		'foto' => 'pan06.jpg', //ok
		'estado' => 1,
		'categoria_id' => 3,
		'huerta_id' => 5
    ]);
		//Granjas
    Producto::create([
		'producto' => 'Pollo entero orgánico',
		'descripcion' => 'Pollo fresco sin aditivos ni conservantes',
		'marca' => 'El Jardín',
		'precio' => 156.99,
		'unidad_de_medida_id' => 1,
		'foto' => 'gra06.jpg',
		'estado' => 1,
		'categoria_id' => 4,
		'huerta_id' => 5
    ]);
		//Semillas
	Producto::create([
		'producto' => 'Copos de maíz ',
		'descripcion' => 'Producto sin certificación orgánica.
		Los productos garantizados libres de TACC, sin gluten, sólo son provistos en paquetes individuales de 100 gr cada uno y cuentan en su frente con la identificación del logo.',
		'marca' => 'El Jardín',
		'precio' => 85.90,
		'unidad_de_medida_id' => 5,
		'foto' => 'sem06.jpg', //ok
		'estado' => 1,
		'categoria_id' => 8,
		'huerta_id' => 5
    ]);	
	
	
	//Productos huerta #6
	//Frutas
	Producto::create([
		'producto' => 'Naranja',
		'descripcion' => 'Naranjas deliciosas ideales para jugos y batidos.',
		'marca' => 'Company',
		'precio' => 65.00,
		'unidad_de_medida_id' => 1,
		'foto' => 'man03.jpg', //ok
		'estado' => 1,
		'categoria_id' => 1,
		'huerta_id' => 6
    ]);
	Producto::create([
		'producto' => 'Durazno',
		'descripcion' => 'Duraznos frescos y de estación super deliciosos.',
		'marca' => 'Company',
		'precio' => 65.00,
		'unidad_de_medida_id' => 1,
		'foto' => 'dur04.jpg', //ok
		'estado' => 1,
		'categoria_id' => 1,
		'huerta_id' => 6
    ]);
	//Harinas
    Producto::create([
		'producto' => 'Pan de campo',
		'descripcion' => 'Sin conservantes ni aditivos químicos.',
		'marca' => 'Company',
		'precio' => 68.00,
		'unidad_de_medida_id' => 1,
		'foto' => 'pan07.jpg', //ok
		'estado' => 1,
		'categoria_id' => 3,
		'huerta_id' => 6
    ]);
	Producto::create([
		'producto' => 'Pan baguete',
		'descripcion' => 'Sin conservantes ni aditivos químicos.',
		'marca' => 'Company',
		'precio' => 85.90,
		'unidad_de_medida_id' => 1,
		'foto' => 'pan08.jpg', //ok
		'estado' => 1,
		'categoria_id' => 3,
		'huerta_id' => 6
    ]);
		//Lacteos
    Producto::create([
		'producto' => 'Queso de cabra',
		'descripcion' => 'Ingredientes: Leche de cabra, sal, cuajos, fermentos lácticos.',
		'marca' => 'Company',
		'precio' => 120,
		'unidad_de_medida_id' => 1,
		'foto' => 'lac04.jpg', //ok
		'estado' => 1,
		'categoria_id' => 5,
		'huerta_id' => 6
    ]);
	Producto::create([
		'producto' => 'Queso de cabra sabor ají',
		'descripcion' => 'Ingredientes: Leche de cabra, sal, cuajos, fermentos lácticos..',
		'marca' => 'Company',
		'precio' => 170.90,
		'unidad_de_medida_id' => 1,
		'foto' => 'lac07.jpg', //ok
		'estado' => 1,
		'categoria_id' => 5,
		'huerta_id' => 6
    ]);
	
	
	
	//Productos huerta #7
	//Frutas
	Producto::create([
		'producto' => 'Kiwi',
		'descripcion' => 'El kiwi también tiene potasio, sodio, pocas calorías, hidratos de carbono, calcio o hierro.',
		'marca' => 'Brote',
		'precio' => 85.00,
		'unidad_de_medida_id' => 1,
		'foto' => 'kiw02.jpg', //ok
		'estado' => 1,
		'categoria_id' => 1,
		'huerta_id' => 7
    ]);
	Producto::create([
		'producto' => 'Frutilla',
		'descripcion' => 'La fresa es una fruta del bosque adecuada en regímenes dietéticos.',
		'marca' => 'Brote',
		'precio' => 85.00,
		'unidad_de_medida_id' => 1,
		'foto' => 'fru03.jpg', //ok
		'estado' => 1,
		'categoria_id' => 1,
		'huerta_id' => 7
    ]);
		//Verduras
	Producto::create([
		'producto' => 'Morrón',
		'descripcion' => 'Beneficiosos por la gran cantidad de agua que poseen',
		'marca' => 'Brote',
		'precio' => 44.00,
		'unidad_de_medida_id' => 1,
		'foto' => 'mor03.jpg', //ok
		'estado' => 1,
		'categoria_id' => 2,
		'huerta_id' => 7
    ]);
    Producto::create([
		'producto' => 'Zanahoria',
		'descripcion' => 'Ideal para hacer jugos de zanahoria.',
		'marca' => 'Brote',
		'precio' => 29.99,
		'unidad_de_medida_id' => 1,
		'foto' => 'zan02.jpg', //ok
		'estado' => 1,
		'categoria_id' => 2,
		'huerta_id' => 7
    ]);
		//Especias
	Producto::create([
		'producto' => 'Pimentón',
		'descripcion' => 'Producto sin agro-químicos y pesticidas.',
		'marca' => 'De Mi Campo',
		'precio' => 85.90,
		'unidad_de_medida_id' => 5,
		'foto' => 'esp06.jpg', //ok
		'estado' => 1,
		'categoria_id' => 7,
		'huerta_id' => 7
    ]);	
	Producto::create([
		'producto' => 'Ají molido',
		'descripcion' => 'Producto Natural, sin conservantes ni aditivos.',
		'marca' => 'De Mi Campo',
		'precio' => 44.50,
		'unidad_de_medida_id' => 5,
		'foto' => 'esp07.jpg', //ok
		'estado' => 1,
		'categoria_id' => 7,
		'huerta_id' => 7
    ]);	
		//Embasados
	Producto::create([
		'producto' => 'Aceite de coco',
		'descripcion' => 'Es muy bueno para frituras y salteados por su resistencia al calor. Disminuye el nivel de colesterol en sangre. Posee propiedades antioxidantes, anticancerígenas, antivirales, antifúngicas y antibacterianas. Se recomienda 3 cucharadas diarias.',
		'marca' => 'Napus',
		'precio' => 200.50,
		'unidad_de_medida_id' => 5,
		'foto' => 'emb04.jpg', //ok
		'estado' => 1,
		'categoria_id' => 9,
		'huerta_id' => 7
    ]);	
	Producto::create([
		'producto' => 'Aceite de coco virgen',
		'descripcion' => 'Proveniente de plantaciones Filipinas de cocos frescos recién recolectados y prensados en frío se explime la pulpa blanca carnosa de este fruto, logrando un aceite intenso y delicioso de excelente calidad, conservando el 100% de sus propiedades.',
		'marca' => 'Napus',
		'precio' => 258.50,
		'unidad_de_medida_id' => 5,
		'foto' => 'emb05.jpg', //ok
		'estado' => 1,
		'categoria_id' => 9,
		'huerta_id' => 7
    ]);	
	
  }
}
