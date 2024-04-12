<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmailVerification extends Model
{
    use HasFactory;

    protected $primaryKey = 'Verification_id';

    protected $fillable = [
        'User_id',
        'Number',
        'Address',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'User_id', 'User_id');
    }
}
