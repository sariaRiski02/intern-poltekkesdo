<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminProfilController extends Controller
{
    public function update_profile(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'nip' => 'required|string|max:50',
            'email' => 'required|string|email|max:255',
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        // $admin = Auth::user()->admin;
        // $user->name = $request->name;
        // $user->email = $request->email;
        // if ($request->password) {
        //     $user->password = bcrypt($request->password);
        // }
        // $user->save();

        return redirect()->back()->with('success', 'Profile updated successfully.');
    }
}
