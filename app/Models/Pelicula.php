<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Pelicula
 *
 * @property $id
 * @property $nombre
 * @property $duracion
 * @property $genero
 * @property $horario
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Pelicula extends Model
{

    static $rules = [
		'nombre' => 'required',
		'duracion' => 'required',
		'genero' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','duracion','genero','horario'];

    protected $table ='pelicula';

}