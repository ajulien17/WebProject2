<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Follows extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'User_id',
        'Store_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'User_id', 'User_id');
    }

    public function store()
    {
        return $this->belongsTo(Store::class, 'Store_id', 'Store_id');
    }
}
