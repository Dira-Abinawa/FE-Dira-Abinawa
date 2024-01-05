?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Menus
 * @package App\Models
 * @version November 23, 2023, 8:08 am UTC
 *
 * @property string $name
 * @property string $description
 */
class Menus extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'menuses';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'description' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
