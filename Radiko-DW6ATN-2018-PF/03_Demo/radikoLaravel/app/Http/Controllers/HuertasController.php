<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Huerta;
use App\Models\TipoHuerta;
use App\Models\Categoria;
use App\Models\Producto;
use App\Models\Review;

use Illuminate\Support\Facades\DB;

class HuertasController extends Controller
{

  /**
   * Front - Muestra la página principal
   *
   * @return \Illuminate\Http\Response
   */
  public function showPrincipal()
  {

    $huertasDestacadas = Huerta::All()->where('destacado', true);
    $categorias = Categoria::All();
    $reviews = Review::selectRaw('round(avg(stars),1) as stars, huerta_id')->groupBy('huerta_id')->get();

    return view( 'principal', compact('huertasDestacadas', 'categorias', 'reviews') );
  } 


  /**
   * Front - Muestra los resultados de busqueda
   *
   * @return \Illuminate\Http\Response
   */
  public function showSearchResults(Request $request)
  {

    $inputData = $request->get('search');

    $huertas = Huerta::All();
    $categorias = Categoria::All();
    $reviews = Review::selectRaw('round(avg(stars),1) as stars, huerta_id')->groupBy('huerta_id')->get();
    $productos =  Producto::with('unidadDeMedida')->where('producto', 'LIKE', '%' . $inputData . '%')->paginate(8);

    return view('huertas.search', compact('productos', 'categorias', 'reviews', 'huertas', 'inputData'));

  }


  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {

    $huertas = DB::table('huertas')->paginate(6);
    $categorias = Categoria::All();
    $comentarios = Review::All()->where('stars', '>', 3);
    $reviews = Review::selectRaw('round(avg(stars),1) as stars, huerta_id')->groupBy('huerta_id')->get();

    return view('huertas.index', compact('huertas', 'categorias','reviews'));
  }


  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function huertasByCategory( $id )
  {

    $huertas = Huerta::whereHas('productos', function ($query) use ($id) {
      $query->where('categoria_id', $id);
    })->paginate(6);

    $categorias = Categoria::All();
    $categoriaSeleccionada = Categoria::find($id);
    $comentarios = Review::All()->where('stars', '>', 3);
    $reviews = Review::selectRaw('round(avg(stars),1) as stars, huerta_id')->groupBy('huerta_id')->get();

    return view('huertas.por-categoria', compact('huertas', 'categorias','reviews', 'categoriaSeleccionada'));
  }


  /**
   * API Huerta - traer producto por id
   *
   * @return \Illuminate\Http\Response
   */
  public function getProductobyId( $id )
  {

    $productoSeleccionado = Producto::find($id);
    $categoria = Producto::find($id);

    return response()->json($productoSeleccionado);
  }


  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
      //
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
      //
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    $huerta = Huerta::find($id);

    $categorias = Categoria::All();

    //dd($categorias);

    $productos = Producto::with('unidadDeMedida')->where('huerta_id', $id)->paginate(8);

    return view('huertas.show', compact('huerta', 'productos','categorias'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
      //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
      //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
      //
  }
}
