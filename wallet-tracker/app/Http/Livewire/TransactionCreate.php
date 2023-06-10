<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Method;
use App\Models\Account;
use App\Models\Transaction;
use App\Models\AccountMethod;

class TransactionCreate extends Component
{
    protected $listeners = ['refreshComponent' => '$refresh'];

    public $order, $methods, $accounts, $method, $account, $name, $number;

    protected $rules = [
        'method' => 'required|numeric|min:1',
        'account' => 'required|numeric|min:1',
        'name' => 'required|min:5|max:20',
        'number' => 'required|min:9|max:20'
    ];

    protected $messages = [
        'method.min' => 'Please choose payment method!',
        'account.min' => 'Please choose payment account!',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function mount($order) {
        $this->order = $order;
        $this->methods = Method::all();
    }

    public function render()
    {
        return view('livewire.transaction-create');
    }

    public function updateChooseMethod() {
        $checkMethod = Method::where('id', $this->method)->first();

        if ($checkMethod) {
            $this->accounts = $checkMethod->accounts;
        }

        $this->emit('refreshComponent');
    }

    public function createTransaction() {
        $this->validate();

        $accountMethod = AccountMethod::where('account_id', $this->account)->where('method_id', $this->method)->first();

        Transaction::create([
            'transaction_type_id' => 1,
            'account_method_id' => $accountMethod->id,
            'transaction_name' => $this->name,
            'transaction_number' => $this->number,
            'order_id' => $this->order->id,
        ]);

        $this->order->update([
            'confirmation' => true
        ]);

        // return redirect(Route('transaction.index'))->with('transaction_success', 'Please upload the payment recept');
    }
}
