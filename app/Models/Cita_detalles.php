<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Cita_detalles
 * @package App\Models
 * @version October 28, 2021, 12:26 am UTC
 *
 * @property integer $idcitas
 */
class Cita_detalles extends Model
{
    //use SoftDeletes;

    public $table = 'cita_detalles';
    protected $primaryKey= 'id_detallecita';
    public $timestamps =false;
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'idcitas'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_detallecita' => 'integer',
        'idcitas' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'idcitas' => 'nullable|integer'
    ];

    
}
