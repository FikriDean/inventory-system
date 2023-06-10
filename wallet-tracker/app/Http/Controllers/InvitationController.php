<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

class InvitationController extends Controller
{
    public function index(Request $request, $username) {
        $method = $request->method();

        // khusus method GET
        if ($method != "GET") {
            return redirect(Route('home'));
        }

        $userExist = User::where('username', $username)->first();
        
        if (!$userExist) {
            return redirect(Route('home'));
        }

        $user = Auth::user();

        if ($user->username != $username) {
            return redirect(Route('home'));
        }

        return view('invitation.index', [
            'user' => $user,
        ]);
    }
}
