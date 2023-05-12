<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Product;

class ProductStock extends Component
{
    public $product;
    public $newStock;

    public function mount($product)
    {
        $this->product = $product;
        $this->newStock = $product->stock;
    }

    public function render()
    {
        return view('livewire.product-stock');
    }

    public function updateStock()
    {
        if ($this->newStock > 1000000) {
            session()->flash('stock_error', 'Value is too high');
            return;
        }

        if ($this->newStock < 0) {
            session()->flash('stock_error', 'Value is too low');
            return;
        }

        if ($this->newStock >= 0 && $this->newStock <= 1000000) {
            session()->flash('stock_error', '');
        }

        $newStockFloat = floatval($this->newStock);
        Product::where('id', $this->product->id)->update([
            'stock' => $newStockFloat,
        ]);
    }
}
