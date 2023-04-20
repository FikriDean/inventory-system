<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function products()
    {
        return $this->belongsToMany(
            Product::class,
            'orders_products',
            'order_id',
            'product_id'
        );
    }

    public function attachProducts($product_id, $amount)
    {
        $this->products()->attach($product_id, ['amount' => $amount]);
    }

    public function total()
    {
        return $this->hasOne(Total::class);
    }
}
