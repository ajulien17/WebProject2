<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Messages extends Model
{
    use HasFactory;

    protected $primaryKey = 'Message_id';

    protected $fillable = [
        'Sender_id',
        'Receiver_id',
        'Message',
        'Time',
    ];

    public function sender()
    {
        return $this->belongsTo(User::class, 'Sender_id', 'User_id');
    }

    public function receiver()
    {
        return $this->belongsTo(User::class, 'Receiver_id', 'User_id');
    }
}
