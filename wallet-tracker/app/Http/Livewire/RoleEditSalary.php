<?php

namespace App\Http\Livewire;

use Livewire\Component;

class RoleEditSalary extends Component
{
    public $salary, $role;

    protected $rules = [
        'salary' => 'required|numeric|min:0|max:1000000',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function mount($role) {
        $this->role = $role;
        $this->salary = $role->salary;
    }

    public function render()
    {
        return view('livewire.role-edit-salary');
    }

    public function updateSalary()
    {
        $this->validate();

        $this->role->update([
            'salary' => $this->salary,
        ]);

    }
}
