<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UnidadDeMedida extends Model
{
	/** @var string El nombre de la tabla */
	protected $table = 'unidades_de_medida';

	/** @var array Los campos que se pueden cargar de manera masiva. */
	protected $fillable = ['unidad'];


	public function productos()
	{
		return $this->hasMany(Producto::class);
	}
}


