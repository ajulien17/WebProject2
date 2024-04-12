<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notifications extends Model
{
    use HasFactory;

    protected $primaryKey = 'Notification_id';

    protected $fillable = [
        'Order_id',
        'Buyer_id',
        'Seller_id',
        'Message',
        'Created_at',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class, 'Order_id', 'Order_id');
    }

    public function buyer()
    {
        return $this->belongsTo(User::class, 'Buyer_id', 'User_id');
    }

    public function seller()
    {
        return $this->belongsTo(User::class, 'Seller_id', 'User_id');
    }
}
