<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Faculdade
 * 
 * @property int $idfacul
 * @property int|null $iduni
 * @property string|null $siglafac
 * @property float|null $orcamento
 * @property int|null $idbloco
 * @property string|null $nomefacu
 *
 * @package App\Models
 */
class Faculdade extends Model
{
	protected $table = 'faculdade';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'idfacul' => 'int',
		'iduni' => 'int',
		'orcamento' => 'float',
		'idbloco' => 'int'
	];

	protected $fillable = [
		'idfacul',
		'iduni',
		'siglafac',
		'orcamento',
		'idbloco',
		'nomefacu'
	];
}
