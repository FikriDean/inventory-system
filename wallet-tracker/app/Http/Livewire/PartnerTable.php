<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Warehouse;

class PartnerTable extends Component
{
    protected $listeners = ['partnerDeleted'];

    public $users;
    public $warehouse;

    public function mount($users, $warehouse)
    {
        $this->users = $users;
        $this->warehouse = $warehouse;
    }

    public function render()
    {
        return view('livewire.partner-table');
    }

    public function partnerDeleted()
    {
        $this->users = Warehouse::where('id', $this->warehouse->id)->first()->users;
        session()->flash('partner_deleted', 'Partner berhasil dihapus');
    }
}
