<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cadastro
 *
 * @property $id
 * @property $nome
 * @property $rua
 * @property $numero
 * @property $bairro
 * @property $cidade
 * @property $estado
 * @property $telefone
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cadastro extends Model
{
    
    static $rules = [
		'nome' => 'required',
		'rua' => 'required',
		'numero' => 'required',
		'bairro' => 'required',
		'cidade' => 'required',
		'estado' => 'required',
		'telefone' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nome','rua','numero','bairro','cidade','estado','telefone'];



}
