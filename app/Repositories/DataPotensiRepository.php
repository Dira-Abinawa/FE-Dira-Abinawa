<?php

namespace App\Repositories;

use App\Models\DataPotensi;
use App\Repositories\BaseRepository;

/**
 * Class DataPotensiRepository
 * @package App\Repositories
 * @version January 15, 2024, 6:39 pm UTC
*/

class DataPotensiRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'gudep',
        'male_builder',
        'famale_builder',
        'male_member',
        'famale_member',
        'bantara_member',
        'laksana_member',
        'garuda_member'
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
        return DataPotensi::class;
    }
}
