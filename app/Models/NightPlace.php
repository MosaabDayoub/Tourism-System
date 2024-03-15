<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class NightPlace
 * 
 * @property int $id
 * @property string|null $name
 * @property string|null $address
 * @property int|null $city_id
 * @property geometry|null $location
 * @property string|null $desciption
 * @property float|null $price
 *
 * @package App\Models
 */
class NightPlace extends Model
{
	protected $table = 'night place';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'city_id' => 'int',
		'location' => 'geometry',
		'price' => 'float'
	];

	protected $fillable = [
		'name',
		'address',
		'city_id',
		'location',
		'desciption',
		'price'
	];
}
