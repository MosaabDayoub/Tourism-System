<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Dayplace
 * 
 * @property int $place_id
 * @property int $day_id
 * @property int|null $transport_method
 * @property Carbon|null $time
 * @property float|null $money_amount
 *
 * @package App\Models
 */
class Dayplace extends Model
{
	protected $table = 'dayplace';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'place_id' => 'int',
		'day_id' => 'int',
		'transport_method' => 'int',
		'time' => 'datetime',
		'money_amount' => 'float'
	];

	protected $fillable = [
		'transport_method',
		'time',
		'money_amount'
	];
}
