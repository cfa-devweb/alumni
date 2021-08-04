<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
    use HasFactory;

    protected $table = 'conversations';

    protected $fillable = [
        'promotion_year_id'
    ];

    public function promotionYear()
    {
        return $this -> belongsTo(Promotion_year::class);
    }
}