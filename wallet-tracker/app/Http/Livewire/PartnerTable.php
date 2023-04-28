<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Warehouse;

class PartnerTable extends Component
{
    protected $listeners = ['partnerDeleted'];

    public $usersInWarehouse;
    public $warehouse;

    public function mount($usersInWarehouse, $warehouse)
    {
        $this->usersInWarehouse = $usersInWarehouse;
        $this->warehouse = $warehouse;
    }

    public function render()
    {
        return view('livewire.partner-table');
    }

    public function partnerDeleted()
    {
        $this->usersInWarehouse = Warehouse::where('id', $this->warehouse->id)->first()->users;
        session()->flash('partner_deleted', 'Partner berhasil dihapus');
    }
}
