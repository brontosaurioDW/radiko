<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
	/** @var string El nombre de la tabla */
	protected $table = 'reviews';

	/** @var array Los campos que se pueden cargar de manera masiva. */
	protected $fillable = [
		'comentario',
		'stars',
		'huerta_id',
		'usuario_id'
	];

	public static $rules = [
		'stars' => 'required|in:1,2,3,4,5',
		'comentario' => 'required'
	];

	protected $guarded = [];

	public function huerta()
	{
		return $this->belongsTo(Huerta::class);
	}

	public function usuario()
	{
		return $this->belongsTo(Usuario::class);
	}
}
