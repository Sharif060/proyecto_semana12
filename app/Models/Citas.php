<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Citas
 * @package App\Models
 * @version October 28, 2021, 12:27 am UTC
 *
 * @property integer $idpaciente
 * @property string $fecha
 * @property integer $id_doctor
 */
class Citas extends Model
{
    //use SoftDeletes;

    public $table = 'citas';
    protected $primaryKey= 'idcitas';
    public $timestamps =false;
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'idpaciente',
        'fecha',
        'id_doctor'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idcitas' => 'integer',
        'idpaciente' => 'integer',
        'fecha' => 'date',
        'id_doctor' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'idpaciente' => 'nullable|integer',
        'fecha' => 'nullable',
        'id_doctor' => 'nullable|integer'
    ];

    
}
