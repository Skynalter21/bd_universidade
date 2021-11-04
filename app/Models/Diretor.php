<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Diretor
 * 
 * @property int $idpes
 * @property int|null $idfacul
 *
 * @package App\Models
 */
class Diretor extends Model
{
	protected $table = 'diretor';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'idpes' => 'int',
		'idfacul' => 'int'
	];

	protected $fillable = [
		'idpes',
		'idfacul'
	];
}
