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

    public function warehouse()
    {
        return $this->belongsTo(Warehouse::class);
    }
}
