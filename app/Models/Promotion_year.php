<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promotion_year extends Model
{
    use HasFactory;

    protected $table = 'promotion_years';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'year_id',
        'promotion_id'
    ];

    public function year()
    {
        return $this -> belongsToMany(Year::class);
    }
    public function promotion()
    {
        return $this -> belongsToMany(Promotion::class);
    }
}
