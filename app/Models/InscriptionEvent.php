<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InscriptionEvent extends Model
{
    use HasFactory;

    protected $table = 'inscription_events';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'event_id',
        'member_id'
    ];

    public function event()
    {
        return $this -> belongsTo(Event::class);
    }
}
