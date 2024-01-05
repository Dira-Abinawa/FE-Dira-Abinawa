<?php

namespace App\Repositories;

use App\Models\Sekolah;
use App\Repositories\BaseRepository;

/**
 * Class SekolahRepository
 * @package App\Repositories
 * @version December 8, 2023, 3:20 pm UTC
*/

class SekolahRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'alamat'
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
        return Sekolah::class;
    }
}
