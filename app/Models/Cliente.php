<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


/**
 * Class Proyecto
 *
 * @property $id
 * @property $nombre
 * @property $imagen
 * @property $descripcion
 * @property $url
 * @property $email
 * @property $telefono
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cliente extends Model
{
  static $rules = [
		'nombre' => 'required',
		'imagen' => 'required|max:10000|mimes:jpeg,png,jpg',
		'descripcion' => 'required',
		'url' => 'required',
    'email' => 'required',
    'telefono' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','imagen','descripcion','url','email','telefono'];




}
