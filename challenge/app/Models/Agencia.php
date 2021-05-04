<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Agencium
 *
 * @property int $id
 * @property string $numero
 * @property string $nome
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property int $banco_id
 *
 * @property Banco $banco
 * @property Collection|Contum[] $conta
 *
 * @package App\Models
 */
class Agencia extends Model
{
	protected $table = 'agencia';

	protected $casts = [
		'banco_id' => 'int'
	];

	protected $fillable = [
		'numero',
		'nome',
		'banco_id'
	];

	public function banco()
	{
		return $this->hasMany(Banco::class);
	}
}
