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

    public function total()
    {
        return $this->belongsTo(Total::class);
    }
}
