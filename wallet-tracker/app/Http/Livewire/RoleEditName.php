<?php

namespace App\Http\Livewire;

use Livewire\Component;

class RoleEditName extends Component
{
    public $name, $role;

    protected $rules = [
        'name' => 'required|min:5|max:20',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function mount($role) {
        $this->role = $role;
        $this->name = $role->name;
    }

    public function render()
    {
        return view('livewire.role-edit-name');
    }

    public function updateName()
    {
        $this->validate();

        $this->role->update([
            'name' => $this->name,
        ]);

    }
}
