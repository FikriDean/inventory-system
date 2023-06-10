<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TransactionTable extends Component
{
    public $warehouse, $transactions;

    public function mount($warehouse, $transactions) {
        $this->transactions = $transactions;
        $this->warehouse = $warehouse;
    }

    public function render()
    {
        return view('livewire.transaction-table');
    }
}
