<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ProductTypeTable extends Component
{
    public $warehouse, $producttypes;
    
    public function mount($warehouse, $producttypes) {
        $this->warehouse = $warehouse;
        $this->producttypes = $producttypes;
    }

    public function render()
    {
        return view('livewire.product-type-table');
    }
}
