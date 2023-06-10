<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\ProductType;

class ProductTable extends Component
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
        return view('livewire.product-table');
    }

    public function productAdded()
    {
        $this->producttypes = ProductType::all();
        return redirect(route('product.index', $this->warehouse->code));
        // $this->dispatchBrowserEvent('update-items');
    }
}
