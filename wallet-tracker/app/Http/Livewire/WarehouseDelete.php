<?php

namespace App\Http\Livewire;

use Livewire\Component;

class WarehouseDelete extends Component
{
    public $warehouse;

    public function mount($warehouse) {
        $this->warehouse = $warehouse;
    }

    public function render()
    {
        return view('livewire.warehouse-delete');
    }

    public function deleteWarehouse() {
        $this->warehouse->delete();
        return redirect(route('home'))->with('delete_success', 'Warehouse has been deleted successfully');
    }
}
