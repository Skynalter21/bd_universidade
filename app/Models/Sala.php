<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Sala
 * 
 * @property int $idsala
 * @property int $capacidade
 * @property int|null $idbloco
 *
 * @package App\Models
 */
class Sala extends Model
{
	protected $table = 'sala';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'idsala' => 'int',
		'capacidade' => 'int',
		'idbloco' => 'int'
	];

	protected $fillable = [
		'idsala',
		'capacidade',
		'idbloco'
	];
}
