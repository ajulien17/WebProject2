<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;

    protected $primaryKey = 'Store_id';

    protected $fillable = [
        'User_id',
        'StoreName',
        'StoreDetails',
        'CreatedDate',
        'ApprovedDate',
        'IsActive',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'User_id', 'User_id');
    }

    public function categories()
    {
        return $this->hasMany(Category::class, 'Store_id', 'Store_id');
    }

    public function admins()
    {
        return $this->hasMany(Admin::class, 'Store_id', 'Store_id');
    }

    public function events()
    {
        return $this->hasMany(Events::class, 'Store_id', 'Store_id');
    }

    public function follows()
    {
        return $this->hasMany(Follows::class, 'Store_id', 'Store_id');
    }

    public function notifications()
    {
        return $this->hasMany(Notifications::class, 'Store_id', 'Store_id');
    }

    public function rankings()
    {
        return $this->hasMany(Ranking::class, 'Store_id', 'Store_id');
    }

    public function products()
    {
        return $this->hasMany(Product::class, 'Store_id', 'Store_id');
    }
}
