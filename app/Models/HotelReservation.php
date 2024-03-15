<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class HotelReservation
 * 
 * @property int $id
 * @property int|null $hotel_id
 * @property string|null $credit_card_number
 * @property float|null $paid_amount
 * @property Carbon|null $date
 * @property int|null $trip_id
 *
 * @package App\Models
 */
class HotelReservation extends Model
{
	protected $table = 'hotel reservation';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'hotel_id' => 'int',
		'paid_amount' => 'float',
		'date' => 'datetime',
		'trip_id' => 'int'
	];

	protected $fillable = [
		'hotel_id',
		'credit_card_number',
		'paid_amount',
		'date',
		'trip_id'
	];
}
