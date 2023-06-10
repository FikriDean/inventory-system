<?php

namespace App\Http\Livewire;

use Livewire\Component;

class RoleDelete extends Component
{
    public $role;
    public $warehouse;

    public function mount($role, $warehouse) {
        $this->role = $role;
        $this->warehouse = $warehouse;
    }

    public function render()
    {
        return view('livewire.role-delete');
    }

    public function deleteRole() {
        $this->role->delete();
        return redirect(route('role.edit', $this->warehouse->code));
    }
}
