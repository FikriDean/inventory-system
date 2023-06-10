<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TransactionUploadReceipt extends Component
{
    public $warehouse, $transaction;

    public function mount($warehouse, $transaction) {
        $this->transaction = $transaction;
        $this->warehouse = $warehouse;
    }

    public function render()
    {
        return view('livewire.transaction-upload-receipt');
    }
}
