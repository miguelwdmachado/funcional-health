<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ContaUser
 *
 * @property int $id
 * @property int $user_id
 * @property int $conta_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Banco $banco
 * @property User $user
 *
 * @package App\Models
 */
class ContaUsers extends Model
{
	protected $table = 'conta_users';

	protected $casts = [
		'user_id' => 'int',
		'conta_id' => 'int'
	];

	protected $fillable = [
		'user_id',
		'conta_id'
	];

	public function conta() {
			return $this->belongsToMany(Conta::class);
	}

	public function user() {
			return $this->belongsToMany(User::class);
	}
}
