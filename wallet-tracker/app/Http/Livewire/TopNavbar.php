<?php

namespace App\Http\Livewire;

use Livewire\Component;

use Illuminate\Support\Facades\Auth;

class TopNavbar extends Component
{
    public $user;

    public function mount()
    {
        $this->user = Auth::user();
        $this->user->user_background = 'user/photo_profiles/default_user_background.png';
    }

    public function render()
    {
        return view('livewire.top-navbar');
    }
}
