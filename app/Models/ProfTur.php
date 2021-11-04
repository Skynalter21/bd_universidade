<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ProfTur
 * 
 * @property int $idpes
 * @property int $idturma
 *
 * @package App\Models
 */
class ProfTur extends Model
{
	protected $table = 'prof_tur';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'idpes' => 'int',
		'idturma' => 'int'
	];

	protected $fillable = [
		'idpes',
		'idturma'
	];
}
