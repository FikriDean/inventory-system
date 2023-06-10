<?php

namespace App\Http\Livewire;

use Livewire\Component;

class OrderAmount extends Component
{
    public $product, $amount;

    public function mount($product) {
        $this->product = $product;
        $this->amount = 0;
    }

    public function render()
    {
        return view('livewire.order-amount');
    }

    public function changeAmount() {
        $arrAmount = array(strval($this->product->id) => intval($this->amount));
    }
}
