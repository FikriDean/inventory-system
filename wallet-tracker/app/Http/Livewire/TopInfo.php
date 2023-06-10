<?php

namespace App\Http\Livewire;

use Livewire\Component;

use Illuminate\Support\Facades\Auth;

use App\Models\Transaction;
use App\Models\Warehouse;
use App\Models\Role;

class TopInfo extends Component
{
    public $user;
    public $completedTransactions;
    public $warehouses;
    public $roles;

    public $name, $level;

    protected $rules = [
        'name' => 'required|min:5|max:20',
        'level' => 'required|numeric|min:0|max:1000000',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function mount()
    {
        $this->user = Auth::user();
        $this->warehouses = $this->user->warehouses;
        $this->roles = $this->user->roles;        

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

    public function createWarehouse() {
        $this->validate();

        $code = fake()->lexify('ware-????-house-????');

        $checkIfCodeHaveBeenUsed = Warehouse::where('code', $code)->first();

        while($checkIfCodeHaveBeenUsed) {
            $code = fake()->lexify('ware-????-house-????');
            $checkIfCodeHaveBeenUsed = Warehouse::where('code', $code)->first();
        }

        $newWarehouse = Warehouse::create([
           'code' => $code,
           'name' => $this->name,
           'level' => intval($this->level),
        ]);

        $newRole = Role::create([
            'warehouse_id' => $newWarehouse->id,
            'name' => 'Manager',
            'salary' => '30000',
            'level' => 100
        ]);

        $newRole->attachUsers(Auth::id());

        return redirect(Route('home'))->with('create_success', 'Warehouse has been created successfully');
    }
}
