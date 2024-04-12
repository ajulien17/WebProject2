<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $primaryKey = 'Product_id';

    protected $fillable = [
        'Name',
        'Price',
        'Description',
        'Quantity',
        'IsAvailable',
        'Store_id',
    ];

    public function store()
    {
        return $this->belongsTo(Store::class, 'Store_id', 'Store_id');
    }
}
