<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Product;

class ProductPrice extends Component
{
    public $product;
    public $newPrice;

    public function mount($product)
    {
        $this->product = $product;
        $this->newPrice = $product->price;
    }

    public function render()
    {
        return view('livewire.product-price');
    }

    public function updatePrice()
    {
        if ($this->newPrice > 1000000) {
            session()->flash('price_error', 'Value is too high');
            return;
        }

        if ($this->newPrice < 0) {
            session()->flash('price_error', 'Value is too low');
            return;
        }

        if ($this->newPrice >= 0 && $this->newPrice <= 1000000) {
            session()->flash('price_error', '');
        }

        $newPriceFloat = floatval($this->newPrice);
        Product::where('id', $this->product->id)->update([
            'price' => $newPriceFloat,
        ]);
    }
}
