<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Product;

class ProductWeight extends Component
{
    public $product;
    public $newWeight;

    public function mount($product)
    {
        $this->product = $product;
        $this->newWeight = $product->product_weight_kg;
    }

    public function render()
    {
        return view('livewire.product-weight');
    }

    public function updateWeight()
    {
        if ($this->newWeight > 1000000) {
            session()->flash('weight_error', 'Value is too high');
            return;
        }

        if ($this->newWeight < 0) {
            session()->flash('weight_error', 'Value is too low');
            return;
        }

        if ($this->newWeight >= 0 && $this->newWeight <= 1000000) {
            session()->flash('weight_error', '');
        }

        $newWeightFloat = floatval($this->newWeight);
        Product::where('id', $this->product->id)->update([
            'product_weight_kg' => $newWeightFloat,
        ]);
    }
}
