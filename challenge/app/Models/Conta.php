<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Contum
 *
 * @property int $id
 * @property string $numero
 * @property string $digito
 * @property float $saldo
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property int $agencia_id
 *
 * @property Agencia $agencium
 *
 * @package App\Models
 */
class Conta extends Model
{
	protected $table = 'conta';

	protected $casts = [
		'saldo' => 'float',
		'agencia_id' => 'int'
	];

	protected $fillable = [
		'numero',
		'digito',
		'saldo',
		'agencia_id'
	];

	public function agencia()
	{
		return $this->hasMany(Agencia::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}

}
