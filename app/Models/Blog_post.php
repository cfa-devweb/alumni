<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog_post extends Model
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
        'member_id',
        'content',
        'categorie_id',
        'visibility'
    ];

    public function categories()
    {
        return $this -> belongsTo(Categorie::class);
    }
}
