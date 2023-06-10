<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\TransactionStatus;

class TransactionChangeStatus extends Component
{
    public $transaction, $statuses, $status;

    public function mount($transaction) {
        $this->transaction = $transaction;
        $this->statuses = TransactionStatus::all();
    }

    public function render()
    {
        return view('livewire.transaction-change-status');
    }

    public function changeStatus() {
        $this->transaction->update([
            'status_id' => intval($this->status),
        ]);
    }
}
