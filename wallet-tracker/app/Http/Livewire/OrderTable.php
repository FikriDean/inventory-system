<?php

namespace App\Http\Livewire;

use Livewire\Component;

class OrderTable extends Component
{
    public $orders;

    public function mount($orders) {
        $this->orders = $orders;
    }

    public function render()
    {
        return view('livewire.order-table');
    }
}
