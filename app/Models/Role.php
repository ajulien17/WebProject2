<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $primaryKey = 'Role_id';

    protected $fillable = [
        'RoleName',
    ];

    public function userRoles()
    {
        return $this->hasMany(UserRole::class, 'Role_id', 'Role_id');
    }
}
