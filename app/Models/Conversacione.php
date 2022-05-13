<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Conversacione
 *
 * @property $id
 * @property $user_id
 * @property $user_id2
 * @property $created_at
 * @property $updated_at
 * @property $deleted_at
 *
 * @property Usuario $usuario
 * @property Usuario $usuario
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Conversacione extends Model
{
    use SoftDeletes;

    static $rules = [
		'user_id' => 'required',
		'user_id2' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id','user_id2'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function usuario()
    {
        return $this->hasOne('App\Models\Usuario', 'id', 'user_id2');
        return $this->hasOne('App\Models\Usuario', 'id', 'user_id');

    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */

    

}
