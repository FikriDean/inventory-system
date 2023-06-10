<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\User;

use App\Models\Role;

class PartnerEditRole extends Component
{
    public $warehouse, $roles, $role, $newRole, $user;

    public function mount($warehouse, $role, $user) {
        $this->warehouse = $warehouse;
        $this->roles = $warehouse->roles;
        $this->role = $role;
        $this->user = $user;
    }

    public function render()
    {
        return view('livewire.partner-edit-role');
    }

    public function updateRole($user_id) {
        $userUpdate = User::where('id', $user_id)->first();

        if (!$userUpdate) {
            return;
        }

        $userUpdate->roles()->detach();

        $userUpdate->attachRoles($this->newRole);
    }
}
