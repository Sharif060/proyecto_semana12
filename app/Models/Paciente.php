<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Paciente
 * @package App\Models
 * @version October 28, 2021, 12:28 am UTC
 *
 * @property string $ape_nombre
 * @property integer $dni
 * @property integer $celular
 */
class Paciente extends Model
{
    //use SoftDeletes;

    public $table = 'paciente';
    protected $primaryKey= 'idpaciente';
    public $timestamps =false;
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'ape_nombre',
        'dni',
        'celular'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idpaciente' => 'integer',
        'ape_nombre' => 'string',
        'dni' => 'integer',
        'celular' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'ape_nombre' => 'nullable|string|max:45',
        'dni' => 'nullable|integer',
        'celular' => 'nullable|integer'
    ];

    
}
