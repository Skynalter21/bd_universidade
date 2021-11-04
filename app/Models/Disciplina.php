<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Disciplina
 * 
 * @property string $sigladis
 * @property string $nomedis
 * @property int $creditos
 * @property int|null $idfacul
 *
 * @package App\Models
 */
class Disciplina extends Model
{
	protected $table = 'disciplina';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'creditos' => 'int',
		'idfacul' => 'int'
	];

	protected $fillable = [
		'sigladis',
		'nomedis',
		'creditos',
		'idfacul'
	];
}
