<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function users()
    {
        return $this->belongsToMany(
            User::class,
            'roles_users',
            'role_id',
            'user_id'
        );
    }

    public function attachUsers($user_id)
    {
        $this->users()->attach($user_id);
    }

    public function warehouse()
    {
        return $this->belongsTo(Warehouse::class);
    }

    public function invitations()
    {
        return $this->hasMany(Invitation::class);
    }
}
