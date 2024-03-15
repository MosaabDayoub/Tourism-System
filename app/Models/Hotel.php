<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Hotel
 * 
 * @property int $id
 * @property string|null $name
 * @property string|null $address
 * @property int|null $city_id
 * @property geometry|null $location
 * @property int|null $PricePearPerson
 * @property int|null $stars
 *
 * @package App\Models
 */
class Hotel extends Model
{
	protected $table = 'hotel';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'city_id' => 'int',
		'location' => 'geometry',
		'PricePearPerson' => 'int',
		'stars' => 'int'
	];

	protected $fillable = [
		'name',
		'address',
		'city_id',
		'location',
		'PricePearPerson',
		'stars'
	];
}
