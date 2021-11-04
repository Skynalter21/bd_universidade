<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PreReq
 * 
 * @property string $sigladis
 * @property string $siglapre
 *
 * @package App\Models
 */
class PreReq extends Model
{
	protected $table = 'pre_req';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'sigladis',
		'siglapre'
	];
}
