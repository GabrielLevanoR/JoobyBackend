<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Usuario
 *
 * @property $id
 * @property $nombre
 * @property $apellidos
 * @property $dni
 * @property $email
 * @property $fecha_nac
 * @property $contras
 * @property $email_verificado
 * @property $id_tipo_usuario
 * @property $remember_token
 * @property $created_at
 * @property $updated_at
 * @property $deleted_at
 *
 * @property Conversacione[] $conversaciones
 * @property Conversacione[] $conversaciones
 * @property Mensaje[] $mensajes
 * @property Publicacione[] $publicaciones
 * @property TipoUsuario $tipoUsuario
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Usuario extends Model
{
    use SoftDeletes;

    static $rules = [
		'nombre' => 'required',
		'apellidos' => 'required',
		'dni' => 'required',
		'email' => 'required',
		'fecha_nac' => 'required',
		'contras' => 'required',
		'id_tipo_usuario' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','apellidos','dni','email','fecha_nac','contras','email_verificado','id_tipo_usuario'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function conversaciones()
    {
        return $this->hasMany('App\Models\Conversacione', 'user_id2', 'id');
        return $this->hasMany('App\Models\Conversacione', 'user_id', 'id');

    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */

    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function mensajes()
    {
        return $this->hasMany('App\Models\Mensaje', 'user_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function publicaciones()
    {
        return $this->hasMany('App\Models\Publicacione', 'id_usuario', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tipoUsuario()
    {
        return $this->hasOne('App\Models\TipoUsuario', 'id', 'id_tipo_usuario');
    }
    

}
