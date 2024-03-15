<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class FlightReservation
 * 
 * @property int $flight_id
 * @property string|null $credit_card_number
 * @property float|null $paid_amount
 * @property Carbon|null $date
 * @property int|null $from_airport
 * @property int|null $to_airport
 * @property int|null $number_of_tickets
 * @property float|null $ticket_price
 *
 * @package App\Models
 */
class FlightReservation extends Model
{
	protected $table = 'flight reservation';
	protected $primaryKey = 'flight_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'flight_id' => 'int',
		'paid_amount' => 'float',
		'date' => 'datetime',
		'from_airport' => 'int',
		'to_airport' => 'int',
		'number_of_tickets' => 'int',
		'ticket_price' => 'float'
	];

	protected $fillable = [
		'credit_card_number',
		'paid_amount',
		'date',
		'from_airport',
		'to_airport',
		'number_of_tickets',
		'ticket_price'
	];
}
