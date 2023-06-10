<?php

namespace App\Http\Livewire;

use Livewire\Component;

use Illuminate\Support\Facades\Auth;

use App\Models\Invitation;

class InvitationTable extends Component
{
    public $user, $invitations, $choice;

    public function mount($user) {
        $this->user = $user;
        $this->invitations = $this->user->invitations;
    }

    public function render()
    {
        return view('livewire.invitation-table');
    }

    public function determination($choice, $invitation) {
        $newInvitation = Invitation::where('id', $invitation['id'])->first();

        if($choice == 'accept') {
            $newInvitation->role->attachUsers($newInvitation->user->id);
            $newInvitation->delete();
            return redirect(Route('invitation.index', Auth::user()->username))->with('inv_success', 'You have successfully joined the warehouse!');
        }

        if($choice == 'reject') {
            $newInvitation->delete();
            return redirect(Route('invitation.index', Auth::user()->username))->with('inv_success', 'You have successfully deleted the invitation!');
        }

        
    }
}
