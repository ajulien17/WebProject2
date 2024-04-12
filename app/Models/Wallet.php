<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    use HasFactory;

    protected $primaryKey = 'Wallet_id';

    protected $fillable = [
        'Customer_id',
        'Cart_id',
        'WalletBalance',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'Customer_id', 'User_id');
    }

    public function cart()
    {
        return $this->belongsTo(Cart::class, 'Cart_id', 'Cart_id');
    }
}
