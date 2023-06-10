<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Role;

class RoleAdd extends Component
{
    public $name, $salary, $roles, $warehouse, $rolesInWarehouse, $level;

    public function mount($roles, $warehouse) {
        $this->roles = $roles;
        $this->warehouse = $warehouse;
        $this->rolesInWarehouse = $this->warehouse->roles;
    }

    protected $rules = [
        'name' => 'required|min:5|max:20',
        'salary' => 'required|numeric|min:0.01|max:1000000',
        'level' => 'required|numeric|min:0.01|max:1000000',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    
    public function render()
    {
        return view('livewire.role-add');
    }

    public function addRole() {
        $this->validate();

        Role::create([
            'warehouse_id' => $this->warehouse->id,
            'name' => $this->name,
            'salary' => $this->salary,
            'level' => intval($this->level),
        ]);

        return redirect(route('role.index', $this->warehouse->code))->with('role_added', 'Role has been added successfully');
    }
}
