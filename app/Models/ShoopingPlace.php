<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ShoopingPlace
 * 
 * @property int $id
 * @property string|null $name
 * @property string|null $address
 * @property int|null $city_id
 * @property geometry|null $location
 * @property string|null $desciption
 *
 * @package App\Models
 */
class ShoopingPlace extends Model
{
	protected $table = 'shooping place';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'city_id' => 'int',
		'location' => 'geometry'
	];

	protected $fillable = [
		'name',
		'address',
		'city_id',
		'location',
		'desciption'
	];
}
