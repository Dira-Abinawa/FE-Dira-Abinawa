<?php

namespace App\Repositories;

use App\Models\Schools;
use App\Repositories\BaseRepository;

/**
 * Class SchoolsRepository
 * @package App\Repositories
 * @version December 30, 2023, 10:53 am UTC
*/

class SchoolsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'school_name',
        'ambalan_name',
        'level',
        'gudep',
        'registration'
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
        return Schools::class;
    }
}
