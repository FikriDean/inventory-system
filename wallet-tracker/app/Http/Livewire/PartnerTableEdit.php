<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PartnerTableEdit extends Component
{
    public $warehouse, $roles, $rolesForSelect;

    public function mount($warehouse)
    {
        $this->warehouse = $warehouse;
        $this->roles = $warehouse->roles;
    }

    public function render()
    {
        return view('livewire.partner-table-edit');
    }

   
}
