<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $primaryKey = 'Review_id';

    protected $fillable = [
        'Customer_id',
        'Product_id',
        'ReviewText',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'Customer_id', 'User_id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'Product_id', 'Product_id');
    }
}
