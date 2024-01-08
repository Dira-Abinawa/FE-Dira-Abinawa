<?php

namespace App\Repositories;

use App\Models\Dkranting;
use App\Repositories\BaseRepository;

/**
 * Class DkrantingRepository
 * @package App\Repositories
 * @version January 8, 2024, 2:18 pm UTC
*/

class DkrantingRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'school_name',
        'level',
        'position',
        'period',
        'status'
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
        return Dkranting::class;
    }
}
