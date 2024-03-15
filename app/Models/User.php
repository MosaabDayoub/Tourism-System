<?php

/**
 * Created by Reliese Model.
 */
namespace App\Models;
// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

/**
 * Class User
 * 
 * @property int|null $user_id
 * @property string|null $name
 * @property string|null $image_refrence
 * @property string|null $email
 * @property string|null $password
 *
 * @package App\Models
 */

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

	protected $table = 'user';
	protected $primaryKey = 'user_id';
	public $incrementing = true;
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int',
		'email_verified_at' => 'datetime',
        'password' => 'hashed',
	];

	protected $hidden = [
		'password',
        'remember_token',
    ];

	protected $fillable = [
		'name',
		'image_refrence',
		'email',
		'password'
	];
}
