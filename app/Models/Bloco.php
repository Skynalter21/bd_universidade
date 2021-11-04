<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Bloco
 * 
 * @property int $idbloco
 * @property string $nomebloco
 *
 * @package App\Models
 */
class Bloco extends Model
{
	protected $table = 'bloco';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'idbloco' => 'int'
	];

	protected $fillable = [
		'idbloco',
		'nomebloco'
	];
}
