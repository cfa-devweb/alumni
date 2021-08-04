<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
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
        return $this -> belongsTo(Category::class, 'categorie_id');
    }

    public function user()
    {
        return $this -> belongsTo(User::class);
    }
}

