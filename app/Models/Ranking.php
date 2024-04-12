<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ranking extends Model
{
    use HasFactory;

    protected $primaryKey = 'Ranking_id';

    protected $fillable = [
        'Customer_id',
        'Store_id',
        'NbStars',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'Customer_id', 'User_id');
    }

    public function store()
    {
        return $this->belongsTo(Store::class, 'Store_id', 'Store_id');
    }
}
