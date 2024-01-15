<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class DataPotensi
 * @package App\Models
 * @version January 15, 2024, 6:39 pm UTC
 *
 * @property string $gudep
 * @property string $male_builder
 * @property string $famale_builder
 * @property integer $male_member
 * @property integer $famale_member
 * @property integer $bantara_member
 * @property integer $laksana_member
 * @property integer $garuda_member
 */
class DataPotensi extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'data_potensis';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'gudep' => 'string',
        'male_builder' => 'string',
        'famale_builder' => 'string',
        'male_member' => 'integer',
        'famale_member' => 'integer',
        'bantara_member' => 'integer',
        'laksana_member' => 'integer',
        'garuda_member' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'famale_member' => 'bantara_member integer number'
    ];

    
}
