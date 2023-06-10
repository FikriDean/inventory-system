<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\ProductType;

class ProductTableEdit extends Component
{
    protected $listeners = ['productDeleted', 'productAdded', 'productChanged'];

    public $producttypes;
    public $warehouse;

    public function mount($producttypes, $warehouse)
    {
        $this->producttypes = ProductType::all();
        $this->warehouse = $warehouse;
    }

    public function render()
    {
        return view('livewire.product-table-edit');
    }

    public function productDeleted()
    {
        $this->producttypes = ProductType::all();
        return redirect(route('product.edit', $this->warehouse->code));
    }

    public function productChanged()
    {
        $this->producttypes = ProductType::all();
    }
}
