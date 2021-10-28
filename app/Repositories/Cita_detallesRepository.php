<?php

namespace App\Repositories;

use App\Models\Cita_detalles;
use App\Repositories\BaseRepository;

/**
 * Class Cita_detallesRepository
 * @package App\Repositories
 * @version October 28, 2021, 12:26 am UTC
*/

class Cita_detallesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idcitas'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Cita_detalles::class;
    }
}
