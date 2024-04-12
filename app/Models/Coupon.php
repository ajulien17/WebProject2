<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;

    protected $primaryKey = 'Coupon_id';

    protected $fillable = [
        'Store_id',
        'CouponCode',
        'Discount',
        'ValidFrom',
        'ValidUntil',
        'IsActive',
    ];

    public function store()
    {
        return $this->belongsTo(Store::class, 'Store_id', 'Store_id');
    }
}
