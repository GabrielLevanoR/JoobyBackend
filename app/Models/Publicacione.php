<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Publicacione
 *
 * @property $id
 * @property $titulo
 * @property $contenido
 * @property $imagen
 * @property $id_usuario
 * @property $created_at
 * @property $updated_at
 * @property $deleted_at
 *
 * @property Usuario $usuario
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Publicacione extends Model
{
    use SoftDeletes;

    static $rules = [
		'titulo' => 'required',
		'contenido' => 'required',
		'imagen' => 'required',
		'id_usuario' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['titulo','contenido','imagen','id_usuario'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function usuario()
    {
        return $this->hasOne('App\Models\Usuario', 'id', 'id_usuario');
    }
    

}
