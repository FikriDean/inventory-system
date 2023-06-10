<?php

namespace App\Http\Livewire;

use Livewire\Component;

class WarehouseEdit extends Component
{
    public $warehouse, $name, $code, $level;

    public function mount($warehouse) {
        $this->warehouse = $warehouse;
        $this->name = $this->warehouse->name;
        $this->code = $this->warehouse->code;
        $this->level = $this->warehouse->level;
    }

    protected $rules = [
        'name' => 'required|min:5|max:20',
        'level' => 'required|numeric|min:0|max:1000000',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.warehouse-edit');
    }

    public function updateWarehouse() {
        $this->validate();
        $this->warehouse->update([
            'name' => $this->name,
            'level' => intval($this->level),
        ]);
    }
}
