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
        'from_member_id',
        'group_id',
        'visibility'
    ];

    public function member()
    {
        return $this -> belongsTo(Member::class,'from_member_id');
    }
    public function toMember()
    {
        return $this -> belongsTo(Member::class,'to_id');
    }
    public function group()
    {
        return $this -> belongsTo(Group::class,'to_id');
    }
}
