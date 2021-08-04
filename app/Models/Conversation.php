<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'promotion_id'
    ];

    /**
     * Get the promotion that owns the conversation.
     */
    public function promotion()
    {
        return $this->belongsTo(Promotion::class);
    }
}
