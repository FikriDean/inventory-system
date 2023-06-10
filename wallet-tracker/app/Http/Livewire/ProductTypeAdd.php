<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\ProductType;

class ProductTypeAdd extends Component
{
    public $warehouse, $producttypes, $name;

    public function mount($warehouse) {
        $this->warehouse = $warehouse;
        $this->producttypes = $this->warehouse->producttypes;
    }

    public function render()
    {
        return view('livewire.product-type-add');
    }

    protected $rules = [
        'name' => 'required|min:5|max:20',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function addProductType() {
        $this->validate();

        ProductType::create([
            'warehouse_id' => $this->warehouse->id,
            'name' => $this->name,
        ]);

        return redirect(route('producttype.index', $this->warehouse->code))->with('product_type_success', 'Product Type has been added successfully');
    }
}
