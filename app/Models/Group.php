<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    protected $table = 'groups';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'promotions_id',
    ];

    public function messages()
    {
        return $this -> hasMany(Message::class);
    }
    public function promotion()
    {
        return $this -> hasOne(Promotion::class);
    }
}
