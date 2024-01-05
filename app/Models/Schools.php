    <?php   

    namespace App\Models;

    use Eloquent as Model;
    use Illuminate\Database\Eloquent\SoftDeletes;
    use Illuminate\Database\Eloquent\Factories\HasFactory;

    /**
     * Class Schools
     * @package App\Models
     * @version December 30, 2023, 10:53 am UTC
     *
     * @property string $school_name
     * @property string $ambalan_name
     * @property string $level
     * @property string $gudep
     * @property string $registration
     */
    class Schools extends Model
    {
        use SoftDeletes;

        use HasFactory;

        public $table = 'schools';
        

        protected $dates = ['deleted_at'];



        public $fillable = [
            'school_name',
            'ambalan_name',
            'level',
            'gudep',
            'registration'
        ];

        /**
         * The attributes that should be casted to native types.
         *
         * @var array
         */
        protected $casts = [
            'school_name' => 'string',
            'ambalan_name' => 'string',
            'level' => 'string',
            'gudep' => 'string',
            'registration' => 'string'
        ];

        /**
         * Validation rules
         *
         * @var array
         */
        public static $rules = [
            
        ];

        
    }
