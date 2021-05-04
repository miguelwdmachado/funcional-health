<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Movimentacao
 * 
 * @property int $id
 * @property string $numero
 * @property string $tipo
 * @property float $valor
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Movimentacao extends Model
{
	protected $table = 'movimentacao';

	protected $casts = [
		'valor' => 'float'
	];

	protected $fillable = [
		'numero',
		'tipo',
		'valor'
	];
}
