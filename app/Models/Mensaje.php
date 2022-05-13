<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Mensaje
 *
 * @property $id
 * @property $text
 * @property $date
 * @property $read
 * @property $user_id
 * @property $conversation_id
 * @property $created_at
 * @property $updated_at
 * @property $deleted_at
 *
 * @property Usuario $usuario
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Mensaje extends Model
{
    use SoftDeletes;

    static $rules = [
		'text' => 'required',
		'date' => 'required',
		'read' => 'required',
		'user_id' => 'required',
		'conversation_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['text','date','read','user_id','conversation_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function usuario()
    {
        return $this->hasOne('App\Models\Usuario', 'id', 'user_id');
    }
    

}
