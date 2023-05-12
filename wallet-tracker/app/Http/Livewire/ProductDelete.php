<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ProductDelete extends Component
{
    public $product;

    public function mount($product)
    {
        $this->product = $product;
    }

    public function render()
    {
        return view('livewire.product-delete');
    }

    public function deleteProduct()
    {
        $this->product->delete();
        $this->emitTo('product-table', 'productDeleted');
    }
}
