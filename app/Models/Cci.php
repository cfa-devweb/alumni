<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cci extends Model
{
    use HasFactory;
    
    protected $table = 'cci';

    protected $fillable = [
        'first_name',
        'last_name',
        'birth_date',
    ];
}
