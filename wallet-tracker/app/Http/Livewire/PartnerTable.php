<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Warehouse;

class PartnerTable extends Component
{
    public $warehouse, $roles;

    public function mount($warehouse)
    {
        $this->warehouse = $warehouse;
        $this->roles = $warehouse->roles;
    }

    public function render()
    {
        return view('livewire.partner-table');
    }
}
