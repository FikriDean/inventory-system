<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountMethod extends Model
{
    use HasFactory;

    protected $table = 'accounts_methods';

    public function transactions() {
        return $this->hasMany(Transaction::class);
    }

    public function method() {
        return $this->hasOne(Method::class);
    }
}
