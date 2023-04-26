<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Method extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function accounts()
    {
        return $this->belongsToMany(
            Account::class,
            'accounts_methods',
            'method_id',
            'account_id'
        );
    }

    public function attachAccount($account_id, $name, $number)
    {
        $this->accounts()->attach($account_id, [
            'name' => $name,
            'number' => $number
        ]);
    }

    public function warehouse()
    {
        return $this->belongsTo(Warehouse::class);
    }
}
