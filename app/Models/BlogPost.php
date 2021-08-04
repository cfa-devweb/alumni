<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{   
    use HasFactory;

    protected $table = 'blog_posts';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'user_id',
        'content',
        'sticky_post',
        'categorie_id',
        'visibility'
    ];

    public function category()
    {
        return $this -> belongsTo(Categorie::class);
    }
}
