<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class NaturalPlace
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
class NaturalPlace extends Model
{
	protected $table = 'natural place';
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
