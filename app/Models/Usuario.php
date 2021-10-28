<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Usuario
 * @package App\Models
 * @version October 28, 2021, 12:29 am UTC
 *
 * @property string $ape_nombre
 * @property string $usuario
 * @property integer $password
 */
class Usuario extends Model
{
    //use SoftDeletes;

    public $table = 'usuario';
    protected $primaryKey= 'idusuario';
    public $timestamps =false;
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'ape_nombre',
        'usuario',
        'password'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idusuario' => 'integer',
        'ape_nombre' => 'string',
        'usuario' => 'string',
        'password' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'ape_nombre' => 'nullable|string|max:45',
        'usuario' => 'nullable|string|max:45',
        'password' => 'nullable|integer'
    ];

    
}
