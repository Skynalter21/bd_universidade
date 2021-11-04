<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Professor
 * 
 * @property int $idpes
 * @property float $salario
 * @property int|null $idfacul
 *
 * @package App\Models
 */
class Professor extends Model
{
	protected $table = 'professor';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'idpes' => 'int',
		'salario' => 'float',
		'idfacul' => 'int'
	];

	protected $fillable = [
		'idpes',
		'salario',
		'idfacul'
	];
}
