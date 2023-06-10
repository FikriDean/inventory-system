<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ProductTypeEditTable extends Component
{
    public $warehouse, $producttypes;

    public function mount($warehouse) {
        $this->warehouse = $warehouse;
        $this->producttypes = $this->warehouse->producttypes;
    }

    public function render()
    {
        return view('livewire.product-type-edit-table');
    }
}
