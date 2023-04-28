<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PartnerDelete extends Component
{
    public $user;
    public $warehouse;

    public function mount($user, $warehouse)
    {
        $this->user = $user;
        $this->warehouse = $warehouse;
    }

    public function render()
    {
        return view('livewire.partner-delete');
    }

    public function deletePartner()
    {
        $this->warehouse->users()->detach($this->user->id);
        $this->emitTo('partner-table', 'partnerDeleted');
    }
}
