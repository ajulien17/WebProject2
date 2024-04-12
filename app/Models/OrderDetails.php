<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetails extends Model
{
    use HasFactory;

    protected $primaryKey = 'OrderDetail_id';

    protected $fillable = [
        'Order_id',
        'Product_id',
        'Quantity',
        'Subtotal',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class, 'Order_id', 'Order_id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'Product_id', 'Product_id');
    }
}
