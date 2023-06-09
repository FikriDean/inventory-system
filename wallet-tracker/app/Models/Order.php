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
        )->withPivot('amount');
    }

    public function attachProducts($product_id, $amount)
    {
        $this->products()->attach($product_id, ['amount' => $amount]);
    }

    public function transaction()
    {
        return $this->hasOne(Transaction::class);
    }

    public function warehouse()
    {
        return $this->belongsTo(Warehouse::class);
    }
}
