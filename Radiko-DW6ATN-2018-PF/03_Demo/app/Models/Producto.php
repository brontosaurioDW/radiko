<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
	/** @var string El nombre de la tabla */
	protected $table = "productos";

	/** @var array Los campos que se pueden cargar de manera masiva. */
	protected $fillable = ['producto', 'descripcion', 'marca', 'precio', 'foto', 'estado', 'id_huerta', 'id_unidad_de_medida'];

	/** @var array Las reglas de la validación. */
	// public static $rules = [
	// 	'nombre' => 'required|min:2',
	// 	'genero' => 'required|min:3',
	// 	'precio' => 'required|numeric',
	// ];


	public function huerta()
	{
		return $this->belongsTo(Huerta::class);
	}

	public function unidadDeMedida()
	{
		return $this->belongsTo(UnidadDeMedida::class);
	}

	public function categoria()
	{
		return $this->belongsTo(Categoria::class);
	}
}
