<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Country
 * 
 * @property string $country_name
 * @property geometry|null $country_location
 * @property string|null $conuntry_code
 *
 * @package App\Models
 */
class Country extends Model
{
	protected $table = 'country';
	protected $primaryKey = 'country_name';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'country_location' => 'geometry'
	];

	protected $fillable = [
		'country_location',
		'conuntry_code'
	];
}
