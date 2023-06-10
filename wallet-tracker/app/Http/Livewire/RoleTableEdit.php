<?php

namespace App\Http\Livewire;

use Livewire\Component;

class RoleTableEdit extends Component
{
    public $roles, $warehouse;

    public function mount($roles, $warehouse) {
        $this->roles = $roles;
        $this->warehouse = $warehouse;
    }

    public function render()
    {
        return view('livewire.role-table-edit');
    }
}
