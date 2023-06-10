<?php

namespace App\Http\Livewire;

use Livewire\Component;

class OrderAdd extends Component
{
    // protected $listeners = ['amountChange'];

    public $warehouse, $producttypes, $arrTotalAmount, $amount;

    public function mount($warehouse, $producttypes)
    {
        $this->warehouse = $warehouse;
        $this->producttypes = $producttypes;
    }

    public function render()
    {
        return view('livewire.order-add');
    }

    // public function amountChange($arrAmount)
    // {
    //     $arrayKeys = array_keys($arrAmount);
    //     $productId = $arrayKeys[0];
    //     $amount = $arrAmount[$productId];

    //     if (array_key_exists($productId, $this->arrTotalAmount)) {
    //         $this->arrTotalAmount[$productId] = $amount;
    //     }

    //     $this->arrTotalAmount[$productId] = $amount;

    //     // dd(reset($arrAmount));
    // }
}
