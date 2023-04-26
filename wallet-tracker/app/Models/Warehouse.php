<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function users()
    {
        return $this->belongsToMany(
            User::class,
            'users_warehouses',
            'warehouse_id',
            'user_id'
        );
    }

    public function attachUsers($user_id)
    {
        $this->users()->attach($user_id);
    }

    public function accounts()
    {
        return $this->hasMany(Account::class);
    }

    public function methods()
    {
        return $this->hasMany(Method::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function producttypes()
    {
        return $this->hasMany(ProductType::class);
    }

    public function roles()
    {
        return $this->hasMany(Role::class);
    }

    public function transactiontypes()
    {
        return $this->hasMany(TransactionType::class);
    }

    public function invitations()
    {
        return $this->hasMany(Invitation::class);
    }
}
