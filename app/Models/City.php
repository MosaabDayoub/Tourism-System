<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class City
 * 
 * @property int $city_id
 * @property string|null $name
 * @property geometry|null $location
 * @property string|null $country
 * @property int|null $capital
 *
 * @package App\Models
 */
class City extends Model
{
	protected $table = 'city';
	protected $primaryKey = 'city_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'city_id' => 'int',
		'location' => 'geometry',
		'capital' => 'int'
	];

	protected $fillable = [
		'name',
		'location',
		'country',
		'capital'
	];
}
