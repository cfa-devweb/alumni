<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $table = 'members';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'last_name',
        'first_name',
        'avatar',
        'cv',
        'description',
        'business',
        'country',
        'city',
        'worker',
    ];

    // Peut avoir plusieurs
    public function message()
    {
        return $this -> hasMany(Message::class);
    }
    public function inscriptionEvent()
    {
        return $this -> hasMany(InscriptionEvent::class);
    }
    public function blogPost()
    {
        return $this -> hasMany(Blog_post::class);
    }
    // N'a que une/un
    public function promotion()
    {
        return $this -> belongsTo(Promotion_year::class);
    }
    public function user()
    {
        return $this -> belongsTo(User::class);
    }
}
