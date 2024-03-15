<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tripday
 * 
 * @property int $id
 * @property int|null $trip_id
 * @property int|null $place_id
 * @property int|null $city_id
 * @property Carbon|null $date
 * @property int|null $hotel_id
 * @property string|null $transportaition_method
 * @property int $flight
 *
 * @package App\Models
 */
class Tripday extends Model
{
	protected $table = 'tripday';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'trip_id' => 'int',
		'place_id' => 'int',
		'city_id' => 'int',
		'date' => 'datetime',
		'hotel_id' => 'int',
		'flight' => 'int'
	];

	protected $fillable = [
		'trip_id',
		'place_id',
		'city_id',
		'date',
		'hotel_id',
		'transportaition_method',
		'flight'
	];
}
