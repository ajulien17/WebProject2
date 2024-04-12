<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $primaryKey = 'User_id';

    protected $fillable = [
        'User_id',
        'Email',
        'Password',
        'CreatedDate',
        'IsActive',
        'FirstName',
        'LastName',
    ];

    // Define relationships if any
    public function profile()
    {
        return $this->hasOne(Profile::class, 'User_id', 'User_id');
    }

    public function emailVerification()
    {
        return $this->hasOne(EmailVerification::class, 'User_id', 'User_id');
    }

    public function userRole()
    {
        return $this->hasOne(UserRole::class, 'User_id', 'User_id');
    }
}
