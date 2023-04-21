<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function methods()
    {
        return $this->belongsToMany(
            Method::class,
            'accounts_methods',
            'account_id',
            'method_id'
        );
    }

    public function attachMethods($method_id, $name, $number)
    {
        $this->methods()->attach($method_id, [
            'name' => $name,
            'number' => $number
        ]);
    }

    public function warehouse()
    {
        return $this->belongsTo(Warehouse::class);
    }
}
