<?php

namespace App\Http\Livewire;

use Livewire\Component;

class RoleEditLevel extends Component
{
    public $role, $level;

    protected $rules = [
        'level' => 'required|numeric|min:0|max:1000000',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function mount($role) {
        $this->role = $role;
        $this->level = $this->role->level;
    }

    public function render()
    {
        return view('livewire.role-edit-level');
    }

    public function updateLevel()
    {
        $this->validate();

        $this->role->update([
            'level' => intval($this->level),
        ]);

    }
}
