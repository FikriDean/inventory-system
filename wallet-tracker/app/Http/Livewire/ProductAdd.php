<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Product;
use App\Models\ProductType;

class ProductAdd extends Component
{
    public $producttypes;

    public $type, $name, $weight, $price, $stock;

    protected $rules = [
        'type' => 'required|min:1',
        'name' => 'required|min:5|max:20',
        'weight' => 'required|numeric|min:0.01|max:1000000',
        'price' => 'required|numeric|min:0.01|max:1000000',
        'stock' => 'required|numeric|min:0|max:1000000',
    ];

    protected $messages = [
        'type.min:1' => 'Choose product type!'
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

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
        $this->validate();

        $slug = explode(" ", $this->name);
        $slug = join('_', $slug);

        Product::create([
            'product_type_id' => $this->type,
            'name' => $this->name,
            'slug' => $slug,
            'product_weight_kg' => $this->weight,
            'price' => $this->price,
            'stock' => $this->stock,
        ]);

        $this->producttypes = ProductType::all();

        $this->emitTo('product-table', 'productAdded');

        $this->reset();

        // $this->dispatchBrowserEvent('productUpdated');
    }
}
