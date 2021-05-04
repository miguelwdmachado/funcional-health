<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Banco
 *
 * @property int $id
 * @property string $numero
 * @property string $nome
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Collection|Agencia[] $agencia
 * @property Collection|ContaUser[] $conta_users
 *
 * @package App\Models
 */
class Banco extends Model
{
	protected $table = 'banco';

	protected $fillable = [
		'numero',
		'nome'
	];
}
