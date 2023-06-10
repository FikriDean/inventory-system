<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionStatus extends Model
{
    use HasFactory;

    protected $table = 'transaction_statuses';

    protected $guarded = [
        'id'
    ];

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
