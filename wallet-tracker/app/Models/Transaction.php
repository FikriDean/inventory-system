<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function transactiontype()
    {
        return $this->belongsTo(TransactionType::class, 'id');
    }

    public function transactionstatus()
    {
        return $this->belongsTo(TransactionStatus::class, 'id');
    }

    public function order()
    {
        return $this->belongsTo(order::class);
    }

    public function account_method() {
        return $this->belongsTo(AccountMethod::class);
    }
}
