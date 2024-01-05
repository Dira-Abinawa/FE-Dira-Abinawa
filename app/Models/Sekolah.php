<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Sekolah
 * @package App\Models
 * @version December 8, 2023, 3:20 pm UTC
 *
 * @property string $name
 * @property string $alamat
 */
class Sekolah extends Model
{
    use SoftDeletes;
    use HasFactory;

    public $table = 'sekolahs';

    protected $dates = ['deleted_at'];

    public $fillable = [
        'name',
        'alamat'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'alamat' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

}
