<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Invitation;

class PartnerAdd extends Component
{
    public $warehouse, $username, $role, $roles;

    public function mount($warehouse) {
        $this->warehouse = $warehouse;
        $this->roles = $this->warehouse->roles;
    }

    protected $rules = [
        'username' => 'required|min:5|max:20',
        'role' => 'required|numeric|min:1',
    ];

    protected $messages = [
        'role.min' => 'Please choose the role!',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.partner-add');
    }

    public function addPartner() {
        $this->validate();
        
        $checkUserExistence = User::where('username', $this->username)->first();

        if (!$checkUserExistence) {
            return redirect(route('partner.index', $this->warehouse->code))->with('inv_error', 'The user is not exist!');
        }

        $checkUserAlreadyInWarehouse = User::where('username', $this->username)->whereHas('warehouses', function($q) {
            $q->where('code', $this->warehouse->code);
        })->first();

        if ($checkUserAlreadyInWarehouse) {
            return redirect(route('partner.index', $this->warehouse->code))->with('inv_error', 'The user is already in this warehouse');
        }

        $checkInvitationExistence = Invitation::where('user_id', $checkUserExistence->id)->where('status', 'pending')->first();

        if ($checkInvitationExistence) {
            return redirect(route('partner.index', $this->warehouse->code))->with('inv_error', 'The user is not exist!');
        }

        Invitation::create([
            'user_id' => $checkUserExistence->id,
            'from' => $this->username,
            'role_id' => $this->role,
            'status' => 'pending',
        ]);

        return redirect(route('partner.index', $this->warehouse->code))->with('inv_success', 'Invitation has been sent!');
    
    }
}
