<?php

namespace App\Models;

use App\Models\Conversation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
        'from_member_id',
        'conversation_id',
        'visibility'
    ];

    public function member()
    {
        return $this -> belongsTo(Member::class,'from_member_id');
    }
    public function conversation()
    {
        return $this -> belongsTo(Conversation::class);
    }
}
