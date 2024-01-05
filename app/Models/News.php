<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class News
 * @package App\Models
 * @version January 5, 2024, 6:01 pm UTC
 *
 * @property string $category
 * @property string $title
 * @property string $thumbnail
 * @property string $content
 * @property string $images
 * @property string $writer
 * @property string $created_at
 * @property string $updated_at
 * @property string $comments
 */
class News extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'news';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'category',
        'title',
        'thumbnail',
        'content',
        'images',
        'writer',
        'created_at',
        'updated_at',
        'comments'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'category' => 'string',
        'title' => 'string',
        'thumbnail' => 'string',
        'content' => 'string',
        'images' => 'string',
        'writer' => 'string',
        'comments' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
