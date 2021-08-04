<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MemberPromotion extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable =[
        'member_id',
        'promotion_id',
    ];
}
