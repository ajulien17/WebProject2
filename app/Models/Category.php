<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $primaryKey = 'Category_id';

    protected $fillable = [
        'Store_id',
        'CategoryName',
        'Description',
    ];

    public function store()
    {
        return $this->belongsTo(Store::class, 'Store_id', 'Store_id');
    }
}
