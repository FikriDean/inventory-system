<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Role;
use App\Models\User;

class PartnerEditRole extends Component
{
    public $user;
    public $roles;
    public $role;

    public function mount($user)
    {
        $this->user = $user;
        $this->roles = Role::all();
        $this->role = $this->user->role->id;
    }

    public function render()
    {
        return view('livewire.partner-edit-role');
    }

    public function updatedRole()
    {
        $this->user->update(['role_id' => $this->role]);
        session()->flash('role_updated', 'Role berhasil diubah!');
    }
}
