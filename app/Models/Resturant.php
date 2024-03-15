<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Resturant
 * 
 * @property int $id
 * @property string|null $name
 * @property string|null $address
 * @property int|null $city_id
 * @property int|null $place_type
 * @property geometry|null $location
 * @property int|null $pricePearPerson
 * @property string|null $desciption
 * @property int|null $stares
 * @property string|null $food_type
 *
 * @package App\Models
 */
class Resturant extends Model
{
	protected $table = 'resturant';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'city_id' => 'int',
		'place_type' => 'int',
		'location' => 'geometry',
		'pricePearPerson' => 'int',
		'stares' => 'int'
	];

	protected $fillable = [
		'name',
		'address',
		'city_id',
		'place_type',
		'location',
		'pricePearPerson',
		'desciption',
		'stares',
		'food_type'
	];
}
