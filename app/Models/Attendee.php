<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attendee extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'event_id',
        'member_id',
    ];

    /**
     * Get the event that owns the attendee.
     */
    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
