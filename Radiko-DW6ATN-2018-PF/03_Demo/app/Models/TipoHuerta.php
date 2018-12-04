<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoHuerta extends Model
{
	/** @var string El nombre de la tabla */
	protected $table = "tipo_huerta";

	/** @var array Los campos que se pueden cargar de manera masiva. */
	protected $fillable = ['tipo'];

	public function huerta() {
		return $this->hasMany(Huerta::class, 'id', 'id');
	}
}
