<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Dkranting
 * @package App\Models
 * @version January 8, 2024, 2:18 pm UTC
 *
 * @property string $name
 * @property string $school_name
 * @property string $level
 * @property string $position
 * @property string $period
 * @property string $status
 */
class Dkranting extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'dkrantings';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'school_name',
        'level',
        'position',
        'period',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'school_name' => 'string',
        'level' => 'string',
        'position' => 'string',
        'period' => 'string',
        'status' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
