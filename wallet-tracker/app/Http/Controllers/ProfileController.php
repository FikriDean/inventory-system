<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

class ProfileController extends Controller
{
    public function index(Request $request, string $username)
    {
        $method = $request->method();

        // khusus method GET
        if ($method != "GET") {
            return redirect(Route('home'));
        }

        if (!$username) {
            return redirect(Route('home'));
        }

        $user = User::where('username', $username)->first();

        if (!$user) {
            return redirect(Route('home'));
        }

        return view('profile.index', [
            'user' => $user
        ]);
    }

    public function edit()
    {
        return view('profile.edit', [
            'user' => Auth::user(),
        ]);
    }
}
