<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'content',
        'address',
        'city',
        'start_at',
        'end_at',
    ];

    /**
     * Get the attendees for the event.
     */
    public function attendees()
    {
        return $this->hasMany(Attendee::class);
    }
}
