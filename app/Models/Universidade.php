<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Universidade
 *
 * @property int $id
 * @property string|null $nomeuni
 * @property string|null $sigla
 *
 * @package App\Models
 */
class Universidade extends Model
{
	protected $table = 'universidade';
	public $timestamps = false;

	protected $fillable = [
		'id',
		'nomeuni',
		'sigla'
	];
}
