<?php

namespace App\Http\Livewire;

use Livewire\Component;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

class ShowUsers extends Component
{
    public $email;

    public function render()
    {
        return view('livewire.show-users');
    }

    public function changeEmail()
    {
        sleep(2);
        User::where('id', Auth::id())->first()->update(['email' => $this->email]);
        session()->flash('emailUpdated', 'Email changed successfully');
    }
}
