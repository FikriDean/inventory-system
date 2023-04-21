<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function orders()
    {
        return $this->belongsToMany(
            Order::class,
            'orders_products',
            'product_id',
            'order_id'
        );
    }

    public function producttype()
    {
        return $this->belongsTo(ProductType::class);
    }
}
