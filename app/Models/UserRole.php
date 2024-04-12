<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    use HasFactory;

    protected $primaryKey = 'UserRole_id';

    protected $fillable = [
        'User_id',
        'Role_id',
        'VerificationToken',
        'IsVerified',
        'AssignedDate',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'User_id', 'User_id');
    }

    public function role()
    {
        return $this->belongsTo(Role::class, 'Role_id', 'Role_id');
    }
}
