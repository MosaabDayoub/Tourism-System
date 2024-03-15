<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Trip
 * 
 * @property int $id
 * @property string|null $country
 * @property int|null $usre_id
 * @property int|null $budget
 * @property int|null $number_of_days
 * @property string|null $transportation
 * @property string|null $number_of_people
 * @property int $flight
 *
 * @package App\Models
 */
class Trip extends Model
{
	protected $table = 'trip';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'usre_id' => 'int',
		'budget' => 'int',
		'number_of_days' => 'int',
		'flight' => 'int'
	];

	protected $fillable = [
		'country',
		'usre_id',
		'budget',
		'number_of_days',
		'transportation',
		'number_of_people',
		'flight'
	];
}
