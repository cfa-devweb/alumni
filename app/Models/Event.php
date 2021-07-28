<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Event extends Model
{
    use HasFactory;

    protected $table = 'events';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'organizer',
        'title',
        'content',
        'adress',
        'city',
        'start_time',
        'end_time',
        'event_date',
        'end_event_date',
        'visibility'
    ];

    public function inscription()
    {
        return $this -> hasMany(InscriptionEvent::class);
    }
}
