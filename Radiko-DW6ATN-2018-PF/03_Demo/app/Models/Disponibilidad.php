<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Disponibilidad extends Model
{
	protected $table = 'disponibilidades';

	public function huerta()
	{
		return $this->belongsTo(Huerta::class);
	}
}
