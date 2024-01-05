<?php

namespace App\Repositories;

use App\Models\Menus;
use App\Repositories\BaseRepository;

/**
 * Class MenusRepository
 * @package App\Repositories
 * @version November 23, 2023, 8:08 am UTC
*/

class MenusRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'description'
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
        return Menus::class;
    }
}
