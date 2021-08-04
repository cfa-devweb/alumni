<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MemberPromotion extends Model
{
    use HasFactory;

    protected $table = 'member_promotions';

    protected $fillable =[
        'member_id',
        'promotions_id'
    ];
    public function member()
    {
        return $this -> hasMany(Member::class);
    }

    public function promotionYear()
    {
        return $this -> hasMany(Promotion::class);
    }
}
