<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Inscricao
 * 
 * @property int $idpes
 * @property int $idturma
 * @property float|null $nota
 * @property int|null $faltas
 *
 * @package App\Models
 */
class Inscricao extends Model
{
	protected $table = 'inscricao';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'idpes' => 'int',
		'idturma' => 'int',
		'nota' => 'float',
		'faltas' => 'int'
	];

	protected $fillable = [
		'idpes',
		'idturma',
		'nota',
		'faltas'
	];
}
