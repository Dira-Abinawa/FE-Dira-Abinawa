<?php

namespace App\Repositories;

use App\Models\Kategori;
use App\Repositories\BaseRepository;

/**
 * Class KategoriRepository
 * @package App\Repositories
 * @version November 23, 2023, 8:11 am UTC
*/

class KategoriRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'decription'
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
        return Kategori::class;
    }
}
