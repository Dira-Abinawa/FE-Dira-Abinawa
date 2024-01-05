<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Kategori
 * @package App\Models
 * @version November 23, 2023, 8:11 am UTC
 *
 * @property string $name
 * @property string $decription
 */
class Kategori extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'kategoris';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'decription'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'decription' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
