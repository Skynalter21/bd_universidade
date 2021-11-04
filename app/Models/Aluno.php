<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Aluno
 * 
 * @property int $idpes
 * @property float|null $cra
 * @property string|null $telefone
 * @property int|null $orientador_ic
 * @property int|null $idfacul
 *
 * @package App\Models
 */
class Aluno extends Model
{
	protected $table = 'aluno';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'idpes' => 'int',
		'cra' => 'float',
		'orientador_ic' => 'int',
		'idfacul' => 'int'
	];

	protected $fillable = [
		'idpes',
		'cra',
		'telefone',
		'orientador_ic',
		'idfacul'
	];
}
