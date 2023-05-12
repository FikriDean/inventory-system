<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\ProductType;

class ProductTable extends Component
{
    protected $listeners = ['productDeleted', 'productAdded'];

    public $producttypes;
    public $warehouse;

    public function mount($producttypes, $warehouse)
    {
        $this->producttypes = $producttypes;
        $this->warehouse = $warehouse;
    }

    public function render()
    {
        return view('livewire.product-table');
    }

    public function productDeleted()
    {
        $this->producttypes = ProductType::all();
    }

    public function productAdded()
    {
        $this->producttypes = ProductType::all();
    }
}
