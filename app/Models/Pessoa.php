<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Pessoa
 * 
 * @property int $idpes
 * @property string $first_name
 * @property Carbon|null $datanascim
 * @property string|null $last_name
 *
 * @package App\Models
 */
class Pessoa extends Model
{
	protected $table = 'pessoa';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'idpes' => 'int'
	];

	protected $dates = [
		'datanascim'
	];

	protected $fillable = [
		'idpes',
		'first_name',
		'datanascim',
		'last_name'
	];
}
