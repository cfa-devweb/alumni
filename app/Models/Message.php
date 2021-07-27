<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $table = 'messages';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'content',
        'member_id',
        'group_id'
    ];

    public function member()
    {
        return $this -> belongsTo(Member::class);
    }

    public function group()
    {
        return $this -> belongsTo(Group::class);
    }
}