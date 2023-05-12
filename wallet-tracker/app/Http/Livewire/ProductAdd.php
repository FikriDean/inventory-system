<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Product;

class ProductAdd extends Component
{
    public $producttypes;

    public $type, $name, $weight, $price, $stock;

    public function mount($producttypes)
    {
        $this->producttypes = $producttypes;
    }

    public function render()
    {
        return view('livewire.product-add');
    }

    public function addProduct()
    {
        Product::create([
            'product_type_id' => $this->type,
            'name' => $this->name,
            'product_weight_kg' => $this->weight,
            'price' => $this->price,
            'stock' => $this->stock,
        ]);

        $this->emitTo('product-table', 'productAdded');

        $this->reset();
    }
}
