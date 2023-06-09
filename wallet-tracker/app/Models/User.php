<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = [
        'id'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function warehouses()
    {
        return $this->belongsToMany(
            Warehouse::class,
            'users_warehouses',
            'user_id',
            'warehouse_id'
        );
    }

    public function attachWarehouses($warehouse_id)
    {
        $this->warehouses()->attach($warehouse_id);
    }

    public function roles()
    {
        return $this->belongsToMany(
            Role::class,
            'roles_users',
            'user_id',
            'role_id'
        );
    }

    public function attachRoles($role_id)
    {
        $this->roles()->attach($role_id);
    }

    public function addresses()
    {
        return $this->hasMany(Address::class);
    }

    public function invitations()
    {
        return $this->hasMany(Invitation::class);
    }
}
