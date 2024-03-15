<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Airport
 * 
 * @property int $id
 * @property string|null $name
 * @property string|null $address
 * @property int|null $city_id
 * @property geometry|null $location
 *
 * @package App\Models
 */
class Airport extends Model
{
	protected $table = 'airport';
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
		'location'
	];
}
