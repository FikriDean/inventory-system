<?php

namespace App\Http\Livewire;

use Livewire\Component;

use Illuminate\Support\Facades\Auth;

use App\Models\Transaction;
use App\Models\Warehouse;

class TopInfo extends Component
{
    public $user;
    public $completedTransactions;
    public $warehouses;

    public function mount()
    {
        $this->user = Auth::user();

        $this->warehouses = $this->user->warehouses;

        $this->completedTransactions = Transaction::wherehas('transactiontype', function ($q) {
            $q->wherehas('warehouse', function ($q) {
                $q->where('id', 1);
            });
        })->get();
    }

    public function render()
    {
        return view('livewire.top-info');
    }
}
